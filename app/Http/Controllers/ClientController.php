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
        $backList = back::list($miseId);

        return view ('mise', [
            'client' => $client,
            'mise' => $mise,
            'therapistList' => $therapistList,
            'backList' => $backList,
            'mes1' => session('mes1'),
            'mes4' => session('mes4'),
            'mes6' => session('mes6'),
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

        return back()->with(['mes1' => '「'.$request->input()['business_name'].'」を作成しました。']);
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
    public function price($clientId, $miseId){
        //権限チェック
        if($ng = $this->levelCheck($clientId, $miseId)) return $ng;

        //client情報
        $client = client::detail($clientId);

        //mise情報
        $mise = mise::detail($miseId);

        //price情報
        $formData = price::formData($miseId);

        return view ('mise_price', [
            'client' => $client,
            'mise' => $mise,
            'formData' => $formData,
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
            price::del($miseId); //今あるレコード削除

            $count = [];

            foreach($input as $key => $data){

                //コース料金
                if(preg_match("/_name/", $key)){
                    if(is_null($data)) continue;

                    // price
                    $keyPrice = str_replace('name', 'price', $key);
                    if(is_null($input[$keyPrice])) continue;
                    $price = $input[$keyPrice];

                    // type
                    $type = explode('_name', $key)[0];
                    if(!isset($count[$type])) $count[$type] = 1;

                    // time
                    $time = null;
                    if($type=="course"){
                        $keyTime = str_replace('name', 'time', $key);
                        if(is_null($input[$keyTime])) continue;
                        $time = $input[$keyTime];
                    }

                    $result = price::priceInsert($miseId, $data, $price, $count[$type], $type, $time);
                    $count[$type]++;

                //radio-チェックされた値が入っている。 
                }elseif($key == 'optionGet' ){ 
                    $result = price::priceInsert($miseId, $data, 0, 1, 'optionGet', null);

                //checkbox-値があればチェックされている
                }elseif($key == 'claim1000' ){
                    $result = price::priceInsert($miseId, 'claim1000', 1, 1, 'claim1000', null);
                }elseif($key == 'claim2000' ){
                    $result = price::priceInsert($miseId, 'claim2000', 1, 1, 'claim2000', null);
                }

            }
            return back()->with(['message' => '保存しました。「バック額の確認」もお願いします。']);
            
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
            if(is_null($data)) continue;

            if(preg_match("/ocha_name/", $key)){
                // price
                $keyPrice = str_replace('name', 'price', $key);
                if(is_null($input[$keyPrice])) continue;
                $price = $input[$keyPrice];

                $result = back::backInsert($miseId, $data, $backName, $price, 1);
            }elseif(preg_match("/ocha_price/", $key)){
            }else{
                $result = back::backInsert($miseId, $key, $backName, $data);                
            }
        }
        back::backCreate($miseId, $backName, 0);

        return back()->with(['message' => '保存しました。']);
    }

    //back新規作成
    public function newBack(Request $request, $clientId, $miseId){
        //権限チェック
        if($ng = $this->levelCheck($clientId, $miseId)) return $ng;

        $input = $request->input();

        //back作成
        $copy = isset($input['copy'])? 1: 0;
        $result = back::backCreate($miseId, $input['back_name'], $copy);

        return back()->with(['mes4' => $result]);
    }

    //back削除
    public function backDel($clientId, $miseId, $backName){
        //権限チェック
        if($ng = $this->levelCheck($clientId, $miseId)) return $ng;

        back::del($miseId, $backName);
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


}
