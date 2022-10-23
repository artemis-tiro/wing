<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\inputer;



class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasTeams;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use SoftDeletes;

    protected $guarded = [''];

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    //team一覧
    public static function teamList(){
        $adminList = user::where('access_level', 'admin')
            ->whereColumn('id', 'team') //teamオーナーのみ
            ->get();
        return $adminList;
    }

    //メンバー一覧
    public static function inputerList($team){
        $inputerList = user::whereIn('access_level', ['admin','inputer'])
            ->where('id', '<>', $team) //teamオーナーを除外
            ->where('team', $team)
            ->get();
        return $inputerList;
    }

    //client一覧
    public static function clientList($team){
        $clientList = user::where('access_level', 'client')
            ->where('team', $team)
            ->get();
        return $clientList;
    }

    //nameからid取得
    public static function nameToId($name){
        $user = user::where('name', $name)
            ->first();
        return $user->id;
    }

    //teamからname取得
    public static function teamName($team){
        $user = user::find($team);
        if(!$user) return null;
        return $user->name;
    }

    //user作成
    public static function userCreate($input, $level,){
        $result = ['error'=>'', 'id'=>''];

        //team取得
        $team = Auth::user()->team;

        //インサート
        $user = new user();
        $user->name = $input['login_id'];
        // $user->password = Hash::make($input['pass']);
        $user->password = Hash::make($input['login_id']);
        $user->access_level = $level;
        $user->team = $team;
        $saveResult = $user->save();
        if(!$saveResult){
            $result['error'] .= "新規作成に失敗しました。\n";
            return $result;
        }

        $result['id'] .= $user->id;
        return $result;
    }

    //team作成
    public static function teamCreate($id){
        $user = user::find($id);
        $user->team = $user->id;
        $user->save();
        return true;
    }

    //チームチェック
    public static function teamCheck($id, $team){
        $user = user::find($id);
        if(!isset($user->team)) return false;
        if($user->team != $team) return false;

        return true;
    }

    //teamアクティブチェック
    public static function teamActiveCheck($team){
        $owner = user::find($team);
        if(!$owner) return false;
        if(!$owner->active) return false;

        return true;
    }

    //activeオン
    public static function toActive($id){
        $user = user::find($id);
        $user->active = 1;
        $user->save();
        return true;
    }

    //activeオフ
    public static function toStop($id){
        $user = user::find($id);
        $user->active = 0;
        $user->save();
        return true;
    }

    //memberへ
    public static function toInputer($id){
        $user = user::find($id);
        $user->access_level = 'inputer';
        $user->save();
        return true;
    }

    //adminへ
    public static function toAdmin($id){
        $user = user::find($id);
        $user->access_level = 'admin';
        $user->save();
        return true;
    }

    //memo更新
    public static function memo($id, $memo){
        $user = user::find($id);
        $user->memo = $memo;
        $user->save();
        return true;
    }

    //削除
    public static function del($id){
        $user = user::find($id);
        if($user) $user->delete();
        return true;
    }

    //なりすまし
    public static function nari($team){
        $me = user::find(Auth::user()->id);
        $me->team = $team;
        $me->save();
        return true;
    }

    //loginId追加
    public static function addDetail($list){
        foreach($list as $i){
            $user = user::find($i->id);
            $i->loginId = $user->name;
        }
    }


}

