<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de Ventas</title>
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
          <a class="indigo btn" href="/ventas/create"><i class="material-icons right">create</i>New</a>
        <br>    
        <table>
            <tr>
                <th>ID</th>
                <th>Fecha de pedido</th>
                <th>Numero de pedido</th>
            </tr>
        @foreach($ventas as $venta)
            <tr>
                <td>{{ $venta->id}}</td>
                <td>{{ $venta->created_at}}</td>
                <td>{{ $venta->cddesc}}</td>

                <td><a class="waves-effect waves-light  indigo lighten-1 btn" href="{!! '/ventas/'.$venta->id.'/edit'!!}"><i class="material-icons right">edit</i>Edit</a>
                <div id=formDelete>
                {!!Form::open(['url' => '/ventas/'.$venta->id, 'method' => 'delete', 'style'=> 'display: inline-block;','id'=>'FormDelete()','onsubmit'=>'return ConfirmDelete()']) !!}
                {!!Form::button('<i class="material-icons right">delete</i>Delete', ['type'=>'submit', 'class'=>'"waves-effect waves-light red accent-4 btn']) !!}
                {!!Form::close()!!}
                </div>
                
                </td>
            </tr>
        @endforeach
        </table>
        @endsection
</body>
</html>
