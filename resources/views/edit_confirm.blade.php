<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style_h.css">
    <title>更新情報の確認</title>
</head>
<body>
<h1>更新情報の確認</h1>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <form action="{{url('/doctor')}}" method="post" class="form-horizontal">
                {{ method_field('put') }}
                @csrf
                <input type="hidden" name="doctor_name" value="{{$doctor_name}}">
                <input type="hidden" name="birthplace" value="{{$birthplace}}">
                <input type="hidden" name="sex" value="{{$sex}}">
                <input type="hidden" name="date_of_birth" value="{{$date_of_birth}}">
                <input type="hidden" name="id" value="{{$id}}">
                <div class="row">
                    <label class="col-sm-4 control-label">名前</label>
                    <div class="col-sm-8">{{$doctor_name}}</div>
                </div>
                <div class="row">
                    <label class="col-sm-4 control-label">出身地</label>
                    <div class="col-sm-8">{{$birthplace}}</div>
                </div>
                <div class="row">
                    <label class="col-sm-4 control-label">性別</label>
                    <div class="col-sm-8">{{$sex}}</div>
                </div>
                <div class="row">
                    <label class="col-sm-4 control-label">生年月日</label>
                    <div class="col-sm-8">{{$date_of_birth}}</div>
                </div>
                <div class="row" style="margin-top: 30px;">
                    <div class="col-sm-offset-4 col-sm-8">
                        <input type="submit" name="button1" value="更新" class="btn btn-primary btn-wide" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <a href="/edit_index" class="btn btn-primary" style="margin:20px;">再入力</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>