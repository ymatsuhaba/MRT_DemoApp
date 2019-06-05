<?php

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

Route::auth();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', [
    'uses' => 'ContactMessageController@create'
]);
Route::post('/contact', [
    'uses' => 'ContactMessageController@create'
]);

Route::get('/form', 'ContactMessageController@form');


Route::get('/login','LoginController@create');

Route::get('/loginform','LoginController@form');


Route::get('/home', 'HomeController@index')->name('home');


Route::get('/about', [
    'uses' => 'AboutController@show'
]);



Route::get('/v_bind_test', function () {
    return view('v_bind_test')->with('test', '変数テスト');
});

Route::get('/post_test', 'PostTestController@form');


Route::post('/post_test', 'PostTestController@form');

        //search のルーティング
Route::get('/search', 'SearchController@search');

Route::post('/search', 'SearchController@search');

Route::get('/list', 'ListController@list');

Route::get('/inquery', 'InqueryController@Inquery');

        //new のルーティング
Route::get('/new', 'NewController@new');

Route::get('/newresult', 'NewController@newresult');

        //検索
Route::get('/find', 'FindController@find');
        //登録者一覧
Route::get('/findresult', 'FindController@findresult');
        //新規登録
Route::get('find/create','FindController@edit');
        //登録結果画面
Route::get('find/store','FindController@store');
        //削除
Route::delete('/delete?id={{$query->id}}','FindController@destroy');





