<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head>
<body class="calcbody">
<h1>問４</h1>

<div class="row1">
    <form method="get">
        @csrf
        <table class="calclresult">
            <tr>
                <th class="calcth" >No</th>
                <th class="calcth" colspan="5">計算結果</th>
                <th class="calcth">登録日</th>
            </tr>
            @foreach ($calc_result as $calcl_num)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$calcl_num->first_figure}}</td>
                    <td>{{$calcl_num->operator}}</td>
                    <td>{{$calcl_num->second_figure}}</td>
                    <td>{{$calcl_num->equal}}</td>
                    <td>{{$calcl_num->result}}</td>
                    <td>{{$calcl_num->created_at}}</td>
                </tr>
            @endforeach
        </table>
    </form>
</div>
</body>
</html>
