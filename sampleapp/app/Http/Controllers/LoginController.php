<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function store(Request $request)
    {
        return redirect()->back()->with('flash_message','Thank you for your message');
    }
}
