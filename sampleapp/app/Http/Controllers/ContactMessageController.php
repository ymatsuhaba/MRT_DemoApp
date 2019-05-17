<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    public function create()
    {
        return view('contact');
    }
//    public function store(Request $request)
//    {
//        $this->validate($request, [
//            'name' => 'required',
//            'email' => 'required|email',
//            'message' => 'required'
//        ]);
//
//        Mail::send('emails.contact-message',[
//            'msg' => $request->message
//        ],function($mail) use($request){
//            $mail->from($request->email, $request->name);
//
//            $mail->to('mrt@gmail.com')->subject('Contact Message');
//        });
//
//        return redirect()->back()->with('flash_message','Thank you for your message');
//    }
    public function store()
    {
        $name = Request::input('name');
        return view('form')->with('name', $name);
    }
    public function form(Request $name)

    {
        $nickname = collect(['name1' => 'ぽん', 'name2' => 'ぞう', 'name3' => 'ちゃん', 'name4' => 'くん', 'name5' => 'まる']);
        return view('form', compact('name', 'nickname'));
    }
}

