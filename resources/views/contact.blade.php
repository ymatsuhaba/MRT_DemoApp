@extends('layouts.head_common')
<html>
    <body>
        <div class="container">
            <h1>NameMaker</h1>

            <div class="row">
                <div class="col-md-6">
                    <form method="get" action="{{url('/contact_result')}}">
                        @csrf
                        <div class="form-group">
                            <label>名前: </label>
                            <input type="text" class="form-control" name="name">

                            <label>出身地: </label>
                            <input type="text" class="form-control" name="from">

                            <label>ニックネーム: </label>
                            <input type="text" class="form-control" name="nickname">

                            <label>性別: </label>
                            <input type="text" class="form-control" name="sex">

                            <label>生年月日: </label>
                            <input type="text" class="form-control" name="birthday">

                            <label>本アプリを利用した理由: </label>
                            <input type="text" class="form-control" name="reason">
                        </div>

                        <button class="btn btn-primary">登録</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
