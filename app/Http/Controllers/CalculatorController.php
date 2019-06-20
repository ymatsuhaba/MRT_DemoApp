<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    public function add(Request $request){

        $Calculator = new Calculator();

        $num1 = $request->input('num1');
        $num2 = $request->input('num2');

        $CalculatedNumber = $num1 + $num2;



        $Calculator->num1 = $num1;
        $Calculator->num2 = $num2;
        $Calculator->calc = '+';
        $Calculator->CalculatedNumber = $CalculatedNumber;

        $Calculator->save();

        return view ('calculator.add',compact('num1','calc','num2','CalculatedNumber'));
    }

//引き算をする
    public function subtract(Request $request){

        $Calculator = new Calculator();

        $num1 = $request->input('num1');
        $num2 = $request->input('num2');

        $CalculatedNumber = $num1 - $num2;

        $Calculator->num1 = $num1;
        $Calculator->num2 = $num2;
        $Calculator->calc = '-';
        $Calculator->CalculatedNumber = $CalculatedNumber;

        $Calculator->save();

        return view ('calculator.subtract',compact('num1','calc','num2','CalculatedNumber'));
    }

//掛け算をする
    public function multify(Request $request){

        $Calculator = new Calculator();

        $num1 = $request->input('num1');
        $num2 = $request->input('num2');

        $CalculatedNumber = $num1 * $num2;

        $Calculator->num1 = $num1;
        $Calculator->num2 = $num2;
        $Calculator->calc = '*';
        $Calculator->CalculatedNumber = $CalculatedNumber;

        $Calculator->save();

        return view ('calculator.multify',compact('num1','calc','num2','CalculatedNumber'));
    }

//割り算をする
    public function divide(Request $request){

        $Calculator = new Calculator();


        $num1 = $request->input('num1');
        $num2 = $request->input('num2');

        $CalculatedNumber = $num1 / $num2;

        $Calculator->num1 = $num1;
        $Calculator->num2 = $num2;
        $Calculator->calc = '/';
        $Calculator->CalculatedNumber = $CalculatedNumber;

        $Calculator->save();

        return view ('calculator.divide',compact('num1','calc','num2','CalculatedNumber'));
    }

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

//    public function search(Request $request)
//    {
//        $Calculator->num1 = $request->num1;
//        $Calculator->num2 = $request->num2;
//        $Calculator->calc = $request->calc;
//        $Calculator->CalculatedNumber = $request->CalculatedNumber;
//
//
//        $Calculator = Calculator::where('category', $request->calc)-> get();
//        return view('calculator.search', ['Calculator' => $Calculator]) ;
//    }


//    public function destroy($id)
//    {
//        $Calculator= Calculator::find($id);
//        $Calculator->delete();
//        return ('calculator.delete');
//    }

    public function searchAdd()
    {
        //レコードを検索
        $searchAdd = Calculator::where('calc')->string('+')->find();
//      $searchAdd = DB::select('select * from calculators')->get('calc')->string('+');
//        $Callator = DB::select('select * from calculators');

        //保存（更新）
//        $searchAdd->save();

        return view('calculator.searchAdd', compact('searchAdd'));
    }

    public function searchSub()
    {
        return view('calculator.searchSub');
    }
}
