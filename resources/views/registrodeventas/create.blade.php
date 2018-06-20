@extends('layout')
@section('tres')

    <h3>Crear nuevo registro de venta </h3>
  

    {!!Form::open(['url' => '/registrodeventas', 'method' => 'post']) !!}
    

   <!-- /* $registro_de_ventas = DB::table ('registro_de_ventas')
        ->join('ventas','registro_de_ventas.idVentas','=','ventas.id')
        ->join('pedidos','pedidos.id','=','ventas.idPedido')
        ->join('clientes','clientes.id','=','pedidos.idCliente')
        ->select('ventas.id','pedidos.nombrepedido')->get()->pluck('id','nombrepedido');
       $producto = Product::pluck('name','id'); */
-->
    <div>
    {!!Form::label('Registro de venta')!!}
    </div>
    
    <div class="input-field">
    {!!Form::select('idRegistroDeVentas',$registrodeventas); !!}
    </div>

  

    <div>
    {!!Form::label('Producto')!!}
    </div>
    
    <div class="input-field">
    {!!Form::select('idProducto',$producto); !!}
    </div>



    {!!Form::button('Aceptar', ['type'=>'submit','class'=>'"waves-effect waves-light red accent-4 btn'])!!}
    {!!Form::close()!!}
@endsection


