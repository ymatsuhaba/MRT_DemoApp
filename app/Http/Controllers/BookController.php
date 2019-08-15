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
            'release_date'=>'date',
            'status'=>'required',
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
    //詳細ページ
    public function details(Request $id){

        $books =Books::find($id)->first();
        return view('BookRoom.detail')->with('books',$books);
    }
    //編集ページ
    public function edit(Request $id)
    {
        //値を取得
        $books = Books::find($id)->first();
        return view('BookRoom.edit')->with('books',$books);
    }
    //更新
    public function update(Request $request)
    {
        $rules = [
            'title'=>'required',
            'author'=>'required',
            'release_date'=>'date','required',
        ];
        $this->validate($request, $rules);

        //レコードを検索
        $books = Books::find($request->id)->first();
        //値を代入
        $books->title        = $request->title;
        $books->author       = $request->author;
        $books->release_date = $request->release_date;
        $books->status       = $request->status;
        //保存（更新）
        $books->save();
        return view('BookRoom.update');
    }

    public function delete(Request $request)
    {
        //削除対象レコードを検索
        Books::find($request->id)->delete();
        //リダイレクト
        return redirect()->to('/bookRoom');
    }
}
