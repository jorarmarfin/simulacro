@extends('layouts.admin')

@section('content')
<div class="row">
	<div class="col-md-12">
		<!-- BEGIN Portlet PORTLET-->
    <div class="portlet box green">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-gift"></i>Postulantes </div>
            <div class="tools">
                <a href="javascript:;" class="collapse"> </a>
                <a class="reload actualizar"> </a>
                <a href="" class="fullscreen"> </a>
                <a href="javascript:;" class="remove"> </a>
            </div>
        </div>
        <div class="portlet-body">
		{!!Form::boton('Sin Foto','#','green-meadow','fa fa-file-image-o')!!}
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
$(function(){
$('.Postulantes').DataTable({
    "language": {
        "emptyTable": "No hay datos disponibles",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ filas",
        "search": "Buscar Postulante :",
        "lengthMenu": "_MENU_ registros"
    },
    "bProcessing": true,
    "sAjaxSource": '{{ url('admin/postulantes-lista') }}',
    "pagingType": "bootstrap_full_number",
    "columnDefs": [
                {  // set default column settings
                    'orderable': false,
                    'targets': '_all'
                },
                {
                    'targets':7,
                    'render': function ( data ) {
                      return '<img src="{{ asset('/storage/') }}/'+data+'"  width="25px" >';
                    }
                },
                {
                    'targets':11,
                    'render': function ( data ) {
                    	if (data) {
                    		return '<span class="label label-sm label-info"> SI </span>';
                    	}else{
                    		return '<span class="label label-sm label-danger"> NO </span>';
                    	}
                      return '<a href="postulante/'+data+'/edit" title="Editar"class="btn btn-icon-only green-haze" ><i class="fa fa-edit"></i></a>';
                    }
                },{
                    'targets':12,
                    'render': function ( data ) {
                    	if (data) {
                    		return '<span class="label label-sm label-info"> SI </span>';
                    	}else{
                    		return '<span class="label label-sm label-danger"> NO </span>';
                    	}
                      return '<a href="postulante/'+data+'/edit" title="Editar"class="btn btn-icon-only green-haze" ><i class="fa fa-edit"></i></a>';
                    }
                },
                {
                    'targets':13,
                    'render': function ( data ) {
                      return '<a href="postulante/'+data+'/edit" title="Editar"class="btn btn-icon-only green-haze" ><i class="fa fa-edit"></i></a>';
                    }
                }
            ],
    "columns": [
            { "data": "codigo","defaultContent": "" },
            { "data": "paterno","defaultContent": "" },
            { "data": "materno","defaultContent": "" },
            { "data": "nombres","defaultContent": "" },
            { "data": "dni","defaultContent": "" },
            { "data": "telefono","defaultContent": "" },
            { "data": "email","defaultContent": "" },
            { "data": "foto","defaultContent": "" },
            { "data": "sexo.nombre","defaultContent": "" },
            { "data": "fecha_nacimiento","defaultContent": "" },
            { "data": "grado.nombre","defaultContent": "" },
            { "data": "pago","defaultContent": "" },
            { "data": "anulado","defaultContent": "" },
            { "data": "id","defaultContent": "" },
        ],
});

$(".actualizar").click(function(){
	$(".Postulantes").DataTable().ajax.reload();
});
});



</script>
@stop


@section('plugins-styles')
{!! Html::style('assets/global/plugins/datatables/datatables.min.css') !!}
{!! Html::style('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') !!}
@stop

@section('plugins-js')
{!! Html::script('assets/global/plugins/jquery-ui/jquery-ui.min.js') !!}
{!! Html::script('assets/global/scripts/datatable.js') !!}
{!! Html::script('assets/global/plugins/datatables/datatables.min.js') !!}
{!! Html::script('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') !!}
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



