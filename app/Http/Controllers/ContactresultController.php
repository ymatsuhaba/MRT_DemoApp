<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Nickname;

class ContactresultController extends Controller
{
    public function create(Request $request)
    {
        // 登録処理
        $name     = 'MRT太郎';
        $from     = '東京都';
        $nickname = 'MRT';
        $sex      = '女性';
        $birthday = date('Y-m-d');
        $reason    = '株式会社MRT';

        // 未入力の場合
        if(!$request->input('name')) {
            $request->merge(['name' => $name]);
        }
        if(!$request->input('from')) {
            $request->merge(['from' => $from]);
        }
        if(!$request->input('nickname')) {
            $request->merge(['nickname' => $nickname]);
        }
        if(!$request->input('sex')) {
            $request->merge(['sex' => $sex]);
        }
        if(!$request->input('birthday')) {
            $request->merge(['birthday' => $birthday]);
        }
        if(!$request->input('reason')) {
            $request->merge(['reason' => $reason]);
        }

        $form = $request->all();
        $value = new Nickname;
        $value->fill($form)->save();
        // １．個別に取得して代入する。⇛リーダブルコードを見ればわかる⇛フォームの内容が変わるとバグる。
        // ２．unsetではなくlistから除外する書き方
        // ３．「_token」は予めのぞいた変数を使う

        return view('contact_result', compact('request'));
    }
}