<?php

namespace App\Http\Controllers;

use App\Recruitment;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    // Searchページ
    public function search(Request $request)
    {
        // 入力された値を取得
        $location           = $request->input('location');
        $medical               = $request->input('medical');
        $working_form_duty     = $request->input('working_form_duty');
        $working_form_day_duty = $request->input('working_form_day_duty');
        $salary_time           = $request->input('salary_time') * '10000';
        $salary_day            = $request->input('salary_day') * '10000';

        $query = DB::table('recruitments');

        // 都道府県
        if (isset($location)) {
            $query -> where('location',$location);
            echo '都道府県が選択されています';
        }

        //  診療科
        if (isset($medical)) {
            $query -> where('medical','LIKE',"%$medical%");
        }

        // 勤務形態
        if (isset($working_form_duty) || isset($working_form_day_duty)) {
            // 当直が選択されている場合（日直・日当直が選択されていない）
            if (isset($working_form_duty) && !isset($working_form_day_duty)) {
                $query -> where('work_form', $working_form_duty);
            }

            // 日直・日当直が選択されている場合（当直が選択されていない）
            if (!isset($working_form_duty) && isset($working_form_day_duty)) {
                $query -> where('work_form', $working_form_day_duty);
            }
        }

        // 給与形態
        if (isset($salary_time) || isset($salary_day)) {
            if (isset($salary_time) && !isset($salary_day)) {
                $query -> where('salary_type', '2');
                $query -> where('salary', '>=', $salary_time);
            }

            if (!isset($salary_time) && isset($salary_day)) {
                $query -> where('salary_type', '1');
                $query -> where('salary', '>=', $salary_day);
            }

            if (isset($salary_time) && isset($salary_day)) {
                $query -> where('salary', '>=', $salary_time);
                $query -> orwhere('salary', '>=', $salary_day);
            }
        }

        $result = $query -> Orderby('work_start_date', 'asc') ->get();


        return view('MRTLP.search_result',compact('result'));
    }
}