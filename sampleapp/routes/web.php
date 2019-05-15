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

Route::get('/contact', [
    'uses' => 'ContactMessageController@create'
]);

Route::post('/form',function(){
    return view('form');
});


Route::get('/login', [
    'uses' => 'LoginController@create'
]);

Route::post('/login', [
    'uses' => 'LoginController@store',
    'as' => 'contact.store'
]);

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/about', function () {
    return view('about');
});

Route::get('/v_bind_test', function () {
    return view('v_bind_test')->with('test', '変数テスト');
});
