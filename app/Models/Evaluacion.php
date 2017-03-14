<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    protected $table = 'evaluacion';
    protected $fillable = ['codigo', 'nombre', 'descripcion','fecha_inicio','fecha_fin','activo'];
}
