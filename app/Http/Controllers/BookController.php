<?php

namespace App\Http\Controllers;

use App\Books;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    //一覧画面ページ
    public function list() {

//        $collection =new Books();
//        $book_list =$collection->list();

        $book_list =Books::all();


        return view('BookRoom.list',compact('book_list'));
    }

    //新規登録画面ページ
    public function register() {

        return view('BookRoom.register');

    }

    //新規登録確認画面ページ
    public function confirm(Request $request) {

        //入力した値を取得
        $entered =new Books();

        $entered->title=$request->input('title');
        $entered->author= $request->input('author');
        $entered->release_date= $request->input('release_date');
//        $entered->cover= $request->input('cover');
        $entered->status= $request->input('status');
//        $entered->registration_date= $request->input('registration_date');
//        $entered->update_date= $request->input('update_date');

        //入力した値を保存
        $entered->save();

//        //一覧画面に値をリダイレクト
        return view('BookRoom.confirm',compact('entered'));
    }
}
