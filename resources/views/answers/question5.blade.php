<body>
<header>
    <hr><h1>問題５の答え</h1><hr>
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