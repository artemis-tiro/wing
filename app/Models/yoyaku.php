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
    public static function courseNameList($yoyakuList){

        $price = 0;

        foreach($yoyakuList as $y){
            $priceList = $y->price_id_list;
            $priceId = explode('P', $priceList);

            // $yoyakuListに「courseName」を追加
            $y->courseName = price::getCourseName($priceId);

            // $yoyakuListに「courseShimei」を追加
            $y->courseShimei = price::getCourseShimei($priceId);

            // $yoyakuListに「totalPrice」を追加
            $y->totalPrice =  price::getCoursePrice($priceId);

            // $yoyakuListに「courseTime」を追加
            $y->courseTime =  price::getCourseTime($priceId);
        }
        return null;
    }

    // 予約バック取得
    public static function backIdList($yoyakuList,$therapistId){
        foreach($yoyakuList as $y){
            $priceList = $y->price_id_list;
            $priceId = explode('P', $priceList);
            $y->backIdList .= 'B'.price::getBackId($priceId,$therapistId);
        }
        return null;
    }

    //予約新規作成
    public static function yoyakuCreate($input, $miseId, $therapistId, $kokyaku){
        
        $input_price_id = "";
        $input_back_id = "";

        // back_nameを取得
        $therapistBack = therapist::where('id',$therapistId)
            ->value('back_name');

        $input_array = ['course',
                        'visit',
                        'shimei',
                        'more',
                        'option',
                        'waribikiAuto',
                        'waribiki',
                        'claim'];

        // price_id_listを生成
        foreach($input_array as $arr){
            if(isset($input[$arr])){
                $input_price_id .= 'P'.$input[$arr];
            }
        }
           
        // back_id_listを生成
        foreach($input_array as $arr){
            if(isset($input[$arr])){

                // price_nameを取得
                $courseName = price::where('id',$input[$arr])
                    ->value('name');

                // BackDBをprice_nameとnameで検索してidを取得
                $backId = back::where('mise_id', $miseId)
                    ->where('price_name', $courseName)
                    ->where('name', $therapistBack)
                    ->value('id');

                $input_back_id .= 'B'.$backId;
            }
        }
        
        // インサート
        $yoyaku = new yoyaku();
        $yoyaku->mise_id = $miseId;
        $yoyaku->therapist_id = $therapistId;
        $yoyaku->kokyaku_id = $kokyaku;
        $yoyaku->inputer_id = Auth::user()->id;
        
        $yoyaku->price_id_list = $input_price_id;
        $yoyaku->back_id_list = $input_back_id;

        $yoyaku->visit_day = $input['start_day'].' '.$input['start_time'];
        
        // 削除されるカラム
        $yoyaku->shimei = null;
        $yoyaku->waribiki = null;
        $result = $yoyaku->save();

        //インサート失敗時
        if(!$result) return '新規作成に失敗しました。';

        return null;
    }
    
}
