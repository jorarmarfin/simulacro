@extends('layouts.login')

@section('content')
    @include('alerts.errors')
{!! Form::open(['url'=>'login','method'=>'POST']) !!}
    <h3 class="form-title font-green">Iniciar Sesion</h3>
    <div class="form-group">
            <div class="input-icon right ">
            <i class="fa fa-envelope"></i>
            {!!Form::text('dni',old('dni'), ['class'=>'form-control','placeholder'=>'DNI','maxlength'=>'8'])!!}
            </div>
    </div>
    <div class="form-group">
        <div class="input-icon right ">
            <i class="fa fa-lock"></i>
            {!!Form::password('password', ['class'=>'form-control','placeholder'=>'Clave'])!!}
        </div>
    </div>
    <div class="form-actions">
        {!!Form::submit('Entrar',['class'=>'btn green uppercase btn-block'])!!}
    </div>
    <div class="create-account">
    Debe crear una cuenta
    <p></p>
    {!!Form::boton('Crear cuenta',url('/register'),'green','fa fa-plus')!!}
    {!!Form::boton('Olvide mi Clave',url('/password/reset'),'green','fa fa-cog')!!}
    </div>
{!! Form::close() !!}
@stop

@section('copyright')
Oficina Central de Admision. Universidad Nacional de Ingeniería
@stop