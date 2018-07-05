@extends('/layout')
@section('tres')
<!DOCTYPE html>

    <h1>Create</h1>

    {!! Form::open(['url' => '/levels','method' => 'post']) !!}
    {!! Form::text('description', null, ['placeholder'=>'Description','class'=>'validate']); !!}
    {!!Form::button('Aceptar', ['type'=>'submit','class'=>'"waves-effect waves-light red accent-4 btn'])!!}
    {!!Form::close()!!}
@endsection