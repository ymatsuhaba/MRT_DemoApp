<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function calc(Request $request)
    {
        // 入力された値を取得
        $data = $request->input('data');

        // 演算子の前後の数値を取得
        $addbeforedata    = preg_replace('/[^0-9]/', '', strstr($data, '+', true));
        $subbeforedata    = preg_replace('/[^0-9]/', '', strstr($data, '-', true));
        $multibeforedata  = preg_replace('/[^0-9]/', '', strstr($data, '×', true));
        $divbeforedata    = preg_replace('/[^0-9]/', '', strstr($data, '÷', true));
        $addafterdata     = preg_replace('/[^0-9]/', '', strstr($data, '+'));
        $subafterdata     = preg_replace('/[^0-9]/', '', strstr($data, '-'));
        $multiafterdata   = preg_replace('/[^0-9]/', '', strstr($data, '×'));
        $divafterdata     = preg_replace('/[^0-9]/', '', strstr($data, '÷'));
        $result = '';

        // 入力された演算子に応じて処理
        if (strpos($data,'+') !== false) {
            $result = $addbeforedata + $addafterdata;
        } else if (strpos($data,'-') !== false) {
            $result = $subbeforedata - $subafterdata;
        } else if (strpos($data,'×') !== false) {
            $result = $multibeforedata * $multiafterdata;
        } else if (strpos($data,'÷') !== false) {
            $result = $divbeforedata / $divafterdata;
        }

        return view('calc', compact('result'));
    }
}

