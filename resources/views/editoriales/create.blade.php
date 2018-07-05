@extends('layout')
@section('tres')

    <h3>Create a new Editorial </h3>
  

    {!!Form::open(['url' => '/editoriales', 'method' => 'post']) !!}
    
    <div class="input-field">
    {!!Form::text('nombre', null, ['class'=>'validate','id'=>'nombre']); !!}
    {!!Form::label('nombre', 'Ingresa un nombre')!!}
    </div>
    
    
    <div class="input-field">
    {!!Form::text('direccion', null, ['class'=>'validate','id'=>'direccion']); !!}
    {!!Form::label('direccion', 'Ingresa una direccion')!!}
    </div>

    <div class="input-field">
    {!!Form::text('telefono', null, ['class'=>'validate','id'=>'telefono']); !!}
    {!!Form::label('telefono', 'Ingresa telefono')!!}
    </div>
   

    {!!Form::button('Aceptar', ['type'=>'submit','class'=>'"waves-effect waves-light red accent-4 btn'])!!}
    {!!Form::close()!!}
@endsection


