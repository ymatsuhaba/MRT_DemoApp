@extends('layouts.calculator_common')

            <a class="btn btn-default" href="/">Go Back</a>
            <h1>Calculator</h1>




        <form action='calculator' method="post">
            <table>
                <tr>
                    <td colspan="2"><button type="submit" name="button" value="C">C</button></td>
                    <td><button type="submit" name="button" value="％">%</button></td>
                    <td><button type="submit" name="button" value="÷">÷</button></td>
                </tr>
                <tr>
                    <td><button type="submit" name="button" value="7" class="number">7</button></td>
                    <td><button type="submit" name="button" value="8" class="number">8</button></td>
                    <td><button type="submit" name="button" value="9" class="number">9</button></td>
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


</body>
</html>

