@extends('layouts.head_common')

<h1 padding=>新規登録</h1>


<div class="row">
    <div class="col-sm-12">
        <a href="/findresult" class="btn btn-primary" style="margin:20px;">登録者一覧ページに戻る</a>
    </div>
</div>

<form method="get" action="/find/store">

    <div class="form-group">
        <label>名前</label>
        <input type="text" name="name" value="" class="form-control">
    </div>

    <div class="form-group">
        <label>出身地</label>
        <input type="text" name="from" value="" class="form-control">
    </div>
    <div class="form-group">
        <label>性別</label>
        <input type="text" name="sex" value="" class="form-control">
    </div>
    <div class="form-group">
        <label>生年月日</label>
        <input type="text" name="date_of_birth" value="" class="form-control">
    </div>

    <input type="submit" value="登録" class="btn btn-primary">

</form>