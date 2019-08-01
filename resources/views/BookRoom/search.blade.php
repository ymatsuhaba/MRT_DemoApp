<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BookRoom 検索ページ</title>
</head>
<body>
{{--ヘッダー--}}
@include('BookRoom.header')

    <div class="row">
        <div class="col-md-6">
            <form method="get" action="{{ url('/bookRoom') }}">
                @csrf

                <div class="form-group">
                    <label>タイトル: </label>
                    <input type="text" class="form-control" name="title">


                    <label>著者: </label>
                    <input type="text" class="form-control" name="author">

                    <label>発売日:</label>
                    <input type="text" class="form-control" name="release_date">

                    <div class="pref">
                        <div class="decorate-parts"></div>
                        <div>&ensp;貸出フラグ：&ensp;</div>
                        <div>
                            <input type="checkbox" name="status_1" value="1">
                            <label>&ensp;貸出中&ensp;</label>
                        </div>
                        <div>
                            <input type="checkbox" name="status_2" value="2">
                            <label>&ensp;在庫あり&ensp;</label>
                        </div>
                        <div>
                            <input type="checkbox" name="status_3" value="3">
                            <label>&ensp;紛失中&ensp;</label>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary">検索</button>
            </form>
        </div>
    </div>
</div>
<!-- フッター -->
@include('BookRoom.footer')
</body>
</html>

