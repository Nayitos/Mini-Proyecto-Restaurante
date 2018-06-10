@extends('layout')
@section('tres')

    <h3>Crear nuevo pedido </h3>
  

    {!!Form::open(['url' => '/pedidos', 'method' => 'post']) !!}
    
    
    <div class="input-field">
    {!!Form::text('nombrepedido', null, ['class'=>'validate','id'=>'nombrepedido']); !!}
    {!!Form::label('nombrepedido', 'Ingresa descripcion del pedido')!!}
    </div>


    <div class="input-field">
    {!!Form::text('precio', null, ['precio'=>'validate','id'=>'precio','step'=>'any']); !!}
    {!!Form::label('precio', 'Ingrese precio')!!}
    </div>

    <div>
    {!!Form::label('Cliente')!!}
    </div>
    
    <div class="input-field">
    {!!Form::select('idCliente',$clientes); !!}
    </div>

        

    {!!Form::button('Aceptar', ['type'=>'submit','class'=>'"waves-effect waves-light red accent-4 btn'])!!}
    {!!Form::close()!!}
@endsection


