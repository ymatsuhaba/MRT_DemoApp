<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <!--    レスポンシブデザインに必要なタグ-->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--    レスポンシブデザインを適用-->
    <!--    <meta name="viewport" content="width=device-width,initial-scale=1.0">-->
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/MRT_S/styles.css">

    <!--    bootstrapの適用（version4.3）-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- bootstrap-datepickerを読み込む -->
    <link rel="stylesheet" type="text/css" href="../bootstrap-datepicker-1.9.0-dist/css/bootstrap-datepicker.min.css">
    <script type="text/javascript" src="../bootstrap-datepicker-1.9.0-dist/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="../bootstrap-datepicker-1.9.0-dist/locales/bootstrap-datepicker.ja.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <title>医師求人・転職紹介・アルバイトならMRT</title>
</head>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<body>

<!--ヘッダー-->
<div class="container">
    <div class="row">
        <div class="col">
            <img src="MRT1.png" id="MRT">
        </div>
        <div class="col">
            <div  class="header1">
                <div class="services">
                    <p class="service"><a href="#">運営会社</a></p>
                    <p class="service"><a href="#">サービス一覧</a></p>
                    <p class="service"><a href="#">お問い合わせ</a></p>
                    <p class="service"><a href="#">推奨環境</a></p>
                </div>
                <div class="area">
                    <img src="東海エリア.png">
                    <img src="関西エリア.png">
                </div>
            </div>
        </div>
    </div>
</div>


<!--メニューバー-->
<div class="menu">
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" href="https://medrt.com/">HOME</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="https://medrt.com/spot">アルバイト<br>(スポット)</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="https://medrt.com/regular">アルバイト<br>(定期非常勤)</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="https://medrt.com/career">転職（常勤）</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="https://kaigyou.medrt.com/">開業</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="https://sangyoi.medrt.com/">産業医</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="https://medrt.com/admin/">採用担当者</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="https://medrt.com/medic/">看護師・薬剤師・医療従事者の方</a>
        </li>
    </ul>
</div>


<!--    メインコンテナ１-->
<div class="container1">
    <img src="MRT2.png" id="MRT2">
    <!--        ログイン画面-->
    <form class="login_form">
        <div class="users">
            <p id="doctor"><a href="#">医師</a></p>
            <p id="recruiter"><a href="#">採用ご担当者さま</a></p>
        </div>
        <div class="login">
            <label for="exampleInputEmail1" id="id">ログインID</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="password">
            <label for="exampleInputPassword1">パスワード</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>

        <div class="doctor form-check">
            <p><a href="https://medrt.com/doctors/password_recovery">パスワードをお忘れの先生</a></p>
        </div>

        <div class="btns">
            <a href="https://medrt.com/login_error.html"><img src="ログイン.png" class="img-fluid" alt="Responsive image"></a><br>
            <a href="https://medrt.com/doctors/register"><img src="新規会員登録.png" class="img-fluid" alt="Responsive image"></a><br>
        </div>
    </form>
</div>


<!--求人情報のバー-->
<div class="nav_recruit">
    <ul class="nav justify-content-center">
        <li class="nav-item1">
            <a class="nav-link1" href="#">アルバイト（スポット）の求人情報</a>
        </li>
        <li class="nav-item1">
            <a class="nav-link2" href="#">アルバイト(定期非常勤)の求人情報</a>
        </li>
        <li class="nav-item1">
            <a class="nav-link3" href="#">転職(常勤)の求人情報</a>
        </li>
    </ul>
</div>

