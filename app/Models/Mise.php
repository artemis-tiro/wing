<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\user;
use App\Models\Therapist;

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
        $list = $myMiseList->sortByDesc('active');
        return $list;
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

    // アクティブmiseカウント
    public static function miseCountActive($clientId){
        $num = mise::where('client_id', $clientId)
            ->where('active', 1)
            ->count();
        return $num;
    }

    // メイン店舗
    public static function miseMain($clientId){
        $mise = mise::where('client_id', $clientId)
            ->where('active', 1)
            ->first();
        $main = $mise? $mise->name: '';
        return $main;
    }

    // ヒアリングシート編集
    public static function hearingsheetEdit($id, $hearingsheet){
        $mise = mise::find($id)
            ->update(['hearing_sheet'=>$hearingsheet]);

        return null;
    }

    // 店舗情報編集
    public static function miseDataEdit($id, $input){
        $mise = mise::find($id);
        $mise->name = $input['name'];
        $mise->yomi = $input['yomi'];
        $mise->area = $input['area'];
        $mise->tel = $input['tel'];
        $mise->hp = $input['hp'];
        $mise->save();

        return null;
    }

    //activeオン
    public static function toActive($id){
        $mise = mise::find($id);
        $mise->active = 1;
        $mise->save();
        return $mise->name.'を再開しました。';
    }

    //activeオフ
    public static function toStop($id){
        $mise = mise::find($id);
        $mise->active = 0;
        $mise->save();
        return $mise->name.'を停止しました。';
    }

    //削除
    public static function del($id){
        $mise = mise::find($id);
        if(!$mise) return '店が存在しません。';

        //在籍セラピスト数確認
        $list = therapist::List($id);
        if($list->count()==0){
            $mise->delete();
            return $mise->name.'を削除しました。';
        }
        return 'セラピストの登録がある店は削除できません。';
    }




}
