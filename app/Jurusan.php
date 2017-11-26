<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    //

    public function dosen()
    {
    	return $this->belongsToMany('App\Dosen');
    }

    public function matakuliahs()
    {
    	return $this->hasMany('App\MataKuliah');
    }
}
