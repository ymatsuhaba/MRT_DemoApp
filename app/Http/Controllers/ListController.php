<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Nickname;
use mysql_xdevapi\Session;

class ListController extends Controller
{
    // Listページ
    public function list(Request $request)
    {
        $name = $request->input('name');
        $from = $request->input('from');
        $sex = $request->input('from');
        $birthday = $request->input('birthday');

        $search = Nickname::where('name', $name)->orWhere('from', $from)->orWhere('sex', $sex)->orWhere('birthday', $birthday)->get();
        $url = "http://localhost:3000/inquery";
        return view('list', compact('search', 'url'));
    }

    public function link()
    {
        $id = Session::all()->input('id');
        $obj = Nickname::where('id', $id);

        return view('inquery', compact('obj'));
    }
}