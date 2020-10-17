<?php

use App\Timeline; //登録削除編集ができる
use App\Mainpage;
use App\Comment;
use App\Mypage;
use Illuminate\Http\Request;

//登録画面表示
Route::get('/', 'TimelinesController@index');

// Route::get('/mainpages', 'MainpagesController@memo');

Route::get('/comments', 'CommentsController@index');

Route::get('/mainpages','MainpagesController@memo');

// Route::get('/comments', function () {
//   return view('main.mypages');
// });
//登録処理
Route::get('/mypages', 'MypagesController@index');

Route::post('/mypages', 'MypagesController@store');

//更新画面表示
Route::post('/mypagesedit/{mypage}','MypagesController@edit');

//更新処理
Route::post('mypages/update', 'MypagesController@update');

//削除処理
Route::delete('/mypage/{mypage}', 'MypagesController@destroy');

//ログイン関連
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('User')->prefix('user')->name('user.')->group(function () {

    // ログイン認証関連
    Auth::routes([
        'register' => true,
        'reset'    => false,
        'verify'   => false
    ]);

    // ログイン認証後
    Route::middleware('auth:user')->group(function () {

        // TOPページ
        Route::resource('home', 'HomeController', ['only' => 'index']);

    });
});

// 管理者
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {

    // ログイン認証関連
    Auth::routes([
        'register' => true,
        'reset'    => false,
        'verify'   => false
    ]);

    // ログイン認証後
    Route::middleware('auth:admin')->group(function () {

        // TOPページ
        Route::resource('home', 'HomeController', ['only' => 'index']);

    });

});