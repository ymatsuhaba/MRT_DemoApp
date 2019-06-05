<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>new</title>
</head>
<body>
<div class="container">
    <h1>問い合わせ</h1>

    <div class="row">
        <div class="col-md-6">
            <form method="get" action="{{ url('/newresult') }}">
                @csrf

                <div class="form-group">
                    <label>名前 </label>
                    <input type="text" class="form-control" name="name">

                    <label>内容 </label>
                    <input type="text" class="form-control" name="content">
                </div>

                <button class="btn btn-primary">完了</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>