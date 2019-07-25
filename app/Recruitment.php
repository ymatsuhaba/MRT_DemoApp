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

            $job_offer_type = $recruitment_data->job_offer_type;
            $work_start_date = $recruitment_data->work_start_date;
            $work_start_time = $recruitment_data->work_start_time;
            $work_end_time = $recruitment_data->work_end_time;
            $location = $recruitment_data->location;
            $prefectures = $recruitment_data->prefectures;
            $medical = $recruitment_data->medical;


            $job_offer_type_change= config("const_s.job_offer_type.$job_offer_type");


            $datas='【'.$job_offer_type_change.'】'.' '.
                date('Y年m月d日',strtotime($work_start_date)).' '.
                $week[date('w', strtotime($work_start_date))].' '.
                date('H:i',strtotime($work_start_time)).'-'.date('H:i',strtotime($work_end_time)).' '.
                $location.' '.'('.
                $prefectures.')'.
                $medical;

            $list_data->push($datas);
        }
        return $list_data;
    }
}
