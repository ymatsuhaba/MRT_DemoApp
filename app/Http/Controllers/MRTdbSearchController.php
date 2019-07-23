<?php

namespace App\Http\Controllers;

use App\mrt_db;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class MRTdbSearchController extends Controller
{
    public function search(Request $request){

        $prefecture = $request->prefecture;
        $medical = $request->medical;
        $workForm = $request->workForm;
        $hourlySalary = $request->hourlySalary;
        $salary = $request->salary;



        $mrtDbCollection = mrt_db::where('prefecture',$prefecture)
            ->where('medical',$medical)
            ->where('workForm',$workForm)
            ->where('salary','>',$hourlySalary)
            ->where('hourlySalary','>',$salary)
            ->get();


        return view('mrt-db.second.resultSearch',compact('mrtDbCollection'));

    }
}

//DB::table('mrt_dbs')->where('prefecture','北海道')->get();
//
//return view('mrt-db.search',compact('mrtDbCollection'));

//$collection =new mrt_db();
//
//$mrtDbCollection =$collection->getAllData();
