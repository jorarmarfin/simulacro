@extends('layouts.admin')


@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN Portlet PORTLET-->
    <div class="portlet box green">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-gift"></i>Avance </div>
            <div class="tools">
                <a href="javascript:;" class="collapse"> </a>
                <a class="reload actualizar"> </a>
                <a href="" class="fullscreen"> </a>
                <a href="javascript:;" class="remove"> </a>
            </div>
        </div>
        <div class="portlet-body">
        <p></p>
            <div class="row">
                <div class="col-md-3">
                Cantidad de Inscritos
                    <table class="table table-bordered table-hover" data-pagination="true">
                        <thead>
                            <tr>
                                <th> Fecha </th>
                                <th> cantidad </th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th> Total </th>
                                <th> {{ $resumen->sum('cantidad') }} </th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($resumen as $item)
                                <tr>
                                    <th> {{ $item->fecha_registro }} </th>
                                    <td> {{ $item->cantidad }} </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
                <div class="col-md-3">
                Cantidad de Pagantes
                    <table class="table table-bordered table-hover" data-pagination="true">
                        <thead>
                            <tr>
                                <th> Fecha </th>
                                <th> cantidad </th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th> Total </th>
                                <th> {{ $pagantes->sum('cantidad') }} </th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($pagantes as $item)
                                <tr>
                                    <th> {{ $item->fecha_registro }} </th>
                                    <td> {{ $item->cantidad }} </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
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


@section('plugins-styles')
{!! Html::style('assets/global/plugins/bootstrap-table/bootstrap-table.min.css') !!}
@stop

@section('plugins-js')
{!! Html::script('assets/global/plugins/jquery-ui/jquery-ui.min.js') !!}
{!! Html::script('assets/global/plugins/bootstrap-table/bootstrap-table.min.js') !!}
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
Panel de Administracion
@stop

@section('page-subtitle')
@stop




