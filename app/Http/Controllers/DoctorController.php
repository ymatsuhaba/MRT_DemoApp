<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;

class DoctorController extends Controller
{
    public function index()
    {
        //【Doctor】より全データ取得
        $doctor_list = Doctor::all();

        return view('doctor', compact('doctor_list'));
    }
}
