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
        $mise->client = $id;
        $result = $mise->save();

        //インサート失敗時
        if(!$result) return '新規作成に失敗しました。';

        return null;
    }

    //my店舗一覧
    public static function myMiseList($id){
        $myMiseList = mise::where('client', $id)
            ->get();
        return $myMiseList;
    }

    //全mise一覧
    public static function zenMiseList($team){
        $zenMiseList = mise::join('users', 'mise.client', '=', 'users.id')
            ->where('users.team', $team)
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
