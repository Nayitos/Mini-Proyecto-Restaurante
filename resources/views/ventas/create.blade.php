@extends('layout')
@section('tres')

    <h3>Modificar fecha</h3>
  

    {!!Form::open(['url' => '/ventas', 'method' => 'post']) !!}
    
    
    <div class="input-field">
    {!!Form::text('created_at', null, ['class'=>'validate','id'=>'created_at']); !!}
    {!!Form::label('created_at', 'Ingrese nueva fecha')!!}
    </div>

    <div>
    {!!Form::label('Pedido')!!}
    </div>
    
    <div class="input-field">
    {!!Form::select('idPedido',$pedidos); !!}
    </div>
        

    {!!Form::button('Aceptar', ['type'=>'submit','class'=>'"waves-effect waves-light red accent-4 btn'])!!}
    {!!Form::close()!!}
@endsection


