<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ValiDoctorController extends Controller
{
    public function confirm(\App\Http\Requests\ValiDoctorRequest $request) {
        $data = $request->all();
        return view('validation.confirm')->with($data);
    }
}
