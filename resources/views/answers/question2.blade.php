<!doctype html>
<html lang=ja>
<head>
    <meta charset="UTF-8">
</head>
<body>
<header>
    <hr><h1>問題2の答え</h1><hr>
</header>
<table class="table table-bordered">
    <tr>
        <th>数字１</th>
        <th>演算子</th>
        <th>数字２</th>
        <th>計算結果</th>
    </tr>
    @foreach($collection as $result)
        <tr>
            <td>{{$result->first_figure}}</td>
            <td>{{$result->operator}}</td>
            <td>{{$result->second_figure}}</td>
            <td>{{$result->result}}</td>
        </tr>
    @endforeach
</table>
</form>
</body>
</html>