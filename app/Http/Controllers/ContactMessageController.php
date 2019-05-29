<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Nickname;
use Illuminate\Support\Collection;

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
        $nickname   = Nickname::all();
        return view('form', compact('nickname'));
    }

    // Formページ
    public function form_refactored(Request $request)
    {
        // Nicknameクラスをインスタンス化
        $mdl_nickname = new Nickname;

        // リクエストのデータをArray型で取得し、Collection型へ変換
        $form_data = new Collection($request->all());

        // 不要なキーを削除
        $form_data->forget('_token');

        // Collection型からArray型へ変換し、Nicknameインスタンスへ代入、データベースへ保存
        $mdl_nickname->fill($form_data->toArray())->save();

        // 登録データ取得
        $nickname   = Nickname::all();
        return view('form', compact('nickname'));
    }
}

