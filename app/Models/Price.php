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
    public static function del($miseId, $backName){
        $priceList = price::where('mise_id', $miseId)
            ->where('back_name', $backName)
            ->get();
        foreach($priceList as $p){
            $exist = yoyaku::where('price_id_list', 'LIKE', "%p".$p->id."%")
                ->first();
            if($exist) $p->delete(); //yoyakuにあればソフトデリート
            else $p->forceDelete(); //yoyakuになければ完全削除
        }
        return null;
    }

    //priceインサート
    public static function priceInsert($miseId, $name, $price, $count, $type, $time, $backName, $back){
        $newPrice = new price();
        $newPrice->mise_id = $miseId;
        $newPrice->name = $name;
        $newPrice->price = $price;
        $newPrice->order = $count;
        $newPrice->type = $type;
        $newPrice->time = $time;
        $newPrice->back_name = $backName;
        $newPrice->back = $back;
        $result = $newPrice->save();

        //インサート失敗時
        if(!$result) return '新規作成に失敗しました。';

        return null;
    }

    // formデータ取得
    public static function formData($miseId, $backName){
        $priceList = price::where('mise_id', $miseId)
            ->where('back_name', $backName)
            ->orderBy('order', 'asc')
            ->get();
        $formData = [];
        foreach($priceList as $p){
            $nameTitle = $p->type.'_name_'.$p->order;
            $priceTitle = $p->type.'_price_'.$p->order;
            $timeTitle = $p->type.'_time_'.$p->order;
            $backTitle = $p->type.'_back_'.$p->order;
            $cell = [];
            $cell['name_title'] = $nameTitle;
            $cell['name_data'] = $p->name;
            $cell['price_title'] = $priceTitle;
            $cell['price_data'] = $p->price;
            $cell['time_title'] = $timeTitle;
            $cell['time_data'] = $p->time;
            $cell['back_title'] = $backTitle;
            $cell['back_data'] = $p->back;
            $formData[$p->type][] = $cell;
        }
        // Log::info($formData);//★★★log★★★
        
        return $formData;
    }

    // 新規作成
    public static function backCreate($miseId, $name, $copy){
        $backList = price::where('mise_id', $miseId)
            ->where('back_name', $name)
            ->get();
        if($backList->count() || $name=="default") return $name.'は存在します。';

        $default = price::where('mise_id', $miseId)
            ->where('back_name', 'default')
            ->get();
        if($copy && $default->count()){
            foreach($default as $d){
                $newBack = new price();
                $newBack->mise_id = $miseId;
                $newBack->name = $d->name;
                $newBack->time = $d->time;
                $newBack->price = $d->price;
                $newBack->order = $d->order;
                $newBack->type = $d->type;
                $newBack->back = $d->back;
                $newBack->back_name = $name;
                $result = $newBack->save();
            }
        }else{
            $newBack = new price();
            $newBack->mise_id = $miseId;
            $newBack->back_name = $name;
            $newBack->name = 0;
            $newBack->price = 0;
            $newBack->order = 0;
            $result = $newBack->save();
        }
        return $name.'を作成しました。';
    }

        // backリスト
    public static function list($miseId){
        $backList = price::where('mise_id', $miseId)
            ->get()
            ->unique('back_name');

        $list = [];
        foreach($backList as $b){
            if($b->back_name=='default') continue;
            $list[$b->back_name] = $b->back_name;
        }
        return $list;
    }

        // backリスト
    public static function list2($miseId){
        $backList = price::where('mise_id', $miseId)
            ->get()
            ->unique('back_name');
        $list = [];

        $list['default']['name'] = 'default';
        $courceExist = price::where('mise_id', $miseId)
            ->where('back_name', 'default')
            ->where('type', 'course')
            ->first();
        $complete = $courceExist? 1: 0;
        $list['default']['complete'] = $complete;

        foreach($backList as $b){
            if($b->back_name=='default') continue;
            $list[$b->back_name]['name'] = $b->back_name;
            $courceExist = price::where('mise_id', $miseId)
                ->where('back_name', $b->back_name)
                ->where('type', 'course')
                ->first();
            $complete = $courceExist? 1: 0;
            $list[$b->back_name]['complete'] = $complete;
        }
        return $list;
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
    public static function courseList($miseId,$backName){
        $priceList = price::where('mise_id', $miseId)
            ->where('back_name', $backName)
            ->where('type', 'course')
            ->get();
        return $priceList;
    }

    // 来店取得
    public static function visitList($miseId,$backName){
        $priceList = price::where('mise_id', $miseId)
            ->where('back_name', $backName)
            ->where('type', 'visit')
            ->get();
        return $priceList;
    }

    // 指名取得
    public static function shimeiList($miseId,$backName){
        $priceList = price::where('mise_id', $miseId)
            ->where('back_name', $backName)
            ->where('type', 'shimei')
            ->get();
        return $priceList;
    }

    // オプション取得
    public static function optionList($miseId,$backName){
        $List = price::where('mise_id', $miseId)
            ->where('back_name', $backName)
            ->where('type', 'option')
            ->get();
        return $List;
    }

    // 自動割引取得
    public static function waribikiAutoList($miseId,$backName){
        $priceList = price::where('mise_id', $miseId)
            ->where('back_name', $backName)
            ->where('type', 'waribikiAuto')
            ->first();
        return $priceList;
    }

    // 割引取得
    public static function waribikiList($miseId,$backName){
        $priceList = price::where('mise_id', $miseId)
            ->where('back_name', $backName)
            ->where('type', 'waribiki')
            ->get();
        return $priceList;
    }

    // クレーム取得
    public static function claimList($miseId,$backName){
        $priceList = price::where('mise_id', $miseId)
            ->where('back_name', $backName)
            ->where('type', 'claim')
            ->get();
        return $priceList;
    }

    // お茶取得
    public static function otyaList($miseId,$backName){
        $priceList = price::where('mise_id', $miseId)
            ->where('back_name', $backName)
            ->where('type', 'ocha')
            ->get();
        return $priceList;
    }

    // 延長取得
    public static function enchoList($miseId,$backName){
        $enchoList = price::where('mise_id', $miseId)
            ->where('back_name', $backName)
            ->where('type', 'encho')
            ->get();
        return $enchoList;
    }

    // コースが存在するか
    public static function courseExist($miseId){
        $course = price::where('mise_id', $miseId)
            ->where('type', 'course')
            ->first();
        $result = $course? true: false;
        return $result;
    }

    // コース名取得
    public static function getCourseName($priceIdList){
        foreach($priceIdList as $p){
            $courseName = price::withTrashed()->find($p);
            if(!$courseName) continue;
            if($courseName->type == 'course'){
                return $courseName->name;
            }
        }
    }

    // オプション名取得
    public static function getOptionName($priceIdList){
        foreach($priceIdList as $p){
            $courseName = price::withTrashed()->find($p);
            if(!$courseName) continue;
            if($courseName->type == 'option'){
                return $courseName;
            }
        }
    }

    // 指名取得
    public static function getCourseShimei($priceIdList){
        foreach($priceIdList as $p){
            $courseName = price::withTrashed()->find($p);
            if(!$courseName) continue;
            if($courseName->type == 'shimei'){
                return $courseName->name;
            }
        }
    }

    // 割引取得
    public static function getCourseWaribiki($priceIdList){
        foreach($priceIdList as $p){
            $courseWaribki = price::withTrashed()->find($p);
            if(!$courseWaribki) continue;
            if($courseWaribki->type == 'waribiki'){
                return $courseWaribki->name;
            }
        }
    }

    // コース時間取得
    public static function getCoursetime($priceIdList){
        foreach($priceIdList as $p){
            $courseName = price::withTrashed()->find($p);
            if(!$courseName) continue;
            if($courseName->type == 'course'){
                return $courseName->time;
            }
        }
    }

    // コース金額取得
    public static function getCoursePrice($priceIdList){
        foreach($priceIdList as $p){
            $getCourse = price::withTrashed()->find($p);
            if(!$getCourse) continue;
            if($getCourse->type == 'course'){
                return $getCourse;
            }
        }
    }

    // 指名金額取得
    public static function getShimeiPrice($priceIdList){
        foreach($priceIdList as $p){
            $getShimei = price::withTrashed()->find($p);
            if(!$getShimei) continue;
            if($getShimei->type == 'shimei'){
                return $getShimei;
            }
        }
    }

    // オプション金額取得
    public static function getOptionPrice($priceIdList){
        foreach($priceIdList as $p){
            $getOption = price::withTrashed()->find($p);
            if(!$getOption) continue;
            if($getOption->type == 'option'){
                return $getOption;
            }
        }
    }

    // コース総額取得
    public static function getTotalPrice($priceIdList){

        $totalPrice = 0;

        foreach($priceIdList as $p){
            
            $coursePrice = price::withTrashed()->find($p);

            if($coursePrice){
                $totalPrice += $coursePrice->price;
            }
        }
        return $totalPrice;
    }

    // オプション選択取得
    public static function getOption($miseId,$backName){
        $priceList = price::withTrashed()
            ->where('mise_id', $miseId)
            ->where('back_name', $backName)
            ->where('type', 'optionGet')
            ->first();
        return $priceList;
    }

    // リピーターのみ取得
    public static function getRepeater($miseId,$backName){
        $priceList = price::withTrashed()
            ->where('mise_id', $miseId)
            ->where('back_name', $backName)
            ->where('name', 'リピーター')
            ->first();
        return $priceList;
    }
}
