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

        $result = $num1 * 1.08 ;

        return view('/dentakunjrresult',compact('result'));
    }
}
