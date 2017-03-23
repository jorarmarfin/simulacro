<?php

use App\Models\Catalogo;
use App\Models\Evaluacion;
if (! function_exists('IdEvaluacion')) {
	/**
	 * Funcion que retorna el prefijo para nombres de archivos
	 * @return [type] [description]
	 */
    function IdEvaluacion()
    {
    	$evaluacion = Evaluacion::select('id')->where('activo',1)->first();
        return $evaluacion->id;
    }
}

if (! function_exists('IdRole')) {
    /**
     * Funcion que retorna el prefijo para nombres de archivos
     * @return [type] [description]
     */
    function IdRole($name)
    {
        $role = Catalogo::select('id')->table('ROLES')->where('codigo',$name)->first();
        return $role->id;
    }
}

if (! function_exists('NameCatalogo')) {
    /**
     * Funcion que retorna el prefijo para nombres de archivos
     * @return [type] [description]
     */
    function NameCatalogo($id)
    {
        $role = Catalogo::select('nombres')->where('id',$id)->first();
        return $role->nombres;
    }
}

if (! function_exists('SiNo')) {
    /**
     * Funcion que retorna el prefijo para nombres de archivos
     * @return [type] [description]
     */
    function SiNo($valor)
    {
        if ($valor) {
           return '<span class="label label-sm label-info"> SI </span>';
        }else{
           return '<span class="label label-sm label-danger"> NO </span>';
        }
    }
}