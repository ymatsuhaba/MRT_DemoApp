@extends('layouts.head_common')
<html>
    <head>
    </head>
    <body>
        <div class="container">
            <h1>登録情報更新ページ</h1>

            <div class="row">
                <form method="get" action="{{url('/renew_result')}}">
                    @csrf
                    <div class="form-group">
                        <table>
                            <tr>
                                <th>名前</th><td><input type="text" name="name" value='{{$info -> name}}'>名前を更新してください</td>
                            </tr>
                            <tr>
                                <th>出身地</th><td><input type="text" name="from" value='{{$info -> from}}'>出身地を更新してください</td>
                            </tr>
                            <tr>
                                <th>性別</th><td><input type="text" name="sex" value='{{$info -> sex}}'>性別を更新してください</td>
                            </tr>
                            <tr>
                                <th>生年月日</th><td><input type="text" name="date_of_birth" value='{{$info -> date_of_birth}}'>生年月日を更新してください</td>
                            </tr>
                        </table>
                        <input name="id" type="hidden" value="{{$info -> id}}">
                        <button class="btn btn-primary">更新する</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>