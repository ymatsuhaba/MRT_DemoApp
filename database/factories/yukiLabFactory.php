<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\yukiLab::class, function (Faker $faker) {
    return [
        'book_title'=>$faker->randomElement($array=['共感力SNS 丸く尖る発信で仕事を作る','SNSで夢を叶える','#モテるために生きている!']),
        'author_name'=>$faker->randomElement($array=['ゆうこす','平野啓一郎','Syu']),
        'release_date'=> $faker->dateTimeThisMonth->format( 'Y-m-d'),
        'lending_situation'=>$faker->numberBetween($min=0,$max=2),
    ];
});
