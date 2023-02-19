<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// login
// tiro
// tiro2222

/*
Route::get('/', function () {
    return view('welcome');
});
*/


//最初のルーティング
Route::middleware(['auth:sanctum', 'verified'])->any('/', "App\Http\Controllers\TopController@route");
//logout
Route::any('/logout', "App\Http\Controllers\TopController@logout");
//log
Route::any('/log', "App\Http\Controllers\TopController@log");
Route::any('/log/work', "App\Http\Controllers\TopController@work");
Route::any('/log/line', "App\Http\Controllers\TopController@line");

// Luna
Route::any('/luna', "App\Http\Controllers\LunaController@top");
Route::any('/morning', "App\Http\Controllers\LunaController@morning");
Route::any('/twitter', "App\Http\Controllers\TwitterController@index");

//mypage
Route::middleware(['auth:sanctum', 'verified'])->any('/mypage', "App\Http\Controllers\MypageController@mypage");
Route::middleware(['auth:sanctum', 'verified'])->any('/mypage/newpassword', "App\Http\Controllers\MypageController@newpassword");
Route::middleware(['auth:sanctum', 'verified'])->any('/mypage/namechange', "App\Http\Controllers\MypageController@namechange");
Route::middleware(['auth:sanctum', 'verified'])->any('/mypage/nameAdminchange', "App\Http\Controllers\MypageController@nameAdminchange");
Route::middleware(['auth:sanctum', 'verified'])->any('/mypage/addresschange', "App\Http\Controllers\MypageController@addresschange");
Route::middleware(['auth:sanctum', 'verified'])->any('/mypage/telchange', "App\Http\Controllers\MypageController@telchange");
Route::middleware(['auth:sanctum', 'verified'])->any('/mypage/mailchange', "App\Http\Controllers\MypageController@mailchange");
Route::middleware(['auth:sanctum', 'verified'])->any('/mypage/birthdaychange', "App\Http\Controllers\MypageController@birthdaychange");
Route::middleware(['auth:sanctum', 'verified'])->any('/mypage/linechange', "App\Http\Controllers\MypageController@linechange");

//tiro
Route::middleware(['auth:sanctum', 'verified'])->any('/tiro', "App\Http\Controllers\TiroController@top");
Route::middleware(['auth:sanctum', 'verified'])->any('/tiro/newadmin', "App\Http\Controllers\TiroController@newAdmin");
Route::middleware(['auth:sanctum', 'verified'])->any('/tiro/editadmin/{id}/{action}', "App\Http\Controllers\TiroController@editAdmin");
Route::middleware(['auth:sanctum', 'verified'])->any('/tiro/nari/{team}', "App\Http\Controllers\TiroController@nari");

//admin
Route::middleware(['auth:sanctum', 'verified'])->any('/admin', "App\Http\Controllers\AdminController@top");
Route::middleware(['auth:sanctum', 'verified'])->any('/admin/inputer', "App\Http\Controllers\AdminController@inputer");
Route::middleware(['auth:sanctum', 'verified'])->any('/admin/newinputer', "App\Http\Controllers\AdminController@newInputer");
Route::middleware(['auth:sanctum', 'verified'])->any('/admin/editinputer/{id}/{action}', "App\Http\Controllers\AdminController@editInputer");
Route::middleware(['auth:sanctum', 'verified'])->any('/admin/inputer/{id}', "App\Http\Controllers\AdminController@inputerDetail");
Route::middleware(['auth:sanctum', 'verified'])->any('/admin/client', "App\Http\Controllers\AdminController@client");
Route::middleware(['auth:sanctum', 'verified'])->any('/admin/newclient', "App\Http\Controllers\AdminController@newClient");
Route::middleware(['auth:sanctum', 'verified'])->any('/admin/editclient/{id}/{action}', "App\Http\Controllers\AdminController@editClient");
Route::middleware(['auth:sanctum', 'verified'])->any('/admin/passreset', "App\Http\Controllers\AdminController@passReset");

