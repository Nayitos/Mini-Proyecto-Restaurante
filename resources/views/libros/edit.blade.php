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

    <h3>Editar</h3>

    {!!Form::model($libro, ['route' => ['libros.update', $libro->id], 'method'=>'put']) !!}

    {!! Form::label('isbn', 'Editar ISBN');!!}
    {!! Form::text('isbn',null);!!}

    {!! Form::label('titulo', 'Editar Titulo');!!}
    {!! Form::text('titulo',null);!!}

    {!! Form::select('idAutorPrimario', $autor, $libro->idAutorPrimario);!!}

    {!! Form::select('idAutorSecundario', $autor, $libro->idAutorSecundario);!!}

    {!! Form::select('idEditorial', $editorial, $libro->idEditorial);!!}
    
    {!! Form::label('cantidad', 'Editar ISBN');!!}
    {!! Form::text('cantidad',null);!!}
    
    {!!Form::button('Actualizar', ['type'=>'submit','class'=>'"waves-effect waves-light  indigo lighten-1 btn'])!!}
    <a class="waves-effect waves-light  indigo lighten-1 btn" href="/libros"><i class="material-icons center">arrow_back</i></a>
    {!!Form::close()!!}

    @endsection
</body>
</html>