@extends('layouts.head_common')

<body>
<h1>あだ名変換ツール</h1>
<div class="col-md-4">
    <form method="post" action="{{route('contact.store')}}">
        {{ csrf_field() }}

        <div class="form-id">
            <label>User id: </label>
            <input type="text" class="form-control" name="id">
        </div>

        <div class="form-group">
            <label>PassWord: </label>
            <input type="text" class="form-control" name="password">
        </div>

        <button class="btn btn-primary">ログイン</button>
    </form>
</div>

</body>
</html>