@extends('layouts.calculator_common')

<a class="btn btn-default" href="/answerman">Go Back</a>

<div id="table">
    <table>
        <tr>
            <th>first_figure</th>
            <th>operator</th>
            <th>second_figure</th>
            <th>equal</th>
            <th>result</th>
        </tr>

        @foreach($sorted as $calclog)
            <tr>
                <td>{{$calclog -> first_figure}}</td>
                <td>{{$calclog -> operator}}</td>
                <td>{{$calclog -> second_figure}}</td>
                <td>{{$calclog -> equal}}</td>
                <td>{{$calclog -> result}}</td>
            </tr>
        @endforeach
    </table>
</div>

</body>
</html>

