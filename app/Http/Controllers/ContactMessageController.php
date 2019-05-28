<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use \App\Nickname;

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
//    public function store()
//    {
//        $name = Request::input('name');
//        return view('form')->with('name', $name);
//    }
    public function form(Request $name)
    {
        // 登録処理
//        App\Nickname::create(['name' => $name -> input('name'), 'from' => $name -> input('from')]);
        //
//        Nickname::create($name);

        $value = new Nickname;
        $form = $name->all();
        unset($form['_token']);
        $value->fill($form)->save();

        $nickname = collect(['name1' => 'ぽん', 'name2' => 'ぞう', 'name3' => 'ちゃん', 'name4' => 'くん', 'name5' => 'まる']);
        return view('form', compact('name', 'nickname'));
    }
}

