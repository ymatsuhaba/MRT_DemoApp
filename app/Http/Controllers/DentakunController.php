<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DentakunController extends Controller
{
    public function index () {
        return view('/dentakun');
    }

    public function result (request $request) {

        $s1 = $request->input('t1');
        $s2 = $request->input('t2');

        $enzansi = $request->input('cty');

        if ($enzansi == 'c1') {
            $kekka = $s1 + $s2;

        }

        else if($enzansi == 'c2') {
            $kekka = $s1 - $s2;

        }

        else if($enzansi == 'c3') {
            $kekka = $s1 * $s2;

        }

        else {
            $kekka = $s1 / $s2;

        }
        return view('/dentakunresult',compact('kekka','request'));
    }
};


