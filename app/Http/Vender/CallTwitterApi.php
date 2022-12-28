<?php

namespace App\Http\Vender;

use Illuminate\Http\Request;
use Abraham\TwitterOAuth\TwitterOAuth;

class callTwitterApi
{
    
    private $t;
    
    public function __construct()
    {
        $this->t = new TwitterOAuth(
            // env('TWITTER_CLIENT_KEY'),
            // env('TWITTER_CLIENT_SECRET'),
            // env('TWITTER_CLIENT_ID_ACCESS_TOKEN'),
            // env('TWITTER_CLIENT_ID_ACCESS_TOKEN_SECRET'));
             "8a3Ne6VZKogMUK0wjrHUJodZ9",
 "2JSGBIKetnh61DyDlYcWd7cv8L87OFOhdKMMfLmm2dozw7WU45",
 "1360391036229459970-aOvB3BeeCtgJEhcVM13khjlweKcaRt",
 "88TmtUBOrcXG1AcNYJ649Nk7BFjpz7nf7D2WSBNvCfX3w");

    }
    
    // ツイート検索
    public function serachTweets(String $searchWord)
    {
        $d = $this->t->get("search/tweets", [
            'q' => $searchWord,
            'count' => 3,
         ]);

        return $d;
        return $d->statuses;
    }
}