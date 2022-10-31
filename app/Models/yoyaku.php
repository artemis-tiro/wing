<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\user;

class yoyaku extends Model
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
    public static function yoyakuCreate($input, $id, $miseId){
        //インサート
        $yoyaku = new yoyaku();
        $yoyaku->mise_id = $miseId;
        $yoyaku->therapist_id = $id;
        $yoyaku->kokyaku_id = $inputerId;
        $yoyaku->inputer_id = $inputerId;
        $yoyaku->price_id_list = $input['plan'];
        $yoyaku->back_id_list = $input['plan'];
        $yoyaku->visit_day = $input['start_day'];
        $yoyaku->simei = $input['simei'];
        $yoyaku->waribiki = $input['discount_many'];
        $result = $yoyaku->save();

        //インサート失敗時
        if(!$result) return '新規作成に失敗しました。';

        return null;
    }
    
}
