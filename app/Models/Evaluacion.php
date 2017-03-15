<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    protected $table = 'evaluacion';
    protected $fillable = ['codigo', 'nombre', 'descripcion','fecha_inicio','fecha_fin','activo'];

    /**
    * Devuelve los valores Activos
    * @param  [type]  [description]
    * @return [type]            [description]
    */
    public function scopeActivo($cadenaSQL){
    	return $cadenaSQL->where('activo',1);
    }
}
