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

        $selectbox = $this->selectboxdata($operator);

        return view('calclog', compact('calcresult', 'no', 'selectbox'));
    }

    /**
     * SELECTBOXの選択した値を保持する処理
     * @param $operator
     * @return array
     */
    private function selectboxdata ($operator) {
        // SELECT BOXを選択した値として保持する
        $select = collect(['all', '+', '-', '*', '/']);
        if ($operator == 'all') {
            // allの場合
            $defaultselect = $select->combine(['selected', NULL, NULL, NULL, NULL])->toArray();
        } else if ($operator == '+') {
            // 「+」の場合
            $defaultselect = $select->combine([NULL, 'selected', NULL, NULL, NULL])->toArray();
        } else if ($operator == '-') {
            // 「-」の場合
            $defaultselect = $select->combine([NULL, NULL, 'selected', NULL, NULL])->toArray();
        } else if ($operator == '*') {
            // 「*」の場合
            $defaultselect = $select->combine([NULL, NULL, NULL, 'selected', NULL])->toArray();
        } else if ($operator == '/') {
            // 「/」の場合
            $defaultselect = $select->combine([NULL, NULL, NULL, NULL, 'selected'])->toArray();
        }
        return $defaultselect;
    }
}