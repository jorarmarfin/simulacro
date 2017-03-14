<?php

namespace App\Http\Controllers\Pago;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagoController extends Controller
{
    public function index()
    {
    	return view('pagos.index');
    }
}
