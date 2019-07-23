<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\mrt_db::class, function (Faker $faker) {

    return [
        'type' => $faker->randomElement($array = ['1', '2']),
        'startDate' => $faker->dateTime->format('Y-m-d'),
        'endDate' => $faker->dateTime->format('Y-m-d'),
        'startTime' => $faker->time($format = 'H:i:s'),
        'endTime' => $faker->time($format = 'H:i:s'),
        'prefecture' => $faker->prefecture,
        'place' => $faker->streetAddress,
        'salarySystem' => $faker->randomElement($array = ['一回','その他']),
        'hourlySalary' => $faker->numberBetween($min =3000, $max =50000),
        'salary' => $faker->numberBetween($min = 10000, $max = 100000),
        'transportationSystem' => $faker->randomElement($array = ['給与に含む','給与と一緒に振込']),
        'transportationExpenses' => $faker->numberBetween($min = 100, $max = 10000),
        'medical' => $faker->randomElement($array = ['内科','外科','形成外科','整形外科','脳外科','婦人科','眼科','精神科','心療内科','麻酔科','小児科',
                    '放射線科','耳鼻科','皮膚科','訪問診療','人間ドック','内視鏡','透析','検診','往診','病棟管理','産婦人科','口腔外科','歯科口腔外科','歯科','コンタクト']),
        'workForm' => $faker->randomElement($array = ['当直','日直・日当直']),
        'facilityType' => $faker->randomElement($array = ['クリニック','健診施設','療養型病院','一般病院','ケアミックス']),
    ];
});
