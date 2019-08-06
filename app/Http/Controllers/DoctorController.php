<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    //  search_test_hページを表示
    public function start()
    {
        return view('search_test_h');
    }
    // 検索処理
    public function index(Request $request)
    {
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
    public function new_index()
    {
        return view('new_index');
    }
    public function new_confirm(Request $request)
    {
        $data = $request->all();
        return view('new_confirm')->with($data);
    }
    public function finish(Request $request)
    {
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
}
