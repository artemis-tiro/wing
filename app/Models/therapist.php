<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\user;
use Log;

class Therapist extends Model
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
        $therapist->back_name = $input['back_name'];
        $therapist->business_age = $input['age'];
        $therapist->cup = strtoupper($input['cup']);
        $therapist->tall = $input['tall'];
        $result = $therapist->save();

        //インサート失敗時
        if(!$result) return '新規作成に失敗しました。';

        return null;
    }

    //therapist編集
    public static function therapistEdit($input, $id){
        $therapist = therapist::find($id);

        //インサート
        $therapist->business_age = $input['age'];
        $therapist->cup = strtoupper($input['cup']);
        $therapist->tall = $input['tall'];
        $result = $therapist->save();

        //インサート失敗時
        if(!$result) return '新規作成に失敗しました。';

        return null;
    }

    //therapist詳細を追加
    public static function addDetail($miseList){
        foreach($miseList as $m){
            $therapist = therapist::where('mise_id', $m->id)
                ->get();
            $m->therapist = $therapist;
            $count = 0;
            foreach($therapist as $t){
                $user = user::find($t->id);
                if($user->active) $count++;
            }
            $m->therapistCount = $count;
        }
        return null;
    }

    //myセラピスト一覧
    public static function List($miseId){
        $therapistList = therapist::where('mise_id', $miseId)
            ->get();
        user::addDetail($therapistList);
        foreach($therapistList as $t){
            $exist = yoyaku::where('therapist_id', $t->id)
                ->first();
            $t->yoyaku = $exist? 1: 0;
        }
        $list = $therapistList->sortByDesc('active');
        return $list;
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

    // セラピスト一覧
    public static function zenTherapistList($miseId){
        $therapistList = therapist::where('mise_id', $miseId)
            ->get();
        return $therapistList;
    }

    //  アカウント情報変更(名前)
    public static function therapistNameEdit($id, $input){
        //インサート
        $therapist = therapist::find($id);
        
        $therapist->id = $id;
        $therapist->name = $input['name'];
        $therapist->yomi = $input['kana'];
        $result = $therapist->save();

        //インサート失敗時
        if(!$result) return false;

        return true;
    }

    //  アカウント情報変更(住所)
    public static function therapistAddressEdit($id, $input){
        //インサート
        $therapist = therapist::find($id);

        $therapist->id = $id;
        $therapist->address = $input['address'];
        $result = $therapist->save();

        //インサート失敗時
        if(!$result) return false;

        return true;
    }

    //  アカウント情報変更(電話番号)
    public static function therapistTelEdit($id, $input){
        //インサート
        $therapist = therapist::find($id);

        $therapist->id = $id;
        $therapist->tel = $input['tel'];
        $result = $therapist->save();

        //インサート失敗時
        if(!$result) return false;

        return true;
    }

    //  アカウント情報変更(メールアドレス)
    public static function therapistMailEdit($id, $input){
        //インサート
        $therapist = therapist::find($id);

        $therapist->id = $id;
        $therapist->mail = $input['mail'];
        $result = $therapist->save();

        //インサート失敗時
        if(!$result) return false;

        return true;
    }

    //  アカウント情報変更(生年月日)
    public static function therapistBirthdayEdit($id, $input){
        //インサート
        $therapist = therapist::find($id);

        $therapist->id = $id;
        $therapist->birthday = $input['birthday'];
        $result = $therapist->save();

        //インサート失敗時
        if(!$result) return false;

        return true;
    }

    //  アカウント情報変更(LINE ID)
    public static function therapistLineEdit($id, $input){
        //インサート
        $therapist = therapist::find($id);

        $therapist->id = $id;
        $therapist->line = $input['line'];
        $result = $therapist->save();

        //インサート失敗時
        if(!$result) return false;

        return true;
    }

    //  back削除
    public static function backDel($miseId, $backName){
        $therapistList = therapist::where('mise_id', $miseId)
            ->where('back_name', $backName)
            ->update(['back_name'=>'default']);

        return null;
    }

    // therapist削除
    public static function del($therapistId){
        $exist = yoyaku::where('therapist_id', $therapistId)
            ->first();
        if($exist) return null; //yoyakuにあれば削除できない

        $therapist = therapist::find($therapistId);
        $name = $therapist->business_name;
        $therapist->forceDelete();
            
        user::find($therapistId)->forceDelete();

        $mes =  '「'.$name.'」を削除しました。';
        return $mes;
    }

    // therapistバック変更
    public static function backChange($therapistId, $backName){
        $therapist = therapist::find($therapistId);
        $therapist->update(['back_name'=>$backName]);
        $mes =  '「'.$therapist->business_name.'」の給料形態を【'.$backName.'】に変更しました。';
        return $mes;
    }

    // therapist名取得
    public static function getName($therapistId){
        $therapist = therapist::find($therapistId);
        return $therapist->business_name;
    }

    // NGを除いたセラピスト
    public static function ngTherapist($kokyakuId, $therapistList){
        
        $replace = '';
        $selectNg = array();

        // kokyakuのng
        $kokyakuData = kokyaku::detail($kokyakuId);
        
        // 店ごとセラピストリスト
        foreach($therapistList as $t){
            $replace .= 'T'.$t->id;
        }

        $ng = str_replace($kokyakuData->ng, '', $replace);

        $arr = explode('T', $ng);

        // 空白の配列削除
        $arr = array_splice($arr, 1);

        $cnt = count($arr);

        for($i = 0; $i < $cnt; $i++){
            // arrのセラピストIDで名前をとる
            $therapist = therapist::detail($arr[$i]);

            $replace = array($therapist->id => $therapist->business_name);

            // $arrの中身を名前にする
            $selectNg = array_replace($selectNg,$replace);
        }

        return $selectNg;
    }

    // NGセラピスト名取得
    public static function getTherapistName($kokyaku){

        // 顧客のNGセラピストリスト取得
        $ngList = $kokyaku->ng;
        $ngId = explode('T', $ngList);
        $ngCount = count($ngId);

        // 出力文字
        $display = '';

        // NGセラピストリストの数だけ回す
        for($i = 0; $i < $ngCount; $i++){

            // ngIdで名前をとる
            $therapist = therapist::detail($ngId[$i]);

            if(!($therapist)) continue;

            // 最初以外カンマ付き
            if(empty($display)){
                $display .= $therapist->business_name;                
            }else{
                $display .= ' ,'.$therapist->business_name; 
            }
        }

        // ngNameを付与
        $kokyaku->ngName = $display;

        return null;

    }

}
