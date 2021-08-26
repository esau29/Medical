<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticable; 

class Administrador extends Authenticable
{
    use Notifiable;

    protected $table = 'admin';
    protected $fillable = ['email','telefono','pass'];
    public $primaryKey = 'nombre';
    protected $keyType = 'string';
    public $incrementing =false;
    public $timestamps = false;
}
