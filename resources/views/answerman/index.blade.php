@extends('layouts.calculator_common')

<a class="btn btn-default" href="/">Go Back</a>

<a class="btn btn-default" href="answerman.answer1">課題1</a>
<a class="btn btn-default" href="answerman.answer2">課題2</a>
<a class="btn btn-default" href="answerman.answer3">課題3</a>
<a class="btn btn-default" href="answerman.answer4">課題4</a>
<a class="btn btn-default" href="answerman.answer5">課題5</a>




<div id="table">
    <table>
        <tr>
            <th>first_figure</th>
            <th>operator</th>
            <th>second_figure</th>
            <th>equal</th>
            <th>result</th>
        </tr>

        @foreach($calclogs as $calclog)
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