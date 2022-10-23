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

class ClientController extends Controller{

    //権限チェック
    public function levelCheck($clientId, $miseId=null, $therapistId=null){
        //権限チェック
        if(!in_array(Auth::user()->access_level, [
            //アクセスできる権限
            "tiro",
            "admin",
            "client",
        ])) return redirect('/');

        //他teamのデータ参照
        if(!user::teamCheck($clientId, Auth::user()->team)) return redirect('/');

        //他オーナーのデータ参照
        if(Auth::user()->access_level=='client'){
            if(Auth::user()->id != $clientId) return redirect('/');
        }

        //アクティブではない
        if(!Auth::user()->active){
            return view ('error', ['mess'=>'アカウントが停止されています。']);
        }

        //teamがアクティブではない
        if(!user::teamActiveCheck(Auth::user()->team)){
            return view ('error', ['mess'=>'teamが停止されています。']);
        }

        //miseが存在しない、クライアントの物ではない
        if($miseId && !mise::authCheck($clientId, $miseId)) return redirect('/');

        //therapistが存在しない、クライアントの物ではない
        if($therapistId && !therapist::authCheck($miseId, $therapistId)) return redirect('/');

        return null;
    }

    //topページ
    public function top($id){
        //権限チェック
        if($ng = $this->levelCheck($id)) return $ng;

        //client詳細
        $client = client::detail($id);

        //マイmise一覧
        $myMiseList = mise::myMiseList($id);

        //room情報添付
        room::addDetail($myMiseList);

        //therapist情報添付
        therapist::addDetail($myMiseList);

        return view ('client', [
            'client' => $client,
            'myMiseList' => $myMiseList,
       ]);
    }

    //mise新規作成
    public function newMise(Request $request, $id){
        //権限チェック
        if($ng = $this->levelCheck($id)) return $ng;

        //バリデーション
        $rulus = [
            'name' => 'required',
            'area' => 'required',
            'tel' => 'required',
            'hp' => 'required',
            'hearing_sheet' => 'required',
        ];
        $message = [
            'name.required' => '店名を入力してください。',
            'area.required' => '地域を入力してください。',
            'tel.required' => '電話番号を入力してください。',
            'hp.required' => 'ホームページを入力してください。',
            'hearing_sheet.required' => 'ヒアリングシートを入力してください。',
        ];
        $validator = Validator::make($request->all(), $rulus, $message);
        if($validator->fails()) return back()->withErrors($validator)->withInput();

        //mise作成
        $errro = mise::miseCreate($request->input(), $id);
        if($errro) return back()->with(['error' => $errro])->withInput();

        return back();
    }

    //mise
    public function mise($clientId, $miseId){
        //権限チェック
        if($ng = $this->levelCheck($clientId, $miseId)) return $ng;

        //client情報
        $client = client::detail($clientId);

        //mise情報
        $mise = mise::detail($miseId);

        //therapistリスト
        $therapistList = therapist::List($miseId);

        return view ('mise', [
            'client' => $client,
            'mise' => $mise,
            'therapistList' => $therapistList,
       ]);
    }

    //thrapist新規作成
    public function newTherapist(Request $request, $clientId, $miseId){
        //権限チェック
        if($ng = $this->levelCheck($clientId, $miseId)) return $ng;

        //バリデーション
        $rulus = [
            'business_name' => ['required', Rule::unique('therapist','business_name')->whereNull('deleted_at')],
            'login_id' => ['required','regex:/^[0-9a-zA-Z\\-\\_]+$/', Rule::unique('users','name')->whereNull('deleted_at')],
            //'pass' => 'required | min:4 | regex:/^[[a-zA-Z0-9]+$/',
        ];
        $message = [
            'business_name.required' => '源氏名を入力してください。',
            'business_name.unique' => '登録されている源氏名です。',
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
        $result = user::userCreate($request->input(), 'therapist');
        if($result['error']) return back()->with(['error' => $result['error']])->withInput();

        //therapist作成
        $error = therapist::therapistCreate($request->input(), $result['id'], $miseId);
        if($error) return back()->with(['error' => $error])->withInput();

        return back();
    }
    
    //therapist
    public function therapist($clientId, $miseId, $therapistId){
        //権限チェック
        if($ng = $this->levelCheck($clientId, $miseId, $therapistId)) return $ng;

        //client情報
        $client = client::detail($clientId);

        //mise情報
        $mise = mise::detail($miseId);

        //therapist情報
        $therapist = therapist::detail($therapistId);

        return view ('mise_therapist', [
            'client' => $client,
            'mise' => $mise,
            'therapist' => $therapist,
       ]);
    }

    //料金システム
    public function price(Request $request, $clientId, $miseId){
        //権限チェック
        if($ng = $this->levelCheck($clientId, $miseId)) return $ng;

        if($request->input()){
            //バリデーション
            $rulus = [
                'business_name' => ['required', Rule::unique('therapist','business_name')->whereNull('deleted_at')],
                'login_id' => ['required','regex:/^[0-9a-zA-Z\\-\\_]+$/', Rule::unique('users','name')->whereNull('deleted_at')],
                //'pass' => 'required | min:4 | regex:/^[[a-zA-Z0-9]+$/',
            ];
            $message = [
                'business_name.required' => '源氏名を入力してください。',
                'business_name.unique' => '登録されている源氏名です。',
                'login_id.required' => 'ログインIDを入力してください。',
                'login_id.regex' => 'ログインIDに使えるのはは「半角英数字、ハイフン、アンダースコア」のみです。',
                'login_id.unique' => 'このログインIDは存在します。',
                'pass.required' => 'パスワードを入力してください。',
                'pass.min' => 'パスワードは4文字以上で入力してください。',
                'pass.regex' => 'パスワードは半角英数字で入力して下さい。',
            ];
            $validator = Validator::make($request->all(), $rulus, $message);
            if($validator->fails()) return back()->withErrors($validator)->withInput();
        }

        //client情報
        $client = client::detail($clientId);

        //mise情報
        $mise = mise::detail($miseId);

        return view ('mise_price', [
            'client' => $client,
            'mise' => $mise,
       ]);
    }
    



}
