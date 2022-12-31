<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Log;
use Carbon\Carbon;
use App\Models\User;

class LunaController extends Controller{

    // login後最初の処理
    public function top(){

        Log::channel('daily')->info('');

        //config
        $kirikaejikan = 4; // 日付け切り替え時間
        $url = 'https://docs.google.com/spreadsheets/d/e/2PACX-1vT6aDhs7Xy0kiBvZF5wGCEoDtY1eh5s2nr9vLLnMOzSwQJZXpSrGNdfjgtxW957g_GPK69AP323IgHz/pub?output=csv';
        $nanko = 15; //表示日数
        $heya = 2; //部屋数
        $start = 11; //シフト開始時間
        $end = 5; //シフト終わり時間
        if($end<$start) $end+=24;

        //スプレットシートデータ取得
        $csv_file = file($url);
        $csv = [];
        foreach($csv_file as $key => $value){
            $csv[] = explode(",", $value);
        }

        //現在の営業日取得
        $today = date("G") < $kirikaejikan? date('n/j', strtotime('-1 day')): date("n/j");

        $go = 0;
        $result = '';
        foreach($csv as $r){
            if($r[0]==$today) $go = 1;
            if(!$go) continue;
            if(!$nanko--) break;
            $aki = [];
            for($i=$start; $i<=$end; $i+=0.5){
                $aki[(string)$i] = $heya;
            }
            foreach($r as $c){
                if($c){
                    $shift = 1;
                    $check = explode("-", $c);
                    if(count($check)!=2) $shift = 0;
                    foreach($check as $che){
                        if(!is_numeric($che)) $shift = 0;
                        if($che<0 || $che>24) $shift = 0;
                    }
                    if($shift){
                        $s = $check[0];
                        $e = $check[1];
                        if($e<$s) $e+=24;
                        for($i=$s; $i<=$e; $i+=0.5){
                            if(!isset($aki[(string)$i])) continue;
                            $aki[(string)$i]--;
                        }
                    }

                }
            }
            $akiData = '';
            $on = 0;
            foreach($aki as $k=>$a){
                $k=(int)$k;
                if($k>24) $k-=24;
                if(!$on && $a>0){
                    if($akiData) $akiData .= ' , ';
                    $akiData .= ($k).'-';
                    $on = 1;
                }
                if($on && $a<=0){
                    $akiData .= ($k);
                    $on = 0;
                }
            }
            if($on) $akiData .= ($k);
            $trim = explode("-", $akiData);
            $akiTrim = "";
            foreach($trim as $t){
                if($akiTrim) $akiTrim .= '-';
                $temp = explode(" , ", $t);
                if(count($temp)==2 && $temp[0]==$temp[1]){
                    $akiTrim = substr($akiTrim, 0, -1);
                }else{
                    $akiTrim .= $t;
                }
            }
            $result .= $r[0].'('.$r[1].') ';
            $result .= $akiTrim."\n";
            if($r[1]=='日') $result .= "\n";
        }
        return view ('luna', ['t'=>$result]);
    }

    // 朝一ツイッター
    public function morning(){
        Log::channel('daily')->info('');

        //config
        $kirikaejikan = 4; // 日付け切り替え時間
        $url = 'https://docs.google.com/spreadsheets/d/e/2PACX-1vT6aDhs7Xy0kiBvZF5wGCEoDtY1eh5s2nr9vLLnMOzSwQJZXpSrGNdfjgtxW957g_GPK69AP323IgHz/pub?output=csv';
        $nanko = 15; //表示日数
        $heya = 2; //部屋数
        $start = 11; //シフト開始時間
        $end = 5; //シフト終わり時間
        if($end<$start) $end+=24;

        //スプレットシートデータ取得
        $csv_file = file($url);
        $csv = [];
        foreach($csv_file as $key => $value){
            $csv[] = explode(",", $value);
        }

        //現在の営業日取得
        $today = date("G") < $kirikaejikan? date('n/j', strtotime('-1 day')): date("n/j");
        $today = '1/6';//testデータ

        $nameKey = null;
        $copyKey = null;
        $ageKey = null;
        foreach($csv as $key => $c){
            if($c[0]=="name") $nameKey = $key;
            if($c[0]=="copy") $copyKey = $key;
            if($c[0]=="age") $ageKey = $key;
        }


        $text = "南越谷アロマルナ\n";
        $text = null;
        $text .= '⭐'.$today;

        foreach($csv as $c){
            if($c[0]==$today){
                $text .= '（'.$c[1].'）出勤表⭐'."\n\n";
                foreach($c as $key => $g){
                    if($key==0||$key==1||!$g) continue;
                    $temp = explode("-", $g);
                    if(count($temp)!=2) continue;
                    if($temp[0]<=0||$temp[0]>24) continue;
                    if($temp[1]<=0||$temp[1]>24) continue;
                    if(!is_numeric($temp[0])||!is_numeric($temp[1])) continue;
                    $name = $csv[$nameKey][$key]?$csv[$nameKey][$key]:'期待の新人さん';
                    $age = $csv[$ageKey][$key]?'('.$csv[$ageKey][$key].')':'';
                    $text .= "❤".$name.$age."❤";
                    if(strpos($temp[0],".5")){$temp[0] = str_replace(".5","時30分",$temp[0]);
                    }else{$temp[0] .= '時';}
                    if(strpos($temp[1],".5")){$temp[1] = str_replace(".5","時30分",$temp[1]);
                    }else{$temp[1] .= '時';}
                    $text .= $temp[0].'～'.$temp[1]."\n";
                    $copy = [];
                    $copy[] = $csv[$copyKey][$key];
                    for($i=$copyKey+1;1;$i++){
                        if(!isset($csv[$i][$key])) break;
                        if(!$csv[$i][$key]) break;
                        $copy[] = $csv[$i][$key];
                    }
                    $text .= $copy[array_rand($copy,1)]."\n\n";
                }
            }
        }
        $text .= "やみつきになる極液無料サービス⭐\nHP🌙 http://aroma-luna.net";

        return view ('morning', ['t'=>$text]);

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
