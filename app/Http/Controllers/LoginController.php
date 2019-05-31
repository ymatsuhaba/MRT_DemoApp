<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use \App\Login;

class LoginController extends Controller
{
//    public function store(Request $request)
//    {
//        return redirect()->back()->with('flash_message','Thank you for your message');
//    }


//loginページの表示
    public function create()
    {
        return view('login');
    }

//Formページの表示
    public function form(Request $name)
    {
        // 登録処理
        $value = new Login();
        $form = $name->all();
        unset($form['_token']);
        $value->fill($form)->save();

        // 登録データ取得
        $logindata  = Login::all();
        return view('loginform', compact( 'logindata'));
    }

    // LoginFormページ
    public function form_refactored(Request $request)
    {
        // Nicknameクラスをインスタンス化
        $mdl_logindata = new Login;

        // リクエストのデータをArray型で取得し、Collection型へ変換
        $form_data = new Collection($request->all());

        // 不要なキーを削除
        $form_data->forget('_token');

        // Collection型からArray型へ変換し、Nicknameインスタンスへ代入、データベースへ保存
        $mdl_logindata->fill($form_data->toArray())->save();

        // 登録データ取得
        $logindata   = Login::all();
        return view('loginform', compact('logindata'));
    }
}
