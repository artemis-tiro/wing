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
//mypage
Route::middleware(['auth:sanctum', 'verified'])->any('/mypage', "App\Http\Controllers\MypageController@mypage");
Route::middleware(['auth:sanctum', 'verified'])->any('/mypage/newpassword', "App\Http\Controllers\MypageController@newpassword");
Route::middleware(['auth:sanctum', 'verified'])->any('/mypage/namechange', "App\Http\Controllers\MypageController@namechange");
Route::middleware(['auth:sanctum', 'verified'])->any('/mypage/nameAdminchange', "App\Http\Controllers\MypageController@nameAdminchange");
Route::middleware(['auth:sanctum', 'verified'])->any('/mypage/addresschange', "App\Http\Controllers\MypageController@addresschange");
Route::middleware(['auth:sanctum', 'verified'])->any('/mypage/telchange', "App\Http\Controllers\MypageController@telchange");
Route::middleware(['auth:sanctum', 'verified'])->any('/mypage/mailchange', "App\Http\Controllers\MypageController@mailchange");
Route::middleware(['auth:sanctum', 'verified'])->any('/mypage/birthdaychange', "App\Http\Controllers\MypageController@birthdaychange");
Route::middleware(['auth:sanctum', 'verified'])->any('/mypage/profilechange', "App\Http\Controllers\MypageController@profilechange");

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

//inputer
Route::middleware(['auth:sanctum', 'verified'])->any('/i', "App\Http\Controllers\InputController@top");
Route::middleware(['auth:sanctum', 'verified'])->any('/i/{miseId}', "App\Http\Controllers\InputController@therapist");
Route::middleware(['auth:sanctum', 'verified'])->any('/i/{miseId}/{therapistId}', "App\Http\Controllers\InputController@yoyaku");
Route::middleware(['auth:sanctum', 'verified'])->any('/i/{miseId}/{therapistId}/reservation', "App\Http\Controllers\InputController@reservation");
Route::middleware(['auth:sanctum', 'verified'])->any('/i/{miseId}/{therapistId}/kyuryo', "App\Http\Controllers\InputController@kyuryo");
Route::middleware(['auth:sanctum', 'verified'])->any('/i/{miseId}/{therapistId}/calculation', "App\Http\Controllers\InputController@calculation");
Route::middleware(['auth:sanctum', 'verified'])->any('/i/{miseId}/{therapistId}/{id}/del', "App\Http\Controllers\InputController@yoyakudel");
Route::middleware(['auth:sanctum', 'verified'])->any('/i/{miseId}/{therapistId}/yoyakuedit', "App\Http\Controllers\InputController@yoyakuedit");

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
Route::middleware(['auth:sanctum', 'verified'])->any('/shift/{miseId}', "App\Http\Controllers\ShiftController@shift");

//therapist
Route::middleware(['auth:sanctum', 'verified'])->any('/t', "App\Http\Controllers\TherapistController@top");

//test
Route::middleware(['auth:sanctum', 'verified'])->any('/test', "App\Http\Controllers\TopController@test");

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
