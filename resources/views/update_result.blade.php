@extends('layouts.head_common')
<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head>
<body>
<div class="container">
    <h1>NameMaker</h1>

    <p class="crud">以下のデータを更新しました。</p>

    <div class="row">
        <form method="get">
            @csrf
            <div class="form-group">
                <p><a href='/list' class="btn-square-pop">一覧に戻る</a></p>
                <table>
                    <tr>
                        <th>名前</th><td>{{$request -> name}}</td>
                    </tr>
                    <tr>
                        <th>出身地</th><td>{{$request -> from}}</td></td>
                    </tr>
                    <tr>
                        <th>ニックネーム</th><td>{{$request -> nickname}}</td></td>
                    </tr>
                    <tr>
                        <th>性別</th><td>{{$request -> sex}}</td></td>
                    </tr>
                    <tr>
                        <th>生年月日</th><td>{{$request -> birthday}}</td></td>
                    </tr>
                    <tr>
                        <th>本アプリを利用した理由</th><td>{{$request -> reason}}</td></td>
                    </tr>
                </table>
            </div>
        </form>
    </div>
</div>
</body>
</html>