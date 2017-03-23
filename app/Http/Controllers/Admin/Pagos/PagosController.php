<?php

namespace App\Http\Controllers\Admin\Pagos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagosController extends Controller
{
    public function index()
    {
    	return view('admin.pagos.index');
    }
}
