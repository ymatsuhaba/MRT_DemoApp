<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Calculator;
use Illuminate\Support\Facades\DB;

class CalculatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $Calculators =Calculator::orderBy('created_at', 'desc')->get();
        $Calculator = DB::select('select * from calculators');
        return view('calculator.index')->with('Calculator', $Calculator);

//        return view('calculator.index');
    }

//足し算をする
    public function add(){

        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        $CalculatedNumber = $num1 + $num2;

        $Calculator =array($num1,'+',$num2,$CalculatedNumber);

//        $Calculator->save();

        return redirect ('/calculator',compact('Calculator'));
//        return redirect()->back();
    }

//引き算をする
    public function subtract(){

        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        $CalculatedNumber = $num1 - $num2;

        return view ('calculator.subtract',compact('CalculatedNumber'));
    }

//掛け算をする
    public function multify(){

        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        $CalculatedNumber = $num1 * $num2;

        return view ('calculator.multify',compact('CalculatedNumber'));
    }

//割り算をする
    public function divide(){

        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        $CalculatedNumber = $num1 / $num2;

        return view ('calculator.divide',compact('CalculatedNumber'));
    }

    public function create()
    {
        return view('calculator.create');
    }

//    public function store(Request $request)
//    {
//        $this->validate($request,[
//            'id' => 'required'
//        ]);
//
//        $login = Login::firstOrNew([id => $request -> input('id')]);
//        $login->id = $request -> input('id');
//        $login->name = $request -> input('name');
//        $login->from = $request -> input('from');
//        $login->password = $request -> input('password');
//
//        $login->save();
//
//        return redirect('/login')->with('success','Success');
////
////
//    }
//
    public function show()
    {
        return redirect('/calculator');
    }
//
//
//    public function edit(Request $request)
//    {
////        $this->validate($request,[
////            'id' => 'required'
////        ]);
//
//        $login = Login::find($request->id);
//        return view('login.edit',['login' => $login]);
//    }
//
//
//    public function update(Request $request,$id)
//    {
//        $this->validate($request,[
//            'id' => 'required'
//        ]);
//
//        $login = Login::find($request->$id);
//        $login->id = $request->id;
//        $login->name = $request->name;
//        $login->from = $request->from;
//        $login->password = $request->password;
//        $login->save();
//        return redirect('/login')->with('success', 'Updated');
//    }
//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
    public function destroy($id)
    {
        $Calculator= Calculator::find($id);
        $Calculator->delete();
        return redirect('/calculator')->with('success', 'Deleted');
    }
}
