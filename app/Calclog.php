<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class Calclog extends Model
{
    protected $fillable= array('first_figure','second_figure', 'operator', 'equal', 'result');

    /**
     * 【Calclog】登録処理
     * @param $collection
     */
    public function figuresave($collection) {
        $value = new Calclog();
        $value->fill($collection)->save();
    }

    /**
     * 演算子に応じた表示データ取得処理
     * @return $operatordata
     */
    public function getwheredata () {
        // 【Calclog】データ全件取得
        $operatordata = Calclog::all();
        return $operatordata;
    }

    /**
     * 前提）
     * 　計算で誤っているのもは表示しないこと
     * 　　※型なども含む
     *
     * 全課題完了後 対応する
     * 　ソートを必ず行うようにする
     * 　１．（順序 operator（昇順）：+ ⇛ - ⇛ * ⇛ /）
     *　 ２．（順序 first_figure（昇順）：1〜9）
     * 　３．（順序 second_figure（昇順）：1〜9）
     * 　４．（順序 result（昇順）：1〜9）
     */

    /**
     * 問１
     */
    public static function kadai1 () {
        return new Collection([Calclog::all()->shuffle()]);
    }
    /**
     * 問２
     */
    public static function kadai2 () {
        $varioustype_data = Calclog::all();
        $varioustype_data->push(345);
        $varioustype_data->push('5623456');
        $varioustype_data->push(10.45678);
        $varioustype_data->push(true);
        return $varioustype_data->shuffle();
    }
    /**
     * 問３
     */
    public static function kadai3 () {
        $null_data = Calclog::all();
        $null_data->push(NULL);
        return $null_data->shuffle();
    }
    /**
     * 問４
     */
    public static function kadai4 () {
        $dummy_data = Calclog::all();
        $dummy_data->push(new Calclogdummy(12345, '+', 2345678, '=', '2429543'));
        return $dummy_data->shuffle();
    }
    /**
     * 問５
     */
    public function kadai5 () {
        $val_data = Calclog::all();
        $val_data->push(23);

        $varioustype_data = new Collection([23,$val_data,'sdfg']);
        $varioustype_data->push(351);
        $varioustype_data->push($this->wickednessdata());
        $varioustype_data->push(new Calclogdummy(752, '+', 58667412, '=', '58668162'));
        $varioustype_data->push(false);
        return $varioustype_data->shuffle();
    }

    public function wickednessdata () {
        $wickedness_data = new Collection();
        $wickedness_data->push(NULL);
        $wickedness_data->push('687643');
        $wickedness_data->push(1435650.534);
        return $wickedness_data;
    }
}

class Calclogdummy
{
    public function __construct($first_figure, $operator, $second_figure, $equal, $result)
    {
        $this->first_figure = $first_figure;
        $this->operator = $operator;
        $this->second_figure = $second_figure;
        $this->equal = $equal;
        $this->result = $result;
    }

    public $first_figure;
    public $operator;
    public $second_figure;
    public $equal;
    public $result;
}
