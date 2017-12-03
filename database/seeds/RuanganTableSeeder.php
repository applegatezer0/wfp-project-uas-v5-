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
        	/*['id' => 1, 'nama' => 'TC-4A'],
        	['id' => 2, 'nama' => 'TC-4B'],
        	['id' => 3, 'nama' => 'TC-4C'],
        	['id' => 4, 'nama' => 'TC-4D'],
        	['id' => 5, 'nama' => 'TF-4.1A'],
        	['id' => 6, 'nama' => 'TF-4.2A'],
        	['id' => 7, 'nama' => 'TF-4.3A'],
        	['id' => 9, 'nama' => 'TF-4.1B'],
        	['id' => 10, 'nama' => 'TF-4.2B'],
        	['id' => 11, 'nama' => 'TF-4.3B']*/
            ['id' => 12, 'nama' => 'TF-2.1'],
            ['id' => 13, 'nama' => 'TF-2.2'],            
            ['id' => 14, 'nama' => 'TF-2.3'],            
            ['id' => 15, 'nama' => 'TF-2.4'],
            ['id' => 16, 'nama' => 'TF-2.5'],
            ['id' => 17, 'nama' => 'TF-3.1'],           
            ['id' => 18, 'nama' => 'TF-3.2'],           
            ['id' => 19, 'nama' => 'TF-3.3'],           
            ['id' => 20, 'nama' => 'TF-3.4'],
            ['id' => 21, 'nama' => 'PERPUS-A'],
            ['id' => 22, 'nama' => 'PERPUS-B'],
            ['id' => 23, 'nama' => 'TC-1.4']           
        	);
        DB::table('ruangans')->insert($dataRuangans);
    }
}
