@extends('layouts.base')

@section('content')
{!! Alert::render() !!}
@include('alerts.errors')
<div class="row">
    <div class="col-md-12">
    <!-- BEGIN PORTLET-->
    <div class="portlet light ">
        <div class="portlet-title margin-bottom-10">
            <div class="caption caption-md font-red-sunglo">
                <span class="caption-subject theme-font bold uppercase">Bienvenido</span>
            </div>
        </div>
        <div class="portlet-body overflow-h">
             <strong> Las inscripciones</strong> seran del Del 17 de Abril del 2017 al 05 de Febrero del 2017
        </div>
    </div>
    <!-- END PORTLET-->
</div>
</div><!--row-->
<div class="row">
    <div class="col-md-12">
        <div class="mt-element-step">
            <div class="row step-background">
                <a href="{{ route('datos.index') }}">
                <div class="col-md-3 bg-grey-steel mt-step-col">
                    <div class="mt-step-number">1</div>
                    <div class="mt-step-title uppercase font-grey-cascade">Datos</div>
                    <div class="mt-step-content font-grey-cascade">Datos Personales</div>
                </div>
                </a>
                <a href="{{ route('pagos.index') }}">
                <div class="col-md-3 bg-grey-steel mt-step-col active">
                    <div class="mt-step-number">2</div>
                    <div class="mt-step-title uppercase font-grey-cascade">Pago</div>
                    <div class="mt-step-content font-grey-cascade">Formatos de pagos</div>
                </div>
                </a>
                <a href="{{ route('ficha.index') }}">
                <div class="col-md-3 bg-grey-steel mt-step-col">
                    <div class="mt-step-number">3</div>
                    <div class="mt-step-title uppercase font-grey-cascade">Ficha</div>
                    <div class="mt-step-content font-grey-cascade">Ficha de inscripción</div>
                </div>
                </a>
                <a href="{{ route('resultados.index') }}">
                <div class="col-md-3 bg-grey-steel mt-step-col active">
                    <div class="mt-step-number">4</div>
                    <div class="mt-step-title uppercase font-grey-cascade">Resultado</div>
                    <div class="mt-step-content font-grey-cascade">Resultados de tu evaluación</div>
                </div>
                </a>
            </div>
        </div>
    </div><!--span-->
</div><!--row-->


@stop


