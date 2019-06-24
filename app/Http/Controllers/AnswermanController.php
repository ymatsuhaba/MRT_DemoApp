<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
//        $data = $this->Callog
//            ->where('category', 'PHP')
//            ->get();

        return view('answerman.index',['calclogs' => $calclogs]);
    }

    public function answer1()
    {
//        静的メソッドを用いる
        $calclogs = Calclog::kadai1();
//        一元化する
        $flattened = $calclogs->flatten();
//        resultの順に並び替える
        $sorted = $flattened->sortby('result');
//        出力する
        $sorted->values()->all();

        return view('answerman.answer1',compact('sorted'));

    }


    public function answer2()
    {
        $calclogs = Calclog::kadai2();

        $Collection = $calclogs->forget('345',"'5623456'",'10.45678','true');
        //        resultの順に並び替える
        $sorted = $Collection->sortby('result');
        //        出力する
        $sorted->values()->all();

        return view('answerman.answer2',compact('sorted'));
    }




    public function answer3()
    {
        $Collection = Calclog::kadai3();

        foreach($Collection as $calclog){

            if ($calclog === NULL) {
                $Collection->forget($calclog);
            }
        }
        //        resultの順に並び替える
        $sorted = $Collection->sortby('result');
        //        出力する
        $sorted->values()->all();

        return view('answerman.answer3',compact('sorted'));
    }




    public function answer4()
    {
        $calclogs = Calclog::kadai4();

        $Collection = $calclogs->splice(12345, '+', 2345678, '=', '2429543');

        //        resultの順に並び替える
        $sorted = $Collection->sortby('result');
        //        出力する
        $sorted->values()->all();

        return view('answerman.answer4',compact('sorted'));
    }




    public function answer5()
    {
        $calclogs = Calclog::all();

        return view('answerman.answer5',['calclogs' => $calclogs]);
    }
}
