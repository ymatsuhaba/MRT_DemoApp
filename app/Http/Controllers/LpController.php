<?php

namespace App\Http\Controllers;

use App\Recruitment;
use App\Recruitments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LpController extends Controller
{

    public function index() {

        $collection =new Recruitment();
        $list_data =$collection->getalldata();

        return view('MRTLP.index',compact('list_data'));

    }
}
