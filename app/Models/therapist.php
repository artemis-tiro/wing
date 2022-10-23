<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\user;

class therapist extends Model
{
    use SoftDeletes;

    protected $table = 'therapist';
    protected $guarded = [''];
    //public $timestamps = false;

    //therapist作成
    public static function therapistCreate($input, $id, $miseId){
        //インサート
        $therapist = new therapist();
        $therapist->id = $id;
        $therapist->business_name = $input['business_name'];
        $therapist->mise_id = $miseId;
        $result = $therapist->save();

        //インサート失敗時
        if(!$result) return '新規作成に失敗しました。';

        return null;
    }

    //therapist詳細を追加
    public static function addDetail($miseList){
        foreach($miseList as $m){
            $m->therapist = therapist::where('mise_id', $m->id)
                ->get();
        }
        return null;
    }

    //therapist一覧
    public static function List($miseId){
        $therapistList = therapist::where('mise_id', $miseId)
            ->get();
        user::addDetail($therapistList);
        return $therapistList;
    }

    //権限チェック
    public static function authCheck($miseId, $therapistId){
        $therapist = therapist::find($therapistId);
        if(!$therapist) return false;
        if($therapist->mise_id != $miseId) return false;

        return true;
    }

    // therapist情報
    public static function detail($id){
        $therapist = therapist::find($id);
        return $therapist;
    }




}
