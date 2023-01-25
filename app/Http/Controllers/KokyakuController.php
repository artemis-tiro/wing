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
        $yoyakuList = yoyaku::yoyakuMiseKokyakuList($miseId);

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
        $yoyakuList = yoyaku::yoyakuMiseLogList($miseId);

        // シフト一覧
        $shifutoList = shifuto::shiftList($miseId);

        // miseidでセラピスト全取得
        $therapistList = therapist::zenTherapistList($miseId);

        // NGセラピスト取得
        // $ng = kokyaku::ngTherapist($kokyakuId, $therapistList);

        // NGセラピスト取得
        // $ng = therapist::ngTherapist($kokyakuId, $therapistList);

        // NGセラピスト名取得
        therapist::getTherapistName($kokyaku);

        // セラピスト名取得
        yoyaku::courseNameList($yoyakuList);

        return view ('kokyaku_data', [
            'mise' => $mise,
            'kokyaku' => $kokyaku,
            'yoyakuList' => $yoyakuList,
            'error' => session('error'),
            'message' => session('message'),
        ]);
    }

    // 名前の変更
    public function namechange($kokyakuId ,Request $request){

        ///////     バリデーション      ///////
        // NULLではない
        $rulus = [
            'name' => ['required'],
        ];
        $message = [
            'name.required' => '名前を入力してください。',
        ];
        $validator = Validator::make($request->all(), $rulus, $message);
        if($validator->fails()) return back()->withErrors($validator)->withInput();

        // DB更新
        $result = kokyaku::kokyakuNameEdit($kokyakuId ,$request);

        if($result){
            return back()->with(['message' => '変更されました。']);
        }else{
            return back()->with(['error' => '変更されませんでした。']);
        }

        return back();

    }

    // 電話番号の変更
    public function telchange($kokyakuId ,Request $request){

        ///////     バリデーション      ///////
        // NULLではない
        // 数字であるか
        $rulus = [
            'tel' => ['numeric'],
        ];
        $message = [
            'tel.numeric' => '数字を入力してください。',
        ];
        $validator = Validator::make($request->all(), $rulus, $message);
        if($validator->fails()) return back()->withErrors($validator)->withInput();

        // DB更新
        $result = kokyaku::kokyakuTelEdit($kokyakuId ,$request);

        if($result){
            return back()->with(['message' => '変更されました。']);
        }else{
            return back()->with(['error' => '変更されませんでした。']);
        }

        return back();

    }

    // メールアドレスの変更
    public function mailchange($kokyakuId ,Request $request){

        // DB更新
        $result = kokyaku::kokyakuMailEdit($kokyakuId ,$request);

        if($result){
            return back()->with(['message' => '変更されました。']);
        }else{
            return back()->with(['error' => '変更されませんでした。']);
        }

        return back();

    }
    
    // NGセラピストの変更
    public function ngchange($kokyakuId ,Request $request){

        // DB更新
        $result = kokyaku::kokyakuNgEdit($kokyakuId ,$request);

        if($result){
            return back()->with(['message' => '変更されました。']);
        }else{
            return back()->with(['error' => '変更されませんでした。']);
        }

        return back();

    }

    // メモ
    public function memochange(Request $request){

        // DB更新
        $result = kokyaku::kokyakuMemoEdit($kokyakuId ,$request);

        if($result){
            return back()->with(['message' => '変更されました。']);
        }else{
            return back()->with(['error' => '変更されませんでした。']);
        }

        return back();

    }
}