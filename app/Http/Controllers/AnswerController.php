<?php

namespace App\Http\Controllers;

use App\Calclog;
use Illuminate\Database\Eloquent\Collection;
class AnswerController extends Controller
{
    public function index() {
        return view('answers.index');

    }

    public function question1()
    {
        $flattened=Calclog::kadai1()->flatten();
        return view('answers.question1',compact('flattened'));
    }

    public function question2()  {
        $question2 = calclog::kadai2();
        $collection = new Collection();
        foreach ($question2 as $value){
            if(gettype($value)!=='string'&& gettype($value)!=='integer'&& gettype($value)!=='double' && gettype($value)!=='boolean'){
                $collection ->push($value);
            }
        }
        return view('answers.question2',compact('collection'));
    }


    public function question3(){
        $question3 = calclog::kadai3();
        $collection = new collection();
        foreach ($question3 as $value){
            if(gettype($value)!=="NULL"){
                $collection ->push($value);
            }
        }
        return view('answers.question3',compact('collection'));
    }


    public function question4() {
        $question4 =calclog::kadai4();
        $collection = new Collection();
        foreach ($question4 as $value){
            $tane1 = $value->first_figure;
            $tane2 = $value->operator;
            $tane3 = $value->second_figure;
            $tane4 = $value->result;
            if ($tane2 == '+' && ($tane1 + $tane3 == $tane4)) {
                $collection->push($value);
            }
            else if($tane2 == '-' && ($tane1 - $tane3 ==$tane4)) {
                $collection->push($value);
            }
            else if($tane2 == '×' && ($tane1 * $tane3 == $tane4)) {
                $collection->push($value);
            }
            else if($tane2 == '÷' && ($tane1 / $tane3 == $tane4)) {
                $collection->push($value);
            }
        }
        return view('answers.question4',compact('collection'));
    }
}

