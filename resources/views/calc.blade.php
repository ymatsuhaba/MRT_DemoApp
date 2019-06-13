<html>
<head>
    <title>Calculator</title>
    <script src="{{asset('/js/calc.js')}}"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head>
<body>
<h1>Calculator</h1>


<form name="form" class="form" method="post" action="{{url('/calc')}}">
    @csrf

    <table class="calc" id="calcTable">
        <tr>
            <td colspan="4" width="140" height="120"><input name="data" style="width:600px;height:100px" type="text" value="{{$result}}"></td>
        </tr>
        <tr>
            <td colspan="2" width="140" height="120"><input type="button" onclick="calc('C')" value="C"></td>
            <td width="140" height="120"><input type="button" onclick="calc('%')" value="％"></td>
            <td width="140" height="120"><input type="button" onclick="calc('÷')" value="÷"></td>
        </tr>
        <tr>
            <td width="140" height="120"><input type="button" onclick="calc('7')" value="7"></td>
            <td width="140" height="120"><input type="button" onclick="calc('8')" value="8"></td>
            <td width="140" height="120"><input type="button" onclick="calc('9')" value="9"></td>
            <td width="140" height="120"><input type="button" onclick="calc('×')" value="✕"></td>
        </tr>
        <tr>
            <td width="140" height="120"><input type="button" onclick="calc('4')" value="4"></td>
            <td width="140" height="120"><input type="button" onclick="calc('5')" value="5"></td>
            <td width="140" height="120"><input type="button" onclick="calc('6')" value="6"></td>
            <td width="140" height="120"><input type="button" onclick="calc('-')" value="−"></td>
        </tr>
        <tr>
            <td width="140" height="120"><input type="button" onclick="calc('1')" value="1"></td>
            <td width="140" height="120"><input type="button" onclick="calc('2')" value="2"></td>
            <td width="140" height="120"><input type="button" onclick="calc('3')" value="3"></td>
            <td width="140" height="120"><input type="button" onclick="calc('+')" value="＋"></td>
        </tr>
        <tr>
            <td colspan="2" width="140" height="120"><input type="button" onclick="calc('0')" value="0"></td>
            <td width="140" height="120"><input type="button" onclick="calc('.')" value="." ></td>
            <td width="140" height="120"><button class="btn btn-primary">=</button></td>
        </tr>
    </table>
</form>
</body>
</html>
