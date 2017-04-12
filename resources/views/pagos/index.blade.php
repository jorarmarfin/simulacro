@extends('layouts.base')

@section('content')
<div class="col-md-12">
    <!-- BEGIN PORTLET-->
    <div class="portlet light tasks-widget widget-comments">
        <div class="portlet-title margin-bottom-20">
            <div class="caption caption-md font-red-sunglo">
                <span class="caption-subject theme-font bold uppercase">FORMATO DE PAGO</span>
            </div>
            <div class="actions">
                {!!Form::back(route('home.index'))!!}
            </div>
        </div>
        <div class="form-body ">
            <div class="Pulsear">
                Después de 2 horas de registrar sus datos, realizar el pago por derecho de inscripción en la cuenta ADMISION-UNI del Banco Scotiabank.
            </div>
            <p></p>
            <iframe src="{{route('pagos.pdf')}}" width="100%" height="600px" scrolling="auto"></iframe>
        </div>
    </div>
    <!-- END PORTLET-->
</div>

@stop

