<?php

namespace App\Http\Controllers;

use App\Calclog;
use Illuminate\Database\Eloquent\Collection;

class KadaisakamotoController extends Controller
{

    public function kadai1 () {

        // 3次元連想配列⇛2次元連想配列 変換
        $calc_result = Calclog::kadai1()->flatten()->sortBy('operator');
        $no          = 1;

        return view('kadai1_sakamoto', compact('calc_result', 'no'));
    }

    public function kadai2 () {

        $calc_list   = Calclog::kadai2();
        $calc_result = new Collection();
        $no          = 1;

        foreach ($calc_list as $calc_data) {
            // オブジェクト型の場合
            if(is_object($calc_data)) {
                $calc_result->push($calc_data);
            }
        }

        $calc_result = $calc_result->sortBy('operator');
        return view('kadai2_sakamoto', compact('calc_result', 'no'));
    }

    public function kadai3 () {

        $calc_list   = Calclog::kadai3();
        $calc_result = new Collection();
        $no          = 1;

        foreach ($calc_list as $calc_data) {
            // オブジェクト型の場合
            if(is_object($calc_data)) {
                $calc_result->push($calc_data);
            }
        }

        $calc_result = $calc_result->sortBy('operator');
        return view('kadai3_sakamoto', compact('calc_result', 'no'));
    }

    public function kadai4 () {

        $calc_list   = Calclog::kadai4();
        $calc_result = new Collection();
        $no          = 1;

        foreach ($calc_list as $calc_data) {
            // オブジェクト型の場合
            $first_figure  = $calc_data->first_figure;
            $second_figure = $calc_data->second_figure;
            $operator      = $calc_data->operator;
            $result        = $calc_data->result;

            if ($operator === '+') {
                // 「+」の場合
                if($first_figure + $second_figure == $result) {
                    $calc_result->push($calc_data);
                }

            } else if ($operator === '-') {
                // 「-」の場合
                if($first_figure - $second_figure == $result) {
                    $calc_result->push($calc_data);
                }

            } else if ($operator === '*') {
                // 「*」の場合
                if($first_figure * $second_figure == $result) {
                    $calc_result->push($calc_data);
                }

            } else if ($operator === '/') {
                // 「/」の場合
                if($first_figure / $second_figure == $result) {
                    $calc_result->push($calc_data);
                }
            }
        }

        $calc_result = $calc_result->sortBy('operator');
        return view('kadai4_sakamoto', compact('calc_result', 'no'));
    }

    public function kadai5 () {

        $calc_log     = new Calclog();
        $calc_list    = $calc_log->kadai5();
        $calc_tmp     = new Collection();
        $calc_tmp2    = new Collection();
        $calc_tmp3    = new Collection();
        $calc_result  = new Collection();
        $no           = 1;

        foreach ($calc_list as $calc_data) {
            if(is_object($calc_data)) {
                $calc_tmp->push($calc_data);
            }
        }

        foreach ($calc_tmp as $calc_data2) {
            if ($calc_data2 instanceof Collection) {
                $calc_tmp2->push($calc_data2);
            }
        }

        foreach ($calc_tmp2 as $calc_data3) {
            if ($calc_data3[0] == NULL) {
                continue;
            }
            if(is_object($calc_data3)) {
                $calc_tmp3 = $calc_tmp3->push($calc_data3)->flatten();
            }
        }

        foreach ($calc_tmp3 as $calc_data4) {
            if (is_object($calc_data4)) {
                $calc_result->push($calc_data4);
            }
        }

        $calc_result = $calc_result->sortBy('operator');
        return view('kadai5_sakamoto', compact('calc_result', 'no'));
    }
}