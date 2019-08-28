<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style_h.css">
    <title>新規登録の確認</title>
</head>
<body>
<h1>新規登録の確認</h1>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <form action="doctor" method="post" class="form-horizontal">
                @csrf
                <input type="hidden" name="title" value="{{$doctor_name}}">
                <input type="hidden" name="writer_name" value="{{$birthplace}}">
                <input type="hidden" name="lending_status" value="{{$sex}}">
                <input type="hidden" name="release_date" value="{{$date_of_birth}}">
                <input type="hidden" name="cover_image" value="{{$date_of_birth}}">
                <div class="row">
                    <label class="col-sm-4 control-label">タイトル</label>
                    <div class="col-sm-8">{{$title}}</div>
                </div>
                <div class="row">
                    <label class="col-sm-4 control-label">著者</label>
                    <div class="col-sm-8">{{$writer_name}}</div>
                </div>
                <div class="row">
                    <label class="col-sm-4 control-label">貸出フラグ</label>
                    <div class="col-sm-8">{{$lending_status}}</div>
                </div>
                <div class="row">
                    <label class="col-sm-4 control-label">発売日</label>
                    <div class="col-sm-8">{{$release_date}}</div>
                </div>
                <div class="row">
                    <label class="col-sm-4 control-label">表紙</label>
                    <div class="col-sm-8">{{$cover_image}}</div>
                </div>
                <div class="row" style="margin-top: 30px;">
                    <div class="col-sm-offset-4 col-sm-8">
                        <input type="submit" name="button1" value="登録" class="btn btn-primary btn-wide" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <a href="/LibNewBook" class="btn btn-primary" style="margin:20px;">入力画面に戻る</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>