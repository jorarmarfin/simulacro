<?php

namespace App\Http\Controllers\Admin\Padron;

use App\Http\Controllers\Controller;
use App\Models\Postulante;
use Illuminate\Http\Request;

class PadronController extends Controller
{
    public function index()
    {
	    $Lista = Postulante::Activos()->isNull(0)->pago()->get();

    	return view('admin.padron.index',compact('Lista'));
    }
}
