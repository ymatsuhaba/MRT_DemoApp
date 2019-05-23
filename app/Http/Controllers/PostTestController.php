<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostTestController extends Controller
{
    public function form(Request $name)
    {
        $nickname = collect(['name1' => 'ぽん', 'name2' => 'ぞう', 'name3' => 'ちゃん', 'name4' => 'くん', 'name5' => 'まる']);
        return view('post_test', compact('name', 'nickname'));
    }
}

