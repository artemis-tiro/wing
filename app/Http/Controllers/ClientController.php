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
use App\Models\Price;
use App\Models\Back;

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
        if($miseId && $therapistId && !therapist::authCheck($miseId, $therapistId)) return redirect('/');

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
            'mes1' => session('mes1'),
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

        //backリスト
        $backList = price::list($miseId);
        $backList2 = price::list2($miseId);

        //price作成確認
        $courseExist = price::courseExist($miseId);

        // 電話番号フォーマット
        $phone = user::format_phone_number($mise->tel);

        return view ('mise', [
            'client' => $client,
            'mise' => $mise,
            'phone' => $phone,
            'therapistList' => $therapistList,
            'backList' => $backList,
            'backList2' => $backList2,
            'courseExist' => $courseExist,
            'mes1' => session('mes1'),
            'mes4' => session('mes4'),
            'mes6' => session('mes6'),
            'mes7' => session('mes7'),
            'newBackMessage' => session('newBackMessage'),
       ]);
    }

    //mise編集
    public function miseEdit($clientId, $miseId, $action){
        //権限チェック
        if($ng = $this->levelCheck($clientId, $miseId)) return $ng;

        $mes = '';
        switch($action){
            case 'go':
                $mes = mise::toActive($miseId);
                break;
            case 'stop':
                $mes = mise::toStop($miseId);
                break;
            case 'del':
                $mes = mise::del($miseId);
                break;
        }

        return back()->with(['mes1' => $mes]);
    }

    //thrapist新規作成
    public function newTherapist(Request $request, $clientId, $miseId){
        //権限チェック
        if($ng = $this->levelCheck($clientId, $miseId)) return $ng;
        $id = isset($request->input()['edit'])?$request->input()['edit']:null;

        //バリデーション
        $rulus = [
            'business_name' => ['required', Rule::unique('therapist','business_name')->whereNull('deleted_at')->where('mise_id', $miseId)],
            'login_id' => ['required','regex:/^[0-9a-zA-Z\\-\\_]+$/', Rule::unique('users','name')->whereNull('deleted_at')],
            'age' => ['nullable', 'regex:/^|([0-9][0-9]|[0-9])$/'],
            'cup' => ['nullable', 'regex:/^|[A-Za-z]$/'],
            'tall' => ['nullable', 'regex:/^|([12][0-9][0-9])$/'],
            //'pass' => 'required | min:4 | regex:/^[[a-zA-Z0-9]+$/',
        ];
        if($id){
            $rulus = [
                'age' => ['nullable', 'regex:/^|([0-9][0-9]|[0-9])$/'],
                'cup' => ['nullable', 'regex:/^|[A-Za-z]$/'],
                'tall' => ['nullable', 'regex:/^|([12][0-9][0-9])$/'],
            ];
        }
        $message = [
            'business_name.required' => '源氏名を入力してください。',
            'business_name.unique' => '登録されている源氏名です。',
            'login_id.required' => 'ログインIDを入力してください。',
            'login_id.regex' => 'ログインIDに使えるのはは「半角英数字、ハイフン、アンダースコア」のみです。',
            'login_id.unique' => 'このログインIDは使われています。',
            'pass.required' => 'パスワードを入力してください。',
            'pass.min' => 'パスワードは4文字以上で入力してください。',
            'pass.regex' => 'パスワードは半角英数字で入力して下さい。',
            'age.regex' => '年齢は0～99で入力して下さい。',
            'cup.regex' => 'カップ数はアルファベット一文字で入力して下さい。',
            'tall.regex' => '身長は100～299の間で入力して下さい。',
        ];
        $validator = Validator::make($request->all(), $rulus, $message);
        if($validator->fails()) return back()->withErrors($validator)->withInput();

        if($id){
            therapist::therapistEdit($request->input(), $id);
            return back()->with(['mes1' => 'プロフィールを編集しました。']);
        }

        //user作成
        $result = user::userCreate($request->input(), 'therapist');
        if($result['error']) return back()->with(['error' => $result['error']])->withInput();

        //therapist作成
        $error = therapist::therapistCreate($request->input(), $result['id'], $miseId);
        if($error) return back()->with(['error' => $error])->withInput();

        return back()->with(['mes1' => '「'.$request->input()['business_name'].'」を作成しました。']);
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

    //therapistステータス変更
    public function therapistEdit(Request $request, $clientId, $miseId, $therapistId, $action){
        //権限チェック
        if($ng = $this->levelCheck($clientId, $miseId, $therapistId)) return $ng;

        $mes = '';
        switch($action){
            case 'go':
                user::toActive($therapistId);
                $name = therapist::getName($therapistId);
                $mes = '「'.$name.'」のアカウントを再開しました。';
                break;
            case 'stop':
                user::toStop($therapistId);
                $name = therapist::getName($therapistId);
                $mes = '「'.$name.'」のアカウントを停止しました。';
                break;
            case 'backchange':
                $mes = therapist::backChange($therapistId, $request->input()["back_name"]);
                break;
            case 'del':
                $mes = therapist::del($therapistId);
                break;
        }

        return back()->with(['mes1' => $mes]);
    }

    //料金システム
    public function price($clientId, $miseId, $backName){
        //権限チェック
        if($ng = $this->levelCheck($clientId, $miseId)) return $ng;

        //client情報
        $client = client::detail($clientId);

        //mise情報
        $mise = mise::detail($miseId);

        //price情報
        $formData = price::formData($miseId, $backName);

        return view ('mise_price', [
            'client' => $client,
            'mise' => $mise,
            'formData' => $formData,
            'backName' => $backName,
            'message' => session('message'),
       ]);
    }
    
    //料金システム編集
    public function priceEdit(Request $request, $clientId, $miseId){
        //権限チェック
        if($ng = $this->levelCheck($clientId, $miseId)) return $ng;

        if($request->input()){
        //     //バリデーション
        //     $rulus = [
        //         'business_name' => ['required', Rule::unique('therapist','business_name')->whereNull('deleted_at')],
        //         'login_id' => ['required','regex:/^[0-9a-zA-Z\\-\\_]+$/', Rule::unique('users','name')->whereNull('deleted_at')],
        //         //'pass' => 'required | min:4 | regex:/^[[a-zA-Z0-9]+$/',
        //     ];
        //     $message = [
        //         'business_name.required' => '源氏名を入力してください。',
        //         'business_name.unique' => '登録されている源氏名です。',
        //         'login_id.required' => 'ログインIDを入力してください。',
        //         'login_id.regex' => 'ログインIDに使えるのはは「半角英数字、ハイフン、アンダースコア」のみです。',
        //         'login_id.unique' => 'このログインIDは存在します。',
        //         'pass.required' => 'パスワードを入力してください。',
        //         'pass.min' => 'パスワードは4文字以上で入力してください。',
        //         'pass.regex' => 'パスワードは半角英数字で入力して下さい。',
        //     ];
        //     $validator = Validator::make($request->all(), $rulus, $message);
        //     if($validator->fails()) return back()->withErrors($validator)->withInput();

            $input = $request->input();
            $backName = $input['backName'];

            price::del($miseId, $backName); //今あるレコード削除

            $count = [];

            foreach($input as $key => $data){

                //コース料金
                if(preg_match("/_name/", $key)){
                    if(empty($data)) continue;

                    // price
                    $keyPrice = str_replace('name', 'price', $key);
                    // if(is_null($input[$keyPrice])) continue;
                    // $price = $input[$keyPrice];
                    $price = empty($input[$keyPrice])? 0: $input[$keyPrice];

                    // back
                    $keyBack = str_replace('name', 'back', $key);
                    // if(is_null($input[$keyBack])) continue;
                    // $back = $input[$keyBack];
                    $back = empty($input[$keyBack])? 0: $input[$keyBack];

                    // type
                    $type = explode('_name', $key)[0];
                    if(!isset($count[$type])) $count[$type] = 1;

                    // time
                    $time = null;
                    if($type=="course" || $type=="encho"){
                        $keyTime = str_replace('name', 'time', $key);
                        if(is_null($input[$keyTime])){
                            $time = preg_replace('/[^0-9]/', '', $data);
                            $time = $time? $time: 0;
                        }else{
                            $time = $input[$keyTime];
                        }
                        
                    }

                    $result = price::priceInsert($miseId, $data, $price, $count[$type], $type, $time, $backName, $back);
                    $count[$type]++;

                //radio-チェックされた値が入っている。 
                }elseif($key == 'optionGet' ){ 
                    $result = price::priceInsert($miseId, $data, 0, 1, 'optionGet', null, $backName, null);

                //checkbox-値があればチェックされている
                }elseif($key == 'claim1000' ){
                    $result = price::priceInsert($miseId, 'クレーム対応の為1000円割引', -1000, 1, 'claim', null, $backName, 0);
                }elseif($key == 'claim2000' ){
                    $result = price::priceInsert($miseId, 'クレーム対応の為2000円割引', -2000, 1, 'claim', null, $backName, 0);
                }

            }
            return back()->with(['message' => '保存しました。内容の確認をお願いします。']);
            
        }
    }

    //back
    public function back($clientId, $miseId, $backName){
        //権限チェック
        if($ng = $this->levelCheck($clientId, $miseId)) return $ng;

        //client情報
        $client = client::detail($clientId);

        //mise情報
        $mise = mise::detail($miseId);

        //price情報
        $price = price::detail($miseId);
        $typeList = price::typeList($miseId);

        //back情報
        $back = back::detail($miseId, $backName);
        $formData = back::formData($miseId, $backName);

        return view ('mise_back', [
            'client' => $client,
            'mise' => $mise,
            'backName' => $backName,
            'price' => $price,
            'typeList' => $typeList,
            'back' => $back,
            'formData' => $formData,
            'message' => session('message'),
       ]);
    }
    
/*
    //back編集
    public function backedit(Request $request, $clientId, $miseId, $backName){
        //権限チェック
        if($ng = $this->levelCheck($clientId, $miseId)) return $ng;

        //     //バリデーション
        //     $rulus = [
        //         'business_name' => ['required', Rule::unique('therapist','business_name')->whereNull('deleted_at')],
        //         'login_id' => ['required','regex:/^[0-9a-zA-Z\\-\\_]+$/', Rule::unique('users','name')->whereNull('deleted_at')],
        //         //'pass' => 'required | min:4 | regex:/^[[a-zA-Z0-9]+$/',
        //     ];
        //     $message = [
        //         'business_name.required' => '源氏名を入力してください。',
        //         'business_name.unique' => '登録されている源氏名です。',
        //         'login_id.required' => 'ログインIDを入力してください。',
        //         'login_id.regex' => 'ログインIDに使えるのはは「半角英数字、ハイフン、アンダースコア」のみです。',
        //         'login_id.unique' => 'このログインIDは存在します。',
        //         'pass.required' => 'パスワードを入力してください。',
        //         'pass.min' => 'パスワードは4文字以上で入力してください。',
        //         'pass.regex' => 'パスワードは半角英数字で入力して下さい。',
        //     ];
        //     $validator = Validator::make($request->all(), $rulus, $message);
        //     if($validator->fails()) return back()->withErrors($validator)->withInput();

        $input = $request->input();
        back::del($miseId, $backName); //今あるレコード削除

        foreach($input as $key => $data){
            if($key == '_token') continue;
            // if(is_null($data)) continue;

            if(preg_match("/ocha_name/", $key)){
                if(is_null($data)) continue;
                // price
                $keyPrice = str_replace('name', 'price', $key);
                if(is_null($input[$keyPrice])) continue;
                $price = $input[$keyPrice];

                $result = back::backInsert($miseId, $data, $backName, $price, 1);
            }elseif(preg_match("/ocha_price/", $key)){
            }else{
                $price = $data? $data: 0;
                $result = back::backInsert($miseId, $key, $backName, $price);
            }
        }
        back::backCreate($miseId, $backName, 0);

        return back()->with(['message' => '保存しました。']);
    }
*/

    //back新規作成
    public function newBack(Request $request, $clientId, $miseId){
        //権限チェック
        if($ng = $this->levelCheck($clientId, $miseId)) return $ng;

        $input = $request->input();

        //back作成
        $copy = isset($input['copy'])? 1: 0;
        $result = price::backCreate($miseId, $input['back_name'], $copy);

        return back()->with(['mes4' => $result]);
    }

    //back削除
    public function backDel($clientId, $miseId, $backName){
        if($backName=="default") return back()->with(['mes4' => 'defaultは削除できません。']);
        //権限チェック
        if($ng = $this->levelCheck($clientId, $miseId)) return $ng;

        price::del($miseId, $backName);
        therapist::backDel($miseId, $backName);

        return back()->with(['mes4' => $backName.'を削除しました。']);
    }

    //ヒアリングシート編集
    public function hearingsheetEdit(Request $request, $clientId, $miseId){
        //権限チェック
        if($ng = $this->levelCheck($clientId, $miseId)) return $ng;

        mise::hearingsheetEdit($miseId, $request->input()['hearing_sheet']);

        return back()->with(['mes6' => 'ヒアリングシートを編集しました。']);
    }

    //店舗情報編集
    public function miseDataEdit(Request $request, $clientId, $miseId){
        //権限チェック
        if($ng = $this->levelCheck($clientId, $miseId)) return $ng;

        mise::miseDataEdit($miseId, $request->input());

        return back()->with(['mes7' => '店舗情報を編集しました。']);
    }

}