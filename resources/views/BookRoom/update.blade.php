<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BookRoom 編集結果ページ</title>
</head>
{{--ヘッダー--}}
@include('BookRoom.header')
<h1 style="text-align: center">編集結果ページ</h1>
<a href="http://localhost:3000/bookRoom"><button type="submit" class="btn btn-primary" style="text-align:center">一覧へ戻る</button></a>
<!-- フッター -->
@include("BookRoom.footer")