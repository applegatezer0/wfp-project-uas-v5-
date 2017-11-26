<?php

use Illuminate\Database\Seeder;

class DosenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataDosens = array(
        	['id' => 1, 'nama' => 'Septiano Praditya Hartono', 'NPK' => '195012', 'status_dosen' => 'Aktif', 'user_id' => '1'],
        	);
        DB::table('dosens')->insert($dataDosens);
    }
}
