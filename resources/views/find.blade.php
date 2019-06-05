@extends('layouts.head_common')
<html>
<body>
<div class="container">
    <h1>登録者検索ページ</h1>

    <div class="row">
        <div class="col-md-6">
            <form method="get" action="{{ url('/findresult') }}">
                @csrf

                <div class="form-group">
                    <label>名前</label>
                    <input type="text" class="form-control" name="名前" placeholder="名前を入力">

                    <label>出身地</label>
                    <input type="text" class="form-control" name="出身" placeholder="出身を入力"><br>

                    <label>性別</label>
                    <input type="text" class="form-control" name="性別" placeholder="性別を入力">

                    <label>生年月日</label>
                    <input type="text" class="form-control" name="birthday" placeholder="西暦で入力　（例：19920603）">
                </div>

                <button class="btn btn-primary">検索</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
