<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\user;

class room extends Model
{
//    use SoftDeletes;

    protected $table = 'room';
    protected $guarded = [''];
    //public $timestamps = false;

    //room詳細を追加
    public static function addDetail($miseList){
        foreach($miseList as $m){
            $m->room = room::where('mise_id', $m->id)
                ->get();
        }
        return null;
    }

    //my店舗一覧
    public static function myMiseList($id){
        $myMiseList = mise::where('client_id', $id)
            ->get();
        return $myMiseList;
    }

    //全mise一覧
    public static function zenMiseList($team){
        $zenMiseList = mise::where('team_id', $team)
            ->get();
        return $zenMiseList;
    }

    // mise詳細
    public static function detail($id){
        $inputer = inputer::find($id);
        return $inputer;
    }

    //削除
    public static function del($id){
        $inputer = inputer::find($id);
        if($inputer) $inputer->delete();
        return true;
    }





}
