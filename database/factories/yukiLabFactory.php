<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\yukiLab::class, function (Faker $faker) {
    return [
        'book_title'=>$faker->randomElement($array=['fragile','Time goes by','M','Boys&Girls','SEASONS',
            'BlUE BIRD','カブトムシ','横顔','雲は白リンゴは赤','本能','丸の内サディスティック','長く短い祭り',
            'Flavor of Life','白い雪','Tomorrow','歌舞伎町の女王','恋文','光','COLORS',]),
        'image_url'=>$faker->imageUrl(640,300,'cats'),
        'author_name'=>$faker->randomElement($array=['Aiko','浜崎あゆみ','Every Little Thing','宇多田ヒカル',
            '倉木麻衣','椎名林檎','Day After Tomorrow','岡本真夜']),
        'release_date'=> $faker->dateTimeThisMonth->format( 'Y-m-d'),
        'lending_situation'=>$faker->numberBetween($min=0,$max=2),
    ];
});
