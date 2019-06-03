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

    public function delete(Request $request)
    {
        //レコードを検索
        $nickname = Nickname::where('id', $request->input('id'))->first();

        //削除
        $nickname->delete();
        return view('delete_result', compact('request'));
    }
}