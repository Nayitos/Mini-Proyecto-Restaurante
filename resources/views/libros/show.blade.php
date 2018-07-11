@extends('layout')
@section('tres')

<h4> La Numero de ISBN:       {{$libro->isbn}}</h4>
<h4> Titulo del libro {{$libro->titulo}}</h4>
<h4> Autor Primario   {{$libro->idAutorPrimario}}</h4>
<h4> Autor Primario {{$libro->idAutorSecundario}}</h4>
<h4> Id editorial   {{$libro->idEditorial}}</h4>
<h4> Cantidad   {{$libro->cantidad}}</h4>
@endsection