<!--大きなグループの箱-->
<!--箱１：新着求人（左側に配置！）-->
<div class="job_search">

    <div class="new_jobs left_jobs">
        <h6 class="title-box"><div class="title_spot">新着求人</div></h6>
        <ul class="simasima">
            @foreach($list_data as $data)
                <li><a href="#">{{$data}}</a></li>
            @endforeach
        </ul>
    </div>

    <!--箱２：求人検索（右側に配置）-->
    <form class="input_form" method="get" action="{{ url('/search_result')}}">
        <div class="new_jobs">
            <div class="new_jobs2">
                <h6 class="title-box">
                    <div class="title_spot">求人検索</div></h6>

                <!--都道府県-->
                <div class="form-group row1">
                    <div class="pref">
                        <div class="decorate-parts"></div>
                        <div>&ensp;都道府県</div>
                        <select name="prefectures">
                            <option value="" selected>都道府県を選択</option>
                            <option value="北海道">北海道</option>
                            <option value="青森県">青森県</option>
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
                        </select>
                        <div>&ensp;指定無し</div>
                    </div>
                </div>



                <!--診療科-->
                <div class="form-group row1">
                    <div class="pref">
                        <div class="decorate-parts"></div>
                        <div>&ensp;診療科&ensp;</div>
                        <select name="medical">
                            <option value="" selected>科目を選択</option>
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
                            <option value="検診">検診</option>
                            <option value="往診">往診</option>
                            <option value="病棟管理">病棟管理</option>
                            <option value="産婦人科">産婦人科</option>
                            <option value="口腔外科">口腔外科</option>
                            <option value="歯科口腔外科">歯科口腔外科</option>
                            <option value="歯科">歯科</option>
                            <option value="コンタクト">コンタクト</option>
                        </select>
                        <div>&ensp;指定無し&ensp;</div>
                    </div>
                </div>



                <!--勤務形態-->
                <div class="form-group row1">
                    <div class="pref">
                        <div class="decorate-parts"></div>
                        <div>&ensp;勤務形態&ensp;</div>
                        <div>
                            <input type="checkbox" name="working_form_duty" value="1">
                            <label>&ensp;当直&ensp;</label>
                        </div>
                        <div>
                            <input type="checkbox" name="working_form_day_duty" value="2">
                            <label>&ensp;日直・日当直&ensp;</label>
                        </div>
                    </div>
                </div>


                <!--希望給与-->
                <div class="form-group row1">
                    <div class="pref">
                        <div class="decorate-parts"></div>
                        <div>&ensp;希望給与&ensp;</div>
                        <div class="input_money">
                            <div>時給&ensp;
                                <input type="text" name="salary_time">
                                <label>&ensp;万円以上&ensp;※半角数字</label>
                            </div>
                            <div>一回&ensp;
                                <input type="text" name="salary_day">
                                <label>&ensp;万円以上&ensp;※半角数字</label>
                            </div>
                        </div>
                    </div>
                </div>






                <!--期間-->



                <!--            カレンダー-->

                {{--                <div class="calender">--}}
                {{--                    <table>--}}
                {{--                        <tr class="cal_title">--}}
                {{--                            <td colspan="7">2019年7月</td>--}}
                {{--                        </tr>--}}
                {{--                        <tr  bgcolor="#d3d3d3">--}}
                {{--                            <td><div class="sunday">日</div></td>--}}
                {{--                            <td><div class="day">月</div></td>--}}
                {{--                            <td><div class="day">火</div></td>--}}
                {{--                            <td><div class="day">水</div></td>--}}
                {{--                            <td><div class="day">木</div></td>--}}
                {{--                            <td><div class="day">金</div></td>--}}
                {{--                            <td><div class="saturday">土</div></td>--}}
                {{--                        </tr>--}}
                {{--                        <tr  bgcolor="#FFFFFF">--}}
                {{--                            <td></td>--}}
                {{--                            <td><div class="day">1</div><div class="number">153件</div></td>--}}
                {{--                            <td><div class="day">2</div><div class="number">153件</div></td>--}}
                {{--                            <td><div class="day">3</div><div class="number">153件</div></td>--}}
                {{--                            <td><div class="day">4</div><div class="number">153件</div></td>--}}
                {{--                            <td><div class="day">5</div><div class="number">153件</div></td>--}}
                {{--                            <td ><div class="saturday">6</div><div class="number">153件</div></td>--}}
                {{--                        </tr>--}}
                {{--                        <tr bgcolor="#FFFFFF">--}}
                {{--                            <td><div class="sunday">7</div><div class="number">153件</div></td>--}}
                {{--                            <td><div class="day">8</div><div class="number">153件</div></td>--}}
                {{--                            <td><div class="day">9</div><div class="number">153件</div></td>--}}
                {{--                            <td><div class="day">10</div><div class="number">153件</div></td>--}}
                {{--                            <td><div class="day">11</div><div class="number">153件</div></td>--}}
                {{--                            <td><div class="day">12</div><div class="number">153件</div></td>--}}
                {{--                            <td><div class="saturday">13</div><div class="number">153件</div></td>--}}
                {{--                        </tr>--}}
                {{--                        <tr bgcolor="#FFFFFF">--}}
                {{--                            <td><div class="sunday">14</div><div class="number">153件</div></td>--}}
                {{--                            <td><div class="day">15</div><div class="number">153件</div></td>--}}
                {{--                            <td><div class="day">16</div><div class="number">153件</div></td>--}}
                {{--                            <td><div class="day">17</div><div class="number">153件</div></td>--}}
                {{--                            <td><div class="day">18</div><div class="number">153件</div></td>--}}
                {{--                            <td><div class="day">19</div><div class="number">153件</div></td>--}}
                {{--                            <td><div class="saturday">20</div><div class="number">153件</div></td>--}}
                {{--                        </tr>--}}
                {{--                        <tr bgcolor="#FFFFFF">--}}
                {{--                            <td ><div class="sunday">21</div><div class="number">153件</div></td>--}}
                {{--                            <td><div class="day">22</div><div class="number">153件</div></td>--}}
                {{--                            <td><div class="day">23</div><div class="number">153件</div></td>--}}
                {{--                            <td><div class="day">24</div><div class="number">153件</div></td>--}}
                {{--                            <td><div class="day">25</div><div class="number">153件</div></td>--}}
                {{--                            <td><div class="day">26</div><div class="number">153件</div></td>--}}
                {{--                            <td><div class="saturday">27</div><div class="number">153件</div></td>--}}
                {{--                        </tr>--}}
                {{--                        <tr bgcolor="#FFFFFF">--}}
                {{--                            <td><div class="sunday">28</div><div class="number">153件</div></td>--}}
                {{--                            <td><div class="day">29</div><div class="number">153件</div></td>--}}
                {{--                            <td><div class="day">30</div><div class="number">153件</div></td>--}}
                {{--                            <td><div class="day">31</div><div class="number">153件</div></td>--}}
                {{--                            <td></td>--}}
                {{--                            <td></td>--}}
                {{--                            <td></td>--}}
                {{--                        </tr>--}}
                {{--                    </table>--}}
                {{--                </div>--}}
                <button><a><img class="search_logo" src="この条件で検索.png"></button>
            </div>
        </div>
    </form>
</div>
</body>
</html>