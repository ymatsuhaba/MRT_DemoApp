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
            @foreach($Collection as $searchMul)
                <tr>
                    <td>{{$searchMul -> num1}}</td>
                    <td>{{$searchMul -> calc}}</td>
                    <td>{{$searchMul -> num2}}</td>
                    <td>{{$searchMul -> CalculatedNumber}}</td>
                </tr>
            @endforeach
    </table>
</div>




</body>
</html>