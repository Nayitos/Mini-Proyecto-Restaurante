@extends('layout')
@section('tres')

<h4> Fecha de prestamo {{$prestamo->fechaPrestamo}}</h4>
<h4> Fecha de entrega {{$prestamo->fechaEntrega}}</h4>
<h4> Id Libro  {{$prestamo->idLibro}}</h4>
<h4> Id Usuario  {{$prestamo->idUser}}</h4>

@endsection
