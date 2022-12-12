<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator; 
use App\Rules\Hankaku;
use Log;
use Illuminate\Validation\Rule;

use App\Models\User;
use App\Models\Inputer;
use App\Models\Client;
use App\Models\Mise;
use App\Models\Yoyaku;
use App\Models\session;

class AdminController extends Controller{

    //権限チェック
    public function levelCheck($id=null){
        //権限チェック
        if(!in_array(Auth::user()->access_level, [
            //アクセスできる権限
            "tiro",
            "admin",
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

        return view ('admin_top', [
       ]);
    }

    //inputer管理
    public function inputer(){
        //権限チェック
        if($ng = $this->levelCheck()) return $ng;

        //inputer一覧
        $inputerList = user::inputerList(Auth::user()->team);
        yoyaku::addExist($inputerList);
        inputer::addDetail($inputerList);

        return view ('admin_inputer', [
            'inputerList' => $inputerList,
            'error' => session('error'),
       ]);
    }

    //client管理
    public function client(){
        //権限チェック
        if($ng = $this->levelCheck()) return $ng;

        //client一覧
        $clientList = user::clientList(Auth::user()->team);
        client::addDetail($clientList);

        return view ('admin_client', [
            'clientList' => $clientList,
            'error' => session('error'),
            'mes1' => session('mes1'),
       ]);
    }

    //inputer新規作成
    public function newInputer(Request $request){
        //権限チェック
        if($ng = $this->levelCheck()) return $ng;

        //バリデーション
        $rulus = [
            'login_id' => ['required','regex:/^[0-9a-zA-Z\\-\\_]+$/',Rule::unique('users','name')->whereNull('deleted_at')],
            //'login_id' => 'required | regex:/^[a-zA-Z0-9]+$/ | unique:users,name',
            //'pass' => 'required | min:4 | regex:/^[[a-zA-Z0-9]+$/',
            'name' => 'required',
        ];
        $message = [
            'login_id.required' => 'ログインIDを入力してください。',
            'login_id.regex' => 'ログインIDに使えるのはは「半角英数字、ハイフン、アンダースコア」のみです。',
            'login_id.unique' => 'このログインIDは存在します。',
            'pass.required' => 'パスワードを入力してください。',
            'pass.min' => 'パスワードは4文字以上で入力してください。',
            'pass.regex' => 'パスワードは半角英数字で入力して下さい。',
            'name.required' => '名前を入力してください。',
        ];
        $validator = Validator::make($request->all(), $rulus, $message);
        if($validator->fails()) return back()->withErrors($validator)->withInput();

        //user作成
        $result = user::userCreate($request->input(), 'inputer');
        if($result['error']) return back()->with(['error' => $result['error']])->withInput();

        //inputer作成
        $error = inputer::inputerCreate($request->input(), $result['id']);
        if($error) return back()->with(['error' => $error])->withInput();

        return back();
    }

    //inputer削除、停止、再開
    public function editInputer(Request $request, $id, $action){
        //権限チェック
        if($ng = $this->levelCheck()) return $ng;

        switch($action){
            case 'go':
                user::toActive($id);
                break;
            case 'stop':
                user::toStop($id);
                break;
            case 'memo':
                user::memo($id, $request->input('memo'.$id));
                break;
            case 'del':
                user::del($id);
                inputer::del($id);
                break;
            case 'toInputer':
                user::toInputer($id);
                break;
            case 'toAdmin':
                user::toAdmin($id);
                break;
        }

        return back();
    }

    //inputer詳細
    public function inputerDetail($id){
        //権限チェック
        if($ng = $this->levelCheck()) return $ng;

        $inputerDetail = inputer::detail($id);
        return view ('admin_inputer_detail', [
            'inputerDetail' => $inputerDetail,
            'user' => user::find($id),
       ]);
    }



    //client新規作成
    public function newClient(Request $request){
        //権限チェック
        if($ng = $this->levelCheck()) return $ng;

        //バリデーション
        $rulus = [
            'login_id' => ['required','regex:/^[0-9a-zA-Z\\-\\_]+$/',Rule::unique('users','name')->whereNull('deleted_at')],
            //'pass' => 'required | min:4 | regex:/^[[a-zA-Z0-9]+$/',
            'name' => 'required',
        ];
        $message = [
            'login_id.required' => 'ログインIDを入力してください。',
            'login_id.regex' => 'ログインIDに使えるのはは「半角英数字、ハイフン、アンダースコア」のみです。',
            'login_id.unique' => 'このログインIDは存在します。',
            'pass.required' => 'パスワードを入力してください。',
            'pass.min' => 'パスワードは4文字以上で入力してください。',
            'pass.regex' => 'パスワードは半角英数字で入力して下さい。',
            'name.required' => '名前を入力してください。',
        ];
        $validator = Validator::make($request->all(), $rulus, $message);
        if($validator->fails()) return back()->withErrors($validator)->withInput();

        //user作成
        $result = user::userCreate($request->input(), 'client');
        if($result['error']) return back()->with(['error' => $result['error']])->withInput();

        //client作成
        $error = client::clientCreate($request->input(), $result['id']);
        if($error) return back()->with(['error' => $error])->withInput();

        return back();
    }

    //client削除、停止、再開
    public function editClient(Request $request, $id, $action){
        //権限チェック
        if($ng = $this->levelCheck()) return $ng;

        $mes = '';
        switch($action){
            case 'go':
                user::toActive($id);
                $name = client::getName($id);
                $mes = $name.'を再開しました。';
                break;
            case 'stop':
                user::toStop($id);
                $name = client::getName($id);
                $mes = $name.'を停止しました。';
                break;
            case 'memo':
                user::memo($id, $request->input('memo'.$id));
                break;
            case 'del':
                $name = client::getName($id);
                $miseCount = mise::myMiseList($id)->count();
                if($miseCount){
                    $mes = $name.'は店舗の登録があるので削除できません。';
                    break;
                }
                user::del($id);
                client::del($id);
                $mes = $name.'を削除しました。';
                break;
        }

        return back()->with(['mes1' => $mes]);
    }


    //パスワードリセット
    public function passReset(Request $request){
        //権限チェック
        if($ng = $this->levelCheck()) return $ng;

        if(!$request->input()){
            return view ('admin_passreset', [
           ]);
        }

        $loginId = $request->input()['login_id'];
        $id = user::nameToId($loginId);
        $check = user::teamCheck($id, Auth::user()->team);
        $mes = '';

        if(!$id){
            $mes = $loginId.'が見つかりませんでした。';
        
        }elseif(!$check){
            $mes = $loginId.'のパスワードをリセットする権限がありません。';
        
        }elseif($id && $check){
            user::passwordUpdate($id,Hash::make($loginId));
            session::del($id);
            user::logout($id);
            $mes = $loginId.'のパスワードを「'.$loginId.'」にリセットしました。';
        }

        return view ('admin_passreset', [
            'mes' => $mes,
       ]);
    }


}
