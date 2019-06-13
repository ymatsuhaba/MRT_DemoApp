<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JrController extends Controller
{

    public function index () {
        return view('/dentakunjr');
    }



    public function result (request $request){

        $num1 = $request -> input('number1');
        $tax =1.08 ;
        $result = $num1 * $tax ;

        return view('/dentakunjrresult',compact('result'));
    }
}
