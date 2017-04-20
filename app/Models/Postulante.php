<?php

namespace App\Models;

use App\User;
use Auth;
use DB;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
class Postulante extends Model
{
    protected $table = 'postulante';
    protected $fillable = ['idevaluacion', 'codigo','paterno','materno','nombres','dni','telefono','email','foto','idsexo','fecha_nacimiento','pago','anulado','idusuario','idgrado','foto_rechazo','foto_estado','fecha_foto','fecha_registro','mensaje','datos_ok','idaula','idsede','idespecialidad','idubigeo','direccion','idcolegio'];
    /**
    * Atributos Sede
    */
    public function getSedeAttribute()
    {
        $sede = Catalogo::find($this->idsede);
        return strtoupper($sede->nombre);
    }
    /**
    * Atributos Foto
    */
    public function getMostrarFotoAttribute()
    {
        $foto = asset('/storage/'.$this->foto);
        return $foto;
    }
    /**
    * Atributos Aula
    */
    public function getAulaAttribute()
    {
        if (isset($this->idaula)) {
            $aula = Aula::find($this->idaula);
            return $aula->codigo;
        }else return ' ';
    }
    /**
    * Atributos Grado
    */
    public function getGradoAttribute()
    {
        $grado = Catalogo::find($this->idgrado);
        return $grado->nombre;
    }
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
        $nombre = $this->paterno.'-'.$this->materno.','.$this->nombres;
        return $nombre;
    }
    /**
    * Atributos Nombre Completo
    */
    public function getNombreClienteAttribute()
    {
        $nombre = $this->paterno.' '.$this->materno.' '.$this->nombres;
        return $nombre;
    }
    /**
    * Atributos Edad del postulante
    */
    public function getEdadAttribute()
    {
        $edad = Carbon::createFromFormat('Y-m-d',$this->fecha_nacimiento)->age;
        return $edad;
    }
    /**
    * Atributos estado de  Alumno
    */
    public function getEstadoPagoAttribute()
    {
        if ($this->pago) {
           return '<span class="label label-sm label-info"> SI </span>';
        }else{
           return '<span class="label label-sm label-danger"> NO </span>';
        }
    }
    /**
    * Atributos estado de  Alumno
    */
    public function getEstadoAnuladoAttribute()
    {
        if ($this->anulado) {
           return '<span class="label label-sm label-info"> SI </span>';
        }else{
           return '<span class="label label-sm label-danger"> NO </span>';
        }
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
        if (Auth::user()->idrole == IdRole('alum')) {
            User::where('id',Auth::user()->id)->update(['foto'=>$value]);
        }
    }
    /**
     * Atributos Email
     */
    public function setEmailAttribute($value)
    {
        $this->attributes['email'] = $value;
        User::where('id',Auth::user()->id)->update(['email'=>$value]);
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
    /**
    * Devuelve los valores Activos
    * @param  [type]  [description]
    * @return [type]            [description]
    */
    public function scopeActivos($cadenaSQL){
        $evaluacion = Evaluacion::Activo()->first();
        return $cadenaSQL->where('idevaluacion',$evaluacion->id);
    }
    /**
    * Devuelve los valores Activos
    * @param  [type]  [description]
    * @return [type]            [description]
    */
    public function scopeIsNull($cadenaSQL,$estado = 1){
        return $cadenaSQL->where('anulado',$estado);
    }
    /**
    * Devuelve los postulantes Activos no anulados
    * @param  [type]  [description]
    * @return [type]            [description]
    */
    public function scopePagantes($cadenaSQL,$pago = 0){
        return $cadenaSQL->Activos()->isNull(0)->where('pago',$pago);
    }
    /**
    * Es llamado por el controlador HomeController
    *
    * @param  [type]  [description]
    * @return [type]            [description]
    */
    public function scopeResumen($cadenaSQL){
        return $cadenaSQL->select('fecha_registro',DB::raw('count(*) as cantidad'))
                         ->Activos()
                         ->isNull(0)
                         ->groupBy('fecha_registro');
    }
    /**
    * Es llamado por el controlador HomeController
    *
    * @param  [type]  [description]
    * @return [type]            [description]
    */
    public function scopeResumenPago($cadenaSQL){
        return $cadenaSQL->select('fecha_registro',DB::raw('count(*) as cantidad'))
                         ->Pagantes()
                         ->groupBy('fecha_registro');
    }
    /**
     * Establecemos el la relacion con catalogo
     * @return [type] [description]
     */
    public function Sexo()
    {
        return $this->hasOne(Catalogo::class,'id','idsexo');
    }
    /**
     * Establecemos el la relacion con catalogo
     * @return [type] [description]
     */
    public function Grado()
    {
        return $this->hasOne(Catalogo::class,'id','idgrado');
    }
    /**
     * Establecemos el la relacion con aula
     * @return [type] [description]
     */
    public function Aulas()
    {
        return $this->hasOne(Aula::class,'id','idaula');
    }
    /**
     * Establecemos el la relacion con aula
     * @return [type] [description]
     */
    public function Sedes()
    {
        return $this->hasOne(Catalogo::class,'id','idsede');
    }
    /**
     * Establecemos el la relacion con catalogo
     * @return [type] [description]
     */
    public function Resultados()
    {
        return $this->hasOne(Resultado::class,'idpostulante','id');
    }
    /**
     * Establecemos el la relacion con catalogo
     * @return [type] [description]
     */
    public function Especialidades()
    {
        return $this->hasOne(Especialidad::class,'id','idespecialidad');
    }
    /**
     * Establecemos el la relacion con catalogo
     * @return [type] [description]
     */
    public function Ubigeos()
    {
        return $this->hasOne(Ubigeo::class,'id','idubigeo');
    }
    /**
     * Establecemos el la relacion con catalogo
     * @return [type] [description]
     */
    public function Colegios()
    {
        return $this->hasOne(Colegio::class,'id','idcolegio');
    }
    /**
     * Operaciones estaticas
     * @param [type] $data [description]
     */
    public static function AsignarCodigo($data)
    {
        $secuencia = Secuencia::all()->first();
        $numero = DB::select("SELECT nextval('$secuencia->nombre')");
        $numero = $numero[0]->nextval;
        foreach ($data as $key => $item) {
            $codigo = NumeroInscripcion(8,$numero);
            Postulante::where('id',$item['idpostulante'])->update(['codigo'=>$codigo, 'pago'=>true]);
        }
    }

    public static function AsignarAula($data)
    {
        foreach ($data as $key => $item) {
            $aula = Aula::select('id')
                            ->where('activo',true)
                            ->where('habilitado',true)
                            ->where('disponible','>',0)
                            ->inRandomOrder()
                            ->first();

            if (isset($aula)) {
                Aula::where('id',$aula->id)->increment('asignado');
                Aula::where('id',$aula->id)->decrement('disponible');
                Postulante::where('id',$item['idpostulante'])->update(['idaula'=>$aula->id]);
            }else{
                $aula = Aula::select('id')
                            ->where('activo',true)
                            ->where('disponible','>',0)
                            ->orderBy('orden')
                            ->take(3)
                            ->get();
                Aula::whereIn('id',$aula->toArray())->update(['habilitado'=>true]);

                $aula = Aula::select('id')
                            ->where('activo',true)
                            ->where('habilitado',true)
                            ->where('disponible','>',0)
                            ->inRandomOrder()
                            ->first();
                Aula::where('id',$aula->id)->increment('asignado');
                Aula::where('id',$aula->id)->decrement('disponible');
                Postulante::where('id',$item['idpostulante'])->update(['idaula'=>$aula->id]);

            }
        }
    }

}
