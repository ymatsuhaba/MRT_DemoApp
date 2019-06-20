<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\History;

class DentakunController extends Controller
{
    public function index () {
        return view('/dentakun');
    }

    public function result (request $request) {



        $s1 = $request->input('t1');
        $s2 = $request->input('t2');

        $enzansi = $request->input('cty');

        if ($enzansi == '+') {
            $kekka = $s1 + $s2;

        }

        else if($enzansi == '-') {
            $kekka = $s1 - $s2;

        }
        else if($enzansi == '×') {
            $kekka = $s1 * $s2;

        }

        else {
            $kekka = $s1 / $s2;

        }

        // 登録処理
        $value = new History();
        $value-> number1 = $request->input('t1');
        $value-> operator = $request->input('cty');
        $value-> number2 = $request->input('t2');
        $value-> result = $kekka;
        $value->save();


        return view('/dentakunresult',compact('kekka','request'));

    }



};


