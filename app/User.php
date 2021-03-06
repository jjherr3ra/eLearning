<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey = 'ID_USUARIO';
    protected $fillable = [
        'name', 'email', 'password','IDENTIFICACION','GENERO','LENGUAJE','PAIS',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function matriculas()
    {
       return $this->hasMany('App\Matricula');
    }
}
