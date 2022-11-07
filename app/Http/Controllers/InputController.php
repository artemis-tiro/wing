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
    public function yoyaku($miseId,$therapistId){

        //権限チェック
        if($ng = $this->levelCheck()) return $ng;

        // 店舗情報
        $mise = mise::detail($miseId);

        // セラピスト情報
        $therapist = therapist::detail($therapistId);

        // 顧客情報
        $kokyakuList = kokyaku::kokyakuList();

        // 入力者情報
        // $inputer = inputer::detail($Id);

        // 予約一覧
        $yoyakuList = yoyaku::yoyakuList($therapistId);

        return view ('input_reservation', [
            'mise' => $mise,
            'therapist' => $therapist,
            'kokyakuList' => $kokyakuList,
            'yoyakuList' => $yoyakuList,
            'error' => session('error'),
        ]);
    }

    //予約新規作成
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
            'tel' => ['required','regex:/^[0-9]+$/i',Rule::unique('kokyaku','tel')->whereNull('deleted_at')],
            'mail' => ['required',Rule::unique('kokyaku','mail')->whereNull('deleted_at')],
        ];
        $message = [
            'start_day.required' => '予約日をしてください。',
            'start_time.required' => '予約時刻を入力してください。',
            'name.required' => 'お客様名を入力してください。',
            'tel.required' => '電話番号を入力してください。',
            'tel.regex' => '半角数字で入力してください。',
            'tel.unique' => 'この電話番号は既に登録されています。',
            'mail.required' => 'メールアドレスを入力してください。',
            'mail.unique' => 'このメールアドレスは既に登録されています。',
        ];
        $validator = Validator::make($request->all(), $rulus, $message);
        if($validator->fails()) return back()->withErrors($validator)->withInput();
        
        // タイムピッカーチェック
        // 今日以降かつ今日から10年以内であるか
        // 文字列でもらって数字にして10年以内なのかみる？

        //kokyaku作成
        $kokyaku = kokyaku::kokyakuCreate($request->input());

        //yoyaku作成
        $yoyaku = yoyaku::yoyakuCreate($request->input(), $miseId, $therapistId, $kokyaku);
        if($yoyaku) return back()->with(['error' => $yoyaku])->withInput();

        if($kokyaku){
            return back()->with(['message' => '予約が完了しました。']);
        }else{
            return back()->with(['error' => '予約に失敗しました。']);
        }

        if($yoyaku){
            return back()->with(['message' => '予約が完了しました。']);
        }else{
            return back()->with(['error' => '予約に失敗しました。']);
        }

        return back();
    }
    
    //給与計算ページ
    public function cal(){

        //権限チェック
        if($ng = $this->levelCheck()) return $ng;

        // 店舗一覧
        // $zenMiseList = mise::zenMiseList(Auth::user()->team);

        return view ('input_cal', [
            'error' => session('error'),
        ]);
    }
}