<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\user;
use App\Models\yoyaku;
use Log;

class back extends Model
{
    use SoftDeletes;

    protected $table = 'back';
    protected $guarded = [''];
    //public $timestamps = false;

    //back削除
    public static function del($miseId, $backName){
        $backList = back::where('mise_id', $miseId)
            ->where('name', $backName)
            ->get();
        foreach($backList as $b){
            $exist = yoyaku::where('back_id_list', 'LIKE', "%b".$b->id."%")
                ->first();
            if($exist) $b->delete(); //yoyakuにあればソフトデリート
            else $b->forceDelete(); //yoyakuになければ完全削除
        }
        return null;
    }

    //backリスト
    public static function list($miseId){
        $backList = back::where('mise_id', $miseId)
            ->get()
            ->unique('name');

        $list = [];
        foreach($backList as $b){
            if($b->name=='default') continue;
            $list[$b->name] = $b->name;
        }
        return $list;
    }

    //backインサート
    public static function backInsert($miseId, $price_name, $back_name, $price, $ocha=null){
        $back = new back();
        $back->mise_id = $miseId;
        $back->price_name = $price_name;
        $back->name = $back_name;
        $back->price = $price;
        $back->ocha = $ocha;
        $result = $back->save();

        //インサート失敗時
        if(!$result) return '新規作成に失敗しました。';

        return null;
    }

    //formデータ取得
    public static function formData($miseId, $backName){
        $backList = back::where('mise_id', $miseId)
            ->where('name', $backName)
            ->where('ocha', 1)
            ->get();
        $formData = [];
        foreach($backList as $i => $b){
            $nameTitle = 'ocha_name_'.($i+1);
            $priceTitle = 'ocha_price_'.($i+1);
            $cell = [];
            $cell['name_title'] = $nameTitle;
            $cell['name_data'] = $b->price_name;
            $cell['price_title'] = $priceTitle;
            $cell['price_data'] = $b->price;
            $formData['ocha'][] = $cell;
        }
        // Log::info($formData);//★★★log★★★
        
        return $formData;
    }

    //detail
    public static function detail($miseId, $backName){
        $backList = back::where('mise_id', $miseId)
            ->where('name', $backName)
            ->get();
        $detail = [];
        foreach($backList as $b){
            $detail[$b->price_name] = $b->price;
        }
        return $detail;
    }

    //新規作成
    public static function backCreate($miseId, $name, $copy){
        $backList = back::where('mise_id', $miseId)
            ->where('name', $name)
            ->get();
        if($backList->count() || $name=="default") return $name.'は存在します。';

        $default = back::where('mise_id', $miseId)
            ->where('name', 'default')
            ->get();
        if($copy && $default->count()){
            foreach($default as $d){
                $newBack = new back();
                $newBack->mise_id = $miseId;
                $newBack->price_name = $d->price_name;
                $newBack->name = $name;
                $newBack->price = $d->price;
                $newBack->ocha = $d->ocha;
                $newBack->onece = $d->onece;
                $result = $newBack->save();
            }
        }else{
            $newBack = new back();
            $newBack->mise_id = $miseId;
            $newBack->name = $name;
            $result = $newBack->save();
        }
        return $name.'を作成しました。';
    }

}
