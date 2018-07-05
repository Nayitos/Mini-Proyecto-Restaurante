@extends('layout')
@section('tres')

    <h3>Agregar nuevo libro</h3>
  


    {!!Form::open(['url' => '/libros', 'method' => 'post']) !!}
    <div class="input-field">
    {!!Form::text('isbn', null, ['class'=>'validate','id'=>'isbn']); !!}
    {!!Form::label('isbn', 'ISBN')!!}
    </div>
    <div class="input-field">
    {!!Form::text('titulo', null, ['class'=>'validate','id'=>'titulo']); !!}
    {!!Form::label('titulo', 'Ingresa un titulo')!!}
    </div>
    <div class="input-field">
    {!! Form::select('idAutorPrimario',$autores);!!}
    {!!Form::label('idAutorPrimario', 'Ingresa un ID primario')!!}
    </div>
    <div class="input-field">
    {!! Form::select('idAutorSecundario',$autores);!!}
    {!!Form::label('idAutorSecundario', 'Ingresa un ID secundario')!!}
    </div>
    <div class="input-field">
    {!! Form::select('idEditorial',$editoriales);!!}
    {!!Form::label('idEditorial', 'Ingresa un editorial')!!}
    </div>
    
    {!!Form::button('Aceptar', ['type'=>'submit','class'=>'waves-effect waves-light red btn'] )!!}
    {!!Form::close()!!}
@endsection
