<?php

namespace App\Http\Controllers;

use App\Recruitment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    // Searchページ
    public function search(Request $request)
    {
        // 入力された値を取得
        $prefectures           = $request->input('prefectures');
        $medical               = $request->input('medical');
        $working_form_duty     = $request->input('working_form_duty');
        $working_form_day_duty = $request->input('working_form_day_duty');
        $salary_time           = $request->input('salary_time');
        $salary_day            = $request->input('salary_day');

        $query = DB::table('recruitments');

        // 都道府県
        if (isset($prefectures)) {
            $query -> where('prefectures',$prefectures);
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
            $result = $query -> get();

        return view('MRTLP.search_result',compact('result'));
    }
}