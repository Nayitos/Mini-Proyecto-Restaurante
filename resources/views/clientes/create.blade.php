@extends('layout')
@section('tres')

    <h3>Registrar Cliente</h3>
  
    {!!Form::open(['url' => '/clientes', 'method' => 'post']) !!}
    <div class="input-field">
    {!!Form::text('nombre', null, ['class'=>'validate','id'=>'nombre']); !!}
    {!!Form::label('nombre', 'Ingresa nombre completo')!!}
    </div>
    {!!Form::button('Aceptar', ['type'=>'submit','class'=>'"waves-effect waves-light red accent-4 btn'])!!}
    {!!Form::close()!!}
@endsection


