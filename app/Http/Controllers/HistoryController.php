<?php

namespace App\Http\Controllers;

use App\History;
use Illuminate\Database\Eloquent\Collection;


class  HistoryController extends Controller
{
    public function index(){
        //DBからレコードのデータを取得
        $all_data = History::all();
        return view('/history',['history'=>$all_data]);
    }

    public function plus(){
        //DBからoperetorカラムが+のレコードのデータ全てを取得

        $all_data = History::all();
        $history_plus =null;
        $result = new Collection();

        foreach ($all_data as $history_plus) {
            if ($history_plus->isplus('+')){
                $result ->push($history_plus);
            }
        }
        return view('/history_plus',compact('result'));
    }


    public function minus(){
        //DBからoperetorカラムが-のレコードのデータ全てを取得
        $all_data = History::all();
        $history_minus =null;
        $result = new Collection();

        foreach ($all_data as $history_minus) {
            if ($history_minus->isminus()){
                $result ->push($history_minus);

            }
        }
        return view('/history_minus',compact('result'));
    }

    public function time()
    {
        $all_data = History::all();
        $history_time = null;
        $result = new Collection();

        foreach ($all_data as $history_time) {
            if ($history_time->istime()){
                $result ->push($history_time);
            }
        }
        return view('/history_time', compact('result'));
    }

    public function divide(){
        $all_data = History::all();
        $history_divide =null;
        $result = new Collection();

        foreach ($all_data as $history_divide) {
            if ($history_divide->isdivide()){
                $result ->push($history_divide);
            }
        }
        return view('/history_divide',compact('result'));
    }

    private function kyotu () {

    }
};
