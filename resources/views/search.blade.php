@extends('layouts.head_common')
<html>
<body>
<div class="container">
    <h1>NameMaker</h1>

    <div class="row">
        <div class="col-md-6">
            <form method="get" action="{{ url('/list') }}">
                @csrf

                <div class="form-group">
                    <label>名前: </label>
                    <input type="text" class="form-control" name="name">

                    <label>出身地: </label>
                    <input type="text" class="form-control" name="from">

                    <label>性別: </label>
                    <input type="text" class="form-control" name="sex">

                    <label>生年月日: </label>
                    <input type="text" class="form-control" name="birthday">
                </div>

                <button class="btn btn-primary">検索</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
