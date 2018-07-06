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
        <script>
        function ConfirmDelete()
        {
            var x=confirm('estas seguro');
            if(x)
            {
                return true;

            }
            else
            {
                return false;

            }

        }
        </script>
        <a class="indigo btn" href="/autores/create"><i class="material-icons right">create</i>New</a>
        <br>    
        <table>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
        
            </tr>
        @foreach($autores as $autor)
            <tr>
                <td> <a  href="{!! '/autores/'.$autor->id!!}">{{$autor ->id}}</a></td>
                <td>{{ $autor->nombre}}</td>
                <td>{{ $autor->apellidoPaterno}}</td>
                <td>{{ $autor->apellidoMaterno}}</td>
                <td><a class="waves-effect waves-light  indigo lighten-1 btn" href="{!! '/autores/'.$autor->id.'/edit'!!}"><i class="material-icons right">edit</i>Edit</a>
                <div id=formDelete>
                {!!Form::open(['url' => '/autores/'.$autor->id, 'method' => 'delete', 'style'=> 'display: inline-block;','id'=>'FormDelete()','onsubmit'=>'return ConfirmDelete()']) !!}
                {!!Form::button('<i class="material-icons right">delete</i>Delete', ['type'=>'submit', 'class'=>'"waves-effect waves-light red accent-4 btn']) !!}
                {!!Form::close()!!}
            </div>
        </td>
        </td>
        
        </tr>
        @endforeach
        </table>
        {{$autores ->links()}}
        @endsection
     