//inputer
Route::middleware(['auth:sanctum', 'verified'])->any('/i', "App\Http\Controllers\InputController@top");
Route::middleware(['auth:sanctum', 'verified'])->any('/i/{miseId}', "App\Http\Controllers\InputController@therapist");
Route::middleware(['auth:sanctum', 'verified'])->any('/i/{miseId}/hearingsheetedit', "App\Http\Controllers\InputController@hearingsheetEdit");
Route::middleware(['auth:sanctum', 'verified'])->any('/i/{miseId}/{therapistId}', "App\Http\Controllers\InputController@yoyaku");
Route::middleware(['auth:sanctum', 'verified'])->any('/i/{miseId}/{therapistId}/reservation', "App\Http\Controllers\InputController@reservation");
Route::middleware(['auth:sanctum', 'verified'])->any('/i/{miseId}/{therapistId}/befor', "App\Http\Controllers\InputController@yoyakuBefor");
Route::middleware(['auth:sanctum', 'verified'])->any('/i/{miseId}/{therapistId}/befor_day', "App\Http\Controllers\InputController@yoyakuBefor");
Route::middleware(['auth:sanctum', 'verified'])->any('/i/{miseId}/{therapistId}/kyuryo', "App\Http\Controllers\InputController@kyuryo");
Route::middleware(['auth:sanctum', 'verified'])->any('/i/{miseId}/{therapistId}/calculation', "App\Http\Controllers\InputController@calculation");
Route::middleware(['auth:sanctum', 'verified'])->any('/i/{miseId}/{therapistId}/calculation2', "App\Http\Controllers\InputController@calculation2");
Route::middleware(['auth:sanctum', 'verified'])->any('/i/{miseId}/{therapistId}/{id}/del', "App\Http\Controllers\InputController@yoyakudel");
Route::middleware(['auth:sanctum', 'verified'])->any('/i/{miseId}/{therapistId}/{id}/yoyakuedit', "App\Http\Controllers\InputController@yoyakuedit");
Route::middleware(['auth:sanctum', 'verified'])->any('/i/{miseId}/{therapistId}/{id}/yoyakuafteredit', "App\Http\Controllers\InputController@yoyakuafteredit");
Route::middleware(['auth:sanctum', 'verified'])->any('/i/{miseId}/{therapistId}/{id}/yoyakuencho', "App\Http\Controllers\InputController@yoyakuencho");
Route::middleware(['auth:sanctum', 'verified'])->any('/i/{miseId}/{therapistId}/{id}/yoyakuoption', "App\Http\Controllers\InputController@yoyakuoption");

//client
Route::middleware(['auth:sanctum', 'verified'])->any('/c/{clientId}', "App\Http\Controllers\ClientController@top");
Route::middleware(['auth:sanctum', 'verified'])->any('/c/{clientId}/newmise', "App\Http\Controllers\ClientController@newMise");
Route::middleware(['auth:sanctum', 'verified'])->any('/c/{clientId}/{miseId}', "App\Http\Controllers\ClientController@mise");
Route::middleware(['auth:sanctum', 'verified'])->any('/c/{clientId}/{miseId}/edit/{action}', "App\Http\Controllers\ClientController@miseEdit");
Route::middleware(['auth:sanctum', 'verified'])->any('/c/{clientId}/{miseId}/newtherapist', "App\Http\Controllers\ClientController@newTherapist");
Route::middleware(['auth:sanctum', 'verified'])->any('/c/{clientId}/{miseId}/newback', "App\Http\Controllers\ClientController@newBack");
Route::middleware(['auth:sanctum', 'verified'])->any('/c/{clientId}/{miseId}/price/{backName}', "App\Http\Controllers\ClientController@price");
Route::middleware(['auth:sanctum', 'verified'])->any('/c/{clientId}/{miseId}/priceedit', "App\Http\Controllers\ClientController@priceEdit");
Route::middleware(['auth:sanctum', 'verified'])->any('/c/{clientId}/{miseId}/hearingsheetedit', "App\Http\Controllers\ClientController@hearingsheetEdit");
Route::middleware(['auth:sanctum', 'verified'])->any('/c/{clientId}/{miseId}/misedataedit', "App\Http\Controllers\ClientController@miseDataEdit");
Route::middleware(['auth:sanctum', 'verified'])->any('/c/{clientId}/{miseId}/back/{backName}', "App\Http\Controllers\ClientController@back");
Route::middleware(['auth:sanctum', 'verified'])->any('/c/{clientId}/{miseId}/back/{backName}/edit', "App\Http\Controllers\ClientController@backedit");
Route::middleware(['auth:sanctum', 'verified'])->any('/c/{clientId}/{miseId}/back/{backName}/del', "App\Http\Controllers\ClientController@backDel");
Route::middleware(['auth:sanctum', 'verified'])->any('/c/{clientId}/{miseId}/{therapistId}', "App\Http\Controllers\ClientController@therapist");
Route::middleware(['auth:sanctum', 'verified'])->any('/c/{clientId}/{miseId}/{therapistId}/edit/{action}', "App\Http\Controllers\ClientController@therapistEdit");

