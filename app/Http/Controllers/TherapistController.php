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

    // 予約一覧(top)ページ
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
        $yoyakuAfterList = yoyaku::yoyakuAfterList(Auth::user()->id, date('Y-m-d H:i:s'));

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

    // 過去予約一覧ページ
    public function befor(Request $request, $miseId,$therapistId){

        $kokyakuData = null;
        $card = 0;
        $shift = '';
        $dailyPrice = 0;
        $day = $request->input('day');
        $accesslevel = Auth::user()->access_level;

        // 権限チェック
        if($ng = $this->levelCheck()) return $ng;

        // 店舗情報
        $mise = mise::detail($miseId);

        // セラピスト情報
        $therapist = therapist::detail($therapistId);

        // 顧客情報
        $kokyakuList = kokyaku::kokyakuList();

        // 過去予約一覧
        $yoyakuList = yoyaku::yoyakuBeforList2($therapistId, $request->input('day'));

        // 調整金予約一覧
        $adjustList = kyuryo::adjustList($miseId, $therapistId, $request->input('day'));

        // シフト取得
        $shift = shifuto::getTime($therapistId, $request->input('day'));

        // 日付選択していれば
        if($request->input('day')){
            $card = 1;
            if(count($yoyakuList) === 0) $card = 2;
            
            // 予約コース総額　＋　調整金
            $dailyPrice =kyuryo::dailyPriceCul($yoyakuList, $adjustList);
        }else{
            // シフト一覧
            $shifutotList = shifuto::getshiftList($miseId, $therapistId, date('Y-m-d'));

            // 過去予約一覧
            $yoyakuList = yoyaku::yoyakuBeforList3($therapistId, date('Y-m-d'));

            foreach($yoyakuList as $y){
                $day = $y->visit_day;

                $adjustList = kyuryo::adjustList($miseId, $therapistId, $day);
            }
        }

        // 予約コース
        yoyaku::courseNameList($yoyakuList);

        return view ('therapist_befor', [
            'mise' => $mise,
            'therapist' => $therapist,
            'accesslevel' => $accesslevel,
            'shift' => $shift,
            'kokyakuList' => $kokyakuList,
            'yoyakuList' => $yoyakuList,
            'adjustList' => $adjustList,
            'card' => $card,
            'day' => $day,
            'dailyPrice' => $dailyPrice,
            'message' => session('message'),
            'error' => session('error'),
        ]);
    }

    // 給与計算ページ
    public function kyuryo($miseId,$therapistId){

        $otyacheck;

        // 権限チェック
        if($ng = $this->levelCheck()) return $ng;

        // 店舗情報
        $mise = mise::detail($miseId);

        // セラピスト情報
        $therapist = therapist::detail($therapistId);

        // 顧客情報
        $kokyakuList = kokyaku::kokyakuList();

        // 予約一覧
        $yoyakuList = yoyaku::yoyakuList($therapistId, date('Y-m-d H:i:s'));

        // 調整金予約一覧
        $adjustList = kyuryo::adjustList($miseId, $therapistId, date('Y-m-d'));

        // お茶情報
        $otyaList = price::otyaList($miseId,$therapist->back_name);

        // 選択されたお茶
        $otyacheck = kyuryo::otyaList($miseId, $therapistId, date('Y-m-d'));
        
        // 予約コース
        yoyaku::courseNameList($yoyakuList);

        if(count($yoyakuList) > 0){
            // 予約コース総額　＋　調整金
            kyuryo::dailyPriceCul($yoyakuList, $adjustList);
        }

        return view ('therapist_kyuryo', [
            'mise' => $mise,
            'therapist' => $therapist,
            'kokyakuList' => $kokyakuList,
            'yoyakuList' => $yoyakuList,
            'adjustList' => $adjustList,
            'otyaList' => $otyaList,
            'otyacheck' => $otyacheck,
            'message' => session('message'),
            'error' => session('error'),
        ]);
    }

    // 給与計算
    public function calculation(Request $request, $miseId, $therapistId){
        ///////     バリデーション      ///////
        // adjust_name1 : 
        // adjust_many1 : 半角数字であるか
        // adjust_name2 : 
        // adjust_many2 : 半角数字であるか
        // adjust_name3 : 
        // adjust_many3 : 半角数字であるか
        $rulus = [
            'adjust_many1' => ['nullable', 'regex:/^[0-9]+$/i'],
            'adjust_many2' => ['nullable', 'regex:/^[0-9]+$/i'],
            'adjust_many3' => ['nullable', 'regex:/^[0-9]+$/i'],
        ];
        $message = [
            'adjust_many1.regex' => '半角数字で入力してください。',
            'adjust_many2.regex' => '半角数字で入力してください。',
            'adjust_many3.regex' => '半角数字で入力してください。',
        ];
        $validator = Validator::make($request->all(), $rulus, $message);
        if($validator->fails()) return back()->withErrors($validator)->withInput();

        // kyuryo作成
        $kyuryo = kyuryo::kyuryoCreate($request->input(), $miseId, $therapistId, date('Y-m-d'));

        if($kyuryo){
            return back()->with(['message' => '給与計算ができました。']);
        }else{
            return back()->with(['error' => '給与計算ができません。']);
        }

        return back();
    }

    // 給与計算
    public function calculation2(Request $request, $miseId, $therapistId){
        // kyuryo作成
        $kyuryo = kyuryo::kyuryoCreate2($request->input(), $miseId, $therapistId, date('Y-m-d'));

        if($kyuryo){
            return back()->with(['message' => '給与計算ができました。']);
        }else{
            return back()->with(['error' => '給与計算ができません。']);
        }

        return back();
    }
}