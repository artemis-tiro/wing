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

    // 顧客一覧
    public static function kokyakuList(){
        $kokyakuList = kokyaku::get();
        $list = [];
        foreach($kokyakuList as $k){
            $list[$k->id] = $k;
        }
        return $list;
    }

    //予約新規作成
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

    // 電話番号検索
    public static function telsearch($tel){
        $kokyaku = kokyaku::where($tel)
            ->get();

        return $kokyaku;
    }
}
