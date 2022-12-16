<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\user;
use App\Models\yoyaku;
use Log;

class kyuryo extends Model
{
    use SoftDeletes;

    protected $table = 'kyuryo';
    protected $guarded = [''];

    // インサート
    public static function kyuryoCreate($input, $miseId, $therapistId, $time){

        for($i = 0; $i <= 3; $i++){
            if(!($input['adjust_name'. $i + 1])) break;
            if(!($input['adjust_many'. $i + 1])) break;
            $newKyuryo = new kyuryo();
            $newKyuryo->mise_id = $miseId;
            $newKyuryo->therapist_id = $therapistId;
            // $newKyuryo->pouch_name = ;
            // $newKyuryo->pouch_many = ;
            $newKyuryo->adjust_name = $input['adjust_name'. $i];
            $newKyuryo->adjust_many = $input['adjust_many'. $i];
            $newKyuryo->working_day = $time;
            $result = $newKyuryo->save();

            // インサート失敗時
            if(!$result) return '新規作成に失敗しました。';
        }
        
        return null;
    }

    // 調整金取得
    public static function adjustList($miseId, $therapistId, $time){
        $adjustList = kyuryo::where('mise_id', $miseId)
            ->where('therapist_id', $therapistId)
            ->whereBetween('working_day', [$time.' 06:00:00', date('Y-m-d', strtotime("+1 day")).' 05:59:59'] )
            ->get();
        return $adjustList;
    }

    // 日当取得
    public static function dailyPriceCul($yoyakuList, $adjustList){

        foreach($yoyakuList as $y){
            $priceList = $y->price_id_list;
            $priceId = explode('P', $priceList);

            foreach($adjustList as $a){
                $adjustId = $a->id;
    
                // $yoyakuListに「dailyPrice」を追加
                // 日当を取得
                $y->dailyPrice = price::getDailyPrice($priceId, $adjustId);
            }
        }
        return null;
    }

    // 日当取得
    public static function getDailyPrice($priceIdList, $adjustList){

        $dailyPrice = 0;

        foreach($priceIdList as $p){
            
            $coursePrice = price::find($p);

            if($coursePrice){
                $dailyPrice += $coursePrice->price;
            }
        }

        foreach($adjustList as $a){
            
            $adjustPrice = price::find($a);

            if($adjustPrice){
                $dailyPrice += $adjustPrice->adjust_many;
            }
        }
        
        return $dailyPrice;
    }
}
