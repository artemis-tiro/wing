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

//tiro
Route::middleware(['auth:sanctum', 'verified'])->any('/tiro', "App\Http\Controllers\TiroController@top");
Route::middleware(['auth:sanctum', 'verified'])->any('/tiro/newadmin', "App\Http\Controllers\TiroController@newAdmin");
Route::middleware(['auth:sanctum', 'verified'])->any('/tiro/editadmin/{id}/{action}', "App\Http\Controllers\TiroController@editAdmin");
Route::middleware(['auth:sanctum', 'verified'])->any('/tiro/nari/{team}', "App\Http\Controllers\TiroController@nari");

//admin
Route::middleware(['auth:sanctum', 'verified'])->any('/admin', "App\Http\Controllers\AdminController@top");
Route::middleware(['auth:sanctum', 'verified'])->any('/admin/newinputer', "App\Http\Controllers\AdminController@newInputer");
Route::middleware(['auth:sanctum', 'verified'])->any('/admin/editinputer/{id}/{action}', "App\Http\Controllers\AdminController@editInputer");
Route::middleware(['auth:sanctum', 'verified'])->any('/admin/inputer/{id}', "App\Http\Controllers\AdminController@inputerDetail");
Route::middleware(['auth:sanctum', 'verified'])->any('/admin/newclient', "App\Http\Controllers\AdminController@newClient");
Route::middleware(['auth:sanctum', 'verified'])->any('/admin/editclient/{id}/{action}', "App\Http\Controllers\AdminController@editClient");
Route::middleware(['auth:sanctum', 'verified'])->any('/admin/client/{id}', "App\Http\Controllers\AdminController@clientDetail");

//inputer
Route::middleware(['auth:sanctum', 'verified'])->any('/inputer', "App\Http\Controllers\InputerController@top");

//client
Route::middleware(['auth:sanctum', 'verified'])->any('/client', "App\Http\Controllers\ClientController@top");

//therapist
Route::middleware(['auth:sanctum', 'verified'])->any('/therapist', "App\Http\Controllers\TherapistController@top");

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
