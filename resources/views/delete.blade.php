<html>
    <head>
        <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    </head>
    <body>
        <div class="container">
            <h1>NameMaker</h1>

            <div class="row">
                <form method="post">
                    @csrf
                    <div class="form-group" action="{{ url('/delete_result')}}">
                        <table>
                            <tr>
                                <th>名前</th><td>{{$data -> name}}</td>
                            </tr>
                            <tr>
                                <th>出身地</th><td>{{$data -> from}}</td></td>
                            </tr>
                            <tr>
                                <th>ニックネーム</th><td>{{$data -> nickname}}</td></td>
                            </tr>
                            <tr>
                                <th>性別</th><td>{{$data -> sex}}</td></td>
                            </tr>
                            <tr>
                                <th>生年月日</th><td>{{$data -> birthday}}</td></td>
                            </tr>
                            <tr>
                                <th>本アプリを利用した理由</th><td>{{$data -> reason}}</td></td>
                            </tr>
                        </table>
                    </div>
                    <br>
                    <button class="btn btn-primary">削除</button>
                </form>
            </div>
        </div>
    </body>
</html>