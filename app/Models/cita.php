<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cita extends Model
{
    use HasFactory;
    protected $table = 'cita';
    protected $fillable = ['fecha', 'nombrepaciente', 'hora', 'precio'];
    public $primaryKey = 'usuario';
    public $timestamps = false;

    public function cliente() {
        return $this->belongsTo('App\Models\pacientes', 'pacientes');
    }

    public function consultorios() {
        return $this->belongsTo('App\Models\consultorio', 'detalle_cita', 'id_cita', 'id_consultorio');
    }
}
