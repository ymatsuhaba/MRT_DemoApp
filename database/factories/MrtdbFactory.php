<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\mrtdb::class, function (Faker $faker) {
    return [
        'type' => $faker->numberBetween($min =1, $max =2),
        'start_date' => $faker ->dateTimeBetween($startDate='-30days', $endDate ='+30days'),
        'salary' => $faker ->numberBetween($min = 10000, $max = 100000),
        'transportation_expenses' => $faker ->randomNumber()
    ];
});
