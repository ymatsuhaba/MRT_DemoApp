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

Route::get('/search', 'SearchController@search');

Route::post('/search', 'SearchController@search');

Route::get('/list', 'ListController@list');

Route::get('/inquery', 'InqueryController@Inquery');

Route::get('/update', 'UpdateController@edit');
Route::post('/update', 'UpdateController@update');

Route::get('/update_result', function () { return view('update_result');});

Route::get('/delete', 'DeleteController@edit');
Route::post('/delete', 'DeleteController@delete');

Route::get('/delete_result', function () { return view('delete_result');});

Route::get('/new', 'NewController@new');

Route::get('/newresult', 'NewController@newresult');