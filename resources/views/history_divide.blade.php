<!doctype html>
<html lang=ja>
<head>
    <meta charset="UTF-8">
    <title>計算履歴一覧</title>
    <style>
        *{text-align: center; font-family: 'Avenir','Helvetica Neue','Helvetica','Arial','Hiragino Sans','ヒラギノ角ゴシック',YuGothic,'Yu Gothic','メイリオ', Meiryo,'ＭＳ Ｐゴシック','MS PGothic'}
    </style>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<header>
    <hr><h1>演算子が÷のレコード</h1><hr>
</header>
<table class="table table-bordered">
    <tr>
        <th>数字１</th>
        <th>演算子</th>
        <th>数字２</th>
        <th>計算結果</th>
    </tr>
    @foreach($result as $all_data)
        <tr>
            <td>{{$all_data->number1}}</td>
            <td>{{$all_data->operator}}</td>
            <td>{{$all_data->number2}}</td>
            <td>{{$all_data->result}}</td>
        </tr>
    @endforeach
</table>
</form>
</body>
</html>