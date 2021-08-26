<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticable;

class pacientes extends Authenticable
{
    use Notifiable;
    protected $table = 'pacientes';
    protected $fillable = ['sexo', 'nombre', 'pass', 'email', 'telefono'];
    public $primaryKey = 'usuario';
    protected $hidden = ['pass', 'api_token'];
    protected $keyType = 'string';
    public $incrementing =false;
    public $timestamps = false;

    public function cita() {
        return $this->hasMany('App\Models\cita', 'pacientes');
    }

    public function getAuthPassword(){
        return $this->attributes['pass'];
    }
}
