<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMahasiswasAmbilMataKuliahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas_ambil_mata_kuliahs', function (Blueprint $table) {
            $table->increments('id');
            $table -> integer('mahasiswa_id')->unsigned();
            $table ->foreign('mahasiswa_id')->references('id')->on('mahasiswas');
            $table -> integer('mata_kuliah_id')->unsigned();
            $table ->foreign('mata_kuliah_id')->references('id')->on('mata_kuliahs');
            $table -> String('semester');
            $table -> String('tahun_ajaran');
            $table->String('status');
            $table -> String('nisbi');
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
        Schema::dropIfExists('mahasiswas_ambil_mata_kuliahs');
    }
}
