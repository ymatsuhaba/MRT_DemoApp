<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CalculatorResultController extends Controller
{
    public function index(){
        return view ('calculator.result');
    }

    public function add($num1,$num2){

//        $num1 = $_GET["num1"];
//        $num2 = $_GET["num2"];
        $number = $num1 + $num2;

        return view (calculator.result,compact('number'));
    }
}
