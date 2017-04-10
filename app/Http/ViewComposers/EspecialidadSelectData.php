<?php
namespace App\Http\ViewComposers;

use App\Models\Aula;
use App\Models\Catalogo;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Request;

class EspecialidadSelectData
{
	public function compose(View $view)
	{
		$especialidad = Catalogo::Combo('ESPECIALIDAD')->orderBy('nombre')->pluck('nombre','id')->toarray();
		$view->with(compact('especialidad'));
	}
}