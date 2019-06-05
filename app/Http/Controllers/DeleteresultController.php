<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Nickname;

class DeleteresultController extends Controller
{
    public function delete(Request $request)
    {
        //レコードを検索
        $nickname = Nickname::where('id', $request->input('id'))->first();
        //削除
        $nickname->delete();

        return view('delete_result');
    }
}