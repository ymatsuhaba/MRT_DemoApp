@extends('layouts.head_common')
<html>
    <head>
    </head>
    <body>
        <div class="container">
            <h1>詳細確認画面</h1>

            <div class="row">
                <form method="get">
                    @csrf
                    <div class="form-group">
                        <p><a href='/findresult' class="btn-square-pop">一覧に戻る</a></p>
                        <table>
                            <tr>
                                <th>名前</th><td>{{$info -> name}}</td>
                            </tr>
                            <tr>
                                <th>出身地</th><td>{{$info -> from}}</td>
                            </tr>

                            <tr>
                                <th>性別</th><td>{{$info -> sex}}</td>
                            </tr>
                            <tr>
                                <th>生年月日</th><td>{{$info -> date_of_birth}}</td>
                            </tr>

                        </table>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>