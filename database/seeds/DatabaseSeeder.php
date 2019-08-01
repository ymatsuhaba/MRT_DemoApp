<?php

use App\mrt_db;
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

//        $this->call(CalclogTableSeeder::class);
        
        $this->call(RecruitmentSeeder::class);

       factory(App\mrt_db::class, 10000)->create();

        factory(App\yukiLab::class, 100)->create();

    }
}
