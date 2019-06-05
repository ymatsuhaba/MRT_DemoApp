@extends('layouts.head_common')


<head>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head>
<body>
<div class="container">
    <h1>NameMaker</h1>

    <div class="row">
        <div class="col-sm-12">
            <a href="/y_login" class="btn-square-slant" style="margin:20px;">新規登録</a>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <a href="/y_search" class="btn-square-slant" style="margin:20px;">検索</a>
        </div>
    </div>


    <div class="row">
        <form method="get" action="{{ url( '/loginform' ) }}">
            @csrf
            <div class="form-group">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>name</th>
                        <th>from</th>
                        <th>password</th>
                        {{--                        <th>Details</th>--}}
                        {{--                        <th>Update</th>--}}
                        {{--                        <th>Delete</th>--}}

                    </tr>
                    @foreach ($logindata as $login)
                        <tr>
                            <td>{{$login -> id}}</td>
                            <td>{{$login -> name}}</td>
                            <td>{{$login -> from}}</td>
                            <td>{{$login -> password}}</td>
                            {{--                            <td><a href='/inquery?id={{$login->id}}' class="btn-square-pop">Details</a></td>--}}
                            {{--                            <td><a href='/update?id={{$login->id}}' class="btn-square-pop">update</a></td>--}}
                            {{--                            <td><a href='/delete?id={{$login->id}}' class="btn-square-pop">Delete</a></td>--}}
                        </tr>
                    @endforeach
                </table>
            </div>
        </form>
    </div>
</div>
</body>
</html>