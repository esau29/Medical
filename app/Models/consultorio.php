<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class consultorio extends Model
{
    use HasFactory;
    protected $table = 'consultorio';
    protected $fillable = ['email', 'direccion', 'nombreconsultorio'];
    public $timestamps = false;

    public function citas() {
        return $this->belongsTo('App\Models\cita', 'detalle_cita', 'id_consultorio', 'id_cita');
    }
}
