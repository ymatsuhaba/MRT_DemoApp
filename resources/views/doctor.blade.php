<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>NameMaker</title>
</head>
<body>
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
