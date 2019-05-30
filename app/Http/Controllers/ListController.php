<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Nickname;

class ListController extends Controller
{
    // Listページ
    public function list(Request $request)
    {
        $name = $request->input('name');
        $from = $request->input('from');
        $sex = $request->input('from');
        $birthday = $request->input('birthday');


//        // 一覧ページ
//        if (Request::has('name')) {
//            $name = $request->input('name');
//        } else {
//            $name = null;
//        }
//        if (Request::has('from')) {
//            $from = Request::input('from');
//        } else {
//            $from = null;
//        }
//        if (Request::has('sex')) {
//            $sex = Request::input('sex');
//        } else {
//            $sex = null;
//        }
//        if (Request::has('birthday')) {
//            $birthday = Request::input('birthday');
//        } else {
//            $birthday = null;
//        }

        $search = Nickname::where('name', $name)->orWhere('from', $from)->orWhere('sex', $sex)->orWhere('birthday', $birthday)->get();
        $url = "http://localhost:3000/inquery";
        return view('list', compact('search', 'url'));
    }
}