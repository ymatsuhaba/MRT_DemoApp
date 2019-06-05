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
        $sex = $request->input('sex');
        $birthday = $request->input('birthday');

        if($name == NULL and $from == NULL and $sex == NULL and $birthday == NULL) {
            $search = Nickname::all();
        } else {
            $search = Nickname::where('name', $name)->orWhere('from', $from)->orWhere('sex', $sex)->orWhere('birthday', $birthday)->get();
        }

        return view('list', compact('search'));
    }
}