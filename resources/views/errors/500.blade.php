@extends('layouts.error')

@section('number-error')
401
@stop
@section('title-error')
Las inscripciones al simulacro
@stop

@section('content-error')
<p>
	Esta tratando de ingresar a una seccion en la que no tiene autorizacion.<br/>
	<a href="{{ route('home.index') }}"> Regresar al Inicio </a>
</p>
@stop