@extends('layout')
@section('tres')

    <h3>Create a new product </h3>
  

    {!!Form::open(['url' => '/products', 'method' => 'post']) !!}
    
    <div class="input-field">
    {!!Form::text('sku', null, ['class'=>'validate','id'=>'sku']); !!}
    {!!Form::label('sku', 'Ingresa un codigo')!!}
    </div>
    
    <div class="input-field">
    {!!Form::text('description', null, ['class'=>'validate','id'=>'description']); !!}
    {!!Form::label('description', 'Ingresa una descripcion')!!}
    </div>

    <div class="input-field">
    {!!Form::text('price', null, ['class'=>'validate','id'=>'price']); !!}
    {!!Form::label('price', 'Ingresa una precio')!!}
    </div>

    <div class="input-field">
    {!!Form::text('quantity', null, ['class'=>'validate','id'=>'quantity']); !!}
    {!!Form::label('quantity', 'Ingresa una cantidad')!!}
    </div>


    <div>
    {!!Form::label('Category')!!}
    </div>
    
    <div class="input-field">
    {!!Form::select('category_id',$categories); !!}
    </div>


    {!!Form::button('Aceptar', ['type'=>'submit','class'=>'"waves-effect waves-light red accent-4 btn'])!!}
    {!!Form::close()!!}
@endsection


