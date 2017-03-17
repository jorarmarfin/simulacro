<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Auth;
class Postulante extends Model
{
    protected $table = 'postulante';
    protected $fillable = ['idevaluacion', 'codigo','paterno','materno','nombres','dni','telefono','email','foto','idsexo','fecha_nacimiento','pago','anulado','idusuario'];
    /**
    * Atributos Sexo
    */
    public function getSexoAttribute()
    {
        $sexo = Catalogo::find($this->idsexo);
        return $sexo->nombre;
    }
    /**
    * Atributos Nombre Completo
    */
    public function getNombreCompletoAttribute()
    {
        $nombre = $this->paterno.' - '.$this->materno.', '.$this->nombres;
        return $nombre;
    }
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
        User::where('id',Auth::user()->id)->update(['foto'=>$value]);
    }

    /**
    * Devuelve los valores Activos
    * @param  [type]  [description]
    * @return [type]            [description]
    */
    public function scopeUsuario($cadenaSQL){
        $id = Auth::user()->id;
        return $cadenaSQL->where('idusuario',$id);
    }


}
