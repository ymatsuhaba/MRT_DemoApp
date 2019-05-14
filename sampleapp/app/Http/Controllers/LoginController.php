<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function create()
    {
        return view('login');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        Mail::send('emails.contact-message',[
            'msg' => $request->message
        ],function($mail) use($request){
            $mail->from($request->email, $request->name);

            $mail->to('mrt@gmail.com')->subject('Contact Message');
        });

        return redirect()->back()->with('flash_message','Thank you for your message');
    }
}

