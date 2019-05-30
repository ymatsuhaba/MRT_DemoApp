<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class NewController extends Controller
{
    //    newページ
    public function new()
    {
        return view('new');
    }


    // newresultページ
    public function newresult(Request $name)
    {
        // 登録処理
        $value = new Article();
        $form = $name->all();
        unset($form['_token']);
        $value->fill($form)->save();


        // 登録データ取得
        $new   = Article::all();
        return view('newresult', compact('new'));
    }


}