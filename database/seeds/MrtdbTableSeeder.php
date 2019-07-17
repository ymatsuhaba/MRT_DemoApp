<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MrtdbTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\mrt_db::class, 100)->create();
////        日本語指定
//        $faker = Faker\Factory::create('ja_JP');
//
//        for($i=0; $i<10; $i++)
//        {
//            $mrtdb = [
//                'type' => $faker->numberBetween($min = 1, $max = 2),
//                'start_date' => $faker ->dateTimeBetween($startDate='-30days', $endDate ='now')->format('Y-m-d'),
//                'end_date' => $faker ->dateTimeBetween($startDate='now', $endDate ='+30days')->format('Y-m-d'),
//                'start_time' => $faker ->time($max = '12:0:0' ,$format = 'H:i:s'),
//                'end_time' => $faker ->time($max = '22:0:0' ,$format = 'H:i:s'),
//                'prefecture' => $faker ->streetName,
//                'place' => $faker ->streetAddress,
//                'salary_system' => $faker ->randomElements(['1','2']),
//                'salary' => $faker ->numberBetween($min = 10000, $max = 100000),
//                'transportation_system' => $faker ->randomElements(['1','2']),
//                'transportation_expenses' => $faker ->numberBetween($min = 100, $max = 10000),
//                'work_form' => $faker->randomElements(['1', '2']),
//                'facility_type' => $faker ->randomElements(['1','2','3','4','5']),
//            ];
//        }
    }
}
//        $mrtdb = new \App\mrtdb([
//            'id' => 1,
//            'type' => 1,
//            'start_date' => 19930322,
//            'end_date' => 20140330,
//            'prefecture' => '東京都',
//            'place' => '渋谷区神南一丁目1-18-2 フレーム神南坂3F',
//            'start_time' => 100000,
//            'end_time' => 190000,
//            'salary' => 100000,
//            'salary_system' => 1,
//            'transportation_system' => 2,
//            'transportation_expenses' => 5000,
//            'work_form' => 2,
//            'facility_type' => 1,
//        ]);
//
//        $mrtdb->save();
//
//        $mrtdb = new \App\mrtdb([
//            'id' => 2,
//            'type' => 1,
//            'start_date' => 19360322,
//            'end_date' => 20340330,
//            'prefecture' => '大阪府',
//            'place' => '大阪市中央区大阪城1-1',
//            'start_time' => 80000,
//            'end_time' => 120000,
//            'salary' => 300,
//            'salary_system' => 1,
//            'transportation_system' => 2,
//            'transportation_expenses' => 200,
//            'work_form' => 2,
//            'facility_type' => 5,
//        ]);
//
//        $mrtdb->save();
//
//        $mrtdb = new \App\mrtdb([
//            'id' => 3,
//            'type' => 1,
//            'start_date' => 19961022,
//            'end_date' => 19990330,
//            'prefecture' => '東京都',
//            'place' => '渋谷区神南一丁目1-18-2 フレーム神南坂2F',
//            'start_time' => 133500,
//            'end_time' => 190000,
//            'salary' => 300,
//            'salary_system' => 2,
//            'transportation_system' => 2,
//            'transportation_expenses' => 200,
//            'work_form' => 2,
//            'facility_type' => 3,
//        ]);
//
//        $mrtdb->save();
//
//        $mrtdb = new \App\mrtdb([
//            'id' => 4,
//            'type' => 2,
//            'start_date' => 20190720,
//            'end_date' => 20190810,
//            'prefecture' => '愛知県',
//            'place' => '名古屋市中区本丸1-1',
//            'start_time' => 193500,
//            'end_time' => 210000,
//            'salary' => 30000,
//            'salary_system' => 1,
//            'transportation_system' => 2,
//            'transportation_expenses' => 3000,
//            'work_form' => 2,
//            'facility_type' => 4,
//        ]);
//
//        $mrtdb->save();
//
//        $mrtdb = new \App\mrtdb([
//            'id' => 5,
//            'type' => 1,
//            'start_date' => 20190801,
//            'end_date' => 20190805,
//            'prefecture' => '広島県',
//            'place' => '広島市中区基町21-1',
//            'start_time' => 103000,
//            'end_time' => 170000,
//            'salary' => 50000,
//            'salary_system' => 2,
//            'transportation_system' => 2,
//            'transportation_expenses' => 5000,
//            'work_form' => 2,
//            'facility_type' => 1,
//        ]);
//
//        $mrtdb->save();
//
//        $mrtdb = new \App\mrtdb([
//            'id' => 6,
//            'type' => 2,
//            'start_date' => 20190801,
//            'end_date' => 20190805,
//            'prefecture' => '広島県',
//            'place' => '広島市中区基町21-1',
//            'start_time' => 103000,
//            'end_time' => 170000,
//            'salary' => 50000,
//            'salary_system' => 2,
//            'transportation_system' => 2,
//            'transportation_expenses' => 5000,
//            'work_form' => 2,
//            'facility_type' => 2,
//        ]);
//
//        $mrtdb->save();
//
//        $mrtdb = new \App\mrtdb([
//            'id' => 7,
//            'type' => 1,
//            'start_date' => 19360322,
//            'end_date' => 20340330,
//            'prefecture' => '大阪府',
//            'place' => '大阪市中央区大阪城1-1',
//            'start_time' => 90000,
//            'end_time' => 120000,
//            'salary' => 40000,
//            'salary_system' => 2,
//            'transportation_system' => 2,
//            'transportation_expenses' => 200,
//            'work_form' => 2,
//            'facility_type' => 3,
//        ]);
//
//        $mrtdb->save();
//
//        $mrtdb = new \App\mrtdb([
//            'id' => 8,
//            'type' => 1,
//            'start_date' => 19360322,
//            'end_date' => 20340330,
//            'prefecture' => '大阪府',
//            'place' => '大阪市中央区大阪城1-1',
//            'start_time' => 90000,
//            'end_time' => 180000,
//            'salary' => 100000,
//            'salary_system' => 2,
//            'transportation_system' => 2,
//            'transportation_expenses' => 200,
//            'work_form' => 2,
//            'facility_type' => 4,
//        ]);
//
//        $mrtdb->save();
//
//        $mrtdb = new \App\mrtdb([
//            'id' => 9,
//            'type' => 1,
//            'start_date' => 19930322,
//            'end_date' => 20140330,
//            'prefecture' => '東京都',
//            'place' => '渋谷区神南一丁目1-18-2 フレーム神南坂3F',
//            'start_time' => 100000,
//            'end_time' => 190000,
//            'salary' => 100000,
//            'salary_system' => 1,
//            'transportation_system' => 2,
//            'transportation_expenses' => 5000,
//            'work_form' => 2,
//            'facility_type' => 1,
//        ]);
//
//        $mrtdb->save();
//
//        $mrtdb = new \App\mrtdb([
//            'id' => 10,
//            'type' => 1,
//            'start_date' => 19360322,
//            'end_date' => 20340330,
//            'prefecture' => '大阪府',
//            'place' => '大阪市中央区大阪城1-1',
//            'start_time' => 80000,
//            'end_time' => 120000,
//            'salary' => 300,
//            'salary_system' => 1,
//            'transportation_system' => 2,
//            'transportation_expenses' => 200,
//            'work_form' => 2,
//            'facility_type' => 5,
//        ]);
//
//        $mrtdb->save();
//
//        $mrtdb = new \App\mrtdb([
//            'id' => 11,
//            'type' => 1,
//            'start_date' => 19961022,
//            'end_date' => 19990330,
//            'prefecture' => '東京都',
//            'place' => '渋谷区神南一丁目1-18-2 フレーム神南坂2F',
//            'start_time' => 133500,
//            'end_time' => 190000,
//            'salary' => 300,
//            'salary_system' => 2,
//            'transportation_system' => 2,
//            'transportation_expenses' => 200,
//            'work_form' => 2,
//            'facility_type' => 3,
//        ]);
//
//        $mrtdb->save();
//
//        $mrtdb = new \App\mrtdb([
//            'id' => 12,
//            'type' => 2,
//            'start_date' => 20190720,
//            'end_date' => 20190810,
//            'prefecture' => '愛知県',
//            'place' => '名古屋市中区本丸1-1',
//            'start_time' => 193500,
//            'end_time' => 210000,
//            'salary' => 30000,
//            'salary_system' => 1,
//            'transportation_system' => 2,
//            'transportation_expenses' => 3000,
//            'work_form' => 2,
//            'facility_type' => 4,
//        ]);
//
//        $mrtdb->save();
//
//        $mrtdb = new \App\mrtdb([
//            'id' => 13,
//            'type' => 1,
//            'start_date' => 20190801,
//            'end_date' => 20190805,
//            'prefecture' => '広島県',
//            'place' => '広島市中区基町21-1',
//            'start_time' => 103000,
//            'end_time' => 170000,
//            'salary' => 50000,
//            'salary_system' => 2,
//            'transportation_system' => 2,
//            'transportation_expenses' => 5000,
//            'work_form' => 2,
//            'facility_type' => 1,
//        ]);
//
//        $mrtdb->save();
//
//        $mrtdb = new \App\mrtdb([
//            'id' => 14,
//            'type' => 2,
//            'start_date' => 20190801,
//            'end_date' => 20190805,
//            'prefecture' => '広島県',
//            'place' => '広島市中区基町21-1',
//            'start_time' => 103000,
//            'end_time' => 170000,
//            'salary' => 50000,
//            'salary_system' => 2,
//            'transportation_system' => 2,
//            'transportation_expenses' => 5000,
//            'work_form' => 2,
//            'facility_type' => 2,
//        ]);
//
//        $mrtdb->save();
//
//        $mrtdb = new \App\mrtdb([
//            'id' => 15,
//            'type' => 1,
//            'start_date' => 19360322,
//            'end_date' => 20340330,
//            'prefecture' => '大阪府',
//            'place' => '大阪市中央区大阪城1-1',
//            'start_time' => 90000,
//            'end_time' => 120000,
//            'salary' => 40000,
//            'salary_system' => 2,
//            'transportation_system' => 2,
//            'transportation_expenses' => 200,
//            'work_form' => 2,
//            'facility_type' => 3,
//        ]);
//
//        $mrtdb->save();
//
//        $mrtdb = new \App\mrtdb([
//            'id' => 16,
//            'type' => 1,
//            'start_date' => 19360322,
//            'end_date' => 20340330,
//            'prefecture' => '大阪府',
//            'place' => '大阪市中央区大阪城1-1',
//            'start_time' => 90000,
//            'end_time' => 180000,
//            'salary' => 100000,
//            'salary_system' => 2,
//            'transportation_system' => 2,
//            'transportation_expenses' => 200,
//            'work_form' => 2,
//            'facility_type' => 4,
//        ]);
//
//        $mrtdb->save();





