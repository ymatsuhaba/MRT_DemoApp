<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LoginTableSeeder::class);

        $this->call(NicknameTableSeeder::class);

        $this->call(CalculatorTableSeeder::class);

        $this->call(RecruitmentSeeder::class);
    }
}
