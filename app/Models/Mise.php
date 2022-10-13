<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\estimate;

class mise extends Model
{
    use SoftDeletes;

    protected $table = 'mise';
    protected $guarded = [''];
    //public $timestamps = false;

    // DBからデータ一覧取得
    public static function foodList(){
        $food_list = food::get();
        return $food_list;
    }

    // DBへinsert
    public static function foodInsert($input){
        $food = new food($input);
        $food->save();
        return true;
    }

    // DBから削除
    public static function foodDelete($id){
        food::find($id)->delete();
        return true;
    }


}
