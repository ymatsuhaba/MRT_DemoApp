<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactMessegeController extends Controller
{
    public function create()
    {
        return view('contact');
    }
    public function store(Requerst $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
    }
}
