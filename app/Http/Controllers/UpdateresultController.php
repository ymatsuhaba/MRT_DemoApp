<?php

namespace App\Http\Controllers;

use App\Nickname;
use Illuminate\Http\Request;

class UpdateresultController extends Controller
{
    public function update(Request $request)
    {
        //レコードを検索
        $nickname = Nickname::where('id', $request->input('id'))->first();
        //値を代入
        $nickname->name      = $request->name;
        $nickname->from      = $request->from;
        $nickname->nickname  = $request->nickname;
        $nickname->sex       = $request->sex;
        $nickname->birthday  = $request->birthday;
        $nickname->reason    = $request->reason;

        //保存（更新）
        $nickname->save();

        return view('update_result', compact('request'));
    }
}

