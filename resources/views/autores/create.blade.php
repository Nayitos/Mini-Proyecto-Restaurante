@extends('layout')
@section('tres')

    <h3>Agregar nuevo autor</h3>
  


    {!!Form::open(['url' => '/autores', 'method' => 'post']) !!}
    <div class="input-field">
    {!!Form::text('nombre', null, ['class'=>'validate','id'=>'nombre']); !!}
    {!!Form::label('nombre', 'Ingresa un Nombre')!!}
    </div>
    <div class="input-field">
    {!!Form::text('apellidoPaterno', null, ['class'=>'validate','id'=>'apellidoPaterno']); !!}
    {!!Form::label('apellidoPaterno', 'Ingresa Apellido Paterno')!!}
    </div>
    <div class="input-field">
    {!!Form::text('apellidoMaterno', null, ['class'=>'validate','id'=>'apellidoMaterno']); !!}
    {!!Form::label('apellidoMaterno', 'Ingresa Apellido Materno')!!}
    </div>
    
    {!!Form::button('Aceptar', ['type'=>'submit','class'=>'waves-effect waves-light amber darken-4 btn'] )!!}
    <a class="waves-effect amber darken-4 btn" href="/autores"><i class="material-icons center">arrow_back</i></a>
    {!!Form::close()!!}
@endsection