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

        for($i = 1; $i <= 3; $i++){
            if(!($input['adjust_name'. $i])) break;
            if(!($input['adjust_many'. $i])) break;
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
    public static function adjustList($miseId, $therapistId){
        $adjustList = kyuryo::where('mise_id', $miseId)
            ->where('therapist_id', $therapistId)
            ->get();
        return $adjustList;
    }
}
