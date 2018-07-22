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

    <h3>Edit</h3>

    {!!Form::model($product, ['route' => ['products.update', $product->id], 'method'=>'put']) !!}
    {!!Form::text('sku', null); !!}
    {!!Form::text('description', null); !!}
    {!!Form::text('price', null); !!}
    {!!Form::text('quantity', null); !!}
    <div class="input-field">
    {!!Form::select('category_id',$categories); !!}
    </div>
    <input type="hidden" name="token1"  value= "niuno">

    {!!Form::button('Actualizar', ['type'=>'submit','class'=>'"waves-effect waves-light red accent-4 btn'])!!}
    {!!Form::close()!!}

   
    @endsection
</body>
</html>