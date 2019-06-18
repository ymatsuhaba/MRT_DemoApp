<?php

use Illuminate\Database\Seeder;
//use Illuminate\Support\Facades\DB;

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
        $Calculator = new \App\Calculator([
            'num1' => '21',
            'calc' => '+',
            'num2' => '7',
            'CalculatedNumber' => '28',
        ]);
        $Calculator->save();


        //    二つ目の計算
        $Calculator = new \App\Calculator([
            'num1' => '21',
            'calc' => '-',
            'num2' => '7',
            'CalculatedNumber' => '14',
        ]);
        $Calculator->save();


        //    三つ目の計算
        $Calculator = new \App\Calculator([
            'num1' => '21',
            'calc' => '×',
            'num2' => '7',
            'CalculatedNumber' => '147',
        ]);
        $Calculator->save();


        //    四つ目の計算
        $Calculator = new \App\Calculator([
            'num1' => '21',
            'calc' => '÷',
            'num2' => '7',
            'CalculatedNumber' => '3',
        ]);
        $Calculator->save();

        //    五つ目の計算
        $Calculator = new \App\Calculator([
            'num1' => '21',
            'calc' => '+',
            'num2' => '7',
            'CalculatedNumber' => '28',
        ]);
        $Calculator->save();


        //    六つ目の計算
        $Calculator = new \App\Calculator([
            'num1' => '21',
            'calc' => '-',
            'num2' => '7',
            'CalculatedNumber' => '14',
        ]);
        $Calculator->save();


        //    七つ目の計算
        $Calculator = new \App\Calculator([
            'num1' => '21',
            'calc' => '×',
            'num2' => '7',
            'CalculatedNumber' => '147',
        ]);
        $Calculator->save();


        //    八つ目の計算
        $Calculator = new \App\Calculator([
            'num1' => '21',
            'calc' => '÷',
            'num2' => '7',
            'CalculatedNumber' => '3',
        ]);
        $Calculator->save();
    }


}
