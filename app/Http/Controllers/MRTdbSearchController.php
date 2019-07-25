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


        $dataFromDB = DB::table('mrt_dbs');


        if (isset($prefecture)){
            $dataFromDB->where('prefecture',$prefecture);
        }

        if (isset($medical)){
            $dataFromDB->where('medical',$medical);
        }


        if (isset($workFormDuty) || isset($workFormDayDuty)){
            // 当直が選択されている場合（日直・日当直が選択れていない）
            if (isset($workFormDuty) && !isset($workFormDayDuty)) {
                $dataFromDB -> where('workForm', $workFormDuty);
            }
            // 日直・日当直が選択されている場合（当直が選択されていない）
            if (!isset($workFormDuty) && isset($workFormDayDuty)) {
                $dataFromDB -> where('workForm', $workFormDayDuty);
            }
        }

        if (isset($hourlySalary)) {
            $dataFromDB -> where('hourlySalary','>=', $hourlySalary);
        }


        if (isset($salary)) {
            $dataFromDB -> where('salary','>=', $salary);
        }

        if (isset($startDate)){
            $dataFromDB->where('startDate',$startDate);
        }

        $mrtDbCollection = $dataFromDB->orderby('startDate','asc')->get();

        return view('mrt-db.second.resultSearch',compact('mrtDbCollection'));

    }
}

