@include('SpMrt.head')

<header>

</header>

<body>
    <div id="picture">
        <img src="SpMrt_png/main1.png" class="photo" alt="main1">
{{--        <img src="SpMrt_png/main2.png" class="photo" alt="main2">--}}
{{--        <img src="SpMrt_png/main3.png" class="photo" alt="main3">--}}
    </div>

    <div id="search">
        <div id="search_boxes">
            <div class="box">スポット</div>
            <div class="box">定期非常勤</div>
            <div class="box">常勤</div>
        </div>
    </div>

    <div id="create">
    </div>

    <div id="main_content1">
        <div class="border_box">都道府県から求人を探す(常勤)</div>
        <div id="prefecture">
            @foreach(config('const.prefecture') as $key => $value)
                <div class="column"><a href="#">{{$value}}</a></div>
            @endforeach
        </div>
        <div class="border_box">診療科から求人を探す(常勤)</div>
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

@include('SpMrt.footer')
</body>
</html>

