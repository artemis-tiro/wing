<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\user;
use App\Models\yoyaku;
use Log;

class price extends Model
{
    use SoftDeletes;

    protected $table = 'price';
    protected $guarded = [''];
    //public $timestamps = false;

    //prices削除
    public static function del($miseId){
        $priceList = price::where('mise_id', $miseId)->get();
        foreach($priceList as $p){
            $exist = yoyaku::where('price_id_list', 'LIKE', "%p".$p->id."%")
                ->first();
            if($exist) $p->delete(); //yoyakuにあればソフトデリート
            else $p->forceDelete(); //yoyakuになければ完全削除
        }
        return null;
    }

    //priceインサート
    public static function priceInsert($miseId, $name, $price, $count, $type, $time){
        $newPrice = new price();
        $newPrice->mise_id = $miseId;
        $newPrice->name = $name;
        $newPrice->price = $price;
        $newPrice->order = $count;
        $newPrice->type = $type;
        $newPrice->time = $time;
        $result = $newPrice->save();

        //インサート失敗時
        if(!$result) return '新規作成に失敗しました。';

        return null;
    }

    //formデータ取得
    public static function formData($miseId){
        $priceList = price::where('mise_id', $miseId)
            ->orderBy('order', 'asc')
            ->get();
        $formData = [];
        foreach($priceList as $p){
            $nameTitle = $p->type.'_name_'.$p->order;
            $priceTitle = $p->type.'_price_'.$p->order;
            $timeTitle = $p->type.'_time_'.$p->order;
            $cell = [];
            $cell['name_title'] = $nameTitle;
            $cell['name_data'] = $p->name;
            $cell['price_title'] = $priceTitle;
            $cell['price_data'] = $p->price;
            $cell['time_title'] = $timeTitle;
            $cell['time_data'] = $p->time;
            $formData[$p->type][] = $cell;
        }
        // Log::info($formData);//★★★log★★★
        
        return $formData;
    }

    //detail
    public static function detail($miseId){
        $priceList = price::where('mise_id', $miseId)
            ->orderBy('order', 'asc')
            ->get();
        return $priceList;
    }

    //typeリスト
    public static function typeList($miseId){
        $priceList = price::where('mise_id', $miseId)
            ->get('type')
            ->unique('type')
            ->toArray();
        $resule = [];
        foreach($priceList as $p){
            if($p['type']=='optionGet') continue;
            $resule[] = $p['type'];
        }
        return $resule;
    }



}
