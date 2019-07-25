<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\mrt_db::class, function (Faker $faker) {

    return [
        'type' => $faker->randomElement($array = ['1', '2']),
        'startDate' => $faker->dateTimeThisMonth->format( 'Y-m-d'),
        'endDate' => $faker->dateTimeThisMonth->format('Y-m-d'),
        'startTime' => $faker->time($format = 'H:i:s'),
        'endTime' => $faker->time($format = 'H:i:s'),
        'prefecture' => $faker->numberBetween($min =1, $max=47),
        'place' => $faker->streetAddress,
        'salarySystem' => $faker->randomElement($array = ['一回','その他']),
        'hourlySalary' => $faker->numberBetween($min =3000, $max =50000),
        'salary' => $faker->numberBetween($min = 10000, $max = 100000),
        'transportationSystem' => $faker->randomElement($array = ['給与に含む','給与と一緒に振込']),
        'transportationExpenses' => $faker->numberBetween($min = 100, $max = 10000),
        'medical' => $faker->numberBetween($min = 1,$max = 26),
        'workForm' => $faker->randomElement($array = ['1','2']),
        'facilityType' => $faker->randomElement($array = ['クリニック','健診施設','療養型病院','一般病院','ケアミックス']),
    ];
});
