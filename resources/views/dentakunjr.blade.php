<!doctype html>
<html lang=ja>
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="/dentaku.jpeg">
    <title >電太くんJr.</title>
    <style>
        *{text-align: center; font-family: 'Avenir','Helvetica Neue','Helvetica','Arial','Hiragino Sans','ヒラギノ角ゴシック',YuGothic,'Yu Gothic','メイリオ', Meiryo,'ＭＳ Ｐゴシック','MS PGothic'}
    </style>
</head>
<body>
<header>
    <hr><h1>電太くんJr.</h1><hr><img src="dentakunjr.png" class="img-thumbnail" width="250" height="250">
</header>
<hr><h2>僕は消費税込の金額を計算できるよ!下に税抜き金額を入れてね！</h2>
<form method="get" action="{{url('/dentakunjrresult')}}">
    @csrf
    <input type="text" value="" name="number1">
    <button>計算する</button>
</form>
<footer>
    <p>&copy; shohei seguchi</p>
</footer>
</body>
</html>