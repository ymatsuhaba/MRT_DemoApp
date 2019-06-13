<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcalController extends Controller
{
    public function index(){
        return view ('/calcal');
    }
}
