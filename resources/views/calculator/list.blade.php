@extends('layouts.calculator_common')

<a class="btn btn-default" href="/">Go Back</a>
<h1>Calculator</h1>

    <table>
        <tr>
            <th>Num1</th>
            <th>Calc</th>
            <th>Num2</th>
            <th>ArithmeticOperations</th>
        </tr>

        @if(count($Calculators) > 0)
            @foreach($Calculators as $Calculator)
                <tr>
                    <td><a href="login/{{$Calculator -> id}}">{{$Calculator -> id}}</a></td>
                    <td>{{$Calculator -> num1}}</td>
                    <td>{{$Calculator -> calc}}</td>
                    <td>{{$Calculator -> num2}}</td>
                    <td>{{$Calculator -> CalculatedNumber}}</td>
                </tr>
            @endforeach
        @endif
    </table>