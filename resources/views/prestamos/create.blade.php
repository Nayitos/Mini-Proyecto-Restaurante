@extends('layout')
@section('tres')

    <h3>Agregar nuevo prestamo</h3>
  


    {!!Form::open(['url' => '/prestamos', 'method' => 'post']) !!}
    <div class="input-field">
    {!! Form::select('idLibro',$libros);!!}
    {!!Form::label('idLibro', 'Ingresa un Libro')!!}
    </div>
    <div class="input-field">
    {!! Form::select('idAlumno',$alumnos);!!}
    {!!Form::label('idAlumno', 'Ingresa un ID del Alumno')!!}
    </div>
    <div class="input-field">
    {!! Form::select('idUser',$users);!!}
    {!!Form::label('idUser', 'Ingresa un ID de usuario')!!}
    </div>

    <div class="input-field">
	<h6>Fecha Prestamo</h6>
	<input type="datetime-local" id="fechaPrestamo" name="fechaPrestamo">
    </div>

    <div class="input-field">
	<h6>Fecha Entrega</h6>
	<input type="datetime-local" id="fechaEntrega" name="fechaEntrega">
    </div>
    
    
    {!!Form::button('Aceptar', ['type'=>'submit','class'=>'waves-effect waves-light  indigo lighten-1 btn'] )!!}
    <a class="waves-effect waves-light  indigo lighten-1 btn" href="/prestamos"><i class="material-icons center">arrow_back</i></a>
    {!!Form::close()!!}
@endsection
