<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>検索結果</title>
</head>
<body>
<h1>検索結果</h1>

@foreach($doctor_list as $doctor)
    {{$doctor->doctor_id}}
    {{$doctor->doctor_name}}
    {{$doctor->birthplace}}
    {{$doctor->sex}}
    {{$doctor->date_of_birth}}
    <br>
@endforeach
</body>
</html>