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
        	['id' => 3, 'nama' => 'Algoritma Pemrograman', 'kode_matakuliah' => '1604A011', 'sks' => '6', 'kp' => 'C', 'semester' => '1', 'status' => 'buka', 'jumlah_kelas' => '6', 'kapasitas' => '28', 'sisa' => '0', 'jurusan_id' => '4', 'ruangan_id' => '3', 'jadwal_id' => '2'],
            ['id' => 4, 'nama' => 'Algoritma Pemrograman', 'kode_matakuliah' => '1604A011', 'sks' => '6', 'kp' => 'D', 'semester' => '1', 'status' => 'buka', 'jumlah_kelas' => '6', 'kapasitas' => '28', 'sisa' => '0', 'jurusan_id' => '4', 'ruangan_id' => '4', 'jadwal_id' => '3'],  
            ['id' => 5, 'nama' => 'Algoritma Pemrograman', 'kode_matakuliah' => '1604A011', 'sks' => '6', 'kp' => 'E', 'semester' => '1', 'status' => 'buka', 'jumlah_kelas' => '6', 'kapasitas' => '30', 'sisa' => '0', 'jurusan_id' => '4', 'ruangan_id' => '1', 'jadwal_id' => '22'],  
            ['id' => 6, 'nama' => 'Algoritma Pemrograman', 'kode_matakuliah' => '1604A011', 'sks' => '6', 'kp' => 'F', 'semester' => '1', 'status' => 'buka', 'jumlah_kelas' => '6', 'kapasitas' => '28', 'sisa' => '0', 'jurusan_id' => '4', 'ruangan_id' => '2', 'jadwal_id' => '12'],
            ['id' => 7, 'nama' => 'Matematika', 'kode_matakuliah' => '1600A104', 'sks' => '4', 'kp' => 'A', 'semester' => '1', 'status' => 'buka', 'jumlah_kelas' => '4', 'kapasitas' => '45', 'sisa' => '0', 'jurusan_id' => '4', 'ruangan_id' => '9', 'jadwal_id' => '7'],
            ['id' => 8, 'nama' => 'Matematika', 'kode_matakuliah' => '1600A104', 'sks' => '4', 'kp' => 'A', 'semester' => '1', 'status' => 'buka', 'jumlah_kelas' => '4', 'kapasitas' => '45', 'sisa' => '0', 'jurusan_id' => '4', 'ruangan_id' => '10', 'jadwal_id' => '26'],
            ['id' => 9, 'nama' => 'Matematika', 'kode_matakuliah' => '1600A104', 'sks' => '4', 'kp' => 'A', 'semester' => '1', 'status' => 'buka', 'jumlah_kelas' => '4', 'kapasitas' => '45', 'sisa' => '0', 'jurusan_id' => '4', 'ruangan_id' => '11', 'jadwal_id' => '18'],
            ['id' => 10, 'nama' => 'Matematika', 'kode_matakuliah' => '1600A104', 'sks' => '4', 'kp' => 'A', 'semester' => '1', 'status' => 'buka', 'jumlah_kelas' => '4', 'kapasitas' => '45', 'sisa' => '0', 'jurusan_id' => '4', 'ruangan_id' => '5', 'jadwal_id' => '26'],
            ['id' => 11, 'nama' => 'Pengantar Informatika', 'kode_matakuliah' => '1604A012', 'sks' => '2', 'kp' => 'A', 'semester' => '1', 'status' => 'buka', 'jumlah_kelas' => '2', 'kapasitas' => '55', 'sisa' => '0', 'jurusan_id' => '4', 'ruangan_id' => '18', 'jadwal_id' => '39'],
            ['id' => 12, 'nama' => 'Pengantar Informatika', 'kode_matakuliah' => '1604A012', 'sks' => '2', 'kp' => 'B', 'semester' => '1', 'status' => 'buka', 'jumlah_kelas' => '2', 'kapasitas' => '60', 'sisa' => '0', 'jurusan_id' => '4', 'ruangan_id' => '18', 'jadwal_id' => '45']
        	);
        DB::table('mata_kuliahs')->insert($dataMatakuliah);
    }
}
