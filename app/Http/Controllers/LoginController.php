<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function index(Request $request)
//    {
//        $id = $request->input('id');
//        $name = $request->input('name');
//        $from = $request->input('from');
//        $password = $request->input('password');
//
//        if($id == NULL and $name == NULL and $from == NULL and $password == NULL ) {
//            $login = login::all();
//        } else {
//            $login= login::where('id', $id)->where('name', $name)->orWhere('from', $from)->orWhere('password', $password)->get();
//        }
//        return view ('login',compact('login'));
//    }
    public function index()
    {
//        $login = Login::all();
        $login = Login::orderBy('created_at', 'desc')->get();
        return view('login.index')->with('login', $login);
    }
    /**
     * Show the form for creating a nesw resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('login.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'id' => 'required'
        ]);

        $login =new Login;
        $login->id = $request -> input('id');
        $login->name = $request -> input('name');
        $login->from = $request -> input('from');
        $login->password = $request -> input('password');

        $login->save();

        return redirect('/login')->with('success','Success');

//        $value = new Nickname; // 左辺：新キャラ　右辺：既存キャラ　new：偉いやつ
//        $form = $request->all();
//        unset($form['_token']);
//        $value->fill($form)->save();
//        // １．個別に取得して代入する。⇛リーダブルコードを見ればわかる⇛フォームの内容が変わるとバグる。
//        // ２．unsetではなくlistから除外する書き方
//        // ３．「_token」は予めのぞいた変数を使う
//
//        return view('contact_result', compact('request'));

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $login =Login::find($id);
        return view('login.show')->with('login',$login);
//        return 123;
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('login.edit');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $login = Login::find($id);
        $login->id = $request->input('id');
        $login->name = $request->input('name');
        $login->from = $request->input('from');
        $login->password = $request->input('password');
        $login->save();
        return redirect('/login')->with('success', 'Updated');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $login = Login::find($id);
        $login->delete();
        return redirect('/login')->with('success', 'Deleted');

    }
}
