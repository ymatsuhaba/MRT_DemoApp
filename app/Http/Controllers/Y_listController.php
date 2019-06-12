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
    public function index(Request $request)
    {
        $id = $request->input('id');
        $name = $request->input('name');
        $from = $request->input('from');
        $password = $request->input('password');
        if($id == NULL and $name == NULL and $from == NULL and $password == NULL ) {
            $logindata = login::all();
        } else {
            $logindata= login::where('id', $id)->where('name', $name)->orWhere('from', $from)->orWhere('password', $password)->get();
        }
        return view ('y_list',compact('logindata'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $logindata = Login::find($id);
        $logindata->delete();
        return redirect('/')->with('success','Delete');
//        $data = Nickname::where('id', $request->input('id'))->first();
//        return view('inquery', compact('data'));
    }
}
