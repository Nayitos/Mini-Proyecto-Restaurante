<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
        @extends('layout')
        @section('tres')

    <h3>Aumentar producto</h3>
    {{-- La ruta más el metodo que es lo mas importante, en este caso solmante se agrega put el cual no existe en si--}}
    {!!Form::model($product, ['route' => ['products.update', $product->id], 'method'=>'put']) !!}

    {{-- Se agrego un "token" para agregar la variable y poder usar las condiciones en el controlador--}}
    <input type="hidden" name="token1"  value= "aumentar">

    {{-- IDX es el ID de nuestro producto el cual se declaro igualmente en el controlador--}}
    <input type="hidden" name="idx"  value= "{{$product->id}}">
    
    {!!Form::text('quantity', null); !!}
   
    <div class="input-field">

    {!!Form::button('Aumentar', ['type'=>'submit','class'=>'"waves-effect waves-light red accent-4 btn'])!!}
    {!!Form::close()!!}

   
    @endsection
</body>
</html>