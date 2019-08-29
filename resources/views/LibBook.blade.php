<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style_h.css">
    <title>古本屋Ha-Bar</title>
</head>
<style>
    body
    {
        text-decoration: none;
    }
    h1
    {
        font-size: 20px;
    }
</style>
<h1>古本屋Ha-Bar</h1>
<div class="row">
    <div class="col-sm-12">
        <a href="/LibNewBook" class="btn btn-primary" style="margin:20px;">新規登録</a>
    </div>
</div>
<body>
<div class="col-md-3">
    <div class="col-md-3">
        @csrf
        <table border="1" align="center">
            <tr><th>タイトル</th><th>著者</th><th>発売日</th><th>貸出フラグ</th><th>登録日</th></tr>
            @foreach($books as $book)
                <tr><td>{{$book->title}}</td>
                    <td>{{$book->writer_name}}</td>
                    <td>{{$book->release_date}}</td>
                    <td>{{config("const_book.lending_status.$book->lending_status")}}</td>
                    <td>{{$book->created_at}}</td>
                            {{ csrf_field() }}
                </tr>
            @endforeach
        </table>
    </div>
</div>
</body>
</html>