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

class InputController extends Controller{

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

        // 店舗一覧
        $zenMiseList = mise::zenMiseList(Auth::user()->team);

        return view ('input_top', [
            'zenMiseList' => $zenMiseList,
            'error' => session('error'),
       ]);
    }

    // セラピスト一覧ページ
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

    // 予約一覧ページ
    public function yoyaku(Request $request, $miseId,$therapistId){

        $kokyakuData = null;
        $formflag = 0;
        $inputTel = $request->input('telsearch');

        // 権限チェック
        if($ng = $this->levelCheck()) return $ng;

        // 店舗情報
        $mise = mise::detail($miseId);

        // セラピスト情報
        $therapist = therapist::detail($therapistId);

        // 顧客情報
        $kokyakuList = kokyaku::kokyakuList();

        // 予約一覧
        $yoyakuList = yoyaku::yoyakuList($therapistId, date('Y-m-d'));

        // 先行予約一覧
        $yoyakuAfterList = yoyaku::yoyakuAfterList($therapistId, date('Y-m-d'));

        // 電話番号検索
        $telsearch = kokyaku::telSearch($request->input('telsearch'));

        // オプション有無確認
        $optionfind = yoyaku::optionFind($yoyakuList);

        // 予約コース
        yoyaku::courseNameList($yoyakuList);
        yoyaku::courseNameList($yoyakuAfterList);

        // 予約フォーム
        $courseList = price::courseList($miseId,$therapist->back_name);
        $visitList = price::visitList($miseId,$therapist->back_name);
        $shimeiList = price::shimeiList($miseId,$therapist->back_name);
        $optionList = price::optionList($miseId,$therapist->back_name);
        $waribikiAutoList = price::waribikiAutoList($miseId,$therapist->back_name);
        $waribikiList = price::waribikiList($miseId,$therapist->back_name);
        $claimList = price::claimList($miseId,$therapist->back_name);
        $getOption = price::getOption($miseId,$therapist->back_name);
        $getRepeater = price::getRepeater($miseId,$therapist->back_name);
        $enchoList = price::enchoList($miseId,$therapist->back_name);


        log::info($enchoList);

        if($request->input('telsearch')){
            $kokyakuData = $telsearch;
            $formflag = 1;
        }

        return view ('input_reservation', [
            'mise' => $mise,
            'therapist' => $therapist,
            'kokyakuList' => $kokyakuList,
            'yoyakuList' => $yoyakuList,
            'yoyakuAfterList' => $yoyakuAfterList,
            'kokyakuData' => $kokyakuData,
            'formflag' => $formflag,
            'optionfind' => $optionfind,
            'inputTel' => $inputTel,
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

    // 予約新規作成
    public function reservation(Request $request, $miseId, $therapistId){
        ///////     バリデーション      ///////
        // startday  : NULLではない、今日以降かつ今日から10年を超えてない
        // starttime : NULLではない
        // name      : NULLではない
        // tel       : NULLではない、半角数字であるか
        // mail      : NULLではない、メールであるか
        // visit     : 
        // plan      : 
        // time      : 
        // autosell  : 
        // shimei    : 
        // option    : 
        // discount  : 
        // memo      : 
        $rulus = [
            'start_day' => ['required'],
            'start_time' => ['required'],
            'name' => ['required'],
            'tel' => ['required','regex:/^[0-9]+$/i','min:10','max:11'],
        ];
        $message = [
            'start_day.required' => '予約日をしてください。',
            'start_time.required' => '予約時刻を入力してください。',
            'name.required' => 'お客様名を入力してください。',
            'tel.required' => '電話番号を入力してください。',
            'tel.regex' => '電話番号は半角数字で入力してください。',
            'tel.min' => '電話番号は10文字または11文字でで入力してください。',
            'tel.max' => '電話番号は10文字または11文字でで入力してください。',
        ];
        $validator = Validator::make($request->all(), $rulus, $message);
        if($validator->fails()) return back()->withErrors($validator)->withInput();

        $kokyakuId = kokyaku::telsearch($request->input(['tel']));

        // telserchして値が存在していないならcreate
        if($kokyakuId){
            // kokyaku更新
            $kokyaku = kokyaku::kokyakuUpdate($request->input(),$kokyakuId->id);
        }else{
            // kokyaku作成
            $kokyaku = kokyaku::kokyakuCreate($request->input());
        }

        // yoyaku作成
        $yoyaku = yoyaku::yoyakuCreate($request->input(), $miseId, $therapistId, $kokyaku);
        // if($yoyaku) return back()->with(['error' => $yoyaku])->withInput();

        if($yoyaku){
            return back()->with(['message' => '予約が完了しました。']);
        }else{
            return back()->with(['error' => '予約に失敗しました。']);
        }

        return back();
    }
    
    // 給与計算ページ
    public function kyuryo($miseId,$therapistId){

        // 権限チェック
        if($ng = $this->levelCheck()) return $ng;

        // 店舗情報
        $mise = mise::detail($miseId);

        // セラピスト情報
        $therapist = therapist::detail($therapistId);

        // 顧客情報
        $kokyakuList = kokyaku::kokyakuList();

        // 予約一覧
        $yoyakuList = yoyaku::yoyakuList($therapistId, date('Y-m-d'));

        // 調整金予約一覧
        $adjustList = kyuryo::adjustList($miseId, $therapistId, date('Y-m-d'));

        // お茶情報
        $otyaList = price::otyaList($miseId,$therapist->back_name);

        // 予約数カウント
        $yoyakuListCnt = yoyaku::yoyakuListCnt($therapistId, date('Y-m-d'));
        
        // 予約コース
        yoyaku::courseNameList($yoyakuList);

        // 予約コース総額　＋　調整金
        kyuryo::dailyPriceCul($yoyakuList, $adjustList);

        return view ('input_kyuryo', [
            'mise' => $mise,
            'therapist' => $therapist,
            'kokyakuList' => $kokyakuList,
            'yoyakuList' => $yoyakuList,
            'adjustList' => $adjustList,
            'otyaList' => $otyaList,
            'yoyakuListCnt' => $yoyakuListCnt,
            'error' => session('error'),
        ]);
    }

    // 給与計算
    public function calculation(Request $request, $miseId, $therapistId){
        ///////     バリデーション      ///////
        // pouch        : 半角数字であるか
        // adjust_name1 : 
        // adjust_many1 : 半角数字であるか
        // adjust_name2 : 
        // adjust_many2 : 半角数字であるか
        // adjust_name3 : 
        // adjust_many3 : 半角数字であるか
        $rulus = [
            // 'pouch' => ['required', 'regex:/^[0-9]+$/i'],
            'adjust_many1' => ['nullable', 'regex:/^[0-9]+$/i'],
            'adjust_many2' => ['nullable', 'regex:/^[0-9]+$/i'],
            'adjust_many3' => ['nullable', 'regex:/^[0-9]+$/i'],
        ];
        $message = [
            // 'pouch.required' => 'ポーチ金額を入力してください。',
            // 'pouch.regex' => '半角数字で入力してください。',
            'adjust_many1.regex' => '半角数字で入力してください。',
            'adjust_many2.regex' => '半角数字で入力してください。',
            'adjust_many3.regex' => '半角数字で入力してください。',
        ];
        $validator = Validator::make($request->all(), $rulus, $message);
        if($validator->fails()) return back()->withErrors($validator)->withInput();

        // kyuryo作成
        $kyuryo = kyuryo::kyuryoCreate($request->input(), $miseId, $therapistId, date('Y-m-d'));
        if($kyuryo) return back()->with(['error' => $kyuryo])->withInput();

        return back();
    }

    // 予約削除
    public function yoyakudel(Request $request, $miseId, $therapistId, $id){

        $yoyaku = yoyaku::find($id);
        if($yoyaku) $yoyaku->delete();
        
        return back();
    }

    // 予約延長
    public function yoyakuencho(Request $request, $miseId, $therapistId, $id){

        // DB更新
        $result = yoyaku::yoyakuencho($request,$id);

        if($result){
            return back()->with(['message' => '予約が延長されました。']);
        }else{
            return back()->with(['error' => '予約が延長されませんでした。']);
        }

        return back();
    }

    // 予約編集
    public function yoyakuedit(Request $request, $miseId, $therapistId, $id){

        // DB更新
        $result = yoyaku::yoyakuedit($request,$id);

        if($result){
            return back()->with(['message' => '予約が変更されました。']);
        }else{
            return back()->with(['error' => '予約が変更されませんでした。']);
        }

        return back();
    }

    // 予約編集(オプション)
    public function yoyakuoption(Request $request, $miseId, $therapistId, $id){

        // DB更新
        $result = yoyaku::yoyakuoption($request,$id);

        if($result){
            return back()->with(['message' => 'オプションが変更されました。']);
        }else{
            return back()->with(['error' => 'オプションが変更されませんでした。']);
        }

        return back();
    }
}