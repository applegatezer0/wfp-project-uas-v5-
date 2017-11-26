<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    //
    public function matakuliahs()
    {
    	return $this->hasMany('App\MataKuliah');
    }
}
