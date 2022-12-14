<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use Log;
use Illuminate\Validation\Rule;

use App\Models\User;
use App\Models\Inputer;

class TiroController extends Controller{

    //権限チェック
    public function levelCheck(){
        Log::channel('daily')->info('');

        //権限チェック
        if(!in_array(Auth::user()->access_level, [
            //アクセスできる権限
            "tiro",
        ])) return redirect('/');

        //アクティブではない
        if(!Auth::user()->active){
            return view ('error', ['mess'=>'アカウントが停止されています。']);
        }

        return null;

    }

    //topページ
    public function top(){
        //権限チェック
        if($ng = $this->levelCheck()) return $ng;

        //admin一覧
        $teamList = user::teamList();

        return view ('tiro_top', [
            'teamList' => $teamList,
            'error' => session('message'),
       ]);
    }

    //adminチーム新規作成
    public function newAdmin(Request $request){
        //権限チェック
        if($ng = $this->levelCheck()) return $ng;

        //バリデーション
        $rulus = [
            'login_id' => ['required','regex:/^[0-9a-zA-Z\\-\\_]+$/',Rule::unique('users','name')->whereNull('deleted_at')],
            //'pass' => 'required | min:4 | regex:/^[[a-zA-Z0-9]+$/',
            'memo' => '',
        ];
        $message = [
            'login_id.required' => 'ログインIDを入力してください。',
            'login_id.regex' => 'ログインIDに使えるのはは「半角英数字、ハイフン、アンダースコア」のみです。',
            'login_id.unique' => 'このログインIDは存在します。',
            'pass.required' => 'パスワードを入力してください。',
            'pass.min' => 'パスワードは4文字以上で入力してください。',
            'pass.regex' => 'パスワードは半角英数字で入力して下さい。',
        ];
        $validator = Validator::make($request->all(), $rulus, $message);
        if($validator->fails()) return back()->withErrors($validator)->withInput();

        //user作成
        $result = user::userCreate($request->input(), 'admin');
        if($result['error']) return back()->with(['message' => $result['error']])->withInput();

        //team作成
        $id = $result['id'];
        $result = user::teamCreate($id);

        //inputer作成
        inputer::inputerCreate($request->input(), $id);
        // if($error) return back()->with(['error' => $error])->withInput();

        return back();
    }

    //admin削除、停止、再開、メモ
    public function editAdmin(Request $request, $id, $action){
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
                break;
        }

        return back();
    }

    //なりすまし
    public function nari($team){
        //権限チェック
        if($ng = $this->levelCheck()) return $ng;

        user::nari($team);
        return redirect('/admin');
    }


}
