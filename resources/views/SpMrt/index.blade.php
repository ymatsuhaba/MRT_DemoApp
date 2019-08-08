@include('SpMrt.layout.head')

@include('SpMrt.layout.header')

<body>
    <div id="picture">
        <div class="slider">
            <div><a href="#"><img src={{asset('SpMrt_png/main1.png')}}></a></div>
            <div><a href="#"><img src={{asset('SpMrt_png/main2.png')}}></a></div>
            <div><a href="#"><img src={{asset('SpMrt_png/main3.png')}}></a></div>
        </div>
    </div>


    <div id="search">
        <div class="outline">
            <p><span>求人を探す</span>医師紹介実績1,232,064件</p>
        </div>
        <div id="search_boxes">
            <div class="box">スポット</div>
            <div class="box">定期非常勤</div>
            <div class="box">常勤</div>
        </div>
        <div class="outline">
            <p>現在募集の件数 15603件</p>
        </div>
    </div>

    <div id="create">
        <div id="beginner">初めての方へ</div>
        <div class="create_boxes">
            <div class="left">スポット<br>ご希望の先生</div>
            <div class="right">定期非常勤<br>ご希望の先生</div>
        </div>
        <div class="create_boxes">
            <div class="left">常勤<br>ご希望の先生</div>
            <div class="right">定期非常勤<br>会員向けサービス</div>
        </div>
        <div class="submit">
            <div id="form"><a href="SpMrt/create" onclick="link()">新規登録</a></div>
        </div>
    </div>

    <div id="main_content1">
        <div class="border_box">都道府県から求人を探す(常勤)</div>
        <div id="prefecture">
            @foreach(config('const.prefecture') as $key => $value)
                <div class="column"><a href="#">{{$value}}</a></div>
            @endforeach
        </div>
{{--        <span class="border_box">診療科から求人を探す(常勤)</span>--}}
        <div class="border_box">内科</div>
        <div id="naika">
            @foreach(config('const.naika') as $key => $value)
                <div class="column"><a href="#">{{$value}}</a></div>
            @endforeach
        </div>
        <div class="border_box">外科</div>
        <div id="geka">
            @foreach(config('const.geka') as $key => $value)
                <div class="column"><a href="#">{{$value}}</a></div>
            @endforeach
        </div>
        <div class="border_box">その他</div>
        <div id="sonota">
            @foreach(config('const.sonota') as $key => $value)
                <div class="column"><a href="#">{{$value}}</a></div>
            @endforeach
        </div>
    </div>

    <div id="main_content2">
        <ul class="list-group">
            <li class="list-group-item"><a href="#">運営会社</a></li>
            <li class="list-group-item"><a href="#">お問い合わせ</a></li>
            <li class="list-group-item"><a href="#">会員規約</a></li>
            <li class="list-group-item"><a href="#">個人情報保護方針</a></li>
            <li class="list-group-item"><a href="#">医師ログイン</a></li>
            <li class="list-group-item"><a href="#">医療機関ログイン</a></li>
            <li class="list-group-item"><a href="#">PCサイトはこちら</a></li>
        </ul>
    </div>

    <div id="view_time"></div>

@include('SpMrt.layout.footer')
