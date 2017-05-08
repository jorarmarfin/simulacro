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
            Inicia tu Inscripción ahora:
            <ol>
                <li>Datos: Registrar datos del participante (no del apoderado)</li>
                <li>Pagos: imprimir tu formato de pago para realizar el pago en el banco o agencias Scotiabak</li>
                <li>Ficha: imprimir tu ficha de participante despues de realizar el pago</li>
            </ol>
             <strong> BENEFICIOS DEL SIMULACRO: </strong> </br>
             <ol>
                 <li>Rendir la prueba simulacro 2017-2 conoce tu talento.</li>
                 <li>Los participantes que alcancen los dos primeros puestos por especialidad tentativa (1) (con nota mayor o igual a 12) quedarán exonerados del 50% del derecho de inscripción al Concurso de Admisión al que decida postular. Es acumulable hasta el 100%, si participan en otro simulacro de la misma especialidad tentativa dentro de los dos años calendario siguientes al otorgamiento de la primera exoneración. No siendo transferible ni acumulable con ningún otro beneficio que otorgue la OCAD.</li>
             </ol>
             <strong> Nota: </strong> El puntaje obtenido en el Simulacro no es válido para el Concurso de Admisión. </br>
             <strong> Observacion :</strong> Debe asegurarse de tener una foto nitida que no sea tomada de su celular, de lo contrario demorará el proceso de inscripción</br>
             <strong> Especialidad tentativa:</strong> La especialidad que escoge el participante como referencia al momento de su participación en el Simulacro.
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
                <div class="col-md-4 bg-grey-steel mt-step-col">
                    <div class="mt-step-number">1</div>
                    <div class="mt-step-title uppercase font-grey-cascade">Datos</div>
                    <div class="mt-step-content font-grey-cascade">Datos Personales</div>
                </div>
                </a>
                <a href="{{ route('pagos.index') }}">
                <div class="col-md-4 bg-grey-steel mt-step-col active">
                    <div class="mt-step-number">2</div>
                    <div class="mt-step-title uppercase font-grey-cascade">Pago</div>
                    <div class="mt-step-content font-grey-cascade">Formatos de pagos</div>
                </div>
                </a>
                <a href="{{ route('ficha.index') }}">
                <div class="col-md-4 bg-grey-steel mt-step-col">
                    <div class="mt-step-number">3</div>
                    <div class="mt-step-title uppercase font-grey-cascade">Ficha</div>
                    <div class="mt-step-content font-grey-cascade">Ficha de inscripción</div>
                </div>
                </a>
            </div>
        </div>
    </div><!--span-->
</div><!--row-->
<p></p>
<div class="row widget-row">
    <div class="col-md-4">
        <a href="{{ route('reglamento.index') }}" class="list-group-item">
            <h4 class="list-group-item-heading">Reglamento</h4>
            <p class="list-group-item-text"> Reglamento del simulacro de admisión. </p>
        </a>
    </div>
    <div class="col-md-4">
        <a href="{{ route('resultados.index') }}" class="list-group-item">
            <h4 class="list-group-item-heading">Resultados</h4>
            <p class="list-group-item-text"> Aquí podrás ver los resultados de tu evaluación. </p>
        </a>
    </div>
    <div class="col-md-4">
        <a href="{{ route('contacto.index') }}" class="list-group-item">
            <h4 class="list-group-item-heading">Contactanos</h4>
            <p class="list-group-item-text"> Si tienes dificultades con tu inscripcion. </p>
        </a>
    </div>
</div>

@stop


