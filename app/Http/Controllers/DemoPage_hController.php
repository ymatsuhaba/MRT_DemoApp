<?php

namespace App\Http\Controllers;

use foo\bar;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Doctor;
use App\SpotJob;

class DemoPage_hController extends Controller
{
    //検索ページを表示
    public function start()
    {
        $spot_jobs = \DB::table('spot_job')->get();

        $change_spot_jobs=new Collection();

        $week = array('日', '月', '火', '水', '木', '金', '土');

        foreach ($spot_jobs as $mrtdbAllDatum) {

            $type = $mrtdbAllDatum->job_offer_type;
            $startDate = $mrtdbAllDatum->work_start_date;
            $startTime = $mrtdbAllDatum->work_start_time;
            $endTime = $mrtdbAllDatum->work_end_time;
            $prefecture = $mrtdbAllDatum->prefectures;
            $place = $mrtdbAllDatum->location;
            $medical = $mrtdbAllDatum->clinical_department;

            if (mb_strlen($prefecture) == 4) {
                $space = '　';
            } else {
                $space = '　　';
            }

            $typeChange= config("const_h.job_offer_type.$type");

            $data='【'.$typeChange.'】'.' '.
                date('Y年m月d日',strtotime($startDate)).' '.
                $week[date('w', strtotime($startDate))].' '.
                date('H:i',strtotime($startTime)).'-'.date('H:i',strtotime($endTime)).' '.
                '【'.$prefecture.'】'.$space. $place. $medical;

            $change_spot_jobs->push($data);

        }

        return view('/DemoPage_h',compact('change_spot_jobs'));
    }
}