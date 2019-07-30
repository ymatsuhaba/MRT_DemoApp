<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
//    一覧ページ
    public function list () {
        //        全件取得
        $books =$this::all();
        //タイトル順にする
        $title = $books->orderBy('title','desc')->paginate(10);
        //





        return $books;
    }



}
