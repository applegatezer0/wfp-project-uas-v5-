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
        	['id' => 1, 'nama' => 'Dr. Budi Hartanto, S.T., M.Sc.', 'NPK' => '195012', 'status_dosen' => 'Aktif', 'user_id' => '9'],
            ['id' => 2, 'nama' => 'Dr. Joko Siswantoro, S.Si., M.Si.', 'NPK' => '198032', 'status_dosen' => 'Aktif', 'user_id' => '10'],
            ['id' => 3, 'nama' => 'Njoto Benarkah, S.T., M.Sc.', 'NPK' => '201026', 'status_dosen' => 'Aktif', 'user_id' => '11'],
            ['id' => 4, 'nama' => 'Ellysa Tjandra, S.T., M.MT.', 'NPK' => '203014', 'status_dosen' => 'Aktif', 'user_id' => '12'],
            ['id' => 5, 'nama' => 'Dr. DELTA ARDY PRIMA, S.T., M.T.', 'NPK' => '214105', 'status_dosen' => 'Aktif', 'user_id' => '13'],
            ['id' => 6, 'nama' => 'MAYA HILDA LESTARI LOUK, S.T., M.Sc.', 'NPK' => '215027 ', 'status_dosen' => 'Aktif', 'user_id' => '14'],
            ['id' => 7, 'nama' => 'Endah Asmawati, S.Si.,M.Si.', 'NPK' => '201007 ', 'status_dosen' => 'Aktif', 'user_id' => '15'],
            ['id' => 8, 'nama' => 'Lisana, S.Kom., M.Inf.Tech.', 'NPK' => '199013', 'status_dosen' => 'Aktif', 'user_id' => '16'],
        	);
        DB::table('dosens')->insert($dataDosens);
    }
}
