<?php

namespace App\Http\Controllers;

use foo\bar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\LibBook;

class LibBookController extends Controller
{

    //新規登録画面の表示
    public function new_book()
    {
        return view('new_index');
    }

    //新規登録確認画面の表示
    public function new_confirm(Request $request)
    {
        //入力された値を新規登録確認画面に表示
        $data = $request->all();
        return view('new_confirm')->with($data);
    }

    //データの保存
    public function finish(Request $request)
    {
        //バリデーション

        //評価対象
        $inputs = $request->all();

        //ルール
        $rules = [
            'doctor_name' => 'required|regex:/^[a-zA-Z +]*$/|',
            'birthplace' => 'required|regex:/^[a-zA-Z +]*$/|',
            'sex' => 'required|in:male,female|',
            'date_of_birth' => 'required|date_format:Y-m-d|before:today'
        ];

        //出力されるメッセージ
        $messages = [
            'doctor_name.required' => '名前は必須です。',
            'doctor_name.regex' => 'アルファベット(半角)で入力してください。',
            'birthplace.required' => '出身地は必須です。',
            'birthplace.regex' => 'アルファベット(半角)で入力してください。',
            'sex.required' => '性別は必須です。',
            'sex.in' => "'male'または'female'で入力してください。",
            'date_of_birth.date' => 'フォーマット通りに入力してください。',
            'date_of_birth.required' => '生年月日は必須です。',
            'date_of_birth.date_format' => 'YYYY-MM-DDで入力してください。',
            'date_of_birth.before' => '正しい日付で入力してください。',
        ];

        $validation = \Validator::make($inputs, $rules, $messages);

        //エラー時の処理
        if ($validation->fails()) {
            return redirect()->to('/new_index')->withErrors($validation->errors())->withInput();
        }

        //バリデーションOKなら、下記の通り新規登録処理に移る。
        // doctorオブジェクト生成
        $new_doctor = new \App\Doctor;

        // 値の登録
        $new_doctor->doctor_name = $request->doctor_name;
        $new_doctor->birthplace = $request->birthplace;
        $new_doctor->sex = $request->sex;
        $new_doctor->date_of_birth = $request->date_of_birth;

        // 保存
        $new_doctor->save();

        // 一覧画面にリダイレクト
        return redirect()->to('/doctor');
    }


    //更新確認画面の表示
    public function edit_confirm(Request $request)
    {
        //バリデーション

        //評価対象
        $inputs = $request->all();

        //ルール
        $rules = [
            'doctor_name' => 'required|regex:/^[a-zA-Z +]*$/|',
            'birthplace' => 'required|regex:/^[a-zA-Z +]*$/|',
            'sex' => 'required|in:male,female|',
            'date_of_birth' => 'required|date_format:Y-m-d|before:today'
        ];

        //出力されるメッセージ
        $messages = [
            'doctor_name.required' => '名前は必須です。',
            'doctor_name.regex' => 'アルファベット(半角)で入力してください。',
            'birthplace.required' => '出身地は必須です。',
            'birthplace.regex' => 'アルファベット(半角)で入力してください。',
            'sex.required' => '性別は必須です。',
            'sex.in' => "'male'または'female'で入力してください。",
            'date_of_birth.date' => 'フォーマット通りに入力してください。',
            'date_of_birth.required' => '生年月日は必須です。',
            'date_of_birth.date_format' => 'YYYY-MM-DDで入力してください。',
            'date_of_birth.before' => '正しい日付で入力してください。',
        ];

        $validation = \Validator::make($inputs, $rules, $messages);

        //エラー時の処理
        if ($validation->fails()) {
            //エラー時にエラーメッセージと入力データを保持して編集画面にリダイレクト
            return redirect()->back()->withErrors($validation->errors())->withinput();
        }

        //バリデーションOKなら、下記の通り新規登録処理に移る。
        //入力された値を新規登録確認画面に表示
        $data = $request->all();

        return view('edit_confirm')->with($data);
    }


}