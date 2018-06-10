@extends('layout')
@section('tres')

    <h3>Create a new product </h3>
  

    {!!Form::open(['url' => '/products', 'method' => 'post']) !!}
    
    <div class="input-field">
    {!!Form::text('name', null, ['class'=>'validate','id'=>'name']); !!}
    {!!Form::label('name', 'Ingresa un nombre')!!}
    </div>
    
    
    <div class="input-field">
    {!!Form::text('description', null, ['class'=>'validate','id'=>'description']); !!}
    {!!Form::label('description', 'Ingresa una descripcion')!!}
    </div>

    <div>
    {!!Form::label('Category')!!}
    </div>
    
    <div class="input-field">
    {!!Form::select('category_id',$categories); !!}
    </div>

    <div class="input-field">
    {!!Form::text('price', null, ['price'=>'validate','id'=>'price','step'=>'any']); !!}
    {!!Form::label('price', 'Ingrese precio')!!}
    </div>
        

    {!!Form::button('Aceptar', ['type'=>'submit','class'=>'"waves-effect waves-light red accent-4 btn'])!!}
    {!!Form::close()!!}
@endsection


