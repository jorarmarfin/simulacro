<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Postulante extends Model
{
    protected $table = 'postulante';
    protected $fillable = ['idevaluacion', 'codigo','paterno','materno','nombres','dni','telefono','email','foto','idsexo','fecha_nacimiento','pago','anulado','idusuario'];
    /**
     * Atributos Paterno
     */
    public function setPaternoAttribute($value)
    {
        $this->attributes['paterno'] = strtoupper($value);
    }
    /**
     * Atributos Paterno
     */
    public function setMaternoAttribute($value)
    {
        $this->attributes['materno'] = strtoupper($value);
    }
    /**
     * Atributos Paterno
     */
    public function setNombresAttribute($value)
    {
        $this->attributes['nombres'] = strtoupper($value);
    }
    /**
     * Atributos Foto
     */
    public function setFotoAttribute($value)
    {
        $this->attributes['foto'] = $value;
        User::where('id',$this->idusuario)->update(['foto'=>$value]);
    }



}
