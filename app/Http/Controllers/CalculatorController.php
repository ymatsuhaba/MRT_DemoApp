<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calculator;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;
//use Illuminate\Database\Eloquent\Builder;

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

//足し算し、登録する
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

//引き算し、登録する
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

//掛け算し、登録する
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

//割り算し、登録する
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


//    足し算メソッドのデータを検索する
    public function searchAdd()
    {
      $searchAdd = DB::select('select * from calculators where calc=\'+\'');

        return view('calculator.searchAdd', compact('searchAdd'));
    }

//    引き算メソッドのデータを検索する
    public function searchSub()
    {
        $searchSub =Calculator::where('calc','-')->get();

        return view('calculator.searchSub',compact('searchSub'));
    }


//    掛け算メソッドのデータを検索する
    public function searchMul(){

        //DBからoperetorカラムが+のレコードのデータ全てを取得
        $AllData = Calculator::all();
        $searchMul = null;
        $Collection = new Collection();

        foreach($AllData as $searchMul){
            $calc = $searchMul->calc;

            if ($calc == '*') {
                $Collection->push($searchMul);
            }
        }
        return view('calculator.searchMul',compact('Collection'));
    }

//    割り算メソッドのデータを検索する
    public function searchDiv()
    {
//        $calc = Calculator::where('calc')->get();
        $AllData = Calculator::all();
        $searchDiv = null;
        $Collection = new Collection();

        foreach($AllData as $searchDiv){
            $calc = $searchDiv->calc;

            if($calc == '/'){
                $Collection->push($searchDiv);
            }
        }

        return view('calculator.searchDiv',compact('Collection'));
    }

}

