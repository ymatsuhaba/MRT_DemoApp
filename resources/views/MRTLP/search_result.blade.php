<!doctype html>
<html lang=ja>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" media="(min-width: 401px)" href="css/MRT_S/styles.css">

    <title >求人検索結果ページ</title>
    <style>
        body{text-align: center;}
        table{
            background: #ffffff;
            width: 400px;
            padding: 10px;
            text-align: center;
            margin: 30px auto;
            color: #333;
            font-size: 1.6rem;
        }
    </style>
</head>
<body>
<hr><h1>求人検索結果ページ</h1><hr>

{{----------------------【求人一覧テーブル】--------------------}}
<ul class="simasima">
    @foreach($result as $list)
        <li><a href="#"></a>
            【{{$list->job_offer_type}}】
            【{{$list->work_start_date}}】
            【{{$list->work_start_time}}】
            【{{$list->work_end_time}}】
            【{{$list->location}}】
            【{{$list->prefectures}}】
            【{{$list->medical}}】
            【{{$list->work_form}}】
        </li>
    @endforeach
</ul>

{{--------------------【フッター】-----------------------}}
<footer>
    <p>&copy; shohei seguchi</p>
</footer>
</body>
</html>