@extends('layout')
@section('tres')

    <h3>Createa dasd </h3>
  

    {!!Form::open(['url' => '/categories', 'method' => 'post']) !!}
    

    
    <div class="input-field">
    {!!Form::text('description', null, ['class'=>'validate','id'=>'description']); !!}
    {!!Form::label('description', 'Ingresa una descripcion')!!}
    </div>

   
    {!!Form::button('Aceptar', ['type'=>'submit','class'=>'"waves-effect waves-light red accent-4 btn'])!!}
    {!!Form::close()!!}
@endsection


