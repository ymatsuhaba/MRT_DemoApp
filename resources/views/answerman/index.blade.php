@extends('layouts.calculator_common')
<div id="Frontend">
<a class="btn btn-primary" href="/">Go Back</a>
<a class="btn btn-secondary" href="answerman.answer1">課題1</a>
<a class="btn btn-secondary" href="answerman.answer2">課題2</a>
<a class="btn btn-secondary" href="answerman.answer3">課題3</a>
<a class="btn btn-secondary" href="answerman.answer4">課題4</a>
<a class="btn btn-secondary" href="answerman.answer5">課題5</a>
</div>

<style>
    #Frontend{
        text-align: center;
    }
</style>

<h1>Answer.indexページ</h1>

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