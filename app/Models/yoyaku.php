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
        // 営業日の判別
        // 6時よりも前
        if($time < date('Y-m-d').' 06:00:00'){
            $yoyakuList = yoyaku::where('therapist_id', $therapistId)
            ->whereBetween('visit_day', [date('Y-m-d', strtotime("-1 day")).' 06:00:00', date('Y-m-d', strtotime("+1 day")).' 05:59:59'] )
            ->get();
        }else{
            $yoyakuList = yoyaku::where('therapist_id', $therapistId)
            ->whereBetween('visit_day', [date('Y-m-d').' 06:00:00', date('Y-m-d', strtotime("+1 day")).' 05:59:59'] )
            ->get();
        }        
        return $yoyakuList;
    }

    // 先行予約一覧
    public static function yoyakuAfterList($therapistId,$time){
        $yoyakuList = yoyaku::where('therapist_id', $therapistId)
            ->whereNotBetween('visit_day', [date('Y-m-d', strtotime("-10 year")).' 05:59:59', date('Y-m-d', strtotime("+1 day")).' 05:59:59'] )
            ->get();
        return $yoyakuList;
    }

    // 過去予約一覧(顧客ID)
    public static function yoyakuBeforList($kokyakuId){
        $yoyakuList = yoyaku::where('kokyaku_id', $kokyakuId)
            ->whereBetween('visit_day', [date('Y-m-d', strtotime("-10 year")).' 05:59:59', date('Y-m-d', strtotime("-1 day")).' 05:59:59'] )
            ->get();
        return $yoyakuList;
    }

    // 過去予約一覧(セラピストID)
    public static function yoyakuBeforList2($therapistId,$time){
        $yoyakuList = yoyaku::where('therapist_id', $therapistId)
            ->whereBetween('visit_day', [$time.' 06:00:00', date('Y-m-d', strtotime('+1 day', strtotime($time))).' 05:59:59'])
            ->get();

        return $yoyakuList;
    }

    // 過去予約一覧(過去10日)
    public static function yoyakuBeforList3($therapistId,$time){
        $yoyakuList = yoyaku::where('therapist_id', $therapistId)
            ->whereBetween('visit_day', [date('Y-m-d', strtotime('-2 month', strtotime($time))).' 06:00:00', $time.' 05:59:59'])
            ->orderByDesc('id')
            ->limit(30)
            ->get();
        return $yoyakuList;
    }

    // 店ごと顧客一覧
    public static function yoyakuMiseKokyakuList($miseId){
        $yoyakuList = yoyaku::where('mise_id', $miseId)
            ->distinct()
            ->select('kokyaku_id')
            ->get();
        return $yoyakuList;
    }

    // 来店一覧
    public static function yoyakuMiseLogList($miseId){
        $yoyakuList = yoyaku::where('mise_id', $miseId)
            ->orderByDesc('visit_day')
            ->get();
        return $yoyakuList;
    }

    // 予約コース取得
    public static function courseNameList($yoyakuList){

        foreach($yoyakuList as $y){
            $priceList = $y->price_id_list;
            $priceId = explode('P', $priceList);

            // $yoyakuListに「courseName」を追加
            // コース名を取得
            $name = price::getCourseName($priceId);
            if($name){
                $y->courseName = $name->name;
                $y->courseId = $name->id;
            }else{
                $y->courseName = '';
                $y->courseId = '';
            }

            // $yoyakuListに「optionName」を追加
            // コース名を取得
            $option = price::getOptionName($priceId);
            if($option){
                $y->optionName = $option->name;
                $y->optionId = $option->id;
            }else{
                $y->optionName = '';
                $y->optionId = '';
            }

            // $yoyakuListに「Shimei」を追加
            // 指名を取得
            $shimei = price::getCourseShimei($priceId);
            if($shimei){
                $y->courseShimei = $shimei->name;
                $y->shimeiId = $shimei->id;
            }else{
                $y->courseShimei = '';
                $y->shimeiId = '';
            }

            // $yoyakuListに「Waribiki」を追加
            // 割引を取得
            $waribiki = price::getCourseWaribiki($priceId);
            if($waribiki){
                $y->waribikiName = $waribiki->name;
                $y->waribikiId = $waribiki->id;
            }else{
                $y->waribikiName = '';
                $y->waribikiId = '';
            }

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

            // $yoyakuListに「totalBack」を追加
            // コース総額(バック)を取得
            $y->totalBack =  price::getTotalBack($priceId);

            // $yoyakuListに「courseTime」を追加
            // コース時間を取得
            $y->courseTime =  price::getCourseTime($priceId);
        }

        // 延長
        foreach($yoyakuList as $y){
            $encho = $y->encho_id_list;
            $priceId = explode('P', $encho);
            $count = count($priceId);
            
            // $yoyakuListに「encho」を追加
            // 延長名を取得
            $encho = price::getencho($priceId);
            if($encho){
                $y->enchoName = $encho->name;
                $y->enchoId = $encho->id;
                $y->enchoCnt = $count -1;
            }else{
                $y->enchoName = '';
                $y->enchoId = '';
            }
        }

        // 来店一覧
        foreach($yoyakuList as $y){
            // セラピスト名
            $therapist = therapist::detail($y->therapist_id);
            if($therapist){
                $y->therapistName = $therapist->business_name;
            }
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

    // 予約新規作成
    public static function yoyakuCreate($input, $miseId, $therapistId, $kokyaku){
        
        $input_price_id = "";

        // セラピスト情報
        $therapist = therapist::detail($therapistId);

        // back_nameを取得
        $therapistBack = therapist::where('id',$therapistId)
            ->value('back_name');

        $input_array = ['course',
                        'visit',
                        'shimei',
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
        
        // インサート
        $yoyaku = new yoyaku();
        $yoyaku->mise_id = $miseId;
        $yoyaku->therapist_id = $therapistId;
        $yoyaku->kokyaku_id = $kokyaku;
        $yoyaku->inputer_id = Auth::user()->id;
        
        $yoyaku->price_id_list = $input_price_id;

        // if(price::getOption($miseId,$therapist->back_name) != "therapist"){
        //     $yoyaku->option = 1;  
        // }



        $yoyaku->encho_id_list = null;

        $yoyaku->visit_day = $input['start_day'].' '.$input['start_time'];
        
        // 削除されるカラム
        $yoyaku->shimei = null;
        $yoyaku->waribiki = null;


        $result = $yoyaku->save();

        //インサート失敗時
        if(!$result) return false;

        return true;
    }

    // inputerに予約経験あるか
    public static function addExist($inputList){
        foreach($inputList as $i){
            $exist = yoyaku::where('inputer_id', $i->id)
                ->first();
            $i->yoyakuExist = $exist? 1: 0;
        }
        return null;
    }

    // 延長編集
    public static function yoyakuencho($input,$id){
        
        $yoyaku = yoyaku::find($input['yoyakuId']);

        // 空白でも1にする
        $count = 1;
        $inputId = null;

        if($input['courseExCnt'.$input['courseEx']]){
            $count = $input['courseExCnt'.$input['courseEx']];
        }

        // 延長回数分「price_id_list」に追加
        for($i = 0; $i < $count; $i++){
            $inputId .= 'P'.$input['courseEx'];
        }

        $yoyaku->encho_id_list = $inputId;
        $result = $yoyaku->save();

        //インサート失敗時
        if(!$result) return false;

        return true;
    }

    // 延長編集
    public static function yoyakuedit($input,$id){
        
        $yoyaku = yoyaku::find($input['yoyakuId']);

        $input_price_id = '';

        $priceid = explode('P', $yoyaku->price_id_list);

        
        // course,shimei,waribiki以外でprice_id_listを作成
        foreach($priceid as $p){
            $courseName = price::withTrashed()->find($p);
            if(!$courseName) continue;
            // 編集で入力する項目以外
            if(!($courseName->type == 'course'||$courseName->type == 'shimei'||$courseName->type == 'waribiki')){
                $input_price_id .= 'P'.$p;
            }
        }

        // 作成したprice_id_listにinputのidを足して更新
        $input_array = ['courseEx',
                        'shimeiEx',
                        'waribikiEx'];

        foreach($input_array as $arr){
            if(!(isset($input[$arr]))) continue;
            if(is_numeric($input[$arr])){
                $input_price_id .= 'P'.$input[$arr];
            }
        }

        $yoyaku->price_id_list = $input_price_id;
        $result = $yoyaku->save();

        //インサート失敗時
        if(!$result) return false;

        return true;
    }

    // オプション編集
    public static function yoyakuoption($input,$id){

        $yoyaku = yoyaku::find($input['yoyakuId']);

        $input_price_id = '';

        $priceid = explode('P', $yoyaku->price_id_list);

        
        // option以外でprice_id_listを作成
        foreach($priceid as $p){
            $courseName = price::withTrashed()->find($p);
            if(!$courseName) continue;
            if(!($courseName->type == 'option')){
                $input_price_id .= 'P'.$p;
            }
        }

        if(isset($input['optionEx'])){
            if(is_numeric($input['optionEx'])){
                $input_price_id .= 'P'.$input['optionEx'];
            }
        }

        $yoyaku->price_id_list = $input_price_id;
        $yoyaku->option = 1;
        $result = $yoyaku->save();

        //インサート失敗時
        if(!$result) return false;

        return true;
    }

    // オプション有無確認
    public static function optionFind($yoyakuList){
        
        // 予約にオプションがない場合true
        foreach($yoyakuList as $y){

            $yoyakuId = $y->id;

            $yoyaku = yoyaku::withTrashed()->find($yoyakuId);

            if($yoyaku->option === null){
                return false;
            }
        }
        return true;
    }

    // 営業日取得
    public static function workingDay($day){

        // 現在時間
        $now = date("Y-m-d H:i:s");
        $time;

        // 日付が無ければ
        if(!$day){
            if($now < date('Y-m-d').' 06:00:00'){
                $time = date($now, strtotime("-1 day"));

                return $time;
            }
        }

        if($day < date('Y-m-d').' 06:00:00'){
            $time = date($day, strtotime("-1 day"));

            return $time;
        }
    }

    // 顧客名取得
    public static function yoyakuKokyaku($yoyakuList){
        foreach($yoyakuList as $y){
            $kokyaku = kokyaku::where('id', $y->kokyaku_id)
                ->first();
            $y->kokyakuid = $kokyaku->id;
            $y->kokyakuName = $kokyaku->name;
            $y->kokyakuTel = $kokyaku->tel;
            $y->kokyakuMail = $kokyaku->mail;
            $y->kokyakuNg = $kokyaku->ng;
            $y->kokyakuMemo = $kokyaku->memo;
        }
        return null;
    }
}
