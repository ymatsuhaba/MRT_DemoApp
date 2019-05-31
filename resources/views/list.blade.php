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
                                <th>性別</th>
                                <th>生年月日</th>
                            </tr>
                            @foreach ($search as $search)
                                <tr>
                                    <td><a href='inquery'>{{$search -> name}}</a></td>
                                    <td>{{$search -> from}}</td>
                                    <td>{{$search -> sex}}</td>
                                    <td>{{$search -> birthday}}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>