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

// ルーティング
// '/'おおもとのページにとぶ（とぶのにはControllerは無くてもよい）
// Route::get('/', function () {
    // welcomeというview(ウェルカムページ)をひらく
    // view()関数 意味合い的にはview('welcome.blade.php')
    // return view('welcome');
// });

// コントロールを介す
// どのControllerの、どのactionを呼び出すのか
// WelcomeControllerのindexアクション　データの一覧表示をする
Route::get('/','WelcomeController@index');

// リクエストでcontactがきたとき
Route::get('contact', 'WelcomeController@contact');
Route::get('about', 'PagesController@about');
Route::get('tweets', 'TweetsController@index');


