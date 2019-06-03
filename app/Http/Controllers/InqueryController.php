<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Nickname;

class InqueryController extends Controller
{
    // 照会ページ
    public function Inquery(Request $request)
    {
        $data = Nickname::where('id', $request->input('id'))->first();
        return view('inquery', compact('data'));
    }
}