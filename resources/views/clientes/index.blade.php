<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

        @extends('layout')
        @section('tres')
        <a class="indigo btn" href="/clientes/create"><i class="material-icons right">create</i>New</a>
        <br>
        <table>
            <tr>
                
                <th>Id Cliente</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        @foreach($clientes as $cliente)
            <tr>
                <td> <a  href="{!! '/clientes/'.$cliente->id!!}">{{$cliente ->id}}</a></td>
                        
                <td>{{ $cliente->nombre}}</td>
                <td><a class="waves-effect waves-light  indigo lighten-1 btn" href="{!! '/clientes/'.$cliente->id.'/edit'!!}"><i class="material-icons right">edit</i>Edit</a>
                <div idCliente=formDelete>
                {!!Form::open(['url' => '/clientes/'.$cliente->id, 'method' => 'delete', 'style'=> 'display: inline-block;']) !!}
                {!!Form::button('<i class="material-icons right">delete</i>Delete', ['type'=>'submit', 'class'=>'"waves-effect waves-light red accent-4 btn']) !!}
                {!!Form::close()!!}
                </div>
                </td>
            </tr>
        @endforeach
        </table>
        {{$clientes->links()}}
        @endsection
</body>
</html>
