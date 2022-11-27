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
        $therapist = new therapist();
        $therapist->id = $id;
        $therapist->name = $input['name'];
        $therapist->yomi = $input['kana'];
        $result = $therapist->save();

        //インサート失敗時
        if(!$result) return '失敗しました。';

        return null;
    }

    //  アカウント情報変更(住所)
    public static function therapistAddressEdit($id, $input){
        //インサート
        $therapist = new therapist();
        $therapist->id = $id;
        $therapist->address = $input['address'];
        $result = $therapist->save();

        //インサート失敗時
        if(!$result) return '失敗しました。';

        return null;
    }

    //  アカウント情報変更(電話番号)
    public static function therapistTelEdit($id, $input){
        //インサート
        $therapist = new therapist();
        $therapist->id = $id;
        $therapist->tel = $input['tel'];
        $result = $therapist->save();

        //インサート失敗時
        if(!$result) return '失敗しました。';

        return null;
    }

    //  アカウント情報変更(メールアドレス)
    public static function therapistMailEdit($id, $input){
        //インサート
        $therapist = new therapist();
        $therapist->id = $id;
        $therapist->mail = $input['mail'];
        $result = $therapist->save();

        //インサート失敗時
        if(!$result) return '失敗しました。';

        return null;
    }

    //  アカウント情報変更(生年月日)
    public static function inputerBirthdayEdit($id, $input){
        //インサート
        $therapist = new therapist();
        $therapist->id = $id;
        $therapist->mail = $input['birthday'];
        $result = $therapist->save();

        //インサート失敗時
        if(!$result) return '失敗しました。';

        return null;
    }

    //  アカウント情報変更(営業プロフィール)
    public static function therapistProfileEdit($id, $input){
        //インサート
        $therapist = new therapist();
        $therapist->id = $id;
        $therapist->business_age = $input['age'];
        // $therapist->3size = $input['3size'];
        $therapist->cup = $input['cup'];
        $therapist->line = $input['line'];
        $result = $therapist->save();

        //インサート失敗時
        if(!$result) return '失敗しました。';

        return null;
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
}
