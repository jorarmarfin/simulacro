@extends('layouts.admin')

@section('content')
{!! Alert::render() !!}
@include('alerts.errors')
<div class="row">
	<div class="col-md-12">
		<!-- BEGIN Portlet PORTLET-->
    <div class="portlet box green">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-money"></i>Pagos </div>
            <div class="tools">
                <a href="javascript:;" class="collapse"> </a>
                <a class="reload actualizar"> </a>
                <a href="" class="fullscreen"> </a>
                <a href="javascript:;" class="remove"> </a>
            </div>
        </div>
        <div class="portlet-body">
        {!! Form::open(['route'=>'admin.pagos.store','method'=>'POST']) !!}
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        {!! Form::label('lblDatos', 'Datos', ['class'=>'form-group']) !!}
                    </div>
                    <div class="col-md-3">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="input-group input-large">
                                <div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
                                    <i class="fa fa-file fileinput-exists"></i>&nbsp;
                                    <span class="fileinput-filename"> </span>
                                </div>
                                <span class="input-group-addon btn default btn-file">
                                    <span class="fileinput-new"> Select file </span>
                                    <span class="fileinput-exists"> Change </span>
                                    {!! Form::file('file', []) !!}
                                <a href="javascript:;" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        {!!Form::enviar('Cargar')!!}
                    </div>
                </div>{{-- row --}}
            </div>
            <p></p>
        {!! Form::close() !!}
        <p></p>
        {!!Form::boton('Crear Cartera',route('admin.cartera.create'),'green-meadow','fa fa-file-image-o')!!}
		{!!Form::boton('Descargar Cartera',asset('/storage/carteras/UNIADMIS.txt'),'green-seagreen','fa fa-cloud-download')!!}
        <p></p>
			<table class="table table-bordered table-hover Postulantes">
			    <thead>
			        <tr>
			            <th> Codigo </th>
			            <th> Paterno </th>
			            <th> Materno </th>
			            <th> Nombres </th>
			            <th> DNI </th>
			            <th> Telefono </th>
			            <th> Email </th>
			            <th> Foto </th>
			            <th> Sexo </th>
			            <th> Fecha Nacimiento </th>
			            <th> Grado </th>
			            <th> Pago </th>
			            <th> Anulado </th>
			            <th> Opciones </th>
			        </tr>
			    </thead>
			    <tbody>

			    </tbody>
			</table>
        </div>
    </div>
    <!-- END Portlet PORTLET-->
	</div><!--span-->
</div><!--row-->

@stop

@section('js-scripts')
<script>


</script>
@stop

@section('plugins-styles')
{!! Html::style('assets/global/plugins/datatables/datatables.min.css') !!}
{!! Html::style('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') !!}
{!! Html::style('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') !!}

@stop

@section('plugins-js')
{!! Html::script('assets/global/plugins/jquery-ui/jquery-ui.min.js') !!}
{!! Html::script('assets/global/scripts/datatable.js') !!}
{!! Html::script('assets/global/plugins/datatables/datatables.min.js') !!}
{!! Html::script('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') !!}
{!! Html::script('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') !!}

@stop




@section('menu-user')
@include('menu.profile-admin')
@stop

@section('sidebar')
@include(Auth::user()->menu)
@stop


@section('user-name')
{!!Auth::user()->dni!!}
@stop

@section('breadcrumb')

@stop


@section('page-title')

@stop

@section('page-subtitle')
@stop



