<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recaudacion extends Model
{
    protected $table = 'recaudacion';
    protected $fillable = ['recibo', 'servicio', 'descripcion','monto','fecha','codigo','nombrecliente','idpostulante'];
    /**
     * Establecemos el la relacion con catalogo
     * @return [type] [description]
     */
    public function Postulantes()
    {
        return $this->hasOne(Postulante::class,'id','idpostulante');
    }
}
