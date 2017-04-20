<?php

namespace App\Http\Controllers\Reglamento;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReglamentoController extends Controller
{
    public function index()
    {
    	return view('reglamento.index');
    }
}
