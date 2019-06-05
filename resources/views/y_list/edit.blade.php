@extends('layouts.head_common')


<head>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head>
<body>
<div class="container">
    <h1>NameMaker</h1>

    {{--    <a class="btn btn-default" href="/">GO BACK</a>--}}
    <div class="row">
        <div class="col-sm-12">
            <a href="/login" class="btn-square-slant" style="margin:20px;">新規登録</a>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <a href="/y_search" class="btn-square-slant" style="margin:20px;">検索</a>
        </div>
    </div>

    <div class="row">
        <div class="form-group">
            <table>
                <tr>
                    <th>ID</th>
                    <th>name</th>
                    <th>from</th>
                    <th>password</th>
                    <th>Details</th>
                    <th>Update</th>
                    <th>Delete</th>

                </tr>
                @foreach ($logindata as $login)
                    <tr>
                        <th>{{$login -> id}}</th>
                        <td>{{$login -> name}}</td>
                        <td>{{$login -> from}}</td>
                        <td>{{$login -> password}}</td>
                        <td><a href="/y_list{{$login->id}}/edit" class="btn-square-pop">Edit</a></td>
                        <td><a href="/y_list{{$login->id}}/update"  class="btn-square-pop">update</a></td>
                        <td><a href="/y_list{{$login->id}}/destroy"  class="btn-square-pop">Delete</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
</body>
</html>