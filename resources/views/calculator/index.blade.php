@extends('layouts.calculator_common')

            <a class="btn btn-default" href="/">Go Back</a>
            <a class="btn btn-default" href="calculator/create">Create</a>
            <h1>Calculator</h1>

{{--    <div id="table">--}}
{{--        <h2>add</h2>--}}
{{--        <form action='calculator.add' method="GET">--}}
{{--            Num1: <input type="number" name="num1">--}}
{{--            Num2: <input type="number" name="num2">--}}
{{--            <input type="submit">--}}
{{--        </form>--}}
{{--        <h2>subtract</h2>--}}
{{--        <form action="calculator.subtract" method="GET">--}}
{{--            Num1: <input type="number" name="num1">--}}
{{--            Num2: <input type="number" name="num2">--}}
{{--            <input type="submit">--}}
{{--        </form>--}}
{{--        <h2>multify</h2>--}}
{{--        <form action="calculator.multify" method="GET">--}}
{{--            Num1: <input type="number" name="num1">--}}
{{--            Num2: <input type="number" name="num2">--}}
{{--            <input type="submit">--}}
{{--        </form>--}}
{{--        <h2>divide</h2>--}}
{{--        <form action="calculator.divide" method="GET">--}}
{{--            Num1: <input type="number" name="num1">--}}
{{--            Num2: <input type="number" name="num2">--}}
{{--            <input type="submit">--}}
{{--        </form>--}}
{{--    </div>--}}


    <div id="table">
        <table>
            <tr>
                <th>Num1</th>
                <th>Calc</th>
                <th>Num2</th>
                <th>CalculatedNumber</th>
{{--                <th>Delete</th>--}}
            </tr>

            @if(count($Calculator) > 0)
                @foreach($Calculator as $Calculator)
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

