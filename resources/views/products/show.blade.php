

        @extends('layout')
        @section('tres')
        
        <h4> Codigo  del producto es: {{$product->sku}}</h4>
        <h4> La descripcion producto es: {{$product->description}}</h4>
        <h4> Precio del producto es: {{$product->price}}</h4>
        <h4> Cantidad del producto : {{$product->quantity}}</h4>
       
        {{--Se vuelve a utilizar el metodo de PUT, en este casi sigue la dirección hacía el controlador--}}
       
        {!!Form::open(['url' => 'putdata','method' => 'put']) !!}
        <div class="input-field">
        {!!Form::label('quantity', 'Ingresa una cantidad para comprar')!!}
        {!!Form::text('quantity', null, ['class'=>'validate','id'=>'quantity']); !!}
        </div>
        
        {{--En esta parte se agrega el token para las condiciones dentro del update tomando token como la variable a comparar--}}
        {{--Mientras que IDX es el id del producto que le estamos aumentando--}}
        <li>
        <input type="hidden" name="token1"  value= "disminuir">
        <input type="hidden" name="idx"  value= "{{$product->id}}">
        {!!Form::button('Comprar',['type'=>'submit','class'=>'btn btn-default'])!!}
        {!!Form::close()!!}
        </li>    
      
        @endsection