<?php

namespace App\Http\Controllers\Admin\Fotos;

use App\Http\Controllers\Controller;
use App\Models\Postulante;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Styde\Html\Facades\Alert;

class FotosController extends Controller
{
    public function index()
    {
    	$postulante = Postulante::where('foto_estado','CARGADO')->orderBy('fecha_foto')->first();
    	if(!isset($postulante))Alert::success('No hay Foto por Editar');
    	return view('admin.fotos.index',compact('postulante'));
    }
    public function update($id,$estado)
    {
    	$postulante = Postulante::find($id);
    	$archivo = storage_path('app/public/').$postulante->foto;

    	$nuevo_archivo = storage_path('app/public/fotosok/').$postulante->dni.extension($archivo);

    	switch ($estado) {
    		case '1':
    			$postulante->foto_estado = 'ACEPTADO';
    			$postulante->save();
    			copy($archivo,$nuevo_archivo);
    			break;

    		case '0':
    			$postulante->foto_estado = 'RECHAZADO';
    			$postulante->save();
    			break;
    	}
    	return redirect()->route('admin.fotos.index');
    }
}
