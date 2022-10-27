<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Log;
use App\Models\User;

class TopController extends Controller{

    // login後最初の処理
    public function route(){

        switch(Auth::user()->access_level){
            case 'tiro':
                return redirect('/tiro');
            case 'admin':
                return redirect('/admin');
            case 'inputer':
                return redirect('/i');
            case 'client':
                return redirect('/c');
            case 'therapist':
                return redirect('/t');
        }

        //どの権限も持ってなかったらログアウト
        return redirect('/logout');
    }

    // logout
    public function logout(){
        Auth::guard('web')->logout();
        return redirect('/login');
    }

    // log
    //config/logging.phpのchannels['single['path']']がログの出力先なので書き換える
    public function log(Request $request){
        $path = storage_path("../resources/views/log.blade.php");
        if($request->input('action')=='del'){
            \File::delete($path);
            //\File::append($path, "　　<a href='".url('log?action=del')."'>ログ削除</a>　　<a href='".url('log')."'>更新</a>　　<a href='".url('tiro')."'>tiroトップ</a>　　\n\n");
            //\File::append($path, "");
            //Log::info('log削除しました');//★★★log★★★
            return back();
        }
        return nl2br(view('log'));
    }

    // mypage
    public function mypage(){
        return view ('mypage', [
       ]);
    }

    // mypage
    public function test(){
        return view ('test', [
       ]);
    }



/***** ticket ************************
本当に削除しますか？のモーダル
セラピストログイン
アカウント新規作成後に〇〇が新規作成されましたのメッセージ
ネクストアクションのナビ（料金システムを登録して下さい、給料システムを設定してください。）
ヒアリングシートもフォームで入力してもらう。
セラピストもログインできる。
シフト管理。
Twitter自動投稿。
メンエスランキング等自動更新。

*****************************/

}
