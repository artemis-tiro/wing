<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\user;
use Carbon\Carbon;
use Log;

class Shifuto extends Model
{
    use SoftDeletes;

    protected $table = 'Shifuto';
    protected $guarded = [''];

    // シフト新規作成
    // public static function shiftCreate($input, $miseId){
    //     // foreachで１行ずつ取得して
    //     foreach($input as $key =>$i){
    //         // shiftの名前がついてないなら次
    //         if(strpos($key, 'shift-')===false) continue;

    //         $arry = explode('-', $key);
    //         $therapistId = $arry[1]; 
    //         $day = $arry[2];
            
    //         $aaa = shifuto::where('mise_id', $miseId)
    //                 ->where('therapist_id', $therapistId)
    //                 ->where('working_day', $day)
    //                 ->first();

    //         // 日付が空の場合
    //         // DBのworking_dayを検索してレコードが存在していれば物理削除する
    //         if(!$i) {
    //             shifuto::where('mise_id', $miseId)
    //                 ->where('therapist_id', $therapistId)
    //                 ->where('working_day', $day)
    //                 ->forceDelete();
    //             continue;
    //         }

    //         // インサート
    //         $shift = $aaa?? new shifuto(); // $shift = $aaa? $aaa: new shifuto();
    //         $shift->mise_id = $miseId;
    //         $shift->therapist_id = $therapistId;
    //         $shift->user_id = Auth::user()->id;
    //         $shift->working_day = $day;
    //         $shift->time = $i;
    //         $result = $shift->save();

    //         // インサート失敗時
    //         if(!$result) return false;
    //     }

    //     return true;
    // }

    // シフト新規作成(非同期)
    public static function shiftCreate($input, $name, $miseId){

        $arr = explode('-', $name);
        $therapistId = $arr[1]; 
        $day = $arr[2];
        
        $shifuto = shifuto::where('mise_id', $miseId)
                ->where('therapist_id', $therapistId)
                ->where('working_day', $day)
                ->first();

        // 日付が空の場合
        // DBのworking_dayを検索してレコードが存在していれば物理削除する
        if(!$input) {
            shifuto::where('mise_id', $miseId)
                ->where('therapist_id', $therapistId)
                ->where('working_day', $day)
                ->forceDelete();
        }

        // インサート
        $shift = $shifuto?? new shifuto();
        $shift->mise_id = $miseId;
        $shift->therapist_id = $therapistId;
        $shift->user_id = Auth::user()->id;
        $shift->working_day = $day;
        $shift->time = $input;
        $result = $shift->save();

        // インサート失敗時
        if(!$result) return false;

        return true;
    }

    // timeをセラピストリストに追加
    public static function addTime($therapistList){

        // 入力した時間の営業日を返す？
        // $day = yoyaku::workingDay(date("Y-m-d H:i:s"));
        $day = date("Y-m-d");

        // 表示したい日数
        $days = 10;

        foreach($therapistList as $t){
            $shift = shifuto::where('therapist_id', $t->id)
                ->where('working_day', '>=', $day)
                ->get();
            foreach($shift as $s){
                // DBのdetatime型を変える
                // yyyy-mm-dd HH:ii:ss
                // [0]yyyy-mm-dd [1]HH:ii:ss
                $arr = explode(' ', $s->working_day);

                // 「-」を消す
                // yyyy-mm-dd
                // yyyymmdd
                $str = str_replace('-', '', $arr[0]);

                $key = 'shiftTime'.$str;
                $t->$key = $s->time;

                log::info($t->shiftTime);
                log::info($t->shiftDay);

            }
        }
        return null;
    }            

    // シフト取得
    public static function shiftList($miseId){
        $shiftList = shifuto::where('mise_id', $miseId)
            ->where('working_day', date('Y-m-d'))
            ->get();
        return $shiftList;
    }

    // シフト取得
    public static function getshiftList($miseId, $therapistId, $time){
        $shiftList = shifuto::where('mise_id', $miseId)
            ->where('therapist_id', $therapistId)
            ->whereBetween('working_day', [date('Y-m-d', strtotime('-10 day', strtotime($time))), $time])
            ->get();
        return $shiftList;
    }

    // シフト取得
    public static function getTime($therapistId, $time){
        $shift = shifuto::where('therapist_id', $therapistId)
            ->where('working_day', $time)
            ->get();

        return $shift;
    }

    // シフトリスト取得
    public static function getTimeList($zenTherapistList){
        foreach($zenTherapistList as $z){
            $time = shifuto::where('therapist_id', $z->id)
                ->where('working_day', shifuto::getWorkignDay())
                ->value('time');
            $z->time = $time;
        }
        return null;
    }

    public static function getWorkignDay(){
        if(date('H')<6){
            return date('Y-m-d', strtotime("-1 day"));
        }
        return date('Y-m-d');
    }
}