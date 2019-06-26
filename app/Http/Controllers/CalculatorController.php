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
        $Calculator = DB::select('select * from calculators');
        return view('calculator.index')->with('Calculator', $Calculator);
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

//Calculator.indexに戻る
    public function show()
    {
        return redirect('/calculator');
    }


//    足し算メソッドのデータを検索する
    public function searchAdd()
    {
        $AllData = Calculator::all();
//        $searchAdd = null;
        $Collection = new Collection();

        foreach($AllData as $searchAdd){

            if ($searchAdd->isAdd()) {
                $Collection->push($searchAdd);
            }
        }
        return view('calculator.searchAdd',compact('Collection'));
    }

//    引き算メソッドのデータを検索する
    public function searchSub()
    {
        $AllData = Calculator::all();
//        $searchSub = null;
        $Collection = new Collection();

        foreach($AllData as $searchSub){

            if ($searchSub->isSubtract()) {
                $Collection->push($searchSub);
            }
        }
        return view('calculator.searchSub',compact('Collection'));
    }


//    掛け算メソッドのデータを検索する
    public function searchMul(){

        $AllData = Calculator::all();
        $searchMul = null;
        $Collection = new Collection();

        foreach($AllData as $searchMul){

            if ($searchMul->isMultify()) {
                $Collection->push($searchMul);
            }
        }
        return view('calculator.searchMul',compact('Collection'));
    }

//    割り算メソッドのデータを検索する
    public function searchDiv()
    {
        $AllData = Calculator::all();
        $searchDiv = null;
        $Collection = new Collection();

        foreach($AllData as $searchDiv){

            if($searchDiv->isdivide()){
                $Collection->push($searchDiv);
            }
        }

        return view('calculator.searchDiv',compact('Collection'));
    }
}

