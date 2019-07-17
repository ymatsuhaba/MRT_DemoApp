<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\mrt_db::class, function (Faker $faker) {
    $now = Carbon\Carbon::now();
    return [
        'type' => $faker->numberBetween($min = 1, $max = 2),
        'start_date' => $faker ->dateTime->format('Y-m-d'),
        'end_date' => $faker ->dateTime->format('Y-m-d'),
        'start_time' => $faker ->time($max = '12:0:0' ,$format = 'H:i:s'),
        'end_time' => $faker ->time($max = '22:0:0' ,$format = 'H:i:s'),
        'prefecture' => $faker ->streetName,
        'place' => $faker ->streetAddress,
        'salary_system' => $faker ->randomElements(['1','2']),
        'salary' => $faker ->numberBetween($min = 10000, $max = 100000),
        'transportation_system' => $faker ->randomElements(['1','2']),
        'transportation_expenses' => $faker ->numberBetween($min = 100, $max = 10000),
        'work_form' => $faker->numberBetween($min = 1, $max = 2),
        'facility_type' => $faker ->randomElements(['1','2','3','4','5']),
        'created_at' => $now,
        'update_at' => $now,
    ];
});
