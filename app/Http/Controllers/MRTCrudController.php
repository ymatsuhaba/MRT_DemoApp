<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MRTCrudController extends Controller
{
    public function index()
    {
        return view('MRT_form.index');

    }
}
