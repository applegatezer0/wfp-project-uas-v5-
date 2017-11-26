<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataUsers = array(
        	['id' => 1, 'name' => 'Alief Praditya', 'email' => 's16041098@student.ubaya.ac.id', 'password' => bcrypt('alief2017'), 'status' => '1'],
        	['id' => 2, 'name' => 'Indra Imanuel Gunawan', 'email' => 's160415108@student.ubaya.ac.id', 'password' => bcrypt('indra098'), 'status' => '3']
        	);
        DB::table('users')->insert($dataUsers);
    }
}
