<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Editorial</title>
</head>
<body>
        @extends('layout')
        @section('tres')

    <h3>Editar Editorial</h3>

    {!!Form::model($editorial, ['route' => ['editoriales.update', $editorial->id], 'method'=>'put']) !!}

    {!! Form::label('nombre', 'Nombre');!!}
    {!!Form::text('nombre', null); !!}

    {!! Form::label('direccion', 'Direccion');!!}
    {!!Form::text('direccion', null); !!}

    {!! Form::label('telefono', 'Telefono');!!}
    {!!Form::text('telefono', null); !!}

    {!!Form::button('Actualizar', ['type'=>'submit','class'=>'"waves-effect waves-light amber darken-4 btn'])!!}
    <a class="waves-effect amber darken-4 btn" href="/editoriales"><i class="material-icons center">arrow_back</i></a>
    {!!Form::close()!!}
    
    @endsection
    
</body>
</html>