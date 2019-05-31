<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Nickname;

class InqueryController extends Controller
{
    // Listページ
    public function Inquery()
    {
        $name = $request->input('name');

        $id = $request->input('id');

        $search = Nickname::where('id', $id);
        return view('inquery', compact('search'));
    }
}