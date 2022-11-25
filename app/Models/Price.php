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

    // formデータ取得
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
            ->first();
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
    public static function getCourseName($priceIdList){
        foreach($priceIdList as $p){
            $courseName = price::find($p);
            if(!$courseName) continue;
            if($courseName->type == 'course'){
                return $courseName->name;
            }
        }
    }

    // コースが存在するか
    public static function courseExist($miseId){
        $course = price::where('mise_id', $miseId)
            ->where('type', 'course')
            ->first();
        $result = $course? true: false;
        return $result;
    }

    // 指名取得
    public static function getCourseShimei($priceIdList){
        foreach($priceIdList as $p){
            $courseName = price::find($p);
            if(!$courseName) continue;
            if($courseName->type == 'shimei'){
                return $courseName->name;
            }
        }
    }

    // コース時間取得
    public static function getCoursetime($priceIdList){
        foreach($priceIdList as $p){
            $courseName = price::find($p);
            if(!$courseName) continue;
            if($courseName->type == 'course'){
                return $courseName->time;
            }
        }
    }

    // コース金額取得
    public static function getCoursePrice($priceIdList){
        foreach($priceIdList as $p){
            $courseName = price::find($p);
            if(!$courseName) continue;
            if($courseName->type == 'course'){
                return $courseName->price;
            }
        }
    }

    // 指名金額取得
    public static function getShimeiPrice($priceIdList){
        foreach($priceIdList as $p){
            $courseName = price::find($p);
            if(!$courseName) continue;
            if($courseName->type == 'shimei'){
                return $courseName->price;
            }
        }
    }

    // オプション金額取得
    public static function getOptionPrice($priceIdList){
        foreach($priceIdList as $p){
            $courseName = price::find($p);
            if(!$courseName) continue;
            if($courseName->type == 'option'){
                return $courseName->price;
            }
        }
    }

    // コース総額取得
    public static function getTotalPrice($priceIdList){

        $totalPrice = 0;

        foreach($priceIdList as $p){
            
            $coursePrice = price::find($p);

            if($coursePrice){
                $totalPrice += $coursePrice->price;
            }
        }
        return $totalPrice;
    }
}
