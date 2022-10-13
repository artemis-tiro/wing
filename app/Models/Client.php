<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\user;

class client extends Model
{
    use SoftDeletes;

    protected $table = 'client';
    protected $guarded = [''];
    //public $timestamps = false;

    //inputer作成
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



}
