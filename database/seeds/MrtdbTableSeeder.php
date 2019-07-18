<?php

use Illuminate\Database\Seeder;

class MrtdbTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\mrt_db::class, 300)->create();

    }
}
