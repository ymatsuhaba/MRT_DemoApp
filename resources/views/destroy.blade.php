@extends('layouts.head_common')
<!doctype html>
    <html lang=ja>
        <body>
            <h1>削除確認ページ</h1>
            <p>削除する名前は...{{$query->name}}</p>
            <p>削除する出身地は...{{$query->from}}</p>
            <p>削除する性別は...{{$query->sex}}</p>
            <p>削除する生年月日は...{{$query->date_of_birth}}</p>
            <a href="/destroyresult?id={{$query->id}}" class="btn btn-primary" style="margin:20px;">削除する</a>
        </body>
    </html>