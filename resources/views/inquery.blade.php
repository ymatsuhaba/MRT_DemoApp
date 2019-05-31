<html>
    <head>
        <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    </head>
    <body>
        <div class="container">
            <h1>NameMaker</h1>

            <div class="row">
                <form method="get">
                    @csrf
                    <div class="form-group">
                        <table>
                            <tr>
                                <th>名前</th>
                                <th>出身地</th>
                                <th>ニックネーム</th>
                                <th>性別</th>
                                <th>生年月日</th>
                                <th>本アプリを利用した理由</th>
                            </tr>
                            @foreach ($obj as $obj)
                                <tr>
                                    <td>{{$obj -> name}}</td>
                                    <td>{{$obj -> from}}</td>
                                    <td>{{$obj -> nickname}}</td>
                                    <td>{{$obj -> sex}}</td>
                                    <td>{{$obj -> birthday}}</td>
                                    <td>{{$obj -> reason}}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>