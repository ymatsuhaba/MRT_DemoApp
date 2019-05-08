<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactMessegeController extends Controller
{
    public function create()
    {
        return view('contact');
    }
}
