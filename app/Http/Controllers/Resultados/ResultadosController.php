<?php

namespace App\Http\Controllers\Resultados;

use App\Http\Controllers\Controller;
use App\Models\Postulante;
use Illuminate\Http\Request;

class ResultadosController extends Controller
{
    public function index()
    {
    	$postulante = Postulante::Usuario()->first();
    	return view('resultados.index',compact('postulante'));
    }
}
