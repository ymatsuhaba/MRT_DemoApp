<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head>
<body class="calcbody">
<h1>電卓履歴</h1>

<div class="row">
    <a href="/calc" class="btn-square-slant" style="margin:20px;">電卓に戻る</a>
</div>
<div class="row1">
    <form method="get">
        @csrf
        <form method="post" action="{{url('/calclog')}}">
            <div class="select-area">
                <select class="select-label" name="operator_sel" onchange="submit(this.form)">
                    <option value='all' {{$selectbox['all']}}>all</option>
                    <option value='+' {{$selectbox['+']}}>＋</option>
                    <option value='-' {{$selectbox['-']}}>－</option>
                    <option value='*' {{$selectbox['*']}}>×</option>
                    <option value='/' {{$selectbox['/']}}>÷</option>
                </select>
            </div>
        </form>
        <br>
        <table class="calclresult">
            <tr>
                <th class="calcth" >No</th>
                <th class="calcth" colspan="3">計算結果</th>
                <th class="calcth">登録日</th>
            </tr>
            @foreach ($displaydata as $calclnum)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$calclnum['formula']}}</td>
                    <td>{{$calclnum['equal']}}</td>
                    <td>{{$calclnum['calcresult']}}</td>
                    <td>{{$calclnum['created_at']}}</td>
                    <input name="operator" type="hidden" value="{{$calclnum['operator']}}">

                </tr>
            @endforeach
        </table>
    </form>
</div>
</body>
</html>
