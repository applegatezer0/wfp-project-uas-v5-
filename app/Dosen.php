<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
	public function user()
	{
		return $this->belongsTo('App\User');
	}

	public function jurusan()
	{
		return $this->belongsToMany('App\Jurusan');
	}
	public function matakuliahs()
	{
		return $this->belongsToMany('App\MataKuliah');
	}

    //
}
