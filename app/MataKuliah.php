<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    //
    public function jurusan()
    {
    	return $this->belongsTo('App\Jurusan');
    }

    public function ruangan()
    {
    	return $this->belongsTo('App\Ruangan');
    }
    public function jadwal()
    {
    	return $this->belongsTo('App\Jadwal');
    }

    public function dosens()
    {
    	return $this->belongsToMany('App\Dosen');
    }
}
