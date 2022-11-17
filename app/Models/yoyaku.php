<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\user;
use Log;

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

    // 予約コース取得
    public static function yoyakuCourseList($yoyakuList){
        foreach($yoyakuList as $y){
            $priceList = $y->price_id_list;
            $priceId = explode('P', $priceList);
            $y->courseName = price::getCourseName($priceId);
        }
        return null;
    }

    //予約新規作成
    public static function yoyakuCreate($input, $miseId, $therapistId, $kokyaku){
        
        $input_price_id = "";

        $input_array = ['course',
                        'visit',
                        'shimei',
                        'more',
                        'option',
                        'waribikiAuto',
                        'waribiki',
                        'claim'];

        foreach($input_array as $arr){
            if(isset($input[$arr])){
                $input_price_id .= 'P'.$input[$arr];
            }
        }
            
        
        // インサート
        $yoyaku = new yoyaku();
        $yoyaku->mise_id = $miseId;
        $yoyaku->therapist_id = $therapistId;
        $yoyaku->kokyaku_id = $kokyaku;
        $yoyaku->inputer_id = Auth::user()->id;
        
        $yoyaku->price_id_list = $input_price_id;
        $yoyaku->back_id_list = $input_id;

        $yoyaku->visit_day = $input['start_day'].' '.$input['start_time'];

        // $shimei = isset($input['shimei'])? $input['shimei']: 0; //三項演算子

        // if(isset($input['shimei'])){ //上の三項演算子と同じ
        //     $shimei = $input['shimei'];
        // }else{
        //     $shimei = 0;
        // }
        
        // 削除されるカラム
        $yoyaku->shimei = null;
        $yoyaku->waribiki = null;
        $result = $yoyaku->save();

        //インサート失敗時
        if(!$result) return '新規作成に失敗しました。';

        return null;
    }
    
}
