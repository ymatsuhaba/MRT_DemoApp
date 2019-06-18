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
                <select class="select-label" name="operator_sel">
                    <option value='all' >all</option>
                    <option value='+' >＋</option>
                    <option value='-' >－</option>
                    <option value='*' >×</option>
                    <option value='/' >÷</option>
                </select>
                <button class="btn btn-primary">変更</button>
            </div>
        </form>
        <br>
        <table class="calclresult">
            <tr>
                <th class="calcth" colspan="4">計算結果</th>
            </tr>
            @foreach ($calcresult as $calclnum)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$calclnum['formula']}}</td>
                    <td>{{$calclnum['equal']}}</td>
                    <td>{{$calclnum['calcresult']}}</td>
                    <input name="operator" type="hidden" value="{{$calclnum['operator']}}">
                </tr>
            @endforeach
        </table>
    </form>
</div>
</body>
</html>
