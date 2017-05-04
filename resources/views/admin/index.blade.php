@extends('layouts.admin')


@section('content')
<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
            <div class="visual">
                <i class="fa fa-comments"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span >{{ $resumen->sum('cantidad') }}</span>
                </div>
                <div class="desc"> Inscritos </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a class="dashboard-stat dashboard-stat-v2 red" href="#">
            <div class="visual">
                <i class="fa fa-bar-chart-o"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span>{{ $pagantes->sum('cantidad') }}</span> </div>
                <div class="desc"> Pagantes </div>
            </div>
        </a>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 ">
        <div class="portlet light bordered">
            <div class="portlet-title tabbable-line">
                <div class="caption">
                    <i class="icon-bubbles font-dark hide"></i>
                    <span class="caption-subject font-dark bold uppercase">Avance</span>
                </div>

            </div>
            <div class="portlet-body">
                <div class="row">
                    <div class="col-md-3">
                    Cantidad de Inscritos
                        <table class="table table-bordered table-hover" >
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
                                        <td><strong> {{ $item->fecha_registro }} </strong></td>
                                        <td> {{ $item->cantidad }} </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $resumen->links() }}
                    </div>
                    <div class="col-md-3">
                    Cantidad de Pagantes
                        <table class="table table-bordered table-hover"  data-pagination="true" >
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
                                        <td><strong> {{ $item->fecha }} </strong></td>
                                        <td> {{ $item->cantidad }} </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $resumen->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
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




