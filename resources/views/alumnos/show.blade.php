@extends('layout')
@section('tres')

<h4> La Numero de control:       {{$alumno->noControl}}</h4>
<h4> El nombre completo          {{$alumno->nombre}} {{$alumno->apellidoPaterno}} {{$alumno->apellidoMaterno}}</h4>
<h4> El nombre direccion         {{$alumno->direccion}}</h4>
<h4> El nombre telefeno          {{$alumno->telefono}}</h4>

@endsection
