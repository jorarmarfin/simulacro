<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Postulante extends Model
{
    protected $table = 'postulante';
    protected $fillable = ['idevaluacion', 'codigo','paterno','materno','nombres','dni','telefono','email','idsexo','fecha_nacimiento','pago','anulado'];
}
