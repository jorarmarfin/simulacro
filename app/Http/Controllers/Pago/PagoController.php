<?php

namespace App\Http\Controllers\Pago;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;
class PagoController extends Controller
{
    public function index()
    {
    	return view('pagos.index');
    }
    public function pdf()
    {
    	PDF::SetTitle('Formato de Pago');
    	PDF::AddPage('L','A5');

    	PDF::Output(public_path('storage/tmp/').'recibo.pdf','FI');
    }
}
