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

// 検索ページ
Route::get('/search', 'SearchController@search');
Route::post('/search', 'SearchController@search');

// 一覧ページ
Route::get('/list', 'ListController@list');

// 照会ページ
Route::get('/inquery', 'InqueryController@Inquery');

// 登録ページ
Route::get('/contact'        , 'ContactController@edit');
Route::get('/contact_result' , 'ContactresultController@create');

// 更新ページ
Route::get('/update'         , 'UpdateController@edit');
Route::get('/update_result'  , 'UpdateresultController@update');

// 削除ページ
Route::get('/delete'         , 'DeleteController@edit');
Route::get('/delete_result'  , 'DeleteresultController@delete');


//y_list
Route::get('/login','LoginController@create');
Route::get('/loginform','LoginController@form');
Route::resource('y_list', 'Y_listController',['only' =>'index','update', 'destroy']);
Route::resource('y_search', 'Y_searchController',['only' =>'index','update', 'destroy']);



Route::get('/home', 'HomeController@index')->name('home');


Route::get('/about', [
    'uses' => 'AboutController@show'
]);



Route::get('/v_bind_test', function () {
    return view('v_bind_test')->with('test', '変数テスト');
});

Route::get('/post_test', 'PostTestController@form');


Route::post('/post_test', 'PostTestController@form');

Route::get('/new', 'NewController@new');

Route::get('/newresult', 'NewController@newresult');

//検索ページ
Route::get('/find', 'FindController@find');
//登録者一覧ページ
Route::get('/findresult', 'FindController@findresult');
//新規登録ページ
Route::get('/create', 'FindController@create');

Route::get('/store', 'FindController@store');

Route::get('/destroy', 'FindController@destroy');

Route::get('/destroyresult', 'FindController@destroyresult');
//登録情報更新ページ
Route::get('/renew'         , 'FindController@renew');
Route::get('/renew_result'  , 'FindController@renew_result');