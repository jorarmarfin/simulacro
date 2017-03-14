<?php

namespace App\Http\Controllers\Datos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DatosController extends Controller
{
    public function index()
    {
    	return view('datos.index');
    }
}
