<?php

namespace App\Http\Controllers;

use App\Calclog;
use Illuminate\Http\Request;

class CalclogController extends Controller
{
    /**
     * 演算子別表示処理
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function calclog (Request $request) {

        $operator = $request -> input('operator_sel');
        $calclist = new Calclog();
        $calcresult = $calclist->getwheredata($operator);
        $no = 1;

        return view('calclog', compact('calcresult', 'no'));
    }
}