<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Nickname;

class DeleteController extends Controller
{
    // 削除ページ
    public function edit(Request $request)
    {
        $data = Nickname::where('id', $request->input('id'))->first();
        return view('delete', compact('data'));
    }
}