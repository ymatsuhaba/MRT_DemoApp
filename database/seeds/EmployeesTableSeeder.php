<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('employees')->delete();

        // フェイクデータを生成するジェネレータを作成
        $faker = Faker\Factory::create('ja_JP');
        //dept_id(部署名)が入っている。
        $dept = ['1', '2', '3', '4', '5'];

        //従業員の個人データを300名分出力。
        for ($i = 0; $i < 300; $i++) {
            \DB::table('employees')->insert([
                'dept_id' => $faker->randomElement($dept),
                'name' => $faker->name(),
                'address' => $faker->address(),
                'email' => $faker->email() ,
                'old' => $faker->randomNumber(2),
                'tel' => $faker->phoneNumber()
            ]);
        }
    }
}
