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


Route::get('/', function () {
    return view('welcome');
});

// つよぽん
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
// 電卓ページ
Route::get('/calc'           , 'CalcController@calc');
Route::post('/calc'          , 'CalcController@calc');

//Yuckyのリソースコントローラ
Route::resource('login', 'LoginController');

//Yuckyの計算機第一弾
Route::resource('calculator', 'CalculatorController');
Route::get('calculator.add','CalculatorController@add');
Route::get('calculator.subtract','CalculatorController@subtract');
Route::get('calculator.multify','CalculatorController@multify');
Route::get('calculator.divide','CalculatorController@divide');
Route::get('calculator.searchAdd', 'CalculatorController@searchAdd');
Route::get('calculator.searchSub', 'CalculatorController@searchSub');
Route::get('calculator.searchMul', 'CalculatorController@searchMul');
Route::get('calculator.searchDiv', 'CalculatorController@searchDiv');



// しょう
// 検索ページ
Route::get('/find', 'FindController@find');
// 登録者一覧ページ
Route::get('/findresult', 'FindController@findresult');
// 新規登録ページ
Route::get('/create', 'FindController@create');
// 新規登録結果ページ
Route::get('/store', 'FindController@store');
// 削除確認ページ
Route::get('/destroy', 'FindController@destroy');
// 削除結果ページ
Route::get('/destroyresult', 'FindController@destroyresult');
// 登録情報更新ページ
Route::get('/renew'         , 'FindController@renew');
// 登録情報更新結果ページ
Route::get('/renew_result'  , 'FindController@renew_result');
//詳細確認ページ
Route::get('/details'  , 'FindController@details');
// DENTAKUN のページ
Route::get('/dentakun', 'DentakunController@index');
Route::get('/dentakunresult', 'DentakunController@result');
// DENTAKUN Jrのページ
Route::get('/dentakunjr', 'JrController@index');
Route::get('/dentakunjrresult', 'JrController@result');

// その他
Route::get('/v_bind_test', function () { return view('v_bind_test')->with('test', '変数テスト');});
Route::get('/post_test', 'PostTestController@form');
Route::post('/post_test', 'PostTestController@form');
Route::get('/new', 'NewController@new');

Route::get('/newresult', 'NewController@newresult');

