<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\user;

class mise extends Model
{
    use SoftDeletes;

    protected $table = 'mise';
    protected $guarded = [''];
    //public $timestamps = false;

    //mise作成
    public static function miseCreate($input, $id){
        //インサート
        $mise = new mise($input);
        $mise->client_id = $id;
        $mise->team_id = Auth::user()->team;
        $result = $mise->save();

        //インサート失敗時
        if(!$result) return '新規作成に失敗しました。';

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

    //権限チェック
    public static function authCheck($clientId, $miseId){
        $mise = mise::find($miseId);
        if(!$mise) return false;
        if($mise->client_id != $clientId) return false;

        return true;
    }

    // mise情報
    public static function detail($id){
        $mise = mise::find($id);
        return $mise;
    }

    // miseカウント
    public static function miseCount($clientId){
        $num = mise::where('client_id', $clientId)->count();
        return $num;
    }

    // メイン店舗
    public static function miseMain($clientId){
        $main = mise::where('client_id', $clientId)->first()->name;
        return $main;
    }




}
