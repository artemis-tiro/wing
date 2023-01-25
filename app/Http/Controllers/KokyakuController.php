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
use App\Models\shifuto;

class KokyakuController extends Controller{

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

        //teamがアクティブではない
        if(!user::teamActiveCheck(Auth::user()->team)){
            return view ('error', ['mess'=>'teamが停止されています。']);
        }

        return null;
    }

    // topページ
    public function top(){

        //権限チェック
        if($ng = $this->levelCheck()) return $ng;

        //mise一覧
        $zenMiseList = mise::zenMiseList(Auth::user()->team);

        //room情報添付
        room::addDetail($zenMiseList);

        //therapist情報添付
        therapist::addDetail($zenMiseList);

        return view ('kokyaku_top', [
            'zenMiseList' => $zenMiseList,
            'error' => session('error'),
       ]);
    }

    // 顧客一覧ページ
    public function kokyakulist($miseId){

        //権限チェック
        if($ng = $this->levelCheck()) return $ng;

        // 店舗情報
        $mise = mise::detail($miseId);

        // 店毎予約一覧
        $yoyakuList = yoyaku::yoyakuBefor2List($miseId);

        // 顧客情報
        yoyaku::yoyakuKokyaku($yoyakuList);

        // シフト一覧
        $shifutoList = shifuto::shiftList($miseId);

        return view ('kokyaku_list', [
            'mise' => $mise,
            'yoyakuList' => $yoyakuList,
            'error' => session('error'),
            'message' => session('message'),
        ]);
    }

    // 詳細ページ
    public function kokyakudata(Request $request, $miseId, $kokyakuId){

        //権限チェック
        if($ng = $this->levelCheck()) return $ng;

        // 店舗情報
        $mise = mise::detail($miseId);

        // 顧客情報
        $kokyaku = kokyaku::detail($kokyakuId);

        // 過去予約一覧
        $yoyakuList = yoyaku::yoyakuBefor2List($kokyakuId);

        // シフト一覧
        $shifutoList = shifuto::shiftList($miseId);

        // miseidでセラピスト全取得
        $therapistList = therapist::zenTherapistList($miseId);

        // NGセラピスト取得
        // $ng = kokyaku::ngTherapist($kokyakuId, $therapistList);

        // NGセラピスト取得
        $ng = therapist::ngTherapist($kokyakuId, $therapistList);

        // 店、セラピスト名取得
        yoyaku::courseNameList($yoyakuList);

        return view ('kokyaku_data', [
            'mise' => $mise,
            'kokyaku' => $kokyaku,
            'yoyakuList' => $yoyakuList,
            'ng' => $ng,
            'error' => session('error'),
            'message' => session('message'),
        ]);
    }
}