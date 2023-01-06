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

    // 予約新規作成
    public static function shiftCreate($input, $miseId){
                
        // 日付が入っていたらレコード削除。
        // shifuto::where('mise_id', $miseId)
        // ->delete();

        // foreachで１行ずつ取得して
        foreach($input as $key =>$i){
            // shiftの名前がついてないなら次
            if(strpos($key, 'shift-')===false) continue;

            // 日付が空の場合
<<<<<<< HEAD
            // DBのworking_dayを検索してレコードが存在していれば物理削除する
            $arry = explode('-', $key);
            $therapistId = $arry[1]; 
            $day = $arry[2];

            if(!$i) {
                shifuto::where('mise_id', $miseId)
                    ->where('therapist_id', $therapistId)
                    ->where('working_day', $day)
                    ->forceDelete();
                continue;
            }

            //$key = 'shift-4-20221229'
            //$arry[] = [0]shift [1]therapistId [2]Y-m-d
            $arry = explode('-', $key);
            $therapistId = $arry[1]; 
=======
            if(!$i) continue;

            // 日付が入っていたらレコード削除。
            // shifuto::where('mise_id', $miseId)
            // ->delete();

            //$key = 'shift-4-20221229'
            //$arry[] = [0]shift [1]therapistId [2]Y-m-d
            $arry = explode('-', $key);
            $therapistId = $arry[1]; 
>>>>>>> 6a8eeb332cb962f2e6e652642a9ed7ce3193e45f
            $day = $arry[2];

            // インサート
            $shift = new shifuto();
            $shift->mise_id = $miseId;
            $shift->therapist_id = $therapistId;
            $shift->user_id = Auth::user()->id;
            $shift->working_day = $day;
            $shift->time = $i;
            $result = $shift->save();

            // インサート失敗時
            if(!$result) return false;
        }

        return true;
    }

    // timeをセラピストリストに追加
    public static function addTime($therapistList){

        // 入力した時間の営業日を返す？
        // $day = yoyaku::workingDay(date("Y-m-d H:i:s"));
<<<<<<< HEAD
        $day = date("Y-m-d");

        // 表示したい日数
        $days = 10;
=======
        $day = date("Y-m-d H:i:s");
>>>>>>> 6a8eeb332cb962f2e6e652642a9ed7ce3193e45f

        foreach($therapistList as $t){
            $shift = shifuto::where('therapist_id', $t->id)
                ->where('working_day', '>=', $day)
                ->get();
            foreach($shift as $s){
<<<<<<< HEAD
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

=======
                log::info($s);
                for(i = 0; i < 10 ; i++){
                    // db->working_dayがinputの三番目と同じ？
                }
>>>>>>> 6a8eeb332cb962f2e6e652642a9ed7ce3193e45f
            }
    }
        return null;
    }            


}
