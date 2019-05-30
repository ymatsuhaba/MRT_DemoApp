@extends('layouts.head_common')


<head>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head>
<body>
<div class="container">
    <h1>NameMaker</h1>

    <div class="row">
        <form method="get" action="{{ url( '/loginform' ) }}">
            @csrf
            <div class="form-group">
                <table>
                    <tr>
                        <th>名前</th>
                        <th>出身地</th>
                        <th>ニックネーム</th>
                    </tr>
                    @foreach ($logindata as $login)
                        <tr>
                            <td>{{$login -> id}}</td>
                            <td>{{$login -> name}}</td>
                            <td>{{$login -> from}}</td>
                            <td>{{$login -> password}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </form>
    </div>
</div>
</body>
</html>