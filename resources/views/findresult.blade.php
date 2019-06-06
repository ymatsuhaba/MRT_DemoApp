@extends('layouts.head_common')
<html>
<body>
<div class="container">
    <h1 style = text-align:center;>登録者一覧ページ</h1>
    <div class="row">
        <div class="col-sm-12">
            <a href="/create" class="btn-square-slant" style = margin:50px;>新規登録</a>
        </div>
    </div>
        <form method="get">
            @csrf
            <div class="form-group">
                <table>
                    <tr>
                        <th>id</th>
                        <th>名前</th>
                        <th>出身地</th>
                        <th>性別</th>
                        <th>生年月日</th>
                    </tr>
                    @foreach ($query as $query)
                        <tr>
                            <td>{{$query -> id}}</td>
                            <td>{{$query -> name}}</td>
                            <td>{{$query -> from}}</td>
                            <td>{{$query -> sex}}</td>
                            <td>{{$query -> date_of_birth}}</td>
                            <td><a href='/details?id={{$query->id}}' class="btn-square-pop">詳細</a></td>
                            <td><a href='/renew?id={{$query->id}}' class="btn-square-pop">更新</a></td>
                            <td><a href='/destroy?id={{$query->id}}' class="btn-square-pop">削除</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </form>

</div>
</body>
</html>