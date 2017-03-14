<?php

namespace App\Http\Controllers\Ficha;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FichaController extends Controller
{
    public function index()
    {
    	return view('ficha.index');
    }
}
