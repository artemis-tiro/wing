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
use App\Models\Shifuto;

class ShiftController extends Controller{

    //権限チェック
    public function levelCheck($id=null){
        
        // 権限チェック
        if(!in_array(Auth::user()->access_level, [
            //アクセスできる権限
            "tiro",
            "admin",
            "client",
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

        // クライアントでログイン時選択をスキップ
        if(Auth::user()->access_level == "client"){
            redirect("shift/".Auth::user()->id, 301);
        }

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

        // 権限チェック
        if($ng = $this->levelCheck($id)) return $ng;

        // client詳細
        $client = client::detail($id);

        // マイmise一覧
        $myMiseList = mise::myMiseList($id);

        // room情報添付
        room::addDetail($myMiseList);

        // therapist情報添付
        therapist::addDetail($myMiseList);

        return view ('shift_mise', [
            'client' => $client,
            'myMiseList' => $myMiseList,
            'error' => session('error'),
       ]);
    }

    // シフト入力
    public function shift($clientId, $miseId){

        // 権限チェック
        if($ng = $this->levelCheck($clientId, $miseId)) return $ng;

        // client情報
        $client = client::detail($clientId);

        // mise情報
        $mise = mise::detail($miseId);

        // therapistリスト
        $therapistList = therapist::List($miseId);
        shifuto::addTime($therapistList);

        return view ('shift_input', [
            'mise' => $mise,
            'client' => $client,
            'therapistList' => $therapistList,
            'message' => session('message'),
            'error' => session('error'),
       ]);
    }

    // 非同期
    public function itemApi(Request $request){
        $input = $request->input('item');
        $name = $request->input('name');
        $miseid = $request->input('id');
        
        if($input == null){
            // shift作成
            $shift = Shifuto::shiftCreate($input, $name, $miseid);
            // jqueryにjson形式でres?に格納して返す
            return json_encode(['item'=>$input]);
        }

        // 0~9 or 1(0~9) or 2(0~4) and .5が0個以上 - 0~9 or 1(0~9) or 2(0~4) and .5が0個以上
        if(preg_match('/^([0-9]|1[0-9]|2[0-4])(\.5)?-([0-9]|1[0-9]|2[0-4])(\.5)?$/',$input)){
            // shift作成
            $shift = Shifuto::shiftCreate($input, $name, $miseid);
            // jqueryにjson形式でres?に格納して返す
            return json_encode(['item'=>$input]);
        }
          
        return false;
    }
}