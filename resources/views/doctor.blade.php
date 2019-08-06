<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style_h.css">
    <title>登録医師一覧</title>
</head>
<h1>登録医師一覧</h1>
<div class="row">
    <div class="col-sm-12">
        <a href="/doctor" class="btn btn-primary" style="margin:20px;">一覧画面</a>
        <a href="/new_index" class="btn btn-primary" style="margin:20px;">新規登録画面</a>
        <a href="/search_test_h" class="btn btn-primary" style="margin:20px;">検索画面</a>
    </div>
</div>
<body>
<table border="1" align="center">
    <tr><th>ID</th><th>名前</th><th>出身地</th><th>性別</th><th>生年月日</th></tr>
@foreach($doctors as $doctor)
        <tr><td>{{$doctor->doctor_id}}</td><td>{{$doctor->doctor_name}}</td><td>{{$doctor->birthplace}}</td><td>{{$doctor->sex}}</td><td>{{$doctor->date_of_birth}}</td></tr>
@endforeach
</table>
</body>
</html>
