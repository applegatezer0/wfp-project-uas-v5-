<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMataKuliahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mata_kuliahs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('kode_matakuliah');
            $table->integer('sks');
            $table->string('kp');           
            $table->string('semester');
            $table->string('status');
            $table->integer('jumlah_kelas');
            $table->integer('kapasitas');
            $table->integer('sisa');
            $table->integer('jurusan_id')->unsigned();
            $table->foreign('jurusan_id')->references('id')->on('jurusans');  
            $table->integer('ruangan_id')->unsigned();
            $table->foreign('ruangan_id')->references('id')->on('ruangans');  
            $table->integer('jadwal_id')->unsigned();
            $table->foreign('jadwal_id')->references('id')->on('jadwals'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mata_kuliahs');
    }
}
