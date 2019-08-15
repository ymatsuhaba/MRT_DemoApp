<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BookRoom 詳細ページ</title>
</head>
{{--ヘッダー--}}
@include('BookRoom.header')

<h1 style="text-align: center">詳細ページ</h1>
<table class="table table-striped table-hover" style="text-align: center">
    <thead>
    <tr>
        <th>タイトル</th>
        <th>著者名</th>
        <th>発売日</th>
        <th>貸出フラグ</th>
    </tr>
    </thead>
    <tbody>
    <td>{{$books->title}}</td>
    <td>{{$books->author}}</td>
    <td>{{$books->release_date}}</td>
    <td>{{Config::get("const_s.status.$books->status")}}</td>
    </tbody>
</table>
<a href="http://localhost:3000/bookRoom"><button type="submit" class="btn btn-primary" style="text-align:center">一覧へ戻る</button></a>

<!-- フッター -->
@include("BookRoom.footer")