<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LibBook;

class LibBookController extends Controller
{
    //一覧画面表示
    public function startBook()
    {
        $books = \DB::table('lib_books') -> orderBy('created_at') -> get();
        return view('LibBook', compact('books'));
    }

    //新規登録画面の表示
    public function newBook()
    {
        return view('LibNewBook');
    }

    //新規登録確認画面の表示
    public function newConfirm(Request $request)
    {
        //バリデーション

        //評価対象
        $inputs = $request -> all();

        //ルール
        $rules = [
            'title' => 'required'
            , 'writer_name' => 'nullable|regex:/^[ぁ-んァ-ヶー一-龠a-zA-Za-zA-Z +]*$/|not_regex:[0-9０−９]'
            , 'release_date' => 'nullable|before:tomorrow'
            , 'lending_status' => 'required'
//            , 'cover_image' => 'image'
        ];

        //出力されるメッセージ
        $messages = [
            'title.required' => 'タイトルは必須です'
            , 'writer_name.regex' => '有効な著者名を入力してください'
            , 'writer_name.not_regex' => '有効な著者名を入力してください'
            , 'release_date.before' => '有効な日付を選択してください'
            , 'lending_status.required' => '貸出フラグを選択してください。'
//            , 'cover_image.image' => '拡張子が正しくありません'
        ];

        $validation = \Validator::make($inputs, $rules, $messages);

        //エラー時の処理
        if ($validation -> fails()) {
            //エラー時にエラーメッセージと入力データを保持して登録画面にリダイレクト
            return redirect() -> to('/LibNewBook') -> withErrors($validation -> errors()) -> withInput();
        }
        //バリデーションOKなら、下記の通り新規登録確認画面に移る。
        //入力された値を新規登録確認画面に表示
        $data = $request -> all();
        return view('LibNewConfirm') -> with($data);
    }

    //データの保存
    public function newEntry(Request $request)
    {


        //バリデーションOKなら、下記の通り新規登録処理に移る。
        // doctorオブジェクト生成
        $new_book = new LibBook();

//        $name = $request -> file('cover_image') -> getClientOriginalName();
//        $request -> file('cover_image') -> storeAs('cover_image', $name);
        // 値の登録
        $new_book -> title = $request -> title;
        $new_book -> writer_name = $request -> writer_name;
        $new_book -> release_date = $request -> release_date;
        $new_book -> lending_status = $request -> lending_status;
//        $new_book -> cover_image = $request -> cover_image;

        // 保存
        $new_book -> save();

        // 一覧画面にリダイレクト
        return redirect() -> to('/LibBook');
    }
}