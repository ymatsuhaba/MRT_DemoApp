@extends('layouts.calculator_common')

<a class="btn btn-default" href="calculator">Go Back</a>
<h1>Calculator</h1>

<div id="table">
    <h2>add</h2>
    <form action='calculator.add' method="GET">
        Num1: <input type="number" name="num1">
        Num2: <input type="number" name="num2">
        <input type="submit">
    </form>
    <h2>subtract</h2>
    <form action="calculator.subtract" method="GET">
        Num1: <input type="number" name="num1">
        Num2: <input type="number" name="num2">
        <input type="submit">
    </form>
    <h2>multify</h2>
    <form action="calculator.multify" method="GET">
        Num1: <input type="number" name="num1">
        Num2: <input type="number" name="num2">
        <input type="submit">
    </form>
    <h2>divide</h2>
    <form action="calculator.divide" method="GET">
        Num1: <input type="number" name="num1">
        Num2: <input type="number" name="num2">
        <input type="submit">
    </form>
</div>
