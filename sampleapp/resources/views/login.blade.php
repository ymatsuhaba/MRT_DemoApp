<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewpoint" content="width=device-with, initial-scale-1.0">
    <title>ログイン</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
<h1>あだ名変換ツール</h1>
<div class="col-md-4">
    <form method="post" action="{{route('contact.store')}}">
        {{ csrf_field() }}

        <div class="form-id">
            <label>User id: </label>
            <input type="text" class="form-control" name="id">
        </div>

        <div class="form-group">
            <label>PassWord: </label>
            <input type="text" class="form-control" name="password">
        </div>

        <button class="btn btn-primary">ログイン</button>
    </form>
</div>

</body>
</html>