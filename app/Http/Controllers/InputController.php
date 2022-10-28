<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator; 
use App\Rules\Hankaku;
use Log;
use App\Models\User;
use App\Models\Inputer;
use App\Models\Client;
use App\Models\Mise;
use App\Models\Therapist;
use App\Models\Yoyaku;

class InputController extends Controller{

    //権限チェック
    public function levelCheck($id=null){
        //権限チェック
        if(!in_array(Auth::user()->access_level, [
            //アクセスできる権限
            "tiro",
            "admin",
            "inputer",
        ])) return redirect('/');

        //他teamのデータ参照
        if($id && !user::teamCheck($id, Auth::user()->team)) return redirect('/');

        //アクティブではない
        if(!Auth::user()->active){
            return view ('error', ['mess'=>'アカウントが停止されています。']);
        }

        //teamがアクティブではない
        if(!user::teamActiveCheck(Auth::user()->team)){
            return view ('error', ['mess'=>'teamが停止されています。']);
        }

        return null;
    }

    //topページ
    public function top(){
        //権限チェック
        if($ng = $this->levelCheck()) return $ng;

        // 店舗一覧
        $zenMiseList = mise::zenMiseList(Auth::user()->team);

        return view ('input_top', [
            'zenMiseList' => $zenMiseList,
            'error' => session('error'),
       ]);
    }

    //セラピスト一覧ページ
    public function therapist($miseId){
        //権限チェック
        if($ng = $this->levelCheck()) return $ng;

        // 店舗情報
        $mise = mise::detail($miseId);

        // セラピスト一覧
        $zenTherapistList = therapist::zenTherapistList($miseId);

        return view ('input_therapist', [
            'mise' => $mise,
            'zenTherapistList' => $zenTherapistList,
            'error' => session('error'),
        ]);
    }

    //予約一覧ページ
    public function yoyaku($therapistId){
        //権限チェック
        if($ng = $this->levelCheck()) return $ng;

        // 店舗情報
        $therapistId = mise::detail($therapistId);

        // 予約一覧
        $yoyakuList = yoyaku::yoyakuList($therapistId);

        return view ('input_reservation', [
            'therapist' => $therapistId,
            'yoyakuList' => $yoyakuList,
            'error' => session('error'),
        ]);
    }

    
}