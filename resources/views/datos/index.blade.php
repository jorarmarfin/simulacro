@extends('layouts.base')

@section('content')
{!! Form::open(['route'=>'datos.store','method'=>'POST','files'=>true]) !!}
<div class="col-md-4">
    <!-- BEGIN PORTLET-->
    <div class="portlet light tasks-widget widget-comments">
        <div class="portlet-title margin-bottom-20">
            <div class="caption caption-md font-red-sunglo">
                <span class="caption-subject theme-font bold uppercase">FOTOS</span>
            </div>
        </div>
        <div class="portlet-body overflow-h">
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-new thumbnail" style="width: 300px; height: 400px;">
                    <img src="http://www.placehold.it/300x400/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                </div>
                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                <div>
                    <span class="btn green btn-file">
                        <span class="fileinput-new"> Seleccionar Imagen </span>
                        <span class="fileinput-exists"> Cambiar </span>
                        {{ Form::file('file', []) }}
                    </span>
                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Quitar </a>
                </div>
            </div>
        </div>
    </div>
    <!-- END PORTLET-->
</div>
<div class="col-md-8">
    <!-- BEGIN PORTLET-->
    <div class="portlet light tasks-widget widget-comments">
        <div class="portlet-title margin-bottom-20">
            <div class="caption caption-md font-red-sunglo">
                <span class="caption-subject theme-font bold uppercase">DATOS PESONALES</span>
            </div>
            <div class="actions">
                {!!Form::back(route('home.index'))!!}
            </div>
        </div>
        <div class="form-body ">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            {!!Form::label('lblDNI', 'DNI');!!}
                            {!!Form::text('dni', $dni , ['class'=>'form-control','placeholder'=>'Numero DNI']);!!}
                        </div>
                    </div><!--span-->
                </div><!--row-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!!Form::label('lblPaterno', 'Apellido Paterno del alumno');!!}
                            {!!Form::text('paterno', null , ['class'=>'form-control','placeholder'=>'Apellido Paterno']);!!}
                        </div>
                    </div><!--span-->
                    <div class="col-md-6">
                        <div class="form-group">
                            {!!Form::label('lblMaterno', 'Apellido Materno del alumno');!!}
                            {!!Form::text('materno', null , ['class'=>'form-control','placeholder'=>'Apellido Materno']);!!}
                        </div>
                    </div><!--span-->
                </div><!--row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            {!!Form::label('lblNombres', 'Nombres del alumno');!!}
                            {!!Form::text('nombres', null , ['class'=>'form-control','placeholder'=>'Nombres del alumno']);!!}
                        </div>
                    </div><!--span-->
                </div><!--row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            {!!Form::label('lblTelefono', 'Telefono');!!}
                            {!!Form::text('telefono', null , ['class'=>'form-control','placeholder'=>'Telefono']);!!}
                        </div>
                    </div><!--span-->
                    <div class="col-md-12">
                        <div class="form-group">
                            {!!Form::label('lblEmail', 'Email del alumno');!!}
                            {!!Form::email('email', null , ['class'=>'form-control','placeholder'=>'Email del alumno']);!!}
                        </div>
                    </div><!--span-->
                </div><!--row-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!!Form::label('lblSexo', 'Sexo');!!}
                            {!!Form::select('idsexo', $sexo ,null , ['class'=>'form-control','placeholder'=>'Seleccionar']);!!}
                        </div>
                    </div><!--span-->
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('lblFecha', 'Fecha de nacimiento', ['class'=>'control-label']) !!}
                            <div class="input-group ">
                                {!!Form::text('fecha_nacimiento', null , ['class'=>'form-control fechanacimiento','placeholder'=>'Fecha de egreso']);!!}
                                <span class="input-group-btn ">
                                    <button class="btn " type="button">
                                        <i class="fa fa-calendar"></i>
                                    </button>
                                </span>
                            </div>
                        </div>

                    </div><!--span-->
                </div><!--row-->
                {!!Form::enviar('Guardar')!!}
        </div>
    </div>
    <!-- END PORTLET-->
</div>
{!! Form::close() !!}
@stop
@section('js-scripts')
<script>
$(".fechanacimiento").datepicker({
    format:'dd/mm/yyyy'
});
</script>
@stop

@section('plugins-styles')
{!! Html::style(asset('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')) !!}
{!! Html::style(asset('assets/global/plugins/select2/css/select2.min.css')) !!}
{!! Html::style(asset('assets/global/plugins/select2/css/select2-bootstrap.min.css')) !!}
{!! Html::style(asset('assets/global/plugins/icheck/skins/all.css')) !!}
{!! Html::style(asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')) !!}
@stop
@section('plugins-js')
{!! Html::script(asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')) !!}
{!! Html::script(asset('assets/global/plugins/select2/js/select2.full.min.js')) !!}
{!! Html::script(asset('assets/global/plugins/select2/js/i18n/es.js')) !!}
{!! Html::script(asset('assets/global/plugins/icheck/icheck.min.js')) !!}
{!! Html::script(asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js')) !!}
@stop
