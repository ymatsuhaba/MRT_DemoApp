<html>
    <head>
        <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    </head>
    <body>
        <div class="container">
            <h1>NameMaker</h1>

            <div class="row">
                <form method="get" action="{{ url('/form') }}">
                    @csrf
                    <div class="form-group">
                        <table>
                            <tr>
                                <th>名前</th>
                                <th>出身地</th>
                                <th>ニックネーム</th>
                            </tr>
                            @foreach ($nickname as $nickname)
                                <tr>
                                    <td>{{$nickname -> name}}</td>
                                    <td>{{$nickname -> from}}</td>
                                    <td>{{$nickname -> nickname}}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>