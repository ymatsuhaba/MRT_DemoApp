<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use \App\login;

class LoginController extends Controller
{
//    public function store(Request $request)
//    {
//        return redirect()->back()->with('flash_message','Thank you for your message');
//    }

    public function create()
    {
        return view('login');
    }


    public function form(Request $name)
    {
        // 登録処理
        $value = new login();
        $form = $name->all();
        unset($form['_token']);
        $value->fill($form)->save();

        // 登録データ取得
        $login  = login::all();
        return view('loginform', compact( 'nickname'));
    }




}
