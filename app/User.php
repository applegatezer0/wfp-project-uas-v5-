<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    public function mahasiswas()
    {
        return $this->hasOne('App\Mahasiswa');
    }
    public function dosens()
    {
        return $this->hasOne('App\Dosen');
    }
    public function admins()
    {
        return $this->hasOne('App\Admin');
    }


    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
