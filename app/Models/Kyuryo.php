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

        $cnt = 0;

        $adjustList = kyuryo::where('mise_id', $miseId)
            ->where('therapist_id', $therapistId)
            ->whereBetween('working_day', [$time.' 06:00:00', date('Y-m-d', strtotime("+1 day")).' 05:59:59'] )
            ->forceDelete();

        for($i = 0; $i < 3; $i++){
            if(!($input['adjust_name'. $i + 1])) continue;
            if(!($input['adjust_many'. $i + 1])) continue;

            $cnt++;

            $newKyuryo = new kyuryo();
            $newKyuryo->mise_id = $miseId;
            $newKyuryo->therapist_id = $therapistId;
            $newKyuryo->adjust_name = $input['adjust_name'. $i + 1];
            $newKyuryo->adjust_many = $input['adjust_many'. $i + 1];
            $newKyuryo->working_day = date('Y-m-d H:i:s');
            $result = $newKyuryo->save();

            // インサート失敗時
            if(!$result) return false;
        }

        if($cnt === 0){
            $newKyuryo = new kyuryo();
            $newKyuryo->mise_id = $miseId;
            $newKyuryo->therapist_id = $therapistId;
            $newKyuryo->working_day = date('Y-m-d H:i:s');
            $result = $newKyuryo->save();

            // インサート失敗時
            if(!$result) return false;
        }


        
        return true;
    }

    // インサート
    public static function kyuryoCreate2($input, $miseId, $therapistId, $time){

        $adjustList = kyuryo::where('mise_id', $miseId)
            ->where('therapist_id', $therapistId)
            ->whereBetween('working_day', [$time.' 06:00:00', date('Y-m-d', strtotime("+1 day")).' 05:59:59'] )
            ->delete();

        $ocha = price::find($input["ocha"]);

        $newKyuryo = new kyuryo();
        $newKyuryo->mise_id = $miseId;
        $newKyuryo->therapist_id = $therapistId;
        $newKyuryo->adjust_name = $ocha->name;
        $newKyuryo->adjust_many = $ocha->back;
        $newKyuryo->working_day = date('Y-m-d H:i:s');
        $result = $newKyuryo->save();

        // インサート失敗時
        if(!$result) return false;
        
        return true;
    }

    // 調整金取得
    public static function adjustList($miseId, $therapistId, $time){
        $adjustList = kyuryo::where('mise_id', $miseId)
            ->where('therapist_id', $therapistId)
            ->whereBetween('working_day', [$time.' 06:00:00', date('Y-m-d', strtotime('+1 day', strtotime($time))).' 05:59:59'] )
            ->get();
        return $adjustList;
    }

    // 日当取得
    public static function dailyPriceCul($yoyakuList, $adjustList){

        $dailyPrice = 0;

        foreach($yoyakuList as $y){
            $priceList = $y->price_id_list;
            $priceId = explode('P', $priceList);
    
            // $yoyakuListに「dailyPrice」を追加
            // 日当を取得
            $dailyPrice += kyuryo::getDailyPrice($priceId, $adjustList);
        }

        foreach($adjustList as $a){

            if(!($a)) continue;
            
            $adjustPrice = kyuryo::find($a->id);

            if($adjustPrice){
                $dailyPrice += $adjustPrice->adjust_many;
            }
        }

        if(count($yoyakuList)) $y->dailyPrice = $dailyPrice;

        return $dailyPrice;
    }

    // 日当計算
    public static function getDailyPrice($priceIdList, $adjustList){

        $dailyPrice = 0;

        foreach($priceIdList as $p){

            if(!($p)) continue;
            
            // withTrashed() 論理削除(deleted_at)を含む
            $coursePrice = price::withTrashed()->find($p);

            if($coursePrice){
                $dailyPrice += $coursePrice->back;
            }
        }
        
        return $dailyPrice;
    }

    // お茶取得
    public static function otyaList($miseId, $therapistId, $time){
        $otyaList = kyuryo::where('mise_id', $miseId)
            ->where('therapist_id', $therapistId)
            ->whereBetween('working_day', [$time.' 06:00:00', date('Y-m-d', strtotime('+1 day', strtotime($time))).' 05:59:59'] )
            ->first();
        return $otyaList;
    }
}