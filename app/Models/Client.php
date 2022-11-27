<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\user;
use App\Models\msie;

class client extends Model
{
    use SoftDeletes;

    protected $table = 'client';
    protected $guarded = [''];
    //public $timestamps = false;

    //client作成
    public static function clientCreate($input, $id){
        //インサート
        $client = new client();
        $client->id = $id;
        $client->name = $input['name'];
        $result = $client->save();

        //インサート失敗時
        if(!$result) return '新規作成に失敗しました。';

        return null;
    }

    // client詳細
    public static function detail($id){
        $client = client::find($id);
        return $client;
    }

    //削除
    public static function del($id){
        $client = client::find($id);
        if($client) $client->delete();
        return true;
    }

    //client詳細を追加
    public static function addDetail($clientList){
        foreach($clientList as $c){
            $c->client = client::find($c->id);
            $c->miseCount = mise::miseCount($c->id);
            $c->miseCountActive = mise::miseCountActive($c->id);
            $c->miseMain = mise::miseMain($c->id);
        }
        return null;
    }

    //  アカウント情報変更(名前)
    public static function clientNameEdit($id, $input){
        //インサート
        $client = client::find($id);
        $client->name = $input['name'];
        $client->yomi = $input['kana'];
        $result = $client->save();

        //インサート失敗時
        if(!$result) return '失敗しました。';

        return null;
    }

    //  アカウント情報変更(住所)
    public static function clientAddressEdit($id, $input){
        //インサート
        $client = client::find($id);
        $client->address = $input['address'];
        $result = $client->save();

        //インサート失敗時
        if(!$result) return '失敗しました。';

        return null;
    }

    //  アカウント情報変更(電話番号)
    public static function clientTelEdit($id, $input){
        //インサート
        $client = client::find($id);
        $client->tel = $input['tel'];
        $result = $client->save();

        //インサート失敗時
        if(!$result) return '失敗しました。';

        return null;
    }

    //  アカウント情報変更(メールアドレス)
    public static function clientMailEdit($id, $input){
        //インサート
        $client = client::find($id);
        $client->mail = $input['mail'];
        $result = $client->save();

        //インサート失敗時
        if(!$result) return '失敗しました。';

        return null;
    }

    //  アカウント情報変更(生年月日)
    public static function inputerBirthdayEdit($id, $input){
        //インサート
        $client = client::find($id);
        $client->mail = $input['birthday'];
        $result = $client->save();

        //インサート失敗時
        if(!$result) return '失敗しました。';

        return null;
    }

    // therapist名取得
    public static function getName($id){
        $client = client::find($id);
        return $client->name;
    }


}
