@extends('layouts.calculator_common')



    <a class="btn btn-default" href="/">Go Back</a>
    <h1>Calculator</h1>

<form action="?" method="post">
    <table>
        <tr>
            <td colspan="2"><button type="submit" name="button" value="C">C</button></td>
            <td><button type="submit" name="button" value="％">%</button></td>
            <td><button type="submit" name="button" value="÷">÷</button></td>
        </tr>
        <tr>
            <td><button type="submit" name="button" value="7">7</button></td>
            <td><button type="submit" name="button" value="8">8</button></td>
            <td><button type="submit" name="button" value="9">9</button></td>
            <td><button type="submit" name="button" value="✕">×</button></td>
        </tr>
        <tr>
            <td><button type="submit" name="button" value="4">4</button></td>
            <td><button type="submit" name="button" value="5">5</button></td>
            <td><button type="submit" name="button" value="6">6</button></td>
            <td><button type="submit" name="button" value="−">−</button></td>
        </tr>
        <tr>
            <td><button type="submit" name="button" value="1">1</button></td>
            <td><button type="submit" name="button" value="2">2</button></td>
            <td><button type="submit" name="button" value="3">3</button></td>
            <td><button type="submit" name="button" value="＋">+</button></td>
        </tr>
        <tr>
            <td colspan="2"><button type="submit" name="button" value="0">0</button></td>
            <td><button type="submit" name="button" value=".">.</button></td>
            <td><button type="submit" name="button" value="＝">=</button></td>
        </tr>
    </table>
</form>


