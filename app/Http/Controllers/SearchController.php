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
        $location = $request->input('location');
        $medical = $request->input('medical');
        $working_form_duty = $request->input('working_form_duty');
        $working_form_day_duty = $request->input('working_form_day_duty');
        $salary_time = $request->input('salary_time') * '10000';
        $salary_day = $request->input('salary_day') * '10000';
        $work_start_date = $request->input('work_start_date');

        $recruitments = DB::table('recruitments');

        // 都道府県
        if (isset($location)) {
            $recruitments->where('location', $location);
        }
        //  診療科
        if (isset($medical)) {
            $recruitments->where('medical', 'LIKE', "%$medical%");
        }
        // 勤務形態
        if (isset($working_form_duty) || isset($working_form_day_duty)) {
            // 当直が選択されている場合（日直・日当直が選択されていない）
            if (isset($working_form_duty) && !isset($working_form_day_duty)) {
                $recruitments->where('work_form', $working_form_duty);
            }
            // 日直・日当直が選択されている場合（当直が選択されていない）
            if (!isset($working_form_duty) && isset($working_form_day_duty)) {
                $recruitments->where('work_form', $working_form_day_duty);
            }
        }
        // 給与形態
        if (isset($salary_time) || isset($salary_day)) {
            if (isset($salary_time) && !isset($salary_day)) {
                $recruitments->where('salary_type', '2')
                    ->where('salary', '>=', $salary_time);
            }

            if (!isset($salary_time) && isset($salary_day)) {
                $recruitments->where('salary_type', '1')
                    ->where('salary', '>=', $salary_day);
            }

            if (isset($salary_time) && isset($salary_day)) {
                $recruitments->where('salary', '>=', $salary_time)
                    ->orwhere('salary', '>=', $salary_day);
            }
        }

        //希望日程
        if (isset($work_start_date)) {
            $recruitments->where('work_start_date', $work_start_date);
        }

        $recruitments_result = $recruitments->Orderby('work_start_date', 'asc')->get();


        return view('MRTLP.search_result', compact('recruitments_result'));
    }
}