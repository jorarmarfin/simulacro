@extends('layouts.base')

@section('content')
{!! Alert::render() !!}
@include('alerts.errors')
<div class="row">
    <div class="col-md-3">
        <a class="dashboard-stat dashboard-stat-v2 blue" href="{{ route('datos.index') }}">
            <div class="visual">
                <i class="fa fa-users"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span >DATOS</span>
                </div>
                <div class="desc"> Datos Personales </div>
            </div>
        </a>
    </div>
    <div class="col-md-3 ">
        <a class="dashboard-stat dashboard-stat-v2 red" href="{{ route('pagos.index') }}">
            <div class="visual">
                <i class="fa fa-dollar"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span >PAGO</span></div>
                <div class="desc"> Formatos de pagos </div>
            </div>
        </a>
    </div>
    <div class="col-md-3 ">
        <a class="dashboard-stat dashboard-stat-v2 green" href="{{ route('ficha.index') }}">
            <div class="visual">
                <i class="fa fa-file-pdf-o"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span >FICHA</span>
                </div>
                <div class="desc"> Ficha de inscripción </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 ">
        <a class="dashboard-stat dashboard-stat-v2 purple" href="{{ route('resultados.index') }}">
            <div class="visual">
                <i class="fa fa-globe"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span >RESULTADOS</span> </div>
                <div class="desc"> Resultados de tu evaluación </div>
            </div>
        </a>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="mt-element-step">
            <div class="row step-background">
                <div class="col-md-4 bg-grey-steel mt-step-col">
                    <div class="mt-step-number">1</div>
                    <div class="mt-step-title uppercase font-grey-cascade">Purchase</div>
                    <div class="mt-step-content font-grey-cascade">Purchasing the item</div>
                </div>
                <div class="col-md-4 bg-grey-steel mt-step-col active">
                    <div class="mt-step-number">2</div>
                    <div class="mt-step-title uppercase font-grey-cascade">Payment</div>
                    <div class="mt-step-content font-grey-cascade">Complete your payment</div>
                </div>
                <div class="col-md-4 bg-grey-steel mt-step-col">
                    <div class="mt-step-number">3</div>
                    <div class="mt-step-title uppercase font-grey-cascade">Deploy</div>
                    <div class="mt-step-content font-grey-cascade">Receive item integration</div>
                </div>
            </div>
        </div>
    </div><!--span-->
</div><!--row-->
@stop


