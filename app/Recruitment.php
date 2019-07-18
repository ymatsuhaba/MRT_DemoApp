<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;


class Recruitment extends Model
{
    public $timestamps = false;

    public function getalldata()
    {
        $recruitment_data = $this::all();
        $week = array('日', '月', '火', '水', '木', '金', '土');
        $list_data=new Collection();

        foreach ($recruitment_data as $recruitment_data) {
//            $job_offer_type = $recruitment_data->input('job_offer_type');
//            $work_start_date = $recruitment_data->input('work_start_date');
//            $work_start_time = $recruitment_data->input('work_start_time');
//            $work_end_time = $recruitment_data->input('work_end_time');
//            $location = $recruitment_data->input('location');
//            $salary_type = $recruitment_data->input('salary_type');
//            $salary = $recruitment_data->input('salary');
//            $transport_money_type = $recruitment_data->input('transport_money_type');
//            $transport_money = $recruitment_data->input('transport_money');
//            $work_form = $recruitment_data->input('work_form');
//            $facility_type = $recruitment_data->input('facility_type');
//            $medical = $recruitment_data->input('medical');

            $job_offer_type = $recruitment_data->job_offer_type;
            $work_start_date = $recruitment_data->work_start_date;
            $work_start_time = $recruitment_data->work_start_time;
            $work_end_time = $recruitment_data->work_end_time;
            $location = $recruitment_data->location;
            $prefectures = $recruitment_data->prefectures;
            $medical = $recruitment_data->medical;




            $datas='【'.$job_offer_type.'】'.' '.
                date('Y年m月d日',strtotime($work_start_date)).' '.
                $week[date('w', strtotime($work_start_date))].' '.
                date('H:i',strtotime($work_start_time)).'-'.date('H:i',strtotime($work_end_time)).' '.
                $location.' '.'('.
                $prefectures.')'.
                $medical


//                $location.
//                $salary_type.
//                $salary.
//                $transport_money_type.
//                $transport_money.
//                $work_form.
//                $facility_type.
//                $medical
            ;

            $list_data->push($datas);
        }
        return $list_data;
    }
}
