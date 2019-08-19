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
            display: inline-block;
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
            display: -webkit-flex;
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
            height: 40px;
            border:1px solid #7679ab;
            border-bottom: none;
            align-items: center;
            position: relative;
            margin-right: 5px;
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
            height: 40px;
            position: absolute;
            left: 0;
            right: 0;
            margin: auto;
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
            padding-left: 0;
            background-color: #FFFFFF;
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
            padding: 5px 15px 4px;
        }
        .main1-1 ul li span
        {
            background-color: #3e90df;
        }

        .main1-1 ul li span a{
            color: #FFFFFF;
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
            display:flex;
            margin:0 220px;
            /*position: absolute;*/
            bottom: 0;
            left:0;
            right:0;
        }
        .sub-menubar ul li
        {
            display: flex;
            justify-content: center;
            width: 113px;
            height: 40px;
            border: 1px solid #7679ab;
            border-bottom: none;
            align-items: center;
            margin-right: 5px;
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
        <li><a href="#">開業</a></li>
        <li><a href="#">産業医</a></li>
        <li><a href="#">採用担当者様</a></li>
        <li><a href="#">看護師・薬剤師<span>医療従事者の方</span></a></li>
    </ul>
</div>
<div class="main1">
    <img src="MRT2.png"/>
    <div class="main1-1">
        <ul>
            <li><span><a class="active1" href="/DemoPage_h">医師</a></span></li>
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
                    <br><a href="DemoPage_h"><img src="ログイン.png"/></a>
                </form>
            </div>
        </div>
        <div class="new">
        <a href="DemoPage_h"><img src="新規会員登録.png"/></a>
        </div>
    </div>
</div>
<div class="sub-menubar">
    <ul>
        <li><a href="#">アルバイト(スポット)の求人</a></li>
        <li><a href="#">アルバイト(定期非常勤)の求人</a></li>
        <li><a href="#">転職(常勤)の求人</a></li>
    </ul>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>