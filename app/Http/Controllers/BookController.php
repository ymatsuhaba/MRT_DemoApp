<?php

namespace App\Http\Controllers;

use App\Books;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //一覧画面ページ
    public function list(Request $request) {

        $collection = new books();
        $book_list = $collection->list($request);

        return view('BookRoom.list',['books'=>$book_list]);
    }

    //新規登録画面ページ
    public function register() {
        return view('BookRoom.register', compact('err_msg'));
    }

    //新規登録確認画面ページ
    public function confirm(Request $request) {

         $rules = [
             'title'=>'required',
             'status'=>'required',
             'release_date'=>'date',
             'image_url' => ['file', 'image', 'mimes:jpeg,png']
        ];
        $this->validate($request, $rules);

        //入力した値を取得
        $entered =new Books();

        $entered->title=$request->input('title');
        $entered->author= $request->input('author');
        $entered->release_date= $request->input('release_date');
        $entered->cover= $request->input('cover');
        $entered->status= $request->input('status');

        //入力した値を保存
        $entered->save();

        //一覧画面に値をリダイレクト
        return view('BookRoom.confirm',compact('entered'));
    }

        //検索ページ
    public function search(){

        return view('BookRoom.search');
    }
}
