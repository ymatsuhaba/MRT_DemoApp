<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BookRoom 新規登録ページ</title>
</head>
{{--ヘッダー--}}
@include('BookRoom.header')
{{--新規登録画面--}}
<h1 style="text-align: center">BookRoom 新規登録ページ</h1>
<form method="get" action="{{ url('/BookRoom.confirm') }}" class="form-horizontal" style="text-align:center; height: 500px; width: auto" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label class="col-md-3 control-label">タイトル</label>
        <input type="text" class="form-control"  name="title">
        @if($errors->has('title'))<br><span class="error" style="color: red">※タイトルを入力してください。</span> @endif
    </div>
    <div class="form-group ">
        <label class="col-md-3 control-label">著者名</label>
        <input type="text" class="form-control"  name="author">
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label">発売日</label>
        <input type="text" class="form-control" name="release_date">
        @if($errors->has('release_date'))<br><span class="error" style="color: red">※販売日を入力してください。</span> @endif
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label">貸出フラグ</label>
        <p><label class="col-md-3 control-label">貸出中</label><input type="radio" name="status" value="1"></p>
        <p><label class="col-md-3 control-label">在庫あり</label><input type="radio" name="status" value="2"></p>
        <p><label class="col-md-3 control-label">紛失中</label><input type="radio" name="status" value="3"></p>
        @if($errors->has('status'))<br><span class="error" style="color: red">※貸出フラグを選択してください。</span> @endif
    </div>
    <div class="form-group ">
            <label for="email" class="col-md-3 control-label">表紙</label>
            {{ csrf_field() }}
            <input type="file" class="form-control"  name="cover">
        </div>
    <button type="submit" class="btn btn-primary">確認</button>
</form>
<!-- フッター -->
@include('BookRoom.footer')