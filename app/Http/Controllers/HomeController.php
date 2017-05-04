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
        $pagantes = Recaudacion::Resumen()->orderBy('fecha')->paginate(10);

        switch (Auth::user()->role->nombre) {
            case 'root':
                return view('admin.index',compact('resumen','pagantes'));
                break;
            case 'Alumno':
                return view('index');
                break;

            default:
                return view('admin.index',compact('resumen','pagantes'));
                break;
        }
    }
}
