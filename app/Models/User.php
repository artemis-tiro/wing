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

    //teamһ�E
    public static function teamList(){
        $adminList = user::where('access_level', 'admin')
            ->whereColumn('id', 'team') //team���`�ʩ`�Τ�
            ->get();
        foreach($adminList as $a){
            $a->memberCount = user::where('team', $a->team)
                ->get()
                ->count();
        }
        return $adminList;
    }

    //���Щ`һ�E
    public static function inputerList($team){
        $inputerList = user::whereIn('access_level', ['admin','inputer'])
            ->where('id', '<>', $team) //team���`�ʩ`�����
            ->where('team', $team)
            ->get();
        $list = $inputerList->sortByDesc('active');
        return $list;
    }

    //clientһ�E
    public static function clientList($team){
        $clientList = user::where('access_level', 'client')
            ->where('team', $team)
            ->get();
        $list = $clientList->sortByDesc('active');

        return $list;
    }

    //name����idȡ��
    public static function nameToId($name){
        $user = user::where('name', $name)
            ->first();
        if(!$user) return false;
        return $user->id;
    }

    //team����nameȡ��
    public static function teamName($team){
        $user = user::find($team);
        if(!$user) return null;
        return $user->name;
    }

    //user����
    public static function userCreate($input, $level,){
        $result = ['error'=>'', 'id'=>''];

        //teamȡ��
        $team = Auth::user()->team;

        //���󥵩`��
        $user = new user();
        $user->name = $input['login_id'];
        // $user->password = Hash::make($input['pass']);
        $user->password = Hash::make($input['login_id']);
        $user->access_level = $level;
        $user->team = $team;
        $saveResult = $user->save();
        if(!$saveResult){
            $result['error'] .= "��Ҏ���ɤ�ʧ�����ޤ�����\n";
            return $result;
        }

        $result['id'] .= $user->id;
        return $result;
    }

    //team����
    public static function teamCreate($id){
        $user = user::find($id);
        $user->team = $user->id;
        $user->save();
        return true;
    }

    //���`������å�
    public static function teamCheck($id, $team){
        $user = user::find($id);
        if(!isset($user->team)) return false;
        if($user->team != $team) return false;

        return true;
    }

    //team�����ƥ��֥����å�
    public static function teamActiveCheck($team){
        $owner = user::find($team);
        if(!$owner) return false;
        if(!$owner->active) return false;

        return true;
    }

    //active����
    public static function toActive($id){
        $user = user::find($id);
        $user->active = 1;
        $user->save();
        return true;
    }

    //active����
    public static function toStop($id){
        $user = user::find($id);
        $user->active = 0;
        $user->save();
        return true;
    }

    //member��
    public static function toInputer($id){
        $user = user::find($id);
        $user->access_level = 'inputer';
        $user->save();
        return true;
    }

    //admin��
    public static function toAdmin($id){
        $user = user::find($id);
        $user->access_level = 'admin';
        $user->save();
        return true;
    }

    //memo����
    public static function memo($id, $memo){
        $user = user::find($id);
        $user->memo = $memo;
        $user->save();
        return true;
    }

    //����
    public static function del($id){
        $user = user::find($id);
        if($user) $user->delete();
        return true;
    }

    //�ʤꤹ�ޤ�
    public static function nari($team){
        $me = user::find(Auth::user()->id);
        $me->team = $team;
        $me->save();
        return true;
    }

    //loginId׷��
    public static function addDetail($list){
        foreach($list as $i){
            $user = user::find($i->id);
            $i->loginId = $user->name;
            $i->active = $user->active;
        }
    }

    //�ѥ���`�ɸ���
    public static function passwordUpdate($id,$newPassword){
        $user = user::find($id);
        $user->password = $newPassword;
        $result = $user->save();
        return $result;
    }

    //miseһ�E
    public static function miseList($team){
        $miseList = user::where('access_level', 'therapist')
            ->where('team', $team)
            ->get();
        return $miseList;
    }

    // detail
    public static function detail($id){
        $user = user::find($id);
        return $user;
    }

    // logout
    public static function logout($id){
        $user = user::find($id);
        $user->remember_token = null;
        $user->save();
        return null;
    }

}