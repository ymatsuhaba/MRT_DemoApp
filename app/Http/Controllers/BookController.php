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
        $err_msg = 'タイトルを入力してください。';



        return view('BookRoom.register', compact('err_msg'));
    }

    //新規登録確認画面ページ
    public function confirm(Request $request) {

            $request->validate([
            'title'=>'required',
            'status'=>'required',
            'release_date'=>'required',
            ]);


         $title = $request->input('title');

         if ($title === null){
             $err_msg = 'タイトルを入力してください。';
             return view('BookRoom.register', compact('err_msg'));
         }
        //        //バリデーションのメッセージの設定
//        $validate_messages = [
//            "required" => "未入力です。入力をしてください"
//        ];


        //入力した値を取得
        $entered =new Books();

        $entered->title=$request->input('title');
        $entered->author= $request->input('author');
        $entered->release_date= $request->input('release_date');
        //$entered->cover= $request->input('cover');
        $entered->status= $request->input('status');
        //$entered->registration_date= $request->input('registration_date');
        //$entered->update_date= $request->input('update_date');

        //入力した値を保存
        $entered->save();

        //一覧画面に値をリダイレクト
        return view('BookRoom.confirm',compact('entered'));
    }

    public function search(){

        return view('BookRoom.search');
    }
}
