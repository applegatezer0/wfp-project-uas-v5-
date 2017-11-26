<?php

use Illuminate\Database\Seeder;

class MatakuliahTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataMatakuliah = array(
        	['id' => 1, 'nama' => 'Algoritma Pemrograman', 'kode_matakuliah' => '1604A011', 'sks' => '6', 'kp' => 'A', 'semester' => '1', 'status' => 'buka', 'jumlah_kelas' => '6', 'kapasitas' => '30', 'sisa' => '0', 'jurusan_id' => '4', 'ruangan_id' => '1', 'jadwal_id' => '1'],
        	['id' => 2, 'nama' => 'Algoritma Pemrograman', 'kode_matakuliah' => '1604A011', 'sks' => '6', 'kp' => 'B', 'semester' => '1', 'status' => 'buka', 'jumlah_kelas' => '6', 'kapasitas' => '28', 'sisa' => '0', 'jurusan_id' => '4', 'ruangan_id' => '2', 'jadwal_id' => '2'],
        	['id' => 3, 'nama' => 'Algoritma Pemrograman', 'kode_matakuliah' => '1604A011', 'sks' => '6', 'kp' => 'C', 'semester' => '1', 'status' => 'buka', 'jumlah_kelas' => '6', 'kapasitas' => '30', 'sisa' => '0', 'jurusan_id' => '4', 'ruangan_id' => '3', 'jadwal_id' => '3']           	
        	);
        DB::table('mata_kuliahs')->insert($dataMatakuliah);
    }
}
