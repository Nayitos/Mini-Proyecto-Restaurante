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
        <a class="indigo btn" href="/products/create"><i class="material-icons right">create</i>New</a>
        <br>    
        <table>
            <tr>
                <th>ID</th> 
                <th>SKU</th>
                <th>Description</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Category</th>
          
            </tr>
        @foreach($products as $product)
            <tr>
                <td> <a  href="{!! '/products/'.$product->id!!}">{{$product ->id}}</a></td>
                <td>{{ $product->sku}}</td>
                <td>{{ $product->description}}</td>
                <td>{{ $product->price}}</td>
                <td>{{ $product->quantity}}</td>
                <td>{{ $product->cddesc}}</td>
                
                <td><a class="waves-effect waves-light  indigo lighten-1 btn" href="{!! '/products/'.$product->id.'/edit'!!}"><i class="material-icons right">edit</i>Edit</a>

                {{--Ruta para mandar a una ventana de aumentar los productos       --}}  
                <td><a class="waves-effect waves-light  indigo lighten-1 btn" href="{!! '/products/'.$product->id.'/aumentar'!!}"><i class="material-icons right">add_circle</i>aumentar</a>   
                
                <div id=formDelete>
                {!!Form::open(['url' => '/products/'.$product->id, 'method' => 'delete', 'style'=> 'display: inline-block;','id'=>'FormDelete()','onsubmit'=>'return ConfirmDelete()']) !!}
                {!!Form::button('<i class="material-icons right">delete</i>Delete', ['type'=>'submit', 'class'=>'"waves-effect waves-light red accent-4 btn']) !!}
                {!!Form::close()!!}
                </div>
                
         
            

            </tr>
        @endforeach
        </table>
        {{$products ->links()}}
        @endsection
</body>
</html>
