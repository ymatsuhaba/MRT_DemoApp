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
    public function search(Request $request)
    {
        //バリデーション

//        //評価対象
//        $inputs = $request->all();
//
//        //ルール
//        $rules = [
//            'prefecture' => 'nullable',
//            'clinical_department' => 'nullable',
//            'tochoku' => 'nullable',
//            'nichoku' => 'nullable',
//            'money1' => 'nullable',
//            'money2' => 'nullable',
//            'date' => 'nullable'
//        ];
//
////        //出力されるメッセージ
////        $messages = [
////            'doctor_name.regex' => 'アルファベット(半角)で入力してください。',
////            'birthplace.regex' => 'アルファベット(半角)で入力してください。',
////            'sex.in' => "'male'または'female'で入力してください。",
////            'date_of_birth.date' => 'フォーマット通りに入力してください。',
////            'date_of_birth.date_format' => 'YYYY-MM-DDで入力してください。',
////            'date_of_birth.before' => '正しい日付で入力してください。',
////        ];
//
//        $validation = \Validator::make($inputs, $rules, $messages);
//
//        //エラー時の処理
//        if ($validation->fails()) {
//            return redirect()->back()->withErrors($validation->errors())->withInput();
//        }
//
//        //バリデーションOKなら、下記の通り検索処理に移る。

        //table:doctorから$doctor_listにカラムを格納
        $doctor_list = DB::table('doctors');
        //  キーワード受け取り
        $doctor_name = $request->input('doctor_name');
        $birthplace = $request->input('birthplace');
        $sex = $request->input('sex');
        $date_of_birth = $request->input('date_of_birth');

        //もしキーワードがあれば
        if (!empty($doctor_name)) {
            $doctor_list->where('doctor_name', 'like', "%$doctor_name%");
        }
        if (!empty($birthplace)) {
            $doctor_list->where('birthplace', 'like', "%$birthplace%");
        }
        if (!empty($sex)) {
            $doctor_list->where('sex', $sex);
        }
        if (!empty($date_of_birth)) {
            $doctor_list->where('date_of_birth', $date_of_birth);
        }
        //$doctorsへ$doctor_listの値を返す
        $doctors = $doctor_list->get();

        return view('doctor', compact('doctors'));
    }

    }
}