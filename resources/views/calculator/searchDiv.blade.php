@extends('layouts.calculator_common')

<a class="btn btn-default" href="calculator">list</a>
<h1>Calculator</h1>

<div id="table">
    <table>
        <tr>
            <th>Num1</th>
            <th>Calc</th>
            <th>Num2</th>
            <th>CalculatedNumber</th>
        </tr>

{{--        @if(count($searchDiv) > 0)--}}
            @foreach($Collection as $searchDiv)
                <tr>
                    <td>{{$searchDiv -> num1}}</td>
                    <td>{{$searchDiv -> calc}}</td>
                    <td>{{$searchDiv -> num2}}</td>
                    <td>{{$searchDiv -> CalculatedNumber}}</td>
                </tr>
            @endforeach
{{--        @endif--}}
    </table>
</div>




</body>
</html>