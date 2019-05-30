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

Route::get('/login',function(){
    return view('login');
});

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/about', function () {
    return view('about');
});

Route::get('/v_bind_test', function () {
    return view('v_bind_test')->with('test', '変数テスト');
});

Route::get('/post_test', 'PostTestController@form');


Route::post('/post_test', 'PostTestController@form');

Route::get('/search', 'SearchController@search');

Route::post('/search', 'SearchController@search');

Route::get('/list', 'listController@list');
