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
                
        // foreachで１行ずつ取得して
        foreach($input as $key =>$i){
            // shiftの名前がついてないなら次
            if(strpos($key, 'shift-')===false) continue;

            // 日付が空の場合
            if(!$i) continue;

            // 日付が入っていたらレコード削除。
            // shifuto::where('mise_id', $miseId)
            // ->delete();

            //$key = 'shift-4-20221229'
            //$arry[] = [0]shift [1]therapistId [2]Y-m-d
            $arry = explode('-', $key);
            $therapistId = $arry[1]; 
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
        $day = date("Y-m-d H:i:s");

        foreach($therapistList as $t){
            $shift = shifuto::where('therapist_id', $t->id)
                ->where('working_day', '>=', $day)
                ->get();
            foreach($shift as $s){
                log::info($s);
                for(i = 0; i < 10 ; i++){
                    // db->working_dayがinputの三番目と同じ？
                }
            }
        }
    }            


}
