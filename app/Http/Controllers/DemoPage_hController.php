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
        $spot_jobs = \DB::table('spot_job')->orderBy('work_start_date')->orderBy('work_start_time')->get();

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

            $typeChange= config("const_h.job_offer_type.$type");

            $data='【'.$typeChange.'】'.' '.
                date('Y年m月d日',strtotime($startDate)).' '.
                $week[date('w', strtotime($startDate))].' '.
                date('H:i',strtotime($startTime)).'-'.date('H:i',strtotime($endTime)).' '.
                '【'.$prefecture.'】'. $place. $medical;

            $change_spot_jobs->push($data);

        }

        return view('/DemoPage_h',compact('change_spot_jobs'));
    }
    public function search(Request $request)
    {
        //バリデーション

        //評価対象
        $inputs = $request->all();

        //ルール
        $rules = [
            'salary_hour' => 'nullable|regex:/^[0-9]/|',
            'salary' => 'nullable|regex:/^[0-9]/|',
        ];

        //出力されるメッセージ
        $messages = [
            'salary_hour.regex' => '有効な金額を入力してください',
            'salary.regex' => '有効な金額を入力してください',
        ];

        $validation = \Validator::make($inputs, $rules, $messages);

        //エラー時の処理
        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation->errors())->withInput();
        }

        //バリデーションOKなら、下記の通り検索処理に移る。
        //table:spot_jobから$job_listにカラムを格納
        $job_list = DB::table('spot_job')->orderBy('work_start_date')->orderBy('work_start_time');
        //  キーワード受け取り
        $prefecture = $request->input('prefecture');
        $clinical_department = $request->input('clinical_department');
        $tochoku = $request->input('tochoku');
        $nichoku = $request->input('nichoku');
        $salary_hour = $request->input('salary_hour');
        $salary = $request->input('salary');
        $date = $request->input('date');
        $salary_hour_after= $salary_hour*10000;
        $salary_after=$salary*10000;

        //もしキーワードがあれば
        if (!empty($prefecture)) {
            $job_list->where('prefectures', 'like', "%$prefecture%");
            $spot_jobs = $job_list->get();
        }
        if (!empty($clinical_department)) {
            $job_list->where('clinical_department','like', "%$clinical_department%");
            $spot_jobs = $job_list->get();
        }
        if (!empty($tochoku)&&empty($nichoku)) {
            $job_list->where('work_form',$tochoku);
            $spot_jobs = $job_list->get();
        }
        if (!empty($nichoku)&&empty($tochoku)) {
            $job_list->where('work_form', $nichoku);
            $spot_jobs = $job_list->get();
        }
        if (!empty($nichoku)&&!empty($tochoku)) {
            $job_list->where('work_form', '=',$nichoku)->orwhere('work_form','=', $tochoku);
            $spot_jobs = $job_list->get();
        }
        if (!empty($salary_hour_after)&&empty($salary_after)) {
            $job_list->where('salary_hour', '>=', $salary_hour_after);
            $spot_jobs = $job_list->get();
        }
        if (!empty($salary_after)&&empty($salary_hour_after)) {
            $job_list->where('salary', '>=', $salary_after);
            $spot_jobs = $job_list->get();
        }
        if (!empty($salary_after)&&!empty($salary_hour_after)) {
            $job_list->where('salary', '>=', $salary_after)->orWhere('salary_hour','>=',$salary_hour_after);
            $spot_jobs = $job_list->get();
        }
        $spot_jobs = $job_list->get();
        if (!empty($date)) {
            $job_list->where('work_start_date', $date);
            $spot_jobs = $job_list->get();
        }
            return view('search_job_result', compact('spot_jobs'));
        }

}