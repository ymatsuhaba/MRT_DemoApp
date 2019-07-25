<?php

namespace App;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Support\Facades\DB;

class mrt_db extends Model
{

    public $timestamps = false;

    public function getAllData(){

        $mrtdbAllData = $this::all();

        $mrtDbCollection=new Collection();

        $week = array('日', '月', '火', '水', '木', '金', '土');

        foreach ($mrtdbAllData as $mrtdbAllDatum) {

            $type = $mrtdbAllDatum->type;
            $startDate = $mrtdbAllDatum->startDate;
            $startTime = $mrtdbAllDatum->startTime;
            $endTime = $mrtdbAllDatum->endTime;
            $prefecture = $mrtdbAllDatum->prefecture;
            $place = $mrtdbAllDatum->place;
            $medical = $mrtdbAllDatum->medical;

            $type_change= config("const.type.$type");

            $data='【'.$type_change.'】'.' '.
                date('Y年m月d日',strtotime($startDate)).' '.
                $week[date('w', strtotime($startDate))].' '.
                date('H:i',strtotime($startTime)).'-'.date('H:i',strtotime($endTime)).' '.
                '【'.$prefecture.'】'.' '.
                $place.' '.'('.
                $medical.')';

            $mrtDbCollection->push($data);

        }

        return $mrtDbCollection;
    }

}
