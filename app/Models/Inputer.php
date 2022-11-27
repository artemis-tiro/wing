<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\user;

class inputer extends Model
{
    use SoftDeletes;

    protected $table = 'inputer';
    protected $guarded = [''];
    //public $timestamps = false;


    //inputer作成
    public static function inputerCreate($input, $id){
        //インサート
        $inputer = new inputer();
        $inputer->id = $id;
        $inputer->name = $input['name'];
        $result = $inputer->save();

        //インサート失敗時
        if(!$result) return '新規作成に失敗しました。';

        return null;
    }

    // inputer詳細
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

    //  アカウント情報変更(名前)
    public static function inputerNameEdit($id, $input){
        //インサート
        $inputer = new inputer();
        $inputer->id = $id;
        $inputer->name = $input['name'];
        $inputer->yomi = $input['kana'];
        $result = $inputer->save();

        //インサート失敗時
        if(!$result) return '失敗しました。';

        return null;
    }

    //  アカウント情報変更(住所)
    public static function inputerAddressEdit($id, $input){
        //インサート
        $inputer = new inputer();
        $inputer->id = $id;
        $inputer->address = $input['address'];
        $result = $inputer->save();

        //インサート失敗時
        if(!$result) return '失敗しました。';

        return null;
    }

    //  アカウント情報変更(電話番号)
    public static function inputerTelEdit($id, $input){
        //インサート
        $inputer = new inputer();
        $inputer->id = $id;
        $inputer->tel = $input['tel'];
        $result = $inputer->save();

        //インサート失敗時
        if(!$result) return '失敗しました。';

        return null;
    }

    //  アカウント情報変更(メールアドレス)
    public static function inputerMailEdit($id, $input){
        //インサート
        $inputer = new inputer();
        $inputer->id = $id;
        $inputer->mail = $input['mail'];
        $result = $inputer->save();

        //インサート失敗時
        if(!$result) return '失敗しました。';

        return null;
    }

    //  アカウント情報変更(生年月日)
    public static function inputerBirthdayEdit($id, $input){
        //インサート
        $inputer = new inputer();
        $inputer->id = $id;
        $inputer->mail = $input['birthday'];
        $result = $inputer->save();

        //インサート失敗時
        if(!$result) return '失敗しました。';

        return null;
    }
}
