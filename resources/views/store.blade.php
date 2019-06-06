@extends('layouts.head_common')
        <!doctype html>
<html lang=ja>
    <head>
    <meta charset="UTF-8">
        <style> h1,p { font-weight: bold; font-size: 15px; }</style>
        <title>Document</title>
    </head>
        <body>
            <h1>データの登録が完了しました！</h1>
            <p>登録された名前は...{{$query->name}}</p>
            <p>登録された出身地は...{{$query->from}}</p>
            <p>登録された性別は...{{$query->sex}}</p>
            <p>登録された生年月日は...{{$query->date_of_birth}}</p>
            <a href="/findresult" class="btn btn-primary" style="margin:20px;">登録者一覧ページに戻る</a>
        </body>
</html>