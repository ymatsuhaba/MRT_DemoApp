<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class yukiLabSearchController extends Controller
{
    public function search(Request $request){

        $book_title = $request->input('book_title');
//        $author_name = $request->input('author_name');
//        $lending_situation = $request->input('lending_situation');


        $dataFromDB = DB::table('yucky_books');


        if (isset($book_title)){
            $dataFromDB->where('book_title',$book_title);
        }

//        if (isset($medical)){
//            $dataFromDB->where('medical',$medical);
//        }
//
//
//        if (isset($workFormDuty) || isset($workFormDayDuty)){
//            // 当直が選択されている場合（日直・日当直が選択れていない）
//            if (isset($workFormDuty) && !isset($workFormDayDuty)) {
//                $dataFromDB -> where('workForm', $workFormDuty);
//            }
//            // 日直・日当直が選択されている場合（当直が選択されていない）
//            if (!isset($workFormDuty) && isset($workFormDayDuty)) {
//                $dataFromDB -> where('workForm', $workFormDayDuty);
//            }
//        }
//
//        if (isset($hourlySalary)) {
//            $dataFromDB -> where('hourlySalary','>=', $hourlySalary);
//        }
//
//
//        if (isset($salary)) {
//            $dataFromDB -> where('salary','>=', $salary);
//        }
//
//        if (isset($startDate)){
//            $dataFromDB->where('startDate',$startDate);
//        }


        $yucky_books = $dataFromDB->get();

        return redirect('mrt-db.index',compact('yucky_books'));
    }
}
