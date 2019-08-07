<?php

use Illuminate\Database\Seeder;

class DeptsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('depts')->delete();

        \DB::table('depts')->insert([
            'id' => '1',
            'dept_name' => '総務部'
        ]);

        \DB::table('depts')->insert([
            'id' => '2',
            'dept_name' => '経理部'
        ]);

        \DB::table('depts')->insert([
            'id' => '3',
            'dept_name' => '人事部'
        ]);

        \DB::table('depts')->insert([
            'id' => '4',
            'dept_name' => '開発部'
        ]);

        \DB::table('depts')->insert([
            'id' => '5',
            'dept_name' => '営業部'
        ]);

    }
}
