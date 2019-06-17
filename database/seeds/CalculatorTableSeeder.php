<?php

use Illuminate\Database\Seeder;

class CalculatorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //    一つ目の計算
        $Calculators = new \App\Calculator([
            'num1' => '21',
            'calc' => '+',
            'num2' => '7',
            'ArithmeticOperations' => '28',
        ]);
        $Calculators->save();

        //    二つ目の計算
        $Calculators = new \App\Calculator([
            'num1' => '21',
            'calc' => '-',
            'num2' => '7',
            'ArithmeticOperations' => '14',
        ]);
        $Calculators->save();

        //    三つ目の計算
        $Calculators = new \App\Calculator([
            'num1' => '21',
            'calc' => '×',
            'num2' => '7',
            'ArithmeticOperations' => '147',
        ]);
        $Calculators->save();

        //    四つ目の計算
        $Calculators = new \App\Calculator([
            'num1' => '21',
            'calc' => '÷',
            'num2' => '7',
            'ArithmeticOperations' => '3',
        ]);
        $Calculators->save();
    }


}
