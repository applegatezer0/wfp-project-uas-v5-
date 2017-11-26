<?php

use Illuminate\Database\Seeder;

class RuanganTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataRuangans = array(
        	['id' => 1, 'nama' => 'TC-4A'],
        	['id' => 2, 'nama' => 'TC-4B'],
        	['id' => 3, 'nama' => 'TC-4C'],
        	['id' => 4, 'nama' => 'TC-4D'],
        	['id' => 5, 'nama' => 'TF-4.1A'],
        	['id' => 6, 'nama' => 'TF-4.2A'],
        	['id' => 7, 'nama' => 'TF-4.3A'],
        	['id' => 9, 'nama' => 'TF-4.1B'],
        	['id' => 10, 'nama' => 'TF-4.2B'],
        	['id' => 11, 'nama' => 'TF-4.3B'],        	
        	);
        DB::table('ruangans')->insert($dataRuangans);
    }
}