//        DB::table('mrtdbs')->delete();
//


        //日本語指定
//        $faker = Faker\Factory::create('ja_JP');

//        for($i=0; $i<10; $i++)
//        {
//            mrtdb::create([
//                'type' => $faker->numberBetween($min = 1, $max = 2),
//                'start_date' => $faker ->dateTimeBetween($startDate='-30days', $endDate ='now')->format('Y-m-d'),
//                'end_date' => $faker ->dateTimeBetween($startDate='now', $endDate ='+30days')->format('Y-m-d'),
//                'start_time' => $faker ->time($max = '12:0:0' ,$format = 'H:i:s'),
//                'end_time' => $faker ->time($max = '22:0:0' ,$format = 'H:i:s'),
//                'prefecture' => $faker ->streetName,
//                'place' => $faker ->streetAddress,
//                'salary_system' => $faker ->randomElements(['1','2']),
//                'salary' => $faker ->numberBetween($min = 10000, $max = 100000),
//                'transportation_system' => $faker ->randomElements(['1','2']),
//                'transportation_expenses' => $faker ->numberBetween($min = 100, $max = 10000),
//                'work_form' => $faker->numberBetween($min = 1, $max = 2),
//                'facility_type' => $faker ->randomElements(['1','2','3','4','5']),
//            ]);
//        }
//    }
//}


