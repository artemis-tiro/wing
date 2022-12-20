<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Vender\CallTwitterApi;

class TwitterController extends Controller
{
    // 投稿
    public function index(Request $request)
    {
        $t = new CallTwitterApi();
        $d = $t->serachTweets("検索ワード");
        return view('twitter', ['twitter' => $d]);
    }
}