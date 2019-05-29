<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use \App\Nickname;

class ContactMessageController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function form(Request $name)
    {
        // 登録処理
        $value = new Nickname;
        $form = $name->all();
        unset($form['_token']);
        $value->fill($form)->save();

        // 登録データ取得
        $nickname   = Nickname::all();
        return view('form', compact( 'nickname'));
    }
}

