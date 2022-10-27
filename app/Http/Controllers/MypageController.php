<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;
use Log;
use App\Models\User;

class MypageController extends Controller{

    // ページの表示
    public function mypage(){

        // テスト用
        Log::info('マイページにアクセス');


        return view ('mypage', [
            'testKnsu'=>'これはtestです。',
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
        if(!$result) return back()->with(['error' => 'パスワードが違います。'])->withInput();

        // パスワードを変更
        $result = user::passwordUpdate(Auth::user()->id,Hash::make($request->newpassword));
        if($result){
            return back()->with(['message' => 'パスワードが変更されました。']);
        }else{
            return back()->with(['error' => 'パスワードが変更されませんでした。']);
        }

        return back();

    }

}
