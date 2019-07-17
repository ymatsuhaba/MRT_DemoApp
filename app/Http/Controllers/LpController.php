<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LpController extends Controller
{
    public function index() {
        return view('MRTLP.index');
    }
}
