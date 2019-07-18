<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use App\calclog;
use Illuminate\Database\Eloquent\Collection;

class AnswermanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calclogs = Calclog::all();

        return view('answerman.index',['calclogs' => $calclogs]);
    }

    public function answer1()
    {
        //        一元化する
        $flattened = Calclog::kadai1()->flatten();
        //        resultの順に並び替える
        $sorted = $flattened->sortby('result')->values()->all();

        return view('answerman.answer1',compact('sorted'));

    }


    public function answer2()
    {
//        //        課題２を出力する
        $alldata = Calclog::kadai2();

        $collection = new Collection();

        //       String型、Float型、Integer型、Boolean型のもの以外のものでない場合,Collectionに$calclogを追加
        foreach($alldata as $calclog){

            if (!is_string($calclog) && !is_float($calclog) && !is_int($calclog) && !is_bool($calclog)) {
                $collection->push($calclog);
            }
        }

        $sorted = $collection->sortby('result')->values()->all();

        return view('answerman.answer2',compact('sorted'));
    }




    public function answer3()
    {
        $alldata = Calclog::kadai3();

        $collection = new Collection();

        //       NULLのみを削除して、それ以外はそのまま出力する
        foreach($alldata as $calclog){
            //動く理由と動かなかった理由
            //if文を書く意味。
            if (!isset($calclog)) {
                $collection->pull($calclog);
            }else{
                $collection->push($calclog);
            }
        }
        //        resultの順に並び替える
        $sorted = $collection->sortby('result')->values()->all();

        return view('answerman.answer3',compact('sorted'));
    }




    public function answer4()
    {
        //        課題４の生成
        $alldata = Calclog::kadai4();

        $collection = new Collection();

        foreach($alldata as $calclog){
                $first_figure = $calclog->first_figure;
                $second_figure = $calclog->second_figure;
                $operator = $calclog->operator;
                $result = $calclog->result;

            //データに左右されないコーディング
            if ($operator =='+' && $result == $first_figure + $second_figure){
                    $collection->push($calclog);
            }elseif($operator =='-'){
                $collection->push($calclog);
            }elseif($operator =='*'){
                $collection->push($calclog);
            }elseif($operator =='/'){
                $collection->push($calclog);
            }
        }
        //        resultの順に並び替える,出力する
        $sorted = $collection->sortby('result')->values()->all();

        return view('answerman.answer4',compact('sorted'));
    }




    public function answer5()
    {
        $valdata = Calclog::kadai5();

        $collection = new Collection;

        foreach($valdata as $calclog){

            if (!is_string($calclog) && !is_float($calclog) && !is_int($calclog) && !is_bool($calclog)) {
                $collection->push($calclog);
            }
        }
        echo $collection;



//
//        //        resultの順に並び替える,出力する
//        $sorted = $collection->sortby('result')->values()->all();
//
//        return view('answerman.answer5',compact('sorted'));
    }


}


