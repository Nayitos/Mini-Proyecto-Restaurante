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
            var x=confirm('Estas seguro ? ');
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
        <a class="indigo btn" href="/editoriales/create"><i class="material-icons right">create</i>New</a>
        <br>    
        <table>
            <tr>
                <th>ID Editorial</th>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>Telefono</th>
            </tr>
        @foreach($editoriales as $editorial)
            <tr>
                <td> <a  href="{!! '/editoriales/'.$editorial->id!!}">{{$editorial ->id}}</a></td>
                <td>{{ $editorial->nombre}}</td>
                <td>{{ $editorial->direccion}}</td>
                <td>{{ $editorial->telefono}}</td>

                <td><a class="waves-effect waves-light  indigo lighten-1 btn" href="{!! '/editoriales/'.$editorial->id.'/edit'!!}"><i class="material-icons right">edit</i>Edit</a>
                <div id=formDelete>
                {!!Form::open(['url' => '/editoriales/'.$editorial->id, 'method' => 'delete', 'style'=> 'display: inline-block;','id'=>'FormDelete()','onsubmit'=>'return ConfirmDelete()']) !!}
                {!!Form::button('<i class="material-icons right">delete</i>Delete', ['type'=>'submit', 'class'=>'"waves-effect waves-light red accent-4 btn']) !!}
                {!!Form::close()!!}
                </div>
                
                </td>
            </tr>
        @endforeach
        </table>
        {{$editoriales ->links()}}
        @endsection
</body>
</html>
