<?php

namespace App\Http\Controllers;

use App\Calclog;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class CalclogController extends Controller
{
    /**
     * 演算子別表示処理
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function calclog (Request $request) {

        // 選択された演算子を取得
        $operator = $request -> input('operator_sel');
        // インスタンス生成
        $calclist = new Calclog();
        // 【Calclog】データ全件取得
        $calcresult = $calclist->getwheredata($operator);
        // 取得したデータを画面表示用に編集
        $displaydata = $this->editdata($calcresult, $operator);
        // 選択した演算子を初期値として設定する
        $selectbox = $this->selectboxdata($operator);
        $no = 1;

        return view('calclog', compact('displaydata', 'no', 'selectbox'));
    }

    /**
     * 表示データ処理
     * @param $alldata
     * @param $operator
     * @return $listdata
     */
    private function editdata($operatordata, $operator) {

        // 対象データ取得（演算子に応じて取得する）
        $objdata = $this->displaydata($operatordata, $operator);
        // 対象データを画面に表示するフォーマットに編集
        $listdata = $this->editobjectdata($objdata);

        return $listdata;
    }

    /**
     * 表示データ取得処理
     * @param $operatordata
     * @param $operator
     * @return Collection
     */
    private function displaydata ($operatordata, $operator) {
        $objdata = new Collection();

        // 選択された演算子のみを対象とする
        foreach ($operatordata as $operatornnum) {

            // 選択された演算子に応じてデータを動的に表示する
            if ($operator == 'all' || $operator == NULL) {
                // 「all」またはNULLの場合
                $coldata = $this->setcollectiondata($operatornnum);

            } else if ($operator == $operatornnum['operator']) {
                // 「+」「-」「*」「/」の場合
                $coldata = $this->setcollectiondata($operatornnum);
            } else {
                continue;
            }
            // Collection型変数に追加
            $objdata->push($coldata);
        }
        return $objdata;
    }

    /**
     * 対象データをコレクション型の変数にSET
     * @param $operatornnum
     * @return Collection
     */
    private function setcollectiondata ($operatornnum) {
        return new Collection([
            'first_figure'    => $operatornnum['first_figure']
            , 'second_figure' => $operatornnum['second_figure']
            , 'operator'      => $operatornnum['operator']
            , 'equal'         => $operatornnum['equal']
            , 'result'        => $operatornnum['result']
            , 'created_at'    => $operatornnum['created_at']
        ]);
    }

    /**
     * 対象データの編集処理
     * @param $objdata
     * @return Collection
     */
    private function editobjectdata ($objdata) {
        $listdata = new Collection();

        foreach ($objdata as $operatornnum) {

            // 演算子が「*」「/」は「×」「÷」に変換する
            if ($operatornnum['operator'] == '*') {
                // 演算子が「*」「/」の場合
                $afteroprator = str_replace('*', '×', $operatornnum['operator']);
            } else if ($operatornnum['operator'] == '/') {
                // 演算子が「*」「/」の場合
                $afteroprator = str_replace('/', '÷', $operatornnum['operator']);
            } else if ($operatornnum['operator'] == '+' || $operatornnum['operator'] == '-'){
                $afteroprator = $operatornnum['operator'];
            }

            // 計算式、計算結果を取得
            $formula = $operatornnum['first_figure'].' '.$afteroprator.' '.$operatornnum['second_figure'];
            $equal = $operatornnum['equal'];
            $calcresult = $operatornnum['result'];

            // 取得した値を配列に変換
            $arrdata = new Collection(['formula' => $formula
                , 'equal' => $equal
                , 'calcresult' => $calcresult
                , 'operator' => $afteroprator
                , 'created_at' => $operatornnum['created_at']]);

            // Collection型変数に追加
            $listdata->push($arrdata);
        }
        return $listdata;
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
        } else {
            // それ以外の場合
            $defaultselect = $select->combine(['selected', NULL, NULL, NULL, NULL])->toArray();
        }
        return $defaultselect;
    }
}