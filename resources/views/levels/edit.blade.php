@extends('/layout')

@section('tres')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar</title>
</head>
<body>
    <h1>Editar</h1>

    {!! Form::model($level, ['route' => ['levels.update', $level->id], 'method' => 'put']) !!}
    {!! Form::text('description', null); !!}
    {!!Form::button('Actualizar', ['type'=>'submit','class'=>'"waves-effect waves-light red accent-4 btn'])!!}
    {!!Form::close()!!}

</body>
</html>
@endsection