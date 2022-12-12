<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\user;
use App\Models\msie;

class session extends Model
{

    protected $table = 'sessions';
    protected $guarded = [''];
    //public $timestamps = false;

    //client作成
    public static function del($id){
        $session = session::where('user_id', $id)
            ->delete();
        return null;
    }



}
