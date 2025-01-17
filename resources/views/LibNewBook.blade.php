<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style_h.css">
    <title>新規登録ページ</title>
</head>
<style>
    span
    {
        color:#DC3545!important;
        font-size:13px!important;
    }
    h1
    {
        font-size: 20px;
    }
</style>
<body>
<h1>新規登録ページ</h1>
<div class="row">
    <div class="col-sm-12">
        <a href="/LibBook" class="btn btn-primary" style="margin:20px;">一覧画面</a>
    </div>
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <form action=" LibNewConfirm" method="post" class="form-horizontal">
                @csrf
                <div class="form-group @if($errors->has('title')) has-error @endif">
                    <label>タイトル</label>
                    <input type="text" name="title" value="{{old('title', '')}}">
                    <br>@if($errors->has('title'))<span class="text-danger">{{ $errors->first('title') }}</span> @endif
                </div>
                <br>
                <br>
                <div class="form-group @if($errors->has('writer_name')) has-error @endif">
                    <label>著者</label>
                    <input type="text" name="writer_name" value="{{old('writer_name', '')}}">
                    <br>@if($errors->has('writer_name'))<span class="text-danger">{{ $errors->first('writer_name') }}</span> @endif
                </div>
                <br>
                <br>
                <div class="form-group @if($errors->has('release_date')) has-error @endif">
                    <label>発売日</label>
                    <input type="date" name="release_date" value = "{{old('release_date','')}}">
                    <br>@if($errors->has('release_date'))<span class="text-danger">{{ $errors->first('release_date') }}</span> @endif
                </div>

                <br>
                <br>
                <div class="form-group @if($errors->has('lending_status')) has-error @endif">
                    <label>貸出フラグ</label>
                    <input type="radio" name="lending_status" value="1" @if (old('lending_status', '') == 1) checked @endif>貸出中
                    <input type="radio" name="lending_status" value="2" @if (old('lending_status', '') == 2) checked @endif>在庫あり
                    <input type="radio" name="lending_status" value="3" @if (old('lending_status', '') == 3) checked @endif>紛失中
                    <br>@if($errors->has('lending_status'))<span class="text-danger">{{ $errors->first('lending_status') }}</span> @endif
                </div>
                <br>
                <br>
                <div class="form-group @if($errors->has('cover_image')) has-error @endif">
                    <label>表紙</label>
                    <input type="file" name="cover_image" enctype="multipart/form-data" value = "{{old('cover_image','')}}">
                    <br>@if($errors->has('cover_image'))<span class="text-danger">{{ $errors->first('cover_image') }}</span> @endif
                </div>
                <br>
                <br>
                <input type="submit" value="確認" class="btn btn-info">
            </form>
        </div>
    </div>
</div>
</body>
</html>