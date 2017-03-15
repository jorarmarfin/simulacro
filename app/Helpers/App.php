<?php

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