<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Fecha</title>
</head>
<body>
        @extends('layout')
        @section('tres')

    <h3>Edit</h3>

    {!!Form::model($venta, ['route' => ['ventas.update', $venta->id], 'method'=>'put']) !!}
    {!!Form::text('created_at', null); !!}
  
    {!!Form::button('Actualizar', ['type'=>'submit','class'=>'"waves-effect waves-light red accent-4 btn'])!!}
    {!!Form::close()!!}

    @endsection
</body>
</html>