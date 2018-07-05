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

    <h3>Editar Autor</h3>

    {!!Form::model($autor, ['route' => ['autores.update', $autor->id], 'method'=>'put']) !!}

    {!! Form::label('nombre', 'Nombre');!!}
    {!!Form::text('nombre', null); !!}

    {!! Form::label('apellidoPaterno', 'apellidoPaterno');!!}
    {!!Form::text('apellidoPaterno', null); !!}

    {!! Form::label('apellidoMaterno', 'apellidoMaterno');!!}
    {!!Form::text('apellidoMaterno', null); !!}

    {!!Form::button('Actualizar', ['type'=>'submit','class'=>'"waves-effect waves-light  indigo lighten-1 btn'])!!}
    <a class="waves-effect waves-light  indigo lighten-1 btn" href="/editoriales"><i class="material-icons center">arrow_back</i></a>
    {!!Form::close()!!}
    
    @endsection
    
</body>
</html>