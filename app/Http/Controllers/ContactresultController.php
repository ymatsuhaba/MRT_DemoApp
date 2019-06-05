<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Nickname;

class ContactresultController extends Controller
{
    public function create(Request $request)
    {
        // 登録処理
        $value = new Nickname; // 左辺：新キャラ　右辺：既存キャラ　new：偉いやつ
        $form = $request->all();
        unset($form['_token']);
        $value->fill($form)->save();
        // １．個別に取得して代入する。⇛リーダブルコードを見ればわかる⇛フォームの内容が変わるとバグる。
        // ２．unsetではなくlistから除外する書き方
        // ３．「_token」は予めのぞいた変数を使う

        return view('contact_result', compact('request'));
    }
}