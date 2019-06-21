@extends('layouts.calculator_common')
<html>

    <a class="btn btn-default" href="/calculator">Go Back</a>

    <body>
        <div class="container">
            <h1>計算が完了しました！</h1>
            <div class="row">
                <form method="get">
                    @csrf
                    <h2>{{$num1}}+{{$num2}}={{$CalculatedNumber}}</h2>
                </form>
            </div>
        </div>
    </body>
</html>