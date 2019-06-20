<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
