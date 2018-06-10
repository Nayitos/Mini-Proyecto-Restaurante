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

    <h3>Edit</h3>

    {!!Form::model($category, ['route' => ['categories.update', $category->id], 'method'=>'put']) !!}
    {!!Form::text('description', null); !!}
    {!!Form::button('Actualizar', ['type'=>'submit','class'=>'"waves-effect waves-light red accent-4 btn'])!!}
    {!!Form::close()!!}

    @endsection
</body>
</html>