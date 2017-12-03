<?php

use Illuminate\Database\Seeder;

class DosenAjarMatkul extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataDosenAjarMatkul = array(
        	['id' => 1, 'dosen_id' => 1, 'mata_kuliah_id' => 1],
        	['id' => 2, 'dosen_id' => 2, 'mata_kuliah_id' => 2],
        	['id' => 3, 'dosen_id' => 3, 'mata_kuliah_id' => 3],
        	['id' => 4, 'dosen_id' => 4, 'mata_kuliah_id' => 4],
        	['id' => 5, 'dosen_id' => 5, 'mata_kuliah_id' => 5],
        	['id' => 6, 'dosen_id' => 6, 'mata_kuliah_id' => 6],
        	['id' => 7, 'dosen_id' => 7, 'mata_kuliah_id' => 7],
        	['id' => 8, 'dosen_id' => 8, 'mata_kuliah_id' => 11]
        );
        DB::table('dosens_ajar_mata_kuliahs')->insert($dataDosenAjarMatkul);
    }
}
