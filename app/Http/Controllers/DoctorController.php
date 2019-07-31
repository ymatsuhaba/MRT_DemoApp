<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;

class DoctorController extends Controller
{
    public function index()
    {
        $doctor_list = Doctor::all();

//        $doctor_list = $query->orderBy('doctor_id');

        return view('doctor', compact('doctor_list'));
//        return view('doctor')->with('doctor.blade.php',$doctor);
    }
    //
}
