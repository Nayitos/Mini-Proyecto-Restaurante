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

    {!!Form::model($prestamo, ['route' => ['prestamos.update', $prestamo->id], 'method'=>'put']) !!}

    {!! Form::select('idLibro', $libro, $prestamo->idLibro);!!}

    {!! Form::select('idAlumno', $alumno, $prestamo->idAlumno);!!}

    {!! Form::select('idUser', $user, $prestamo->idUser);!!}

    <div class="input-field">
	<h6>Fecha Prestamo</h6>
	<input type="datetime-local" id="fechaPrestamo" name="fechaPrestamo">
    </div>

    <div class="input-field">
	<h6>Fecha Entrega</h6>
	<input type="datetime-local" id="fechaEntrega" name="fechaEntrega">
    </div>

    
 
    {!!Form::button('Actualizar', ['type'=>'submit','class'=>'"waves-effect waves-light  indigo lighten-1 btn'])!!}
    <a class="waves-effect waves-light  indigo lighten-1 btn" href="/prestamos"><i class="material-icons center">arrow_back</i></a>
    {!!Form::close()!!}

    @endsection
</body>
</html>