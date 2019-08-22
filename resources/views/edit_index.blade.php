<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style_h.css">
    <title>医師登録情報更新</title>
</head>
<body align="center">
<h1 align="center">医師登録情報更新</h1>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <a href="/doctor" class="btn btn-primary" style="margin:20px;">一覧画面に戻る</a>
            <br>
            <form action="{{url('/edit_confirm')}}" method="post" class="form-horizontal">
                @csrf
                <div class="form-group @if($errors->has('doctor_name')) has-error @endif">
                    <label>名前</label>
                    <input type='text' name='doctor_name' value="{{old('doctor_name', $doctor->doctor_name)}}">
                    <br>@if($errors->has('doctor_name'))<span class="text-danger">{{ $errors->first('doctor_name') }}</span> @endif
                </div>
                <br>
                <br>
                <div class="form-group @if($errors->has('birthplace')) has-error @endif">
                    <label>出身地</label>
                    <input type="text" name="birthplace"  value="{{old('birthplace', $doctor->birthplace)}}">
                    <br>@if($errors->has('birthplace'))<span class="text-danger">{{ $errors->first('birthplace') }}</span> @endif
                </div>
                <br>
                <br>
                <div class="form-group @if($errors->has('sex')) has-error @endif">
                    <label>性別</label>
                    <input type="radio" name="sex" value="male" @if (old('sex', $doctor->sex) == 'male') checked @endif>male
                    <input type="radio" name="sex" value="female" @if (old('sex', $doctor->sex) == 'female') checked @endif>female
                    <br>@if($errors->has('sex'))<span class="text-danger">{{ $errors->first('sex') }}</span> @endif
                </div>
                <br>
                <br>
                <div class="form-group @if($errors->has('date_of_birth')) has-error @endif">
                    <label>生年月日</label>
                    <input type="date" name="date_of_birth" value = "{{old('date_of_birth',$doctor->date_of_birth)}}">
                    <br>@if($errors->has('date_of_birth'))<span class="text-danger">{{ $errors->first('date_of_birth') }}</span> @endif
                </div>
                <br>
                <br>
                <input type="hidden" name="id" value="{{$doctor -> id}}">
                <input type="submit" value="確認" class="btn btn-info">
            </form>
        </div>
    </div>
</div>
</body>
</html>