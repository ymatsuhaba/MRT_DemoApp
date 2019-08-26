<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body{
            font-size: 13px;
            color: #606161;
            display: inline-block;
            width: 100%;
        }
        .link1 a
        {
            color: snow;
            background-color: #293a4a;
            border: solid 1px white;
            font-size: 14px;
            display: inline-flex;
            display: -webkit-inline-flex;
            padding-left:21px ;
            padding-right:21px ;

        }
        .Link
        {
            display: flex;
            text-align: center;
            justify-content: center;
            margin-bottom: 0px;
        }
        .link2
        {
            text-align: right;
        }
        .link
        {
            display: flex;
            display: -webkit-flex;
            -webkit-flex-direction: column;
            flex-direction: column;
        }
        .menubar{
            display: inline-flex;
            width:100%;
            background-color: #333399;
            height: 50px;
            position: relative;
            margin:auto;
        }
        .menubar span
        {
            display: block;
            font-size:10px;
        }
        .menubar ul {
            text-align: center;
            list-style-type: none;
            overflow: hidden;
            font-size:13px;
            width:100%;
            height: 45px;
            display:flex;
            margin:0 220px;
            position: absolute;
            bottom: 0;
            left:0;
            right:0;
        }
        .menubar ul li {
            display: flex;
            justify-content: center;
            width: 113px;
            height: 35px;
            border:1px solid #7679ab;
            border-bottom: none;
            align-items: center;
            position: relative;
            margin-right: 5px;
            margin-top: 9px;
        }
        .menubar li a {
            display: flex;
            justify-content: center;
            align-items: center !important;
            flex-wrap: wrap;
            color: white;
            text-align: center;
            text-decoration: none;
            font-size: 14px;
            width: 113px;
            height: 35px;
            position: absolute;
            left: 0;
            right: 0;
        }
        .menubar ul li:hover:not(.active)
        {
            background-color: #3473e2;
            color: #FFFFFF;
        }
        .menubar ul li a:hover:not(.active)
        {
            background-color: #3473e2;
            color: #FFFFFF;
            text-decoration: none;
        }
        .active
        {
            background-color: white!important;
            color: #333399!important;
            text-decoration: none!important;
            width: 113px;
            height: 35px;
        }
        .main1
        {
            display:flex;
            padding:0 200px;
            margin-right: 10px;
            height: 255px;
            margin-left: 50px;
            margin-top: 20px;
        }
        .main1-1
        {
            background-color: #f1f4f5;
            margin-left: 15px;
            text-align: center;
            height: 255px;
        }
        .new a
        {
        }
        .main-back
        {
            height: 170px;
            width: 190px;
            background-color: #FFFFFF;
            margin:10px;
            border-top: 1px solid #3e90df;
            padding-bottom: 0;

        }
        .main1-1 ul
        {
            height: 3px;
            padding-left: 0;
            margin-top: 4px;
        }
        .main1 ul li
        {
            display: inline;
            padding-bottom: 0;
            padding-left: 1px;
            padding-right: 1px;
            background-color: #FFFFFF;
            padding-top: 3px;
        }
        .main1-1 ul li a
        {
            display: inline;
            align-items: center;
            position: relative;
            padding-bottom: 0;
            padding-left: 0;
            height: 20px;
            text-decoration: none;
            font-size: 14px;
        }
        .main1-1 ul li a
        {
            color: #808181;
            margin: 0;
            padding: 5px 12px 4px;
        }
        .main1-1 ul li span
        {
            background-color: #3e90df;
            padding: 3px 2px 1px;
        }

        .main1-1 ul li span a{
            color: #FFFFFF;
            padding: 5px 15px 4px;
        }
        .login-form
        {
            text-align: center;
            margin-top: 10px;
        }
        .login-form label
        {
            font-size: 11px;
        }
        .login-form a
        {
            font-family: "MS PGothic";
            font-size: 11px;
        }
        .input-size
        {
            width: 93px;
        }
        .sub-menubar
        {
            margin-top: 10px;
        }
        .sub-menubar ul
        {
            text-align: center;
            list-style-type: none;
            overflow: hidden;
            width:100%;
            height: 30px;
            display:flex;
            margin:0 210px;
            bottom: 0;
            left:0;
            right:0;
        }
        .sub-menubar ul li
        {
            display: flex;
            justify-content: center;
            height: 30px;
            border: 1px solid #d4d4d4;
            border-bottom: none;
            align-items: center;
            margin-right: 5px;
        }
        .sub-menubar ul li a
        {
            font-size: 15px;
            padding: 4px 15px 0;
        }
        .active1
        {
            height: 30px;
            background: -webkit-linear-gradient(top, rgba(26,160,229,0.8) 0%, rgba(26,160,229,0.8) 50%, #1aa0e5 51%, rgba(26,160,229,0.8) 95%, rgba(26,160,229,0.8) 100%);
            color: #FFFFFF;
            text-decoration: none!important;
            cursor: default;
        }
        .active1:hover
        {
            background: -webkit-linear-gradient(top, rgba(26,160,229,0.8) 0%, rgba(26,160,229,0.8) 50%, #1aa0e5 51%, rgba(26,160,229,0.8) 95%, rgba(26,160,229,0.8) 100%);
            color: #FFFFFF;
            text-decoration: none!important;
            cursor: default;
        }
        .regular
        {
            height: 30px;
            color: #606161;
            background: -webkit-linear-gradient(top, #f5f5f5 0%, #f5f5f5 50%, #dedede 51%, #f5f5f5 95%, #f5f5f5 100%);
        }
        .regular:hover
        {
            background: -webkit-linear-gradient(top, rgba(38,173,139,0.8) 0%, rgba(38,173,139,0.8) 50%, #26ad8b 51%, rgba(38,173,139,0.8) 95%, rgba(38,173,139,0.8) 100%);
            color: #FFFFFF;
            text-decoration: none;
        }
        .career
        {
            height: 30px;
            color: #606161;
            background: -webkit-linear-gradient(top, #f5f5f5 0%, #f5f5f5 50%, #dedede 51%, #f5f5f5 95%, #f5f5f5 100%);
        }
        .career:hover
        {
            color: #FFFFFF;
            background: -webkit-linear-gradient(top, #2e9aed 0%, #2e9aed 50%, #0d7de1 51%, #2e9aed 95%, #2e9aed 100%);
            text-decoration: none;
        }
        .main2
        {
            display: inline-flex;
            border-top: 3px solid #1AA0E5!important;
            margin-left: 250px;
            padding: 15px 10px 20px;
            border:1px solid #d4d4d4;
            width: 954px;
            height: 700px;
        }
        .new-job
        {
            height: 550px;
            width: 457px;
            white-space: nowrap;
            text-overflow: ellipsis!important;
            /*overflow: scroll;*/
        }
        .scroll
        {
            height: 520px;
            width: 457px;
            white-space: nowrap;
            text-overflow: ellipsis!important;
            overflow: scroll;
        }
        .text1
        {
            border: 1px solid #d4d4d4;
            background: -webkit-linear-gradient(top, #f5f5f5 0%, #f5f5f5 50%, #dedede 51%, #f5f5f5 95%, #f5f5f5 100%);
            border-left: 2px solid #1AA0E5;
            height: 32px;
            font-size: 16px;
            margin-left:1px ;
            padding-left: 8px;
            padding-top: 3px;
        }
        .search-job
        {
            border: 1px solid #d4d4d4;
            background: -webkit-linear-gradient(top, #f5f5f5 0%, #f5f5f5 50%, #dedede 51%, #f5f5f5 95%, #f5f5f5 100%);
            height: 32px;
            margin-left: 20px;
            width: 457px;
        }
        .text2
        {
            border-left: 2px solid #1AA0E5;
            height: 32px;
            font-size: 16px;
            margin-left:1px ;
            padding-left: 8px;
            padding-top: 3px;

        }
        .search-job tbody
        {
            display: flex;
        }
        .input-group
        {
            margin-top: 10px;
            width:100%;
            height:30px;
            display:flex;
        }
        .pref_menu{
            height:30px;
            padding-top: 6px;
            width: 80px;
            font-size: 12px;
            font-family: "MS PGothic"!important;
            color: #606161;
            margin-left: 0px;
        }
        #dropdown-menu
        {
            height:30px;
            width:40%;
            background-color:white;
        }
        .subject_menu
        {
            font-size: 12px;
            font-family: "MS PGothic";
            color: #606161;
            width: 80px;
            margin-left: 0px;
        }
        .job
        {
            white-space: nowrap!important;
        }
        .job_type
        {
            font-size: 12px;
            font-family: "MS PGothic";
            color: #606161;
            width: 80px;
            margin-right: 0;
            margin-left: 0px;

        }
        .job_type span
        {
            margin-left: 35px;
        }
        .money
        {
            display: flex;
        }
        .money1
        {
            font-size: 12px;
            font-family: "MS PGothic";
            color: #606161;
            width: 80px;
            margin-left: 0px;
        }
        .money2
        {
            display: block;
        }
        .dropdown-toggle button
        {
            margin-left: 10px;
        }
        .dropdown-toggle img
        {
            margin-left: 0px;
        }
        .period1
        {
            display: inline-flex;
        }
        .period2
        {
            margin-left: 0px;
        }
        .pMessage
        {
            margin-left: 53px;
        }
        .border
        {
            background-color: #808181;
            width: 3px;
            height: 11px;
            float: left;
            margin: 4px 5px 0 0;
        }
        .date
        {
            margin-left: 133px;
        }
        .submit-btn
        {
            margin-left: 140px;
        }
        .new-job tr
        {
            overflow: hidden;
            text-overflow: ellipsis!important;
        }
        .new_job tr:nth-child(odd)
        {
            background: #f9f9f9!important;
        }
        .new-job table tr a link visited
        {
            display: inline;
            text-overflow: ellipsis !important;
            overflow: hidden;
            color: #3e90df;

        }
        .jobs
        {
            padding: 0px 5px 5px 5px!important;
            font-size: 12px!important;
        }
        .jobs:nth-child(odd)
        {
            background: #f9f9f9!important;
        }
        .job1
        {
            padding-bottom: 10px!important;
        }
        .shitei
        {
            height: 30px;
            font-size: 13px;
            font-family: "MS PGothic";
            padding-left: 6px;
            padding-top: 6px;
        }
    </style>
    <title>医師求人・転職紹介・アルバイトならMRT</title>
</head>
<header>
    <div class="Link">
        <a href="DemoPage_h"><img src="MRT-logo.png"/></a>
        <div class="link">
            <div class="link1">
                <a href="https://medrt.co.jp/">運営会社</a><a href="https://medrt.co.jp/service/index.html">サービス一覧</a><a href="https://medrt.co.jp/contact/index.html">お問い合わせ</a><a href="#">推奨環境</a>
            </div>
            <div class="link2">
                <a href="#"><img src="東海エリア.png"/></a><a href="#"><img src="関西エリア.png"/></a>
            </div>
        </div>
    </div>
</header>
<body>
<div class="menubar">
    <ul>
        <li><a class="active" href="/DemoPage_h">HOME</a></li>
        <li><a href="#">アルバイト<span>(スポット)</span></a></li>
        <li><a href="#">アルバイト<span>(定期非常勤)</span></a></li>
        <li><a href="#">転職(常勤)</a></li>
        <li><a href="https://kaigyou.medrt.com/" target="_blank">開業</a></li>
        <li><a href="https://sangyoi.medrt.com/" target="_blank">産業医</a></li>
        <li><a href="#">採用担当者様</a></li>
        <li><a href="#">看護師・薬剤師<span>医療従事者の方</span></a></li>
    </ul>
</div>
<div class="main1">
    <img src="MRT2.png"/>
    <div class="main1-1">
        <ul>
            <li><span><a href="/DemoPage_h">医師</a></span></li>
            <li><a href="#">採用ご担当者様</a></li>
        </ul>
        <div class="main-back">
            <div class="login-form">
                <form action="{{url('/DemoPage_h')}}" method="post" class="form-horizontal">
                    <label>ログインID</label>
                    <input type='text' name='id' value="" class="input-size">
                    <label>パスワード</label>
                    <input type='password' name='id' value="" class="input-size">
                    <br><br><a href="https://medrt.com/doctors/password_recovery">>パスワードをお忘れの先生</a><br>
                    <br><a href="https://medrt.com/login_error.html"><img src="ログイン.png"/></a>
                </form>
            </div>
        </div>
        <div class="new">
            <a href="https://medrt.com/doctors/register"><img src="新規会員登録.png"/></a>
        </div>
    </div>
</div>
<div class="sub-menubar">
    <ul>
        <li><a class="active1" href="#">アルバイト(スポット)の求人</a></li>
        <li><a class="regular" href="#">アルバイト(定期非常勤)の求人</a></li>
        <li><a class="career" href="#">転職(常勤)の求人</a></li>
    </ul>
</div>
<div class="main2">
    <div class="new-job">
        <div class="text1">
            新着求人
        </div>
        @csrf
        <div class="scroll">
            <table border-top="1" align="center">
                @foreach($change_spot_jobs as $spot_job)
                    <div class="job1">
                        <tr>
                            <a class="jobs" style="color: #4584A5;" href="#">
                                {{$spot_job}}
                                <br>
                            </a>
                        </tr>
                    </div>
                @endforeach
            </table>
        </div>
    </div>
    <div class="search-job">
        <div class="text2">
            求人検索
        </div>
        <form action="{{'/search_job_result'}}" method="post">
            @csrf
        <tbody>
        <tr>
            <div class="input-group">
                <div class="pref_menu"><div class="border"></div>都道府県</div>
                <select id="prefecture" name="prefecture">
                    <option value="" disabled selected style='display:none;'>都道府県を選択</option>
                    <option value=""></option>
                    <option value="北海道" >北海道</option>
                    <option value="青森県" >青森県</option>
                    <option value="岩手県">岩手県</option>
                    <option value="宮城県">宮城県</option>
                    <option value="秋田県">秋田県</option>
                    <option value="山形県">山形県</option>
                    <option value="福島県">福島県</option>
                    <option value="茨城県">茨城県</option>
                    <option value="栃木県">栃木県</option>
                    <option value="群馬県">群馬県</option>
                    <option value="埼玉県">埼玉県</option>
                    <option value="千葉県">千葉県</option>
                    <option value="東京都">東京都</option>
                    <option value="神奈川県">神奈川県</option>
                    <option value="新潟県">新潟県</option>
                    <option value="富山県">富山県</option>
                    <option value="石川県">石川県</option>
                    <option value="福井県">福井県</option>
                    <option value="山梨県">山梨県</option>
                    <option value="長野県">長野県</option>
                    <option value="岐阜県">岐阜県</option>
                    <option value="静岡県">静岡県</option>
                    <option value="愛知県">愛知県</option>
                    <option value="三重県">三重県</option>
                    <option value="滋賀県">滋賀県</option>
                    <option value="京都府">京都府</option>
                    <option value="大阪府">大阪府</option>
                    <option value="兵庫県">兵庫県</option>
                    <option value="奈良県">奈良県</option>
                    <option value="和歌山県">和歌山県</option>
                    <option value="鳥取県">鳥取県</option>
                    <option value="島根県">島根県</option>
                    <option value="岡山県">岡山県</option>
                    <option value="広島県">広島県</option>
                    <option value="山口県">山口県</option>
                    <option value="徳島県">徳島県</option>
                    <option value="香川県">香川県</option>
                    <option value="愛媛県">愛媛県</option>
                    <option value="高知県">高知県</option>
                    <option value="福岡県">福岡県</option>
                    <option value="佐賀県">佐賀県</option>
                    <option value="長崎県">長崎県</option>
                    <option value="熊本県">熊本県</option>
                    <option value="大分県">大分県</option>
                    <option value="宮崎県">宮崎県</option>
                    <option value="鹿児島県">鹿児島県</option>
                    <option value="沖縄県">沖縄県</option>
                </select><div class="shitei">指定無し</div>
            </div>
        </tr>
        <br>
        <tr>
            <div class="input-group">
                <div class="subject_menu"><div class="border"></div>診療科</div>
                <select id="clinical_department" name="clinical_department">
                    <option value="" disabled selected style='display:none;'>科目を選択</option>
                    <option value=""></option>
                    <option value="内科">内科</option>
                    <option value="外科">外科</option>
                    <option value="形成外科">形成外科</option>
                    <option value="整形外科">整形外科</option>
                    <option value="脳外科">脳外科</option>
                    <option value="婦人科">婦人科</option>
                    <option value="眼科">眼科</option>
                    <option value="精神科">精神科</option>
                    <option value="心療内科">心療内科</option>
                    <option value="麻酔科">麻酔科</option>
                    <option value="小児科">小児科</option>
                    <option value="放射線科">放射線科</option>
                    <option value="耳鼻科">耳鼻科</option>
                    <option value="皮膚科">皮膚科</option>
                    <option value="訪問診療">訪問診療</option>
                    <option value="人間ドック">人間ドック</option>
                    <option value="内視鏡">内視鏡</option>
                    <option value="透析">透析</option>
                    <option value="健診">健診</option>
                    <option value="往診">往診</option>
                    <option value="病棟管理">病棟管理</option>
                    <option value="産婦人科">産婦人科</option>
                    <option value="口腔外科">口腔外科</option>
                    <option value="歯科口腔外科">歯科口腔外科</option>
                    <option value="歯科">歯科</option>
                    <option value="コンタクト">コンタクト</option>
                </select><div class="shitei">指定無し</div>
            </div>
        </tr><br>
        <tr>
            <div class="job">
                <div class="job_type"><div class="border"></div>勤務形態<span><input type="checkbox" name="tochoku" value="1">当直　　　　<input type="checkbox" name="nichoku" value="2">日直・日当直</span></div>
            </div>
        </tr><br>
        <div class="money">
            <div class="money1"><div class="border"></div>希望給与</div>
            <div class="money2">時給　<input type="text" name="salary_hour" >　万円以上　※半角数字
                <br>一回　<input type="text" name="salary" >　万円以上　※半角数字</div>
        </div>
        </tr><br>
        <tr>
            <div class="period1">
                <div class="period2"><div class="border"></div>期間</div>
                <div class="pMessage">ご希望の期間を選択してください</div>
            </div>
            <br><div class="date"><input type="date" name="date" value="date"></div>
        </tr><br>
        </tbody>
        <form>
            <input type="image" src="この条件で検索.png" value="" class="submit-btn">
        </form>
        </form>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>