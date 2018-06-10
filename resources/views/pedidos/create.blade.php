@extends('layout')
@section('tres')

    <h3>ingresa un  pedido </h3>
  
    {!!Form::open(['url' => '/Pedidos', 'method' => 'post']) !!}
    <div class="input-field">
    {!!Form::text('nombrepedido', null, ['class'=>'validate','id'=>'nombrepedido']); !!}
    {!!Form::label('nombrepedido', 'Ingresa nombre del pedido ')!!}
    </div>
    <div>
    {!!Form::text('precio', null, ['class'=>'validate','id'=>'precio']); !!}
    {!!Form::label('precio', 'Ingresa el precio de la orden ')!!}
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
