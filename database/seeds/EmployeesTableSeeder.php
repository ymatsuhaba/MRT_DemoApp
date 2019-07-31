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
    {\DB::table('doctors')->insert([
        [
            'doctor_id' => '1',
            'doctor_name'    => 'Asuka Saito',
            'birthplace' => 'Tokyo',
            'sex' => 'female',
            'date_of_birth' => '19980810'
        ],
        [
            'doctor_id' => '2',
            'doctor_name'    => 'Erika Ikuta',
            'birthplace' => 'Dusseldolf',
            'sex' => 'female',
            'date_of_birth' => '19970122'
        ],
        [
            'doctor_id' => '3',
            'doctor_name'    => 'Nanami Hashimoto',
            'birthplace' => 'Sapporo',
            'sex' => 'female',
            'date_of_birth' => '19930220'
        ],
    ]);
        //
    }
}
