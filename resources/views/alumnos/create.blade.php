@extends('layout')
@section('tres')

    <h3>Agregar nuevo alumno</h3>
  


    {!!Form::open(['url' => '/alumnos', 'method' => 'post']) !!}
    <div class="input-field">
    {!!Form::text('noControl', null, ['class'=>'validate','id'=>'noControl']); !!}
    {!!Form::label('noControl', 'Ingresa un Numero de Control')!!}
    </div>
    <div class="input-field">
    {!!Form::text('nombre', null, ['class'=>'validate','id'=>'nombre']); !!}
    {!!Form::label('nombre', 'Ingresa tu Nombre')!!}
    </div>
    <div class="input-field">
    {!!Form::text('apellidoPaterno', null, ['class'=>'validate','id'=>'apellidoPaterno']); !!}
    {!!Form::label('apellidoPaterno', 'Ingresa Apellido Paterno')!!}
    </div>
    <div class="input-field">
    {!!Form::text('apellidoMaterno', null, ['class'=>'validate','id'=>'apellidoMaterno']); !!}
    {!!Form::label('apellidoMaterno', 'Ingresa Apellido Materno')!!}
    </div>
    <div class="input-field">
    {!!Form::text('direccion', null, ['class'=>'validate','id'=>'direccion']); !!}
    {!!Form::label('direccion', 'Ingresa una direccion')!!}
    </div>
    <div class="input-field">
    {!!Form::text('telefono', null, ['class'=>'validate','id'=>'telefono']); !!}
    {!!Form::label('telefono', 'Ingresa un telefono')!!}
    </div>
    
    {!!Form::button('Aceptar', ['type'=>'submit','class'=>'waves-effect waves-light amber darken-4 btn'] )!!}
    <a class="waves-effect amber darken-4 btn" href="/alumnos"><i class="material-icons center">arrow_back</i></a>
    {!!Form::close()!!}
@endsection