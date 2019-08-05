<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="text/css" http-equiv="Content-Type">
        <meta content="text/javascript" http-equiv="Content-Type">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!--font Awesomeの使用-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <!--　CSSの適応-->
        <link rel="stylesheet" type="text/css" href="css/SpMrt/reset.css">
        <link rel="stylesheet" type="text/css" href="css/SpMrt/header.css">
        <link rel="stylesheet" type="text/css" href="css/SpMrt/picture.css">
        <link rel="stylesheet" type="text/css" href="css/SpMrt/search.css">
        <link rel="stylesheet" type="text/css" href="css/SpMrt/create.css">
        <link rel="stylesheet" type="text/css" href="css/SpMrt/footer.css">
        <link rel="stylesheet" type="text/css" href="css/SpMrt/main_content1.css">
        <link rel="stylesheet" type="text/css" href="css/SpMrt/main_content2.css">

        <script src="https://kit.fontawesome.com/48faf8915b.js"></script>
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <title>SP版　MRT</title>
    </head>

    <header>
{{--        <div id="box"><img src="SpMrt_png/logo.png" id="logo" alt="logo"></div>--}}
{{--        <p id="text">医療のための求人サイト</p>--}}
{{--        <div class="contents"><i class="fas fa-bars fa-2x"><p>お気に入り</p></i></div>--}}
{{--        <div class="contents"><i class="far fa-star fa-2x"><p>お気に入り</p></i></div>--}}
{{--        <div class="contents"><i class="fas fa-bars fa-2x"><p>お気に入り</p></i></div>--}}
        <div class="flex items-stretch bg-gray-200 h-12">
            <div class="flex-1 text-center px-4 m-2"><img src="SpMrt_png/logo.png" id="logo" alt="logo"></div>
            <div class="flex-1 text-gray-700 text-center bg-gray-400 px-4 py-2 m-2"><p id="text">医療のための求人サイト</p></div>
            <div class="flex-1 text-gray-700 text-center bg-gray-400 px-4 py-2 m-2">1</div>
            <div class="flex-1 text-gray-700 text-center bg-gray-400 px-4 py-2 m-2">2</div>
            <div class="flex-1 text-gray-700 text-center bg-gray-400 px-4 py-2 m-2">3</div>
        </div>
    </header>

<body>
    <div id="picture">
        <img src="SpMrt_png/main1.png" class="photo" alt="main1">
{{--        <img src="SpMrt_png/main2.png" class="photo" alt="main2">--}}
{{--        <img src="SpMrt_png/main3.png" class="photo" alt="main3">--}}
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
            <a href="SpMrt/create">新規登録</a>
        </div>

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

    <footer>
        <div id="inquiry">その他サービス</div>
        <div id="box"><img src="SpMrt_png/owned_media.png" id="owned_media" alt="owned_media"></div>
        <div id="end">©︎2019 MRT Inc</div>
    </footer>
</body>
</html>