//shift
Route::middleware(['auth:sanctum', 'verified'])->any('/shift', "App\Http\Controllers\ShiftController@top");
Route::middleware(['auth:sanctum', 'verified'])->any('/shift/ajax', "App\Http\Controllers\ShiftController@itemApi");
Route::middleware(['auth:sanctum', 'verified'])->any('/shift/{clientId}', "App\Http\Controllers\ShiftController@miselist");
Route::middleware(['auth:sanctum', 'verified'])->any('/shift/{clientId}/{miseId}', "App\Http\Controllers\ShiftController@shift");
Route::middleware(['auth:sanctum', 'verified'])->any('/shift/{clientId}/{miseId}/addshift', "App\Http\Controllers\ShiftController@addshift");

//therapist
Route::middleware(['auth:sanctum', 'verified'])->any('/t', "App\Http\Controllers\TherapistController@top");
Route::middleware(['auth:sanctum', 'verified'])->any('/t/{miseId}/{therapistId}/befor', "App\Http\Controllers\TherapistController@befor");
Route::middleware(['auth:sanctum', 'verified'])->any('/t/{miseId}/{therapistId}/befor_day', "App\Http\Controllers\TherapistController@befor");
Route::middleware(['auth:sanctum', 'verified'])->any('/t/{miseId}/{therapistId}/kyuryo', "App\Http\Controllers\TherapistController@kyuryo");
Route::middleware(['auth:sanctum', 'verified'])->any('/t/{miseId}/{therapistId}/calculation', "App\Http\Controllers\TherapistController@calculation");
Route::middleware(['auth:sanctum', 'verified'])->any('/t/{miseId}/{therapistId}/calculation2', "App\Http\Controllers\TherapistController@calculation2");

//kokyaku
Route::middleware(['auth:sanctum', 'verified'])->any('/k', "App\Http\Controllers\KokyakuController@top");
Route::middleware(['auth:sanctum', 'verified'])->any('/k/{miseId}', "App\Http\Controllers\KokyakuController@kokyakulist");
Route::middleware(['auth:sanctum', 'verified'])->any('/k/{kokyakuId}/namechange', "App\Http\Controllers\KokyakuController@namechange");
Route::middleware(['auth:sanctum', 'verified'])->any('/k/{kokyakuId}/telchange', "App\Http\Controllers\KokyakuController@telchange");
Route::middleware(['auth:sanctum', 'verified'])->any('/k/{kokyakuId}/mailchange', "App\Http\Controllers\KokyakuController@mailchange");
Route::middleware(['auth:sanctum', 'verified'])->any('/k/{kokyakuId}/ngchange', "App\Http\Controllers\KokyakuController@ngchange");
Route::middleware(['auth:sanctum', 'verified'])->any('/k/{kokyakuId}/memochange', "App\Http\Controllers\KokyakuController@memochange");
Route::middleware(['auth:sanctum', 'verified'])->any('/k/{miseId}/{kokyakuId}', "App\Http\Controllers\KokyakuController@kokyakudata");

//test
Route::middleware(['auth:sanctum', 'verified'])->any('/test', "App\Http\Controllers\Controller@test");

/*
admin
client
input
therapist
mise
kokyaku
back


*/
/*

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//上から順番に検証して行って最初にマッチングしたRouteに飛ばす。

//ただビューに飛ばすだけ。LPなど。
Route::view('/top', 'top',['test1'=>'引数1','test2'=>'引数2']);

//getのみマッチ。{id}はコントローラーに渡せる。
Route::get('/get_test/{id}', "App\Http\Controllers\TopController@getTest");

//postのみマッチ。EditControllerのdelete関数へ飛ばす
Route::post('/post_test', "App\Http\Controllers\TopController@postTest");

//getもpostもマッチする。だいたいanyでオッケー。
Route::any('/db_test', "App\Http\Controllers\TopController@dbTest");

//ログインしている場合のみマッチ
Route::middleware(['auth:sanctum', 'verified'])->any('/edit/delete', "App\Http\Controllers\TopController@getTest");

*/
