@extends('layouts.base')

@section('content')

<div class="col-md-12">
    <!-- BEGIN PORTLET-->
    <div class="portlet light tasks-widget widget-comments">
        <div class="portlet-title margin-bottom-20">
            <div class="caption caption-md font-red-sunglo">
                <span class="caption-subject theme-font bold uppercase">Resultados del simulacro</span>
            </div>
            <div class="actions">
                {!!Form::back(route('home.index'))!!}
            </div>
        </div>
        <div class="form-body ">
            <table class="table table-bordered table-hover" data-toggle="table" data-pagination="true">
                <tbody>
                    <tr><td>Codigo</td><td>{{ $postulante->codigo }}</td></tr>
                    <tr><td>Postulante</td><td>{{ $postulante->nombre_completo }}</td></tr>
                    <tr><td>Puntaje</td><td>402.000</td></tr>
                    <tr><td>Nota</td><td>8.040</td></tr>
                    <tr><td>Merito</td><td>1786</td></tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- END PORTLET-->
</div>

@stop

