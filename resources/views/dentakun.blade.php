<!doctype html>
<html lang=ja>
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="/dentaku.jpeg">
    <title >電太くん</title>
    <style>
        *{text-align: center; font-family: 'Avenir','Helvetica Neue','Helvetica','Arial','Hiragino Sans','ヒラギノ角ゴシック',YuGothic,'Yu Gothic','メイリオ', Meiryo,'ＭＳ Ｐゴシック','MS PGothic'}
    </style>
</head>
<body>
    <header>
        <hr><h1>電太くん</h1><hr><img src="dentakun1.png" class="img-thumbnail" width="250" height="250">
    </header>
        <hr><h2>数字を入力して計算をしてみよう!!</h2>
                <p>【足し算、引き算、掛け算、割り算の計算ができるよ!】</p><hr>
            <form method="get" action="{{url('/dentakunresult')}}" target="_blank">
                @csrf
                <input type="text" value="" name="t1">
                    <select name="cty">
                        <option value="+" >＋</option>
                        <option value="-" >－</option>
                        <option value="×" >×</option>
                        <option value="÷" >÷</option>
                    </select>
                <input type="text" value="" name="t2">
                <button class="btn btn-warning">計算する</button>
            </form>
        <footer>
            <p>&copy; shohei seguchi</p>
            <a href="/dentakunjr"><img src="dentakunjr.png" width="50" height="50"></a>電太くんJrはこちら</a>
            <a href="/history"><img src="dentaku.jpeg" width="50" height="50"></a>計算履歴一覧はこちら</a>
        </footer>
    </body>
</html>