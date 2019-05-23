<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function create()
    {
        return view('login');
    }

//    public function login()
//    {
//        $name = Request::input('name');
//        return view('result')->with('name', $name);
//    }
    public function result(Request $name)

    {
        $nickname = collect(['name1' => 'ぽん', 'name2' => 'ぞう', 'name3' => 'ちゃん', 'name4' => 'くん', 'name5' => 'まる']);
        return view('result', compact('name', 'nickname'));
    }
}

