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

    // prices削除
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

    // priceインサート
    public static function priceInsert($miseId, $name, $price, $count, $type){
        $newPrice = new price();
        $newPrice->mise_id = $miseId;
        $newPrice->name = $name;
        $newPrice->price = $price;
        $newPrice->order = $count;
        $newPrice->type = $type;
        $result = $newPrice->save();

        //インサート失敗時
        if(!$result) return '新規作成に失敗しました。';

        return null;
    }

    // formデータ取得
    public static function formData($miseId){
        $priceList = price::where('mise_id', $miseId)
            ->orderBy('order', 'asc')
            ->get();
        $formData = [];
        foreach($priceList as $p){
            $nameTitle = $p->type.'_name_'.$p->order;
            $priceTitle = $p->type.'_price_'.$p->order;
            $cell = [];
            $cell['name_title'] = $nameTitle;
            $cell['name_data'] = $p->name;
            $cell['price_title'] = $priceTitle;
            $cell['price_data'] = $p->price;
            $formData[$p->type][] = $cell;
        }
        // Log::info($formData);//★★★log★★★
        
        return $formData;
    }

    // detail
    public static function detail($miseId){
        $priceList = price::where('mise_id', $miseId)
            ->orderBy('order', 'asc')
            ->get();
        return $priceList;
    }

    // typeリスト
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

    // コース取得
    public static function courseList($miseId){
        $priceList = price::where('mise_id', $miseId)
            ->where('type', 'course')
            ->get();
        return $priceList;
    }

    // 来店取得
    public static function visitList($miseId){
        $priceList = price::where('mise_id', $miseId)
            ->where('type', 'visit')
            ->get();
        return $priceList;
    }

    // 指名取得
    public static function shimeiList($miseId){
        $priceList = price::where('mise_id', $miseId)
            ->where('type', 'shimei')
            ->get();
        return $priceList;
    }

    // 追加料金取得
    public static function moreList($miseId){
        $priceList = price::where('mise_id', $miseId)
            ->where('type', 'more')
            ->get();
        return $priceList;
    }

    // オプション取得
    public static function optionList($miseId){
        $priceList = price::where('mise_id', $miseId)
            ->where('type', 'option')
            ->get();
        return $priceList;
    }

    // 自動割引取得
    public static function waribikiAutoList($miseId){
        $priceList = price::where('mise_id', $miseId)
            ->where('type', 'waribikiAuto')
            ->get();
        return $priceList;
    }

    // 割引取得
    public static function waribikiList($miseId){
        $priceList = price::where('mise_id', $miseId)
            ->where('type', 'waribiki')
            ->get();
        return $priceList;
    }

    // クレーム取得
    public static function claimList($miseId){
        $priceList = price::where('mise_id', $miseId)
            ->where('type', 'claim')
            ->get();
        return $priceList;
    }

    // コース名取得
    public static function getCourseName($priceidList){
        foreach($priceidList as $p){
            $courseName = price::find($p);
            if(!$courseName) continue;
            if($courseName->type == 'course'){
                return $courseName->name;
            }
        }
    }

    // yoyakuリスト
    // public static function getYoyakuList($pidList){
    //     $result = [];
    //     $count = 0;
    //     foreach($pidList as $p){
    //         $price = price::find($p);
    //         if(!$price) continue;
    //         $result[$count] =[
    //             'name'=>$price->name,
    //             'price'=>$price->price,
    //             'type'=>$price->type,
    //         ];
    //         $count++;
    //     }
    //     return $result;
    // }
}
