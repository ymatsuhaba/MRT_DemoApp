<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style_h.css">
    <title>お仕事情報一覧</title>
</head>
<style>
    body
    {
        text-decoration: none;
    }
</style>
<h1>お仕事情報一覧</h1>
<div class="row">
    <div class="col-sm-12">
        <a href="/DemoPage_h" class="btn btn-primary" style="margin:20px;">トップページ</a>
    </div>
</div>
<body>
<div class="col-md-3">
    <div class="col-md-3">
        @csrf
        <table border="1" align="center">
            <tr><th>種類</th><th>日付</th><th>場所</th><th>時間</th><th>給与</th><th>交通費</th><th>診療科</th><th>勤務形態</th><th>施設種別</th></tr>
            @foreach($spot_jobs as $spot_job)
                <tr><td>{{config("const_h.job_offer_type.$spot_job->job_offer_type")}}</td>
                    <td>{{$spot_job->work_start_date}}</td>
                    <td>{{$spot_job->prefectures}} {{$spot_job->location}}</td>
                    <td>{{config("const_h.work_start_time.$spot_job->work_start_time")}}-{{config("const_h.work_end_time.$spot_job->work_end_time")}}</td>
                    <td>{{$spot_job->salary}}{{$spot_job->salary_hour}}円　{{config("const_h.salary_type.$spot_job->salary_type")}}</td>
                    <td>{{$spot_job->transport_money}}{{config("const_h.transport_money_type.$spot_job->transport_money_type")}}</td>
                    <td>{{$spot_job->clinical_department}}</td>
                    <td>{{config("const_h.work_form.$spot_job->work_form")}}</td>
                    <td>{{config("const_h.facility_type.$spot_job->facility_type")}}</td>
                            {{ csrf_field() }}
                </tr>
            @endforeach
        </table>
    </div>
</div>
</body>
</html>