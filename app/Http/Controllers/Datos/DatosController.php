<?php

namespace App\Http\Controllers\Datos;

use App\Http\Controllers\Controller;
use App\Models\Postulante;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Styde\Html\Facades\Alert;
class DatosController extends Controller
{
    public function index()
    {
    	$dni = Auth::user()->dni;
    	$id = Auth::user()->id;
    	$postulante = Postulante::where('idusuario',$id)->first();

    	if(is_null($postulante))return view('datos.index',compact('dni'));
    	else return view('datos.edit',compact('postulante'));
    }
    public function store(Request $request)
    {
    	$data = $request->all();
        if ($request->hasFile('file')) {
            $data['foto'] = $request->file('file')->store('fotos','public');
        }
        $data['idevaluacion'] = IdEvaluacion();
        $data['idusuario'] = Auth::user()->id;

        Postulante::create($data);
        Alert::success('se registro sus datos con exito');
        return redirect()->route('home.index');

    }
    public function update(Request $request,$id)
    {
    	$data = $request->all();
        $postulante = Postulante::find($id);
        if ($request->hasFile('file')) {
        	Storage::delete("/public/$postulante->foto");
            $data['foto'] = $request->file('file')->store('fotos','public');
        }
        $data['idevaluacion'] = IdEvaluacion();
        $data['idusuario'] = Auth::user()->id;

        $postulante->fill($data);
        $postulante->save();

        Alert::success('se actualizo sus datos con exito');
        return redirect()->route('home.index');

    }
}
