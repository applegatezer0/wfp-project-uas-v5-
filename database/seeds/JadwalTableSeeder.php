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
            ['id' => 5, 'hari' => 'Senin', 'jam_mulai' => '07.00', 'jam_selesai' => '08.50','sks'=>2],
            ['id' => 6, 'hari' => 'Senin', 'jam_mulai' => '08.50', 'jam_selesai' => '10.40','sks'=>2],
            ['id' => 7, 'hari' => 'Senin', 'jam_mulai' => '10.40', 'jam_selesai' => '12.30','sks'=>2],
            ['id' => 8, 'hari' => 'Senin', 'jam_mulai' => '13.00', 'jam_selesai' => '14.50','sks'=>2],
            ['id' => 9, 'hari' => 'Senin', 'jam_mulai' => '14.50', 'jam_selesai' => '16.40','sks'=>2],
            ['id' => 10, 'hari' => 'Senin', 'jam_mulai' => '16.40', 'jam_selesai' => '18.30','sks'=>2],
            ['id' => 11, 'hari' => 'Selasa', 'jam_mulai' => '07.00', 'jam_selesai' => '09.45', 'sks' => 3],
            ['id' => 12, 'hari' => 'Selasa', 'jam_mulai' => '09.45', 'jam_selesai' => '12.25','sks' => 3],
            ['id' => 13, 'hari' => 'Selasa', 'jam_mulai' => '13.00', 'jam_selesai' => '15.45','sks'=>3],
            ['id' => 14, 'hari' => 'Selasa', 'jam_mulai' => '15.45', 'jam_selesai' => '18.30','sks'=>3],
            ['id' => 15, 'hari' => 'Selasa', 'jam_mulai' => '07.00', 'jam_selesai' => '08.50','sks'=>2],
            ['id' => 16, 'hari' => 'Selasa', 'jam_mulai' => '08.50', 'jam_selesai' => '10.40','sks'=>2],
            ['id' => 17, 'hari' => 'Selasa', 'jam_mulai' => '10.40', 'jam_selesai' => '12.30','sks'=>2],
            ['id' => 18, 'hari' => 'Selasa', 'jam_mulai' => '13.00', 'jam_selesai' => '14.50','sks'=>2],
            ['id' => 19, 'hari' => 'Selasa', 'jam_mulai' => '14.50', 'jam_selesai' => '16.40','sks'=>2],
            ['id' => 20, 'hari' => 'Selasa', 'jam_mulai' => '16.40', 'jam_selesai' => '18.30','sks'=>2],
            ['id' => 21, 'hari' => 'Rabu', 'jam_mulai' => '07.00', 'jam_selesai' => '09.45', 'sks' => 3],
            ['id' => 22, 'hari' => 'Rabu', 'jam_mulai' => '09.45', 'jam_selesai' => '12.25','sks' => 3],
            ['id' => 23, 'hari' => 'Rabu', 'jam_mulai' => '13.00', 'jam_selesai' => '15.45','sks'=>3],
            ['id' => 24, 'hari' => 'Rabu', 'jam_mulai' => '15.45', 'jam_selesai' => '18.30','sks'=>3],
            ['id' => 25, 'hari' => 'Rabu', 'jam_mulai' => '07.00', 'jam_selesai' => '08.50','sks'=>2],
            ['id' => 26, 'hari' => 'Rabu', 'jam_mulai' => '08.50', 'jam_selesai' => '10.40','sks'=>2],
            ['id' => 27, 'hari' => 'Rabu', 'jam_mulai' => '10.40', 'jam_selesai' => '12.30','sks'=>2],
            ['id' => 28, 'hari' => 'Rabu', 'jam_mulai' => '13.00', 'jam_selesai' => '14.50','sks'=>2],
            ['id' => 29, 'hari' => 'Rabu', 'jam_mulai' => '14.50', 'jam_selesai' => '16.40','sks'=>2],
            ['id' => 30, 'hari' => 'Rabu', 'jam_mulai' => '16.40', 'jam_selesai' => '18.30','sks'=>2],
            ['id' => 31, 'hari' => 'Kamis', 'jam_mulai' => '07.00', 'jam_selesai' => '09.45', 'sks' => 3],
            ['id' => 32, 'hari' => 'Kamis', 'jam_mulai' => '09.45', 'jam_selesai' => '12.25','sks' => 3],
            ['id' => 33, 'hari' => 'Kamis', 'jam_mulai' => '13.00', 'jam_selesai' => '15.45','sks'=>3],
            ['id' => 34, 'hari' => 'Kamis', 'jam_mulai' => '15.45', 'jam_selesai' => '18.30','sks'=>3],
            ['id' => 35, 'hari' => 'Kamis', 'jam_mulai' => '07.00', 'jam_selesai' => '08.50','sks'=>2],
            ['id' => 36, 'hari' => 'Kamis', 'jam_mulai' => '08.50', 'jam_selesai' => '10.40','sks'=>2],
            ['id' => 37, 'hari' => 'Kamis', 'jam_mulai' => '10.40', 'jam_selesai' => '12.30','sks'=>2],
            ['id' => 38, 'hari' => 'Kamis', 'jam_mulai' => '13.00', 'jam_selesai' => '14.50','sks'=>2],
            ['id' => 39, 'hari' => 'Kamis', 'jam_mulai' => '14.50', 'jam_selesai' => '16.40','sks'=>2],
            ['id' => 40, 'hari' => 'Kamis', 'jam_mulai' => '16.40', 'jam_selesai' => '18.30','sks'=>2],
            ['id' => 41, 'hari' => 'Jumat', 'jam_mulai' => '07.00', 'jam_selesai' => '09.45', 'sks' => 3],
            ['id' => 42, 'hari' => 'Jumat', 'jam_mulai' => '09.45', 'jam_selesai' => '12.25','sks' => 3],
            ['id' => 43, 'hari' => 'Jumat', 'jam_mulai' => '13.00', 'jam_selesai' => '15.45','sks'=>3],
            ['id' => 44, 'hari' => 'Jumat', 'jam_mulai' => '15.45', 'jam_selesai' => '18.30','sks'=>3],
            ['id' => 45, 'hari' => 'Jumat', 'jam_mulai' => '07.00', 'jam_selesai' => '08.50','sks'=>2],
            ['id' => 46, 'hari' => 'Jumat', 'jam_mulai' => '08.50', 'jam_selesai' => '10.40','sks'=>2],
            ['id' => 47, 'hari' => 'Jumat', 'jam_mulai' => '10.40', 'jam_selesai' => '12.30','sks'=>2],
            ['id' => 48, 'hari' => 'Jumat', 'jam_mulai' => '13.00', 'jam_selesai' => '14.50','sks'=>2],
            ['id' => 49, 'hari' => 'Jumat', 'jam_mulai' => '14.50', 'jam_selesai' => '16.40','sks'=>2],
            ['id' => 50, 'hari' => 'Jumat', 'jam_mulai' => '16.40', 'jam_selesai' => '18.30','sks'=>2],
            ['id' => 51, 'hari' => 'Sabtu', 'jam_mulai' => '07.00', 'jam_selesai' => '09.45', 'sks' => 3],
            ['id' => 52, 'hari' => 'Sabtu', 'jam_mulai' => '09.45', 'jam_selesai' => '12.25','sks' => 3],
            ['id' => 53, 'hari' => 'Sabtu', 'jam_mulai' => '07.00', 'jam_selesai' => '08.50','sks'=>2],
            ['id' => 54, 'hari' => 'Sabtu', 'jam_mulai' => '08.50', 'jam_selesai' => '10.40','sks'=>2],
            ['id' => 55, 'hari' => 'Sabtu', 'jam_mulai' => '10.40', 'jam_selesai' => '12.30','sks'=>2]
        	);
        DB::table('jadwals')->insert($dataJadwals);
    }
}
