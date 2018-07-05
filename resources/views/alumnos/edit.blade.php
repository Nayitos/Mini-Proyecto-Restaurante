<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Alumno</title>
</head>
<body>
        @extends('layout')
        @section('tres')

    <h3>Editar Alumno</h3>

    {!!Form::model($alumno, ['route' => ['alumnos.update', $alumno->id], 'method'=>'put']) !!}

    {!! Form::label('noControl', 'Numero de Control');!!}
    {!!Form::text('noControl', null); !!}

    {!! Form::label('nombre', 'Nombre');!!}
    {!!Form::text('nombre', null); !!}

    {!! Form::label('apellidoPaterno', 'Apellido Paterno');!!}
    {!!Form::text('apellidoPaterno', null); !!}

    {!! Form::label('apellidoMaterno', 'Apellido Materno');!!}
    {!!Form::text('apellidoMaterno', null); !!}

    {!! Form::label('direccion', 'Direccion');!!}
    {!!Form::text('direccion', null); !!}

    {!! Form::label('telefono', 'Telefono');!!}
    {!!Form::text('telefono', null); !!}

    {!!Form::button('Actualizar', ['type'=>'submit','class'=>'"waves-effect waves-light  indigo lighten-1 btn'])!!}
    <a class="waves-effect waves-light  indigo lighten-1 btn" href="/alumnos"><i class="material-icons center">arrow_back</i></a>
    {!!Form::close()!!}
    
    @endsection
    
</body>
</html>