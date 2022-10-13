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





}
