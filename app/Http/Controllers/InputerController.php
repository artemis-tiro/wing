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

class InputerController extends Controller{

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

        //inputer一覧
        $inputerList = user::inputerList(Auth::user()->team);

        //client一覧
        $clientList = user::clientList(Auth::user()->team);

        return view ('inputer_top', [
            'inputerList' => $inputerList,
            'clientList' => $clientList,
            'newInputerError' => session('newInputerError'),
            'newClientError' => session('newClientError'),
       ]);
    }


}
