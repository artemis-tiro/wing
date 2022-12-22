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
use App\Models\Room;
use App\Models\Therapist;
use App\Models\Yoyaku;
use App\Models\Kokyaku;
use App\Models\Price;
use App\Models\Kyuryo;

class ShiftController extends Controller{

    //権限チェック
    public function levelCheck($id=null){
        
        // 権限チェック
        if(!in_array(Auth::user()->access_level, [
            //アクセスできる権限
            "tiro",
            "admin",
            "inputer",
            "therapist"
        ])) return redirect('/');

        // 他teamのデータ参照
        if($id && !user::teamCheck($id, Auth::user()->team)) return redirect('/');

        // アクティブではない
        if(!Auth::user()->active){
            return view ('error', ['mess'=>'アカウントが停止されています。']);
        }

        // teamがアクティブではない
        if(!user::teamActiveCheck(Auth::user()->team)){
            return view ('error', ['mess'=>'teamが停止されています。']);
        }

        return null;
    }

    // クライアント一覧
    public function top(){

        //権限チェック
        if($ng = $this->levelCheck()) return $ng;

        // クライアント一覧
        $clientList = user::clientList(Auth::user()->team);
        client::addDetail($clientList);

        return view ('shift_top', [
            'clientList' => $clientList,
            'error' => session('error'),
       ]);
    }

    // 店舗一覧
    public function miselist($id){

        //　権限チェック
        if($ng = $this->levelCheck()) return $ng;

        // クライアント詳細
        $client = client::detail($id);

        // マイ店舗一覧
        $myMiseList = mise::myMiseList($id);

        return view ('shift_mise', [
            'client' => $client,
            'myMiseList' => $myMiseList,
            'error' => session('error'),
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