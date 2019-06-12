<?php


use Illuminate\Database\Seeder;

class LoginTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1レコード
        $login = new \App\login([
            'id'   => '1',
            'name' => 'Nanase Nishino',
            'from' => 'Osaka',
            'password'=>'Nanasemaru',
        ]);
        $login->save();
        // 2レコード

        $login = new \App\login([
            'id'   =>  '2',
            'name' => 'Mai Shiraishi',
            'from' => 'Gunma',
            'password'=>'Maiyan',
        ]);
        $login->save();
        // 2レコード
        $login = new \App\login([
            'id'   => '3',
            'name' => 'miona Hiri',
            'from' => 'Gihu',
            'password'=>'Miona',
        ]);
        $login->save();
    }
}