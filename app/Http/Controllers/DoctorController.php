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

    public function index(Request $request)
    {
        $doctor_list = DB::table('doctors');
//        キーワード受け取り
        $doctor_name = $request->input('doctor_name');
        $birthplace = $request->input('birthplace');
        $sex = $request->input('sex');
        $date_of_birth = $request->input('date_of_birth');
        #もしキーワードがあれば

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

        $doctors= $doctor_list->get();

        return view('doctor', compact('doctors'));
    }
}
