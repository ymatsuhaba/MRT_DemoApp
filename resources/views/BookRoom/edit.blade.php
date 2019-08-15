<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BookRoom 編集ページ</title>
</head>
{{--ヘッダー--}}
@include('BookRoom.header')
<h1 style="text-align: center">BookRoom 編集ページ</h1>
<form method="get" action="{{url('BookRoom.update')}}" class="form-horizontal" style="text-align:center; height: 500px; width: auto" enctype="multipart/form-data">
    @csrf
    {{--タイトル--}}
    <div class="form-group">
        <label class="col-md-3 control-label">タイトル</label>
        <input type="text" class="form-control" placeholder="enter title"  name="title" value={{$books->title}}>
        @if($errors->has('title'))<br><span class="error" style="color: red">{{ $errors->first('title') }}</span> @endif
    </div>
    {{--著者名--}}
    <div class="form-group ">
        <label class="col-md-3 control-label">著者名</label>
        <input type="text" class="form-control" placeholder="enter author"  name="author" value={{$books->author}}>
        @if($errors->has('author'))<br><span class="error" style="color: red">{{ $errors->first('author') }}</span> @endif
    </div>
    {{--販売日--}}
    <div class="form-group">
        <label class="col-md-3 control-label">発売日</label>
        <input type="text" class="form-control" placeholder="enter release_date" name="release_date" value={{$books->release_date}}>
        @if($errors->has('release_date'))<br><span class="error" style="color: red">{{ $errors->first('release_date') }}</span> @endif
    </div>
    {{--貸出フラグ--}}
    <div class="form-group" >
        <label class="col-md-3 control-label">貸出フラグ</label>
        <p><label class="col-md-3 control-label">貸出中</label><input type="radio" name="status" value="1" @if ($books->status == '1') checked @endif></p>
        <p><label class="col-md-3 control-label">在庫あり</label><input type="radio" name="status" value="2" @if ($books->status == '2') checked @endif></p>
        <p><label class="col-md-3 control-label">紛失中</label><input type="radio" name="status" value="3" @if ($books->status == '3') checked @endif></p>
        @if($errors->has('status'))<br><span class="error" style="color: red">{{ $errors->first('status') }}</span> @endif
    </div>
    <input name="id" type="hidden" value="{{$books->id}}">
    <button type="submit" class="btn btn-warning">完了</button>
</form>
<!-- フッター -->
@include('BookRoom.footer')