<?php

use Illuminate\Database\Seeder;

class CalclogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //    一つ目の計算
        $Calclog = new \App\Calclog([
            'first_figure' => '21',
            'operator' => '+',
            'second_figure' => '7',
            "equal" => '=',
            'result' => '28',
        ]);
        $Calclog->save();


        //    二つ目の計算
        $Calclog = new \App\Calclog([
            'first_figure' => '21',
            'operator' => '-',
            'second_figure' => '7',
            "equal" => '=',
            'result' => '14',
        ]);
        $Calclog->save();


        //    三つ目の計算
        $Calclog = new \App\Calclog([
            'first_figure' => '21',
            'operator' => '*',
            'second_figure' => '7',
            "equal" => '=',
            'result' => '147',
        ]);
        $Calclog->save();
        //    四つ目の計算
        $Calclog = new \App\Calclog([
            'first_figure' => '21',
            'operator' => '/',
            'second_figure' => '7',
            "equal" => '=',
            'result' => '3',
        ]);
        $Calclog->save();


        //    五つ目の計算
        $Calclog = new \App\Calclog([
            'first_figure' => '21',
            'operator' => '+',
            'second_figure' => '7',
            "equal" => '=',
            'result' => '28',
        ]);
        $Calclog->save();


        //    六つ目の計算
        $Calclog = new \App\Calclog([
            'first_figure' => '21',
            'operator' => '-',
            'second_figure' => '7',
            "equal" => '=',
            'result' => '14',
        ]);
        $Calclog->save();


        //    七つ目の計算
        $Calclog = new \App\Calclog([
            'first_figure' => '21',
            'operator' => '*',
            'second_figure' => '7',
            "equal" => '=',
            'result' => '147',
        ]);
        $Calclog->save();

        //    八つ目の計算
        $Calclog = new \App\Calclog([
            'first_figure' => '21',
            'operator' => '/',
            'second_figure' => '7',
            "equal" => '=',
            'result' => '3',
        ]);
        $Calclog->save();

    }

}
