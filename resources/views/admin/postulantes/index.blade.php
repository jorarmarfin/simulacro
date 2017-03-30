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
			<table class="table table-bordered Postulantes">
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
                        <th> Foto Rechazado </th>
			            <th> Fecha Foto </th>
			            <th> Fecha Registro </th>
                        <th> Grado </th>
			            <th> Aula </th>
			            <th> Pago </th>
			            <th> Anulado </th>
			            <th width="200px"> Opciones </th>
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
<div class="modal fade" id="verfoto" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Foto</h4>
            </div>
            <div class="modal-body">
                <img id="fotito" style="height: 400px" alt="" >
            </div>
            <div class="modal-footer">
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
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
                    'orderable': true,
                    'targets': '_all'
                },
                {
                    'targets':7,
                    'render': function ( data ) {
                      return '<a href="#verfoto" data-foto="{{ asset('/storage/') }}/'+data+'" data-toggle="modal"><img src="{{ asset('/storage/') }}/'+data+'"  width="25px" ></a>';
                    }
                },
                {
                    'targets':8,
                    'render': function ( data ) {
                        if (data!=null) {
                            return '<a href="#verfoto" data-foto="{{ asset('/storage/') }}/'+data+'" data-toggle="modal"><img src="{{ asset('/storage/') }}/'+data+'"  width="25px" ></a>';
                        }
                    }
                },
                {
                    'targets':13,
                    'render': function ( data ) {
                    	if (data) {
                    		return '<span class="label label-sm label-info"> SI </span>';
                    	}else{
                    		return '<span class="label label-sm label-danger"> NO </span>';
                    	}
                    }
                },{
                    'targets':14,
                    'render': function ( data ) {
                    	if (data) {
                    		return '<span class="label label-sm label-info"> SI </span>';
                    	}else{
                    		return '<span class="label label-sm label-danger"> NO </span>';
                    	}
                    }
                },
                {
                    "width": "400px",
                    'targets':15,
                    'render': function ( data ) {
                      return '<a href="postulante/'+data+'/edit" title="Editar"class="btn btn-icon-only green-haze" ><i class="fa fa-edit"></i></a>'+
                      '<a href="postulante/'+data+'/edit" title="Ficha"class="btn btn-icon-only blue" ><i class="fa fa-file-image-o"></i></a>'+
                      '<a href="postulante/'+data+'/edit" title="Formato Pago"class="btn btn-icon-only grey-gallery" ><i class="fa fa-money"></i></a>';
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
            { "data": "foto_rechazo","defaultContent": "" },
            { "data": "fecha_foto","defaultContent": "" },
            { "data": "fecha_registro","defaultContent": "" },
            { "data": "grado.nombre","defaultContent": "" },
            { "data": "aulas.codigo","defaultContent": "" },
            { "data": "pago","defaultContent": "" },
            { "data": "anulado","defaultContent": "" },
            { "data": "id","defaultContent": "" },
        ],
});

$(".actualizar").click(function(){
	$(".Postulantes").DataTable().ajax.reload();
});
});

$('#verfoto').on('show.bs.modal', function (e) {
        var foto = $(e.relatedTarget).data('foto');
        $(e.currentTarget).find('#fotito').attr("src",foto);
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



