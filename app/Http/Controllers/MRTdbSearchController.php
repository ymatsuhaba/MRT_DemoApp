<?php

namespace App\Http\Controllers;

use App\mrt_db;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class MRTdbSearchController extends Controller
{
    public function search(){

//        $prefecture = $request->input('prefecture');
//        $medical = $request->input('medical');
//        $workForm = $request->input('workForm');
//        $salary = $request->input('salary');
//
//        if(!empty($prefecture)) {
//            $mrtDbCollection = mrt_db::all();
//        } else {
//            $mrtDbCollection = mrt_db::where('prefecture',"$prefecture")->get();
//        }
//        $mrtDbCollection = DB::table('mrt_dbs')
//            ->where('prefecture',$prefecture)->get();

        return view('mysearch');

    }
}

//DB::table('mrt_dbs')->where('prefecture','北海道')->get();
//
//return view('mrt-db.search',compact('mrtDbCollection'));

//$collection =new mrt_db();
//
//$mrtDbCollection =$collection->getAllData();
