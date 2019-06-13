<?php

namespace App\Http\Controllers;

use App\Article;
use App\Find;
use Illuminate\Http\Request;

class FindController extends Controller
{       //findページ
    public function find()
    {
        return view('find');
    }

    //findresultページ
    public function findresult()
    {
        $query = Find::all();
        //全件取得
        //$users = $query->get();
        //ページネーション
//        $users = $query->orderBy('id', 'desc')->paginate(10);
        return view('findresult',compact('query'));
    }

    public function edit()
    {
        //createに転送
        return view('create');
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $query)
    {

        // 登録処理
        $value = new Find();
        $form = $query->all();
        unset($form['_token']);
        $value->fill($form)->save();


        $query = Find::all()->first();


        return view('store', compact('query'));
    }

    //レコードの削除
    public function destroy($id) {
        //削除処理
        $finds =Find::findorFail($id);
        $finds ->delete();
        //findsテーブルのレコードを全件取得


    }

}



