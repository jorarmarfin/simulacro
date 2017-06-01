@extends('layouts.base')

@section('content')
{!! Alert::render() !!}
@include('alerts.errors')
<div class="row widget-row">
    <div class="col-md-12">
        <!-- BEGIN WIDGET THUMB -->
        <div class="widget-thumb widget-bg-color-white margin-bottom-20 ">
            <h4 class="widget-thumb-heading">Contactanos</h4>
            <div class="widget-thumb-wrap">
                <div class="widget-thumb-body">
                    Oficina Central de Admisión
                    </br>Túpac Amaru 210 Rímac
                    </br><strong>Telefonos:</strong> 481-10-70 anexo 253 | 482-3804
                    </br><strong>Email:</strong> informes@admisionuni.edu.pe
                </div>
            </div>
        </div>
        <!-- END WIDGET THUMB -->
    </div>
</div>
<div class="row widget-row">
    <div class="col-md-3">
        <!-- BEGIN PORTLET-->
        <div class="portlet light tasks-widget widget-comments">
            <div class="portlet-title margin-bottom-20">
                <div class="caption caption-md font-red-sunglo">
                    <span class="caption-subject theme-font bold uppercase">Envianos un mensaje</span>
                </div>
            </div>
            <div class="portlet-body overflow-h">
                {!! Form::open(['route'=>'contacto.store','method'=>'POST']) !!}
                    {!! Form::text('asunto', null, ['class'=>'form-control margin-bottom-20','placeholder'=>'Asunto']) !!}
                    {!! Form::textarea('contenido', null, ['class'=>'form-control margin-bottom-20','rows'=>'5','placeholder'=>'Mensaje']) !!}
                    {!!Form::enviar('Enviar','red-sunglo pull-right')!!}
                    {!!Form::back(route('home.index'))!!}
                {!! Form::close() !!}
            </div>
        </div>
        <!-- END PORTLET-->
    </div>
    <div class="col-md-9">
        <!-- BEGIN PORTLET-->
        <div class="portlet light tasks-widget widget-comments">
            <div class="portlet-title margin-bottom-20">
                <div class="caption caption-md font-red-sunglo">
                    <span class="caption-subject theme-font bold uppercase">Mensajes</span>
                </div>
            </div>

            <div class="portlet-body overflow-h">
                <div class="tab-content scroller" style="height: 350px;" >
                    <div id="contenido">

                    </div>
                </div>
            </div>
        </div>
        <!-- END PORTLET-->
    </div>
</div>

@stop
@section('js-scripts')
<script>
$(function(){
    function Recarga(){
        $('.tab-content').load('listar');
    }
        $('.tab-content').load('listar');
    //setInterval(Recarga, 1000);
})
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
