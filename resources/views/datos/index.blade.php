@extends('layouts.base')

@section('content')
@include('alerts.errors')
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
        Tus nombres y apellidos deben coincidir con el de tu DNI, los campos con asterisco son obligatorios
        <p></p>
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
                            {!!Form::label('lblPaterno', 'Apellido Paterno del participante *');!!}
                            {!!Form::text('paterno', null , ['class'=>'form-control','placeholder'=>'Apellido Paterno']);!!}
                        </div>
                    </div><!--span-->
                    <div class="col-md-6">
                        <div class="form-group">
                            {!!Form::label('lblMaterno', 'Apellido Materno del participante *');!!}
                            {!!Form::text('materno', null , ['class'=>'form-control','placeholder'=>'Apellido Materno']);!!}
                        </div>
                    </div><!--span-->
                </div><!--row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            {!!Form::label('lblNombres', 'Nombres del participante *');!!}
                            {!!Form::text('nombres', null , ['class'=>'form-control','placeholder'=>'Nombres del participante']);!!}
                        </div>
                    </div><!--span-->
                </div><!--row-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!!Form::label('lblTelefono', 'Telefono');!!}
                            {!!Form::text('telefono', null , ['class'=>'form-control','placeholder'=>'Telefono']);!!}
                        </div>
                    </div><!--span-->
                    <div class="col-md-6">
                        <div class="form-group">
                            {!!Form::label('lblEmail', 'Email del participante');!!}
                            {!!Form::email('email', null , ['class'=>'form-control','placeholder'=>'Email del participante']);!!}
                        </div>
                    </div><!--span-->
                </div><!--row-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!!Form::label('lblSexo', 'Sexo *');!!}
                            {!!Form::select('idsexo', $sexo ,null , ['class'=>'form-control','placeholder'=>'Seleccionar']);!!}
                        </div>
                    </div><!--span-->
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('lblFecha', 'Fecha de nacimiento de esta forma (año-mes-dia) *', ['class'=>'control-label']) !!}
                            <div class="input-group ">
                                {!!Form::text('fecha_nacimiento', null , ['id'=>'fecha','class'=>'form-control','placeholder'=>'Fecha de Nacimiento']);!!}
                                <span class="input-group-btn ">
                                    <button class="btn " type="button">
                                        <i class="fa fa-calendar"></i>
                                    </button>
                                </span>
                            </div>
                        </div>

                    </div><!--span-->
                </div><!--row-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!!Form::label('lblGrado', 'Nivel Educativo *');!!}
                            {!!Form::select('idgrado', $grado ,null , ['class'=>'form-control','placeholder'=>'Seleccionar']);!!}
                        </div>
                    </div><!--span-->
                    <div class="col-md-6">
                        <div class="form-group">
                            {!!Form::label('lblSede', 'Sede *');!!}
                            {!!Form::select('idsede', $sedes ,null , ['class'=>'form-control','placeholder'=>'Seleccionar']);!!}
                        </div>
                    </div><!--span-->
                    <div class="col-md-6">
                        <div class="form-group">
                            {!!Form::label('lblEspecialidad', 'Especialidad de Preferencia *');!!}
                            {!!Form::select('idespecialidad', $especialidad ,null , ['class'=>'form-control','placeholder'=>'Seleccionar']);!!}
                        </div>
                    </div><!--span-->
                </div><!--row-->
                {!!Form::enviar('Guardar')!!}
        </div>
    </div>
    <!-- END PORTLET-->
</div>
<div class="col-md-12">
    <!-- BEGIN PORTLET-->
    <div class="portlet light tasks-widget widget-comments">
        <div class="portlet-title margin-bottom-20">
            <div class="caption caption-md font-red-sunglo">
                <span class="caption-subject theme-font bold uppercase Pulsear">Observacion</span>
            </div>
            <div class="actions">
                {!!Form::back(route('home.index'))!!}
            </div>
        </div>
        <div class="form-body ">
        <div class="note note-info">
            <h4 class="block">Informacion importante!</h4>
            <p> Tu fotografia tiene que ser nitida como la que te mostramos aquí, en fondo blanco y sin lentes, de lo contrario tendras problemas para finalizar tu inscripción </p>
        </div>

        <p></p>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="fileinput-new thumbnail" style="width: 300px; height: 400px;">
                            <img src="{{ asset('/assets/pages/img/unnamed.jpg') }}" width="300px" height="400px" />
                        </div>
                    </div>
                </div><!--span-->
            </div><!--row-->
        </div>
    </div>
    <!-- END PORTLET-->
</div>
{!! Form::close() !!}
@stop

@section('js-scripts')
<script>
$("#fecha").inputmask("y-m-d", {
    "placeholder": "yyyy-mm-dd"
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
{!! Html::script(asset('assets/global/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js')) !!}
{!! Html::script(asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')) !!}
{!! Html::script(asset('assets/global/plugins/select2/js/select2.full.min.js')) !!}
{!! Html::script(asset('assets/global/plugins/select2/js/i18n/es.js')) !!}
{!! Html::script(asset('assets/global/plugins/icheck/icheck.min.js')) !!}
{!! Html::script(asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js')) !!}
@stop
