<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Nickname;

class AlldeleteController extends Controller
{
    public function alldelete(Request $request)
    {
        // 検索条件を取得
        $name = $request->input('name');
        $from = $request->input('from');
        $sex = $request->input('sex');
        $birthday = $request->input('birthday');

        // 削除対象データ取得
        if($name == NULL and $from == NULL and $sex == NULL and $birthday == NULL) {
            $search = Nickname::all()->each->delete();
        } else {
            $search = Nickname::where('name', 'like', "%$name%")
                ->Where('from', 'like', "%$from%")
                ->Where('sex', 'like', "%$sex%")
                ->Where('birthday', 'like', "%$birthday%")
                ->get()->each->delete();
        }

        return redirect('list');
    }
}