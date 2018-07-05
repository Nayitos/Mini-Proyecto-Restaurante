<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar pedido</title>
</head>
<body>

        @extends('layout')
        @section('tres')
        <script>
        function ConfirmDelete()
        {
            var x=confirm('Estas seguro');
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
        <a class="indigo btn" href="/pedidos/create"><i class="material-icons right">create</i>New</a>
        <br>    
        <table>
            <tr>
                <th>Pedido numero</th>
                <th>Nombre del Pedido</th>
                <th>ID Cliente</th>
                <th>Precio</th>
            </tr>
        @foreach($pedidos as $pedido)
            <tr>
                <td> <a  href="{!! '/pedidos/'.$pedido->id!!}">{{$pedido ->id}}</a></td>
                <td>{{ $pedido->nombrepedido}}</td>
                <td>{{ $pedido->cddesc}}</td>
                <td>{{ $pedido->precio}}</td>
               

                <td><a class="waves-effect waves-light  indigo lighten-1 btn" href="{!! '/pedidos/'.$pedido->id.'/edit'!!}"><i class="material-icons right">edit</i>Edit</a>
                <div id=formDelete>
                {!!Form::open(['url' => '/pedidos/'.$pedido->id, 'method' => 'delete', 'style'=> 'display: inline-block;','id'=>'FormDelete()','onsubmit'=>'return ConfirmDelete()']) !!}
                {!!Form::button('<i class="material-icons right">delete</i>Delete', ['type'=>'submit', 'class'=>'"waves-effect waves-light red accent-4 btn']) !!}
                {!!Form::close()!!}
                </div>
                
                </td>
            </tr>
        @endforeach
        </table>
        {{$pedidos -> links()}}
        @endsection
</body>
</html>
