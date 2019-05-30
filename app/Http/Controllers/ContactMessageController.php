<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Nickname;

class ContactMessageController extends Controller
{
    // Contactページ
    public function create()
    {
        return view('contact');
    }

    // Formページ
    public function form(Request $name)
    {
        // 登録処理
        $value = new Nickname; // 左辺：新キャラ　右辺：既存キャラ　new：偉いやつ
        $form = $name->all();
        unset($form['_token']);
        $value->fill($form)->save();
        // １．個別に取得して代入する。⇛リーダブルコードを見ればわかる⇛フォームの内容が変わるとバグる。
        // ２．unsetではなくlistから除外する書き方
        // ３．「_token」は予め覗いた変数を使う

        // 登録データ取得
        $nickname = Nickname::all();
        $url = "http://localhost:3000/contact";
        return view('form', compact('nickname', 'url'));
    }
}