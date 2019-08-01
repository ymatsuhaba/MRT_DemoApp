<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BookRoom 一覧表</title>
</head>

{{--ヘッダー--}}
@include('BookRoom.header')
<a href="BookRoom.register"><button type="submit" class="btn btn-primary" style="text-align:center">新規登録はこちら</button></a>
<a href="BookRoom.search"><button type="submit" class="btn btn-primary" style="text-align:center">検索はこちら</button></a>
<a href="http://localhost:3000/bookRoom?_token=16dWG7PbqDzwWHUQvxZKzcTq5GWfjtCfpoSEH8AA&title=&author=&release_date="><button type="submit" class="btn btn-primary" style="text-align:center">一覧へ戻る</button></a>
<div class="page-header" style="text-align: center">
    <h1>BookRoom 一覧表</h1>
</div>
<table class="table table-striped table-hover" style="text-align: center">
    <thead>
    <tr>
        <th>タイトル</th>
        <th>著者</th>
        <th>発売日</th>
        <th>貸出フラグ</th>
        <th>登録日</th>
    </tr>
    </thead>
    @foreach($books as $list)
        <tr>
            <td>{{$list->title}}</td>
            <td>{{$list->author}}</td>
            <td>{{$list->release_date}}</td>
            <td>{{Config::get("const_s.status.$list->status")}}</td>
            <td>{{$list->created_at}}</td>
        </tr>
        @endforeach
        </tbody>
</table>
<!-- フッター -->
@include('BookRoom.footer')
