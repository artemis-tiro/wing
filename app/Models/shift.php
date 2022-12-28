<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\user;
use Log;

class Shifuto extends Model
{
    use SoftDeletes;

    protected $table = 'shift';
    protected $guarded = [''];

    // 予約新規作成
    public static function shiftCreate($input, $miseId, $therapistId){
                
        // インサート
        $shift = new shifuto();
        $shift->mise_id = $miseId;
        $shift->therapist_id = $therapistId;
        $shift->user_id = Auth::user()->id;
        
        // 例26日6:00~27日5:59 = 26日
        $shift->working_day = date('Y-m-d');

        // 
        $shift->time = $input['shift110'];

        $result = $shift->save();

        //インサート失敗時
        if(!$result) return false;

        return true;
    }
}
