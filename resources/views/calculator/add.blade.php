@extends('layouts.calculator_common')
<html>

<body>
    <div class="container">
        <h1>計算が完了しました！</h1>
        <div class="row">
            <form method="get">
                @csrf
                {{$number}}
            </form>
        </div>
</div>
</body>
</html>