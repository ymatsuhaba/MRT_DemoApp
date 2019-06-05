<html>
    <head>
        <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    </head>
    <body>
        <div class="container">
            <h1>NameMaker</h1>

            <div class="row">
                <form method="get" action="{{ url('/delete_result')}}">
                    @csrf
                    <div class="form-group">
                        <table>
                            <tr>
                                <th>名前</th><td>{{$data -> name}}</td>
                            </tr>
                            <tr>
                                <th>出身地</th><td>{{$data -> from}}</td>
                            </tr>
                            <tr>
                                <th>ニックネーム</th><td>{{$data -> nickname}}</td>
                            </tr>
                            <tr>
                                <th>性別</th><td>{{$data -> sex}}</td>
                            </tr>
                            <tr>
                                <th>生年月日</th><td>{{$data -> birthday}}</td>
                            </tr>
                            <tr>
                                <th>本アプリを利用した理由</th><td>{{$data -> reason}}</td>
                            </tr>
                        </table>
                        <input name="id" type="hidden" value="{{$data -> id}}">
                        <br>
                        <button class="btn btn-primary">削除</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>