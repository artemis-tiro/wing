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
    public static function yoyakuList($miseId){
        $yoyakuList = yoyaku::where('mise_id', $miseId)
        ->get();
        return $yoyakuList;
    }

    //予約新規作成
    public static function yoyakuCreate($input, $id, $miseId){
        //インサート
        $yoyaku = new yoyaku();
        $yoyaku->id = $id;
        $yoyaku->mise_id = $miseId;
        $yoyaku->therapist_id = $therapistId;
        $yoyaku->inputer_id = $inputerId;
        $yoyaku->price_id_list = $priceId;
        $yoyaku->visit_day = $visitDay;
        $yoyaku->simei = $simei;
        $yoyaku->waribiki = $waribiki;
        $yoyaku->back_name = $input['back_name'];
        $result = $yoyaku->save();

        //インサート失敗時
        if(!$result) return '新規作成に失敗しました。';

        return null;
    }

    //therapist詳細を追加
    // public static function addDetail($miseList){
    //     foreach($miseList as $m){
    //         $m->therapist = therapist::where('mise_id', $m->id)
    //             ->get();
    //     }
    //     return null;
    // }

    //権限チェック
    // public static function authCheck($miseId, $therapistId){
    //     $therapist = therapist::find($therapistId);
    //     if(!$therapist) return false;
    //     if($therapist->mise_id != $miseId) return false;

    //     return true;
    // }

    // therapist情報
    // public static function detail($id){
    //     $therapist = therapist::find($id);
    //     return $therapist;
    // }

    // セラピスト一覧
    // public static function zenTherapistList($miseId){
    //     $therapistList = therapist::where('mise_id', $miseId)
    //         ->get();
    //     return $therapistList;
    // }

}
