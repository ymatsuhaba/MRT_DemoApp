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

        @if(count($searchAdd) > 0)
            @foreach($searchAdd as $Calculator)
                <tr>
                    <td>{{$Calculator -> num1}}</td>
                    <td>{{$Calculator -> calc}}</td>
                    <td>{{$Calculator -> num2}}</td>
                    <td>{{$Calculator -> CalculatedNumber}}</td>
                </tr>
            @endforeach
        @endif
    </table>
</div>




</body>
</html>
