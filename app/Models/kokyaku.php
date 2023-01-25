<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\user;
use Log;

class Kokyaku extends Model
{
    use SoftDeletes;

    protected $table = 'kokyaku';
    protected $guarded = [''];

    // mise情報
    public static function detail($id){
        $kokyaku = kokyaku::find($id);
        return $kokyaku;
    }

    // 顧客一覧
    public static function kokyakuList(){
        $kokyakuList = kokyaku::get();
        $list = [];
        foreach($kokyakuList as $k){
            $list[$k->id] = $k;
        }
        return $list;
    }

    // 新規顧客作成
    public static function kokyakuCreate($input){
        //インサート
        $kokyaku = new kokyaku();
        $kokyaku->name = $input['name'];
        $kokyaku->tel = $input['tel'];
        $kokyaku->mail = $input['mail'];
        // $kokyaku->ng = $input[''];
        // $kokyaku->memo = $input[''];
        $result = $kokyaku->save();

        $kokyakuId = $kokyaku->id;

        //インサート失敗時
        if(!$result) return '新規作成に失敗しました。';

        return $kokyakuId;
    }

    // 顧客情報更新
    public static function kokyakuUpdate($input,$id){

        $kokyaku = kokyaku::find($id);
            // ->first();

        log::info($kokyaku);
        
        $kokyaku->id = $id;
        $kokyaku->name = $input['name'];
        $kokyaku->mail = $input['mail'];
        // $kokyaku->ng = $input[''];
        // $kokyaku->memo = $input[''];
        $result = $kokyaku->save();

        $kokyakuId = $kokyaku->id;

        //インサート失敗時
        if(!$result) return '新規作成に失敗しました。';

        return $kokyakuId;
    }

    // 電話番号検索
    public static function telsearch($input){

        if(!($input)){
            return null;
        }
        $kokyaku = kokyaku::where('tel',$input)
            ->first();

        return $kokyaku;
    }

    // NGセラピスト取得
    public static function ngTherapist($kokyakuId ,$therapistList){

        $List = '';

        // 顧客のNGをとる
        $kokyakuData = kokyaku::detail($kokyakuId);

        $ngList = $kokyakuData->ng;

        foreach($therapistList as $t){
            $List .= 'T' .$t->id;
        }

        // NGではないセラピストを検索
        $selectNg = str_replace($ngList, '', $List);

        $therapistId = explode('T', $selectNg);

        return $therapistId;
    }

    // 顧客名前変更
    public static function kokyakuNameEdit($id, $input){
        //インサート
        $kokyaku = kokyaku::find($id);
        
        $kokyaku->name = $input['name'];
        $result = $kokyaku->save();

        //インサート失敗時
        if(!$result) return false;

        return true;
    }

    // 顧客電話番号変更
    public static function kokyakuTelEdit($id, $input){
        //インサート
        $kokyaku = kokyaku::find($id);

        $kokyaku->tel = $input['tel'];
        $result = $kokyaku->save();

        //インサート失敗時
        if(!$result) return false;

        return true;
    }

    // 顧客メールアドレス変更
    public static function kokyakuMailEdit($id, $input){
        //インサート
        $kokyaku = kokyaku::find($id);

        $kokyaku->mail = $input['mail'];
        $result = $kokyaku->save();

        //インサート失敗時
        if(!$result) return false;

        return true;
    }

    // 顧客NGセラピスト変更
    public static function kokyakuNgEdit($id, $input){
        //インサート
        $kokyaku = kokyaku::find($id);

        $kokyaku->mail = $input['ng'];
        $result = $kokyaku->save();

        //インサート失敗時
        if(!$result) return false;

        return true;
    }

    // 顧客メモ変更
    public static function kokyakuMemoEdit($id, $input){
        //インサート
        $kokyaku = kokyaku::find($id);

        $kokyaku->mail = $input['memo'];
        $result = $kokyaku->save();

        //インサート失敗時
        if(!$result) return false;

        return true;
    }
}
