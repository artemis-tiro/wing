<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\user;

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
            $m->therapist = therapist::where('mise_id', $m->id)
                ->get();
        }
        return null;
    }

    //myセラピスト一覧
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
}
