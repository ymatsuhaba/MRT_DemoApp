<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Nickname;

class ContactController extends Controller
{
    // 登録画面表示処理
    public function edit()
    {
        return view('contact');
    }
}

