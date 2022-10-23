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

class TherapistController extends Controller{

    //権限チェック
    public function levelCheck(){
        //権限チェック
        if(!in_array(Auth::user()->access_level, [
            //アクセスできる権限
            "tiro",
            "therapist",
        ])) return redirect('/');
/*
        //他teamのデータ参照
        if(!user::teamCheck($clientId, Auth::user()->team)) return redirect('/');

        //他オーナーのデータ参照
        if(Auth::user()->access_level=='client'){
            if(Auth::user()->id != $clientId) return redirect('/');
        }

        //アクティブではない
        if(!Auth::user()->active){
            return view ('error', ['mess'=>'アカウントが停止されています。']);
        }

        //teamがアクティブではない
        if(!user::teamActiveCheck(Auth::user()->team)){
            return view ('error', ['mess'=>'teamが停止されています。']);
        }

        //miseが存在しない、クライアントの物ではない
        if($miseId && !mise::authCheck($clientId, $miseId)) return redirect('/');
*/
        return null;
    }

    //topページ
    public function top(){
        //権限チェック
        if($ng = $this->levelCheck()) return $ng;

        return view ('therapist', [
       ]);
    }




}
