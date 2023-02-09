<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;
use Log;
use App\Models\User;
use App\Models\Client;
use App\Models\Inputer;
use App\Models\Therapist;

class MypageController extends Controller{

    // ページの表示
    public function mypage(){

        // アクセス情報取得
        $accessLevel = Auth::user()->access_level;
        Log::channel('daily')->info('');

        switch ($accessLevel) {
            case 'therapist':
                $mydeta = therapist::detail(Auth::user()->id);
                break;
            case 'client':
                $mydeta = client::detail(Auth::user()->id);
                break;
            case 'inputer':
                $mydeta = inputer::detail(Auth::user()->id);
                break;
            case 'admin':
                $mydeta = inputer::detail(Auth::user()->id);
                break;
            default;
                $mydeta = user::detail(Auth::user()->id);
        }

        return view ('mypage', [
            'accessLevel' => $accessLevel,
            'mydeta' => $mydeta,
            'error' => session('error'),
            'message' => session('message'),
       ]);
    }

    // パスワードの変更
    public function newpassword(Request $request){
        
        ///////     バリデーション      ///////
        // NULLではない
        // 3文字以下ではない
        // 半角英数字であるか
        // 確認パスワードが同じか
        $rulus = [
            'newpassword' => ['required' , 'min:4' , 'regex:/^[[a-zA-Z0-9-_]+$/'],
            'checkpassword' => ['required' , 'same:newpassword'],
        ];
        $message = [
            'newpassword.required' => 'パスワードを入力してください。',
            'newpassword.min' => 'パスワードは:min以上の半角英数字を入力してください。',
            'newpassword.regex' => '半角英数字で入力してください。',
            'checkpassword.required' => 'パスワード(確認用)を入力してください。',
            'checkpassword.same' => 'パスワードとパスワード確認用が一致しません。',
        ];
        $validator = Validator::make($request->all(), $rulus, $message);
        if($validator->fails()) return back()->withErrors($validator)->withInput();

        // 現在設定してるパスワードと同じか
        // Hashチェック
        $result = Hash::check($request->nowpassword, Auth::user()->password);
        if(!$result) return back()->with(['error' => 'パスワードが違います。']);

        // パスワードを変更
        $result = user::passwordUpdate(Auth::user()->id,Hash::make($request->newpassword));
        if($result){
            return back()->with(['message' => 'パスワードが変更されました。']);
        }else{
            return back()->with(['error' => 'パスワードが変更されませんでした。']);
        }

        return back();

    }

    // 名前の変更
    public function namechange(Request $request){
        
        // アクセス情報取得
        $accessLevel = Auth::user()->access_level;

        ///////     バリデーション      ///////
        // NULLではない
        // ひらがなであるか
        $rulus = [
            'name' => ['required'],
            'kana' => ['required' , 'regex:/^[ぁ-ゞ]+$/u'],
        ];
        $message = [
            'name.required' => '名前を入力してください。',
            'kana.required' => '読み仮名(ひらがな)を入力してください。',
            'kana.regex' => 'ひらがなで入力してください',
        ];
        $validator = Validator::make($request->all(), $rulus, $message);
        if($validator->fails()) return back()->withErrors($validator)->withInput();

        // DB更新
        switch ($accessLevel) {
            case 'therapist':
                $result = therapist::therapistNameEdit(Auth::user()->id,$request);
                break;
            case 'client':
                $result = client::clientNameEdit(Auth::user()->id,$request);
                break;
            case 'inputer':
                $result = inputer::inputerNameEdit(Auth::user()->id,$request);
                break;
            case 'admin':
                $result = inputer::inputerNameEdit(Auth::user()->id,$request);
                break;
        }

        if($result){
            return back()->with(['message' => '変更されました。']);
        }else{
            return back()->with(['error' => '変更されませんでした。']);
        }

        return back();

    }

    // 住所の変更
    public function addresschange(Request $request){
        
        // アクセス情報取得
        $accessLevel = Auth::user()->access_level;

        // DB更新
        switch ($accessLevel) {
            case 'therapist':
                $result = therapist::therapistAddressEdit(Auth::user()->id,$request);
                break;
            case 'client':
                $result = client::clientAddressEdit(Auth::user()->id,$request);
                break;
            case 'inputer':
                $result = inputer::inputerAddressEdit(Auth::user()->id,$request);
                break;
            case 'admin':
                $result = inputer::inputerAddressEdit(Auth::user()->id,$request);
                break;
        }

        if($result){
            return back()->with(['message' => '変更されました。']);
        }else{
            return back()->with(['error' => '変更されませんでした。']);
        }

        return back();

    }

    // 電話番号の変更
    public function telchange(Request $request){

        // アクセス情報取得
        $accessLevel = Auth::user()->access_level;

        ///////     バリデーション      ///////
        // NULLではない
        // ひらがなであるか
        $rulus = [
            'tel' => ['numeric'],
        ];
        $message = [
            'tel.numeric' => '数字を入力してください。',
        ];
        $validator = Validator::make($request->all(), $rulus, $message);
        if($validator->fails()) return back()->withErrors($validator)->withInput();

        // DB更新
        switch ($accessLevel) {
            case 'therapist':
                $result = therapist::therapistTelEdit(Auth::user()->id,$request);
                break;
            case 'client':
                $result = client::clientTelEdit(Auth::user()->id,$request);
                break;
            case 'inputer':
                $result = inputer::inputerTelEdit(Auth::user()->id,$request);
                break;
            case 'admin':
                $result = inputer::inputerTelEdit(Auth::user()->id,$request);
                break;
        }

        if($result){
            return back()->with(['message' => '変更されました。']);
        }else{
            return back()->with(['error' => '変更されませんでした。']);
        }

        return back();

    }

    // メールアドレスの変更
    public function mailchange(Request $request){

        // アクセス情報取得
        $accessLevel = Auth::user()->access_level;

        // DB更新
        switch ($accessLevel) {
            case 'therapist':
                $result = therapist::therapistMailEdit(Auth::user()->id,$request);
                break;
            case 'client':
                $result = client::clientMailEdit(Auth::user()->id,$request);
                break;
            case 'inputer':
                $result = inputer::inputerMailEdit(Auth::user()->id,$request);
                break;
            case 'admin':
                $result = inputer::inputerMailEdit(Auth::user()->id,$request);
                break;
        }

        if($result){
            return back()->with(['message' => '変更されました。']);
        }else{
            return back()->with(['error' => '変更されませんでした。']);
        }

        return back();

    }

    // 生年月日の変更
    public function birthdaychange(Request $request){

        // アクセス情報取得
        $accessLevel = Auth::user()->access_level;

        // DB更新
        switch ($accessLevel) {
            case 'therapist':
                $result = therapist::therapistBirthdayEdit(Auth::user()->id,$request);
                break;
            case 'client':
                $result = client::clientBirthdayEdit(Auth::user()->id,$request);
                break;
            case 'inputer':
                $result = inputer::inputerBirthdayEdit(Auth::user()->id,$request);
                break;
            case 'admin':
                $result = inputer::inputerBirthdayEdit(Auth::user()->id,$request);
                break;
        }

        if($result){
            return back()->with(['message' => '変更されました。']);
        }else{
            return back()->with(['error' => '変更されませんでした。']);
        }

        return back();

    }

    // 営業プロフィールの変更
    public function profilechange(Request $request){

        // DB更新
        $result = therapist::therapistProfileEdit(Auth::user()->id,$request);

        if($result){
            return back()->with(['message' => '変更されました。']);
        }else{
            return back()->with(['error' => '変更されませんでした。']);
        }

        return back();

    }
}
