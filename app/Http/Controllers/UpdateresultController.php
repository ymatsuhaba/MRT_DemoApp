<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Nickname;

class UpdateController extends Controller
{
    // 照会ページ
    public function update(Request $request)
    {
        $data = Nickname::where('id', $request->input('id'))->first();
        return view('update', compact('data'));
    }
}