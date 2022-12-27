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

            //日付が空の場合
            if(!$i) continue;

            //日付が入っていたらレコード削除。
            

            $arry = explode('-', $key);
            $therapistId = $arry[1]; //$key 'shift-4-20221229' 、[0]shift [1]4 [2]20221229
            $day = $arry[2];

            // インサート
            $shift = new shifuto();
            $shift->mise_id = $miseId;
            $shift->therapist_id = $therapistId;
            $shift->user_id = Auth::user()->id;
            $shift->working_day = $day;
            $shift->time = $i;
            $result = $shift->save();

            //インサート失敗時
            if(!$result) return false;
        }

        return true;
    }

    // timeをセラピストリストに追加
    public static function addTime($therapistList){
        foreach($therapistList as $t){
            $shift = shifuto::where('therapist_id', $t->id)
                // ->where('working_day', '>=', today())//今日以降のシフト
                ->get();
            foreach($shift as $s){
                
            }
        }
    }            


}
