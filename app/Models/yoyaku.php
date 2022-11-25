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
    public static function yoyakuList($therapistId,$time){
        $yoyakuList = yoyaku::where('therapist_id', $therapistId)
            ->whereBetween('visit_day', [$time.' 00:00:00', date('Y-m-d', strtotime("+1 day")).' 05:59:59'] )
            ->get();
        return $yoyakuList;
    }

    // 予約コース取得
    public static function courseNameList($yoyakuList){

        foreach($yoyakuList as $y){
            $priceList = $y->price_id_list;
            $priceId = explode('P', $priceList);

            $backList = $y->back_id_list;
            $backId = explode('B', $backList);

            // $yoyakuListに「courseName」を追加
            // コース名を取得
            $y->courseName = price::getCourseName($priceId);

            // $yoyakuListに「courseShimei」を追加
            // 指名を取得
            $y->courseShimei = price::getCourseShimei($priceId);

            // $yoyakuListに「coursePrice」を追加
            // コース金額を取得
            $y->coursePrice =  price::getCoursePrice($priceId);

            // $yoyakuListに「totalPrice」を追加
            // 指名金額を取得
            $y->shimeiPrice =  price::getShimeiPrice($priceId);

            // $yoyakuListに「totalPrice」を追加
            // オプション金額を取得
            $y->optionPrice =  price::getOptionPrice($priceId);

            // $yoyakuListに「totalPrice」を追加
            // コース総額を取得
            $y->totalPrice =  price::getTotalPrice($priceId);

            // $yoyakuListに「courseTime」を追加
            // コース時間を取得
            $y->courseTime =  price::getCourseTime($priceId);

            // $yoyakuListに「courseTime」を追加
            // コース時間を取得
            $y->courseBack =  back::getCoursePrice($backId[1]);

            // $yoyakuListに「courseTime」を追加
            // コース時間を取得
            $y->shimeiBack =  back::getShimeiPrice($backId[3]);

            // $yoyakuListに「courseTime」を追加
            // コース時間を取得
            $y->optionBack =  back::getOptionPrice($backId[5]);

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
