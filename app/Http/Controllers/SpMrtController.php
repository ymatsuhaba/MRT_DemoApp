<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpMrtController extends Controller
{
    public function index(){
        return view('SpMrt.index');
    }
}
