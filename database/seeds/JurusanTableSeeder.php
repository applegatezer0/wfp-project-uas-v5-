<?php

use Illuminate\Database\Seeder;

class JurusanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataJurusans = array(
        	['id' => 1, 'nama' => 'Teknik Elektro', 'kode_jurusan' => '01'],
        	['id' => 2, 'nama' => 'Teknik Kimia', 'kode_jurusan' => '02'],
        	['id' => 3, 'nama' => 'Teknik Industri', 'kode_jurusan' => '03'],
        	['id' => 4, 'nama' => 'Teknik Informatika', 'kode_jurusan' => '04'],
        	['id' => 5, 'nama' => 'Teknik Manufaktur', 'kode_jurusan' => '05'],
        	['id' => 6, 'nama' => 'Sistem Informasi', 'kode_jurusan' => '07'],
        	['id' => 7, 'nama' => 'Multimedia', 'kode_jurusan' => '08'],
        	['id' => 8, 'nama' => 'IT-DD', 'kode_jurusan' => '09']
        	);
        DB::table('jurusans')->insert($dataJurusans);
    }
}
