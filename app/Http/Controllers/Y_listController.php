<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login;

class Y_listController extends Controller
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
//        return view ('y_list',compact('login'));
//    }
    public function index()
    {
//        $login = Login::all();
        $login = Login::orderBy('created_at', 'desc')->get();
        return view('y_list')->with('login', $login);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('y_list.create');
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
        $login->id = $required -> input('id');
        $login->id = $required -> input('name');
        $login->id = $required -> input('from');
        $login->id = $required -> input('password');

        $login->save();

        return redirect('/')->with('success','Success');

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
        return view('y_list.show')->with('login',$login);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $login =Login::find($id);
        return view('y_list.edit')-with('login',$login);
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
        $login = Todo::find($id);
        $login->id = $request->input('id');
        $login->name = $request->input('name');
        $login->from = $request->input('from');
        $login->password = $request->input('password');
        $login->save();
        return redirect('/')->with('success', 'Updated');
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
        return redirect('/')->with('success', 'Deleted');

    }
}
