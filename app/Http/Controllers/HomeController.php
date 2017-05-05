<?php

namespace App\Http\Controllers;

use App\Models\Postulante;
use App\Models\Recaudacion;
use Auth;
use DB;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resumen = Postulante::Resumen()->orderBy('fecha_registro')->paginate(10);
        $total_inscritos = Postulante::Resumen()->get()->sum('cantidad');
        $pagantes = Recaudacion::Resumen()->orderBy('fecha')->paginate(10);
        $total_pagantes = Recaudacion::Resumen()->get()->sum('cantidad');

        switch (Auth::user()->role->nombre) {
            case 'root':
                return view('admin.index',compact('resumen','pagantes','total_inscritos','total_pagantes'));
                break;
            case 'Alumno':
                return view('index');
                break;

            default:
                return view('admin.index',compact('resumen','pagantes','total_inscritos','total_pagantes'));
                break;
        }
    }
}
