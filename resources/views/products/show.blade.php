

        @extends('layout')
        @section('tres')
        
        <h4> Codigo  del producto es: {{$product->sku}}</h4>
        <h4> La descripcion producto es: {{$product->description}}</h4>
        <h4> Precio del producto es: {{$product->price}}</h4>
        <h4> Cantidad del producto : {{$product->quantity}}</h4>
       

        {!!Form::open(['url' => 'putdata','method' => 'put']) !!}
        <div class="input-field">
        {!!Form::label('quantity', 'Ingresa una cantidad para comprar')!!}
        {!!Form::text('quantity', null, ['class'=>'validate','id'=>'quantity']); !!}
       
        </div>
        
        <li>
        <input type="hidden" name="token1"  value= "disminuir">
        
        <input type="hidden" name="idx"  value= "{{$product->id}}">
        {!!Form::button('Comprar',['type'=>'submit','class'=>'btn btn-default'])!!}
        {!!Form::close()!!}
        </li>    


      
        @endsection