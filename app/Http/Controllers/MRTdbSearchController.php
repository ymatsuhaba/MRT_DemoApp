<?php

namespace App\Http\Controllers;

use App\mrt_db;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MRTdbSearchController extends Controller
{
    public function search(request $request){

        $prefecture = $request->input('prefecture');
//        $from = $request->input('');
//        $sex = $request->input('sex');
//        $birthday = $request->input('birthday');

        if($prefecture == NULL) {
            $mrtDbCollection = mrt_db::all();
        } else {
            $mrtDbCollection = mrt_db::where('prefecture', 'like', "%$prefecture%")->getAllData();
        }

        return view('mrt-db.search',compact('mrtDbCollection'));

    }
}

//DB::table('mrt_dbs')->where('prefecture','北海道')->get();
//
//return view('mrt-db.search',compact('mrtDbCollection'));

//$collection =new mrt_db();
//
//$mrtDbCollection =$collection->getAllData();
