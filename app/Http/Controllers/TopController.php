<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Log;
use Carbon\Carbon;
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
                return redirect('/c/'.Auth::user()->id);
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

    //work
    public static function work($action=null){
        $date = date('Y-m-d');
        $fileName = 'log-'.$date.'.txt';
        $matomeFile = 'log-'.$date.'matome.txt';
        $needle = '['.$date;
        // Log::channel('daily')->info($fileName);
        $path = storage_path("../resources/views/work/".$fileName);
        $data = \File::get($path);
        $array = explode("\n", $data);
        $start = null;
        $restart = null;
        $end = null;
        $befor = null;
        $lastGo = 0;
        $m = 0;
        $t = $date."\n\n";
        foreach($array as $a){
            $col = explode(" ", $a);
            if($col[0] == $needle){
                $time = new Carbon(str_replace("[", "", explode("] ", $a)[0]));
                if(!$start) $start = $time;
                if(!$restart) $restart = $time;
                if(!$befor) $befor = $time;
                if(!$lastGo) $lastGo = 1;
                $diff = $befor->diffInMinutes($time);
                if($diff > 30){
                    $s = $restart->diffInMinutes($befor);
                    $m += $s;
                    $t .= $restart->hour.':'.$restart->minute.'-'.$befor->hour.':'.$befor->minute.' '.$s."分\n";
                    $restart = $time;
                }
                $befor = $time;
                $end = $time;
            }
        }
        if($lastGo){
            $s = $restart->diffInMinutes($befor);
            $m += $s;
            $t .= $restart->hour.':'.$restart->minute.'-'.$befor->hour.':'.$befor->minute.' '.$s."分\n";
        }
        $h = floor($m/60);
        $m = $m%60;
        $t .= "\n稼働時間合計\n【".$h."時間".$m."分】";
        $path = storage_path("../resources/views/work/".$matomeFile);
        // $data = \File::exists($path)? \File::get($path): '';
        \File::delete($path);
        \File::append($path, $t);
        $count=3;
        if($action == 'line'){
            return $t;
            $files = \File::files(storage_path("../resources/views/work/"));
                return var_dump($files);
            foreach(array_reverse($files) as $f){
                return var_dump($f->pathName);
                if(!strpos($f['fileName'], $date) && strpos($f->fileName, 'matome')){
                    $data = \File::get($f->pathName);
                    $t .= $data;
                    $count--;
                    if(!$count) brake;
                }
            }
            return $t;
        }
        return view ('test', [
            't'=>$t
       ]);
    }

    //line
    public function line(){
        $data = $this->work('line');
        return view ('test', [
            't'=>$data
        ]);

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
