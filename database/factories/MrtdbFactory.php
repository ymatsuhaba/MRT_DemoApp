<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\mrt_db::class, function (Faker $faker) {

    return [
        'type' => $faker->randomElement($array = ['バイト', '転職']),
        'start_date' => $faker->dateTime->format('Y-m-d'),
        'end_date' => $faker->dateTime->format('Y-m-d'),
        'start_time' => $faker->time($format = 'H:i:s'),
        'end_time' => $faker->time($format = 'H:i:s'),
        'prefecture' => $faker->prefecture,
        'place' => $faker->streetAddress,
        'salary_system' => $faker->randomElement($array = ['一回','その他']),
        'salary' => $faker->numberBetween($min = 10000, $max = 100000),
        'transportation_system' => $faker->randomElement($array = ['給与に含む','給与と一緒に振込']),
        'transportation_expenses' => $faker->numberBetween($min = 100, $max = 10000),
        'work_form' => $faker->randomElement($array = ['当直','日直・日当直']),
        'facility_type' => $faker->randomElement($array = ['クリニック','健診施設','療養型病院','一般病院','ケアミックス']),
    ];
});
