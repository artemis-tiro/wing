<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator; 
use App\Rules\Hankaku;
use Log;
use Illuminate\Validation\Rule;

use App\Models\User;
use App\Models\Inputer;
use App\Models\Client;
use App\Models\Mise;
use App\Models\Therapist;
use App\Models\Yoyaku;
use App\Models\Kokyaku;
use App\Models\Price;
use App\Models\Kyuryo;

class ShiftController extends Controller{

    //権限チェック
    public function levelCheck($miseId=null){
        Log::channel('daily')->info('');
        //権限チェック
        if(!in_array(Auth::user()->access_level, [
            //アクセスできる権限
            "tiro",
            "admin",
            "client",
        ])) return redirect('/');

        return null;
    }

    // 店舗一覧
    public function top(){

        //権限チェック
        if($ng = $this->levelCheck()) return $ng;

        // 店舗一覧
        // (Auth::user()->access_levelがclientなら自分のmise
        // (Auth::user()->access_levelがtiroかadminなら全mise

        return view ('shift_top', [
            '' => '',
       ]);
    }

    // シフト入力
    public function shift($miseId){

        //権限チェック
        if($ng = $this->levelCheck($miseId)) return $ng;

        // 店舗一覧
        // (Auth::user()->access_levelがclientなら自分のmise
        // (Auth::user()->access_levelがtiroかadminなら全mise

        return view ('', [
            '' => '',
       ]);
    }


}