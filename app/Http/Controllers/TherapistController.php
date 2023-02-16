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
use App\Models\shifuto;

class TherapistController extends Controller{

    // 権限チェック
    public function levelCheck($id=null){
        //権限チェック
        if(!in_array(Auth::user()->access_level, [
            //アクセスできる権限
            "tiro",
            "admin",
            "inputer",
            "therapist"
        ])) return redirect('/');

        //他teamのデータ参照
        if($id && !user::teamCheck($id, Auth::user()->team)) return redirect('/');

        //アクティブではない
        if(!Auth::user()->active){
            return view ('error', ['mess'=>'アカウントが停止されています。']);
        }

        return null;
    }

    // topページ
    public function top(){
        $kokyakuData = null;
        $formflag = 0;
        $accesslevel = Auth::user()->access_level;

        // 権限チェック
        if($ng = $this->levelCheck()) return $ng;

        // セラピスト情報
        $therapist = therapist::detail(Auth::user()->id);

        // 店舗情報
        $mise = mise::detail($therapist->mise_id);
        
        // 顧客情報
        $kokyakuList = kokyaku::kokyakuList();

        // 予約一覧
        $yoyakuList = yoyaku::yoyakuList(Auth::user()->id, date('Y-m-d H:i:s'));

        // 先行予約一覧
        $yoyakuAfterList = yoyaku::yoyakuAfterList(Auth::user()->id, date('Y-m-d'));

        // オプション有無確認
        $optionfind = yoyaku::optionFind($yoyakuList);

        // 予約コース
        yoyaku::courseNameList($yoyakuList);
        yoyaku::courseNameList($yoyakuAfterList);

        // 予約フォーム
        $courseList = price::courseList($therapist->mise_id,$therapist->back_name);
        $visitList = price::visitList($therapist->mise_id,$therapist->back_name);
        $shimeiList = price::shimeiList($therapist->mise_id,$therapist->back_name);
        $optionList = price::optionList($therapist->mise_id,$therapist->back_name);
        $waribikiAutoList = price::waribikiAutoList($therapist->mise_id,$therapist->back_name);
        $waribikiList = price::waribikiList($therapist->mise_id,$therapist->back_name);
        $claimList = price::claimList($therapist->mise_id,$therapist->back_name);
        $getOption = price::getOption($therapist->mise_id,$therapist->back_name);
        $getRepeater = price::getRepeater($therapist->mise_id,$therapist->back_name);
        $enchoList = price::enchoList($therapist->mise_id,$therapist->back_name);

        return view ('therapist_top', [
            'mise' => $mise,
            'therapist' => $therapist,
            'kokyakuList' => $kokyakuList,
            'accesslevel' => $accesslevel,
            'yoyakuList' => $yoyakuList,
            'yoyakuAfterList' => $yoyakuAfterList,
            'kokyakuData' => $kokyakuData,
            'formflag' => $formflag,
            'ng' => $ng,
            'optionfind' => $optionfind,
            'courseList' => $courseList,
            'visitList' => $visitList,
            'shimeiList' => $shimeiList,
            'optionList' => $optionList,
            'waribikiAutoList' => $waribikiAutoList,
            'waribikiList' => $waribikiList,
            'claimList' => $claimList,
            'enchoList' => $enchoList,
            'getOption' => $getOption,
            'getRepeater' => $getRepeater,
            'message' => session('message'),
            'error' => session('error'),
        ]);
    }
}