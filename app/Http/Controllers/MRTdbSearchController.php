<?php

namespace App\Http\Controllers;

use App\mrt_db;
use Illuminate\Http\Request;

class MRTdbSearchController extends Controller
{
    public function search(){


        $collection =new mrt_db();

        $mrtDbCollection =$collection->getAllData();

        return view('mrt-db.search',compact('mrtDbCollection'));
    }
}
