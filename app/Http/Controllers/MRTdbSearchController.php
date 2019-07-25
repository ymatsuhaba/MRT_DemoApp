<?php

namespace App\Http\Controllers;

use App\mrt_db;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class MRTdbSearchController extends Controller
{
    public function search(Request $request){

        $prefecture = $request->input('prefecture');
        $medical = $request->input('medical');
        $workFormDuty = $request->input('workFormDuty');
        $workFormDayDuty = $request->input('workFormDayDuty');
        $hourlySalary = $request->input('hourlySalary');
        $salary = $request->input('salary');
        $startDate = $request->input('startDate');


        $query = DB::table('mrt_dbs');


        if (isset($prefecture)){
            $query->where('prefecture',$prefecture);
        }

        if (isset($medical)){
            $query->where('medical',$medical);
        }


        if (isset($workFormDuty) || isset($workFormDayDuty)){
            // 当直が選択されている場合（日直・日当直が選択れていない）
            if (isset($workFormDuty) && !isset($workFormDayDuty)) {
                $query -> where('workForm', $workFormDuty);
            }
            // 日直・日当直が選択されている場合（当直が選択されていない）
            if (!isset($workFormDuty) && isset($workFormDayDuty)) {
                $query -> where('workForm', $workFormDayDuty);
            }
        }


//        // 給与形態
//        if (isset($hourlySalary) || isset($salary_day)) {
//            if (isset($hourlySalary) && !isset($salary)) {
//                $query -> where('salary_type', '2');
//                $query -> where('salary', '>=', $hourlySalary);
//            }
//            if (!isset($hourlySalary) && isset($salary)) {
//                $query -> where('salary_type', '1');
//                $query -> where('salary', '>=', $salary_day);
//            }
//            if (isset($hourlySalary) && isset($salary)) {
//                $query -> where('salary', '>=', $hourlySalary);
//                $query -> orwhere('salary', '>=', $salary);
//            }
//        }


        if (isset($startDate)){
            $query->where('startDate',$startDate);
        }


        $mrtDbCollection = $query->orderby('startDate','asc')->get();

        return view('mrt-db.second.resultSearch',compact('mrtDbCollection'));

    }
}

//DB::table('mrt_dbs')->where('prefecture','北海道')->get();
//
//return view('mrt-db.search',compact('mrtDbCollection'));

//$collection =new mrt_db();
//
//$mrtDbCollection =$collection->getAllData();
