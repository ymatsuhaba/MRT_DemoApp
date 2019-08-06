<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login;

class LoginController extends Controller
{
    public function index()
    {
        $login = Login::orderBy('created_at', 'desc')->get();
        return view('login.index')->with('login', $login);
    }

    public function create()
    {
        return view('login.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'id' => 'required'
        ]);

        $login = Login::firstOrNew([id => $request -> input('id')]);
        $login->id = $request -> input('id');
        $login->name = $request -> input('name');
        $login->from = $request -> input('from');
        $login->password = $request -> input('password');

        $login->save();

        return redirect('/login')->with('success','Success');


    }

    public function show($id)
    {
        $login =Login::find($id);

        return view('login.show')->with('login',$login);
    }


    public function edit(Request $request)
    {
//        $this->validate($request,[
//            'id' => 'required'
//        ]);

        $login = Login::find($request->id);
        return view('login.edit',['login' => $login]);
    }


    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'id' => 'required'
        ]);

        $login = Login::find($request->$id);
        $login->id = $request->id;
        $login->name = $request->name;
        $login->from = $request->from;
        $login->password = $request->password;
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
