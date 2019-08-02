<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style_h.css">
    <title>検索フォーム画面</title>
</head>
<body>
<h1>検索フォーム画面</h1>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <form action="{{'/doctor'}}" method="post">
                @csrf
                <label>名前</label>
                <input type="text" name="doctor_name"  placeholder="アルファベットで入力">
                <br>
                <br>
                <label>出身地</label>
                <input type="text" name="birthplace"  placeholder="アルファベットで入力">
                <br>
                <br>
                <label>性別</label>
                <input type="text" name="sex"  placeholder="male または female">
                <br>
                <br>
                <label>生年月日</label>
                <input type="text" name="date_of_birth"  placeholder="YYYY-MM-DDで入力">
                <br>
                <br>
                <input type="submit" value="検索" class="btn btn-info">
            </form>
        </div>
    </div>
</div>
</body>
</html>