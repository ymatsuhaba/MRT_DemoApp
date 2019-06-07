<?php

use Illuminate\Database\Seeder;

class NicknameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // 1レコード
    public function run()
    {
        $nickname = new \App\Nickname([
            'id' => '1',
            'name' => 'Asuka Saito',
            'from' => 'Tokyo',
            'nickname' => 'Asyu',
            'sex' => 'female',
            'birthday' => '19980810',
            'reason' => 'idol',
        ]);
        $nickname->save();

        // 2レコード
        $nickname = new \App\Nickname([
            'id' => '2',
            'name' => 'Erika Ikuta',
            'from' => 'Dusseldorf',
            'nickname' => 'Ikutyan',
            'sex' => 'female',
            'birthday' => '19970122',
            'reason' => 'idol',
        ]);
        $nickname->save();

        // 3レコード
        $nickname = new \App\Nickname([
            'id' => '3',
            'name' => 'Nanami Hashimoto',
            'from' => 'Sapporo',
            'nickname' => 'Nanamin',
            'sex' => 'female',
            'birthday' => '19930220',
            'reason' => 'idol',
        ]);
        $nickname->save();
    }
}
