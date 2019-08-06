<?php

namespace App\Http\Controllers;

use foo\bar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    //search_test_hページを表示
    public function start()
    {
        return view('search_test_h');
    }
    //検索処理
    public function index(Request $request)
    {
        //バリデーション

        //評価対象
        $inputs = $request->all();

        //ルール
        $rules = [
            'doctor_name'=>'nullable|regex:/^[a-zA-Z +]*$/|',
            'birthplace'=>'nullable|regex:/^[a-zA-Z +]*$/|',
            'sex'=>'nullable|in:male,female|',
            'date_of_birth'=>'nullable|date_format:Y-m-d|before:today'
        ];

        $messages = [
            'doctor_name.regex'=>'アルファベット(半角)で入力してください。',
            'birthplace.regex'=>'アルファベット(半角)で入力してください。',
            'sex.in'=>"'male'または'female'で入力してください。",
            'date_of_birth.date'=>'フォーマット通りに入力してください。',
            'date_of_birth.date_format'=>'YYYY-MM-DDで入力してください。',
            'date_of_birth.before'=>'正しい日付で入力してください。',
        ];

        $validation = \Validator::make($inputs,$rules,$messages);

        //エラー次の処理
        if($validation->fails())
        {
            return redirect()->back()->withErrors($validation->errors())->withInput();
        }

        //バリデーションOKなら、今まで通り。

        //table:doctorから$doctor_listにカラムを格納
        $doctor_list = DB::table('doctors');
        //  キーワード受け取り
        $doctor_name = $request->input('doctor_name');
        $birthplace = $request->input('birthplace');
        $sex = $request->input('sex');
        $date_of_birth = $request->input('date_of_birth');

        //もしキーワードがあれば
        if(!empty($doctor_name)) {
            $doctor_list->where('doctor_name', 'like', "%$doctor_name%");
        }
        if(!empty($birthplace)) {
            $doctor_list->where('birthplace', 'like', "%$birthplace%");
        }
        if(!empty($sex)) {
            $doctor_list->where('sex', $sex);
        }
        if(!empty($date_of_birth)) {
            $doctor_list->where('date_of_birth',$date_of_birth);
        }
        //$doctorsへ$doctor_listの値を返す
        $doctors= $doctor_list->get();

        return view('doctor', compact('doctors'));
    }
    //新規登録画面の表示
    public function new_index()
    {
        return view('new_index');
    }
    //確認画面の表示
    public function new_confirm(Request $request)
    {
        $data = $request->all();
        return view('new_confirm')->with($data);
    }
    //データの保存 一覧画面の表示
    public function finish(Request $request)
    {
        //バリデーション

        //評価対象
        $inputs = $request->all();

        //ルール
        $rules = [
            'doctor_name'=>'required|regex:/^[a-zA-Z +]*$/|',
            'birthplace'=>'required|regex:/^[a-zA-Z +]*$/|',
            'sex'=>'required|in:male,female|',
            'date_of_birth'=>'required|date_format:Y-m-d|before:today'
        ];

        $messages = [
            'doctor_name.required'=>'名前は必須です。',
            'doctor_name.regex'=>'アルファベット(半角)で入力してください。',
            'birthplace.required'=>'出身地は必須です。',
            'birthplace.regex'=>'アルファベット(半角)で入力してください。',
            'sex.required'=>'性別は必須です。',
            'sex.in'=>"'male'または'female'で入力してください。",
            'date_of_birth.date'=>'フォーマット通りに入力してください。',
            'date_of_birth.required'=>'生年月日は必須です。',
            'date_of_birth.date_format'=>'YYYY-MM-DDで入力してください。',
            'date_of_birth.before'=>'正しい日付で入力してください。',
        ];

        $validation = \Validator::make($inputs,$rules,$messages);

        //エラー次の処理
        if($validation->fails())
        {
            return redirect()->to('/new_index')->withErrors($validation->errors())->withInput();
        }

        //バリデーションOKなら、今まで通り。
    // doctorオブジェクト生成
        $new_doctor = new \App\Doctor;

    // 値の登録
        $new_doctor->doctor_name = $request->doctor_name;
        $new_doctor->birthplace = $request->birthplace;
        $new_doctor->sex = $request->sex;
        $new_doctor->date_of_birth = $request->date_of_birth;

    // 保存
        $new_doctor->save();

    // 一覧にリダイレクト
        return redirect()->to('/doctor');
    }
    public function edit_doctor($id)
    {
        $doctors = \App\Doctor::
    }
}
