<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\user;

class Yoyaku extends Model
{
    use SoftDeletes;

    protected $table = 'yoyaku';
    protected $guarded = [''];

    // 予約一覧
    public static function yoyakuList($therapistId){
        $yoyakuList = yoyaku::where('therapist_id', $therapistId)
        ->get();
        return $yoyakuList;
    }

    //予約新規作成
    public static function yoyakuCreate($input, $miseId, $therapistId, $kokyaku){
        
        $input_array = [$input['course'],
                        $input['visit'],
                        $input['shimei'],
                        $input['more'],
                        $input['option'],
                        $input['waribikiAuto'],
                        $input['waribiki'],
                        $input['claim']];

        $input_id = "";
        
        foreach($input_array as $arr){
            if(isset($arr)){
                $input_id = 'P'.$arr;
            }
        }
        
        // インサート
        $yoyaku = new yoyaku();
        $yoyaku->mise_id = $miseId;
        $yoyaku->therapist_id = $therapistId;
        $yoyaku->kokyaku_id = $kokyaku;
        $yoyaku->inputer_id = Auth::user()->id;
        
        $yoyaku->price_id_list = $input_id;
        $yoyaku->back_id_list = $input_id;

        $yoyaku->visit_day = $input['start_day'].' '.$input['start_time'];
        $yoyaku->shimei = $input['shimei'];
        $yoyaku->waribiki = $input['waribiki'];
        $result = $yoyaku->save();

        //インサート失敗時
        if(!$result) return '新規作成に失敗しました。';

        return null;
    }
    
}
