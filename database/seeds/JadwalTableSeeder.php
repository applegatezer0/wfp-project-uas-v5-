<?php

use Illuminate\Database\Seeder;

class JadwalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataJadwals = array(
        	['id' => 1, 'hari' => 'Senin', 'jam_mulai' => '07.00', 'jam_selesai' => '09.45', 'sks' => 3],
        	['id' => 2, 'hari' => 'Senin', 'jam_mulai' => '09.45', 'jam_selesai' => '12.25','sks' => 3],
        	['id' => 3, 'hari' => 'Senin', 'jam_mulai' => '13.00', 'jam_selesai' => '15.45','sks'=>3],
        	['id' => 4, 'hari' => 'Senin', 'jam_mulai' => '15.45', 'jam_selesai' => '18.30','sks'=>3],
        	['id' => 5, 'hari' => 'Selasa', 'jam_mulai' => '07.00', 'jam_selesai' => '09.45','sks'=>3],
            ['id' => 6, 'hari' => 'Selasa', 'jam_mulai' => '07.00', 'jam_selesai' => '08.50','sks'=>2]       	
        	);
        DB::table('jadwals')->insert($dataJadwals);
    }
}
