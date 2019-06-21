@extends('layouts.calculator_common')
<html>

<body>

<a class="btn btn-default" href="calculator">Go Back</a>

<div class="container">
    <h1>計算が完了しました！</h1>
    <div class="row">
        <form method="get">
            @csrf
            {{$CalculatedNumber}}
        </form>
    </div>
</div>
</body>
</html>