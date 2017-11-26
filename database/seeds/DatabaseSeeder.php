<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(JurusanTableSeeder::class);
        $this->call(RuanganTableSeeder::class);
    	$this->call(JadwalTableSeeder::class);
    	$this->call(MatakuliahTableSeeder::class);
    	$this->call(DosenTableSeeder::class);
    }
}
