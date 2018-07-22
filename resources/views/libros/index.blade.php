@extends('/layout')
@section('tres')
@if(Auth::user()->level_id==2)

    <a class="waves-effect waves-light  indigo lighten-1 btn" href="/libros/create"><i class="material-icons right">create</i>Crear uno nuevo</a><br>
    <table>
        <tr>
        <th >ID</th>
        <th >ISBN</th>
        <th >Titulo</th>
        <th >ID Autor Primario</th>
        <th >ID Autor Secundario</th>
        <th >ID Editorial</th>
        <th >Cantidad </th>    
        @foreach($libros as $libro)
        <tr>
        <td> <a  href="{!! '/libros/'.$libro->id!!}">{{$libro ->id}}</a></td>
        <td >{{$libro->isbn}}</td>
        <td >{{$libro->titulo}}</td>
        <td >{{$libro->idAutorPrimario}}</td>
        <td >{{$libro->idAutorSecundario}}</td>
        <td >{{$libro->idEditorial}}</td>
        <td >{{$libro->cantidad}}</td>
    
        
        </td>
        </td>
        
        </tr>
       
        @endforeach
        
    </table>
    {{$libros ->links()}}
    


@else
<script type="text/javascript">
    function confirmDelete()
    {
        var x = confirm('Estas seguro?')
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
<a class="waves-effect waves-light  indigo lighten-1 btn" href="/libros/create"><i class="material-icons right">create</i>Crear uno nuevo</a><br>
<table>
<tr>
<th >ID</th>
<th >ISBN</th>
<th >Titulo</th>
<th >ID Autor Primario</th>
<th >ID Autor Secundario</th>
<th >ID Editorial</th>
<th >Cantidad </th>    
@foreach($libros as $libro)
<tr>
<td> <a  href="{!! '/libros/'.$libro->id!!}">{{$libro ->id}}</a></td>
<td >{{$libro->isbn}}</td>
<td >{{$libro->titulo}}</td>
<td >{{$libro->idAutorPrimario}}</td>
<td >{{$libro->idAutorSecundario}}</td>
<td >{{$libro->idEditorial}}</td>
<td >{{$libro->cantidad}}</td>

<td><a class="waves-effect waves-light  indigo lighten-1 btn " href="{!! '/libros/'.$libro->id.'/edit'!!}"><i class="material-icons right">edit</i>Editar</a>
<div id=formDelete>
{!!Form::open(['url' => '/libros/'.$libro->id, 'method' => 'delete', 'style'=> 'display: inline-block;','onSubmit'=>'return confirmDelete()']) !!}
{!!Form::button('<i class="material-icons right">delete</i>Eliminar', ['type'=>'submit', 'class'=>'"waves-effect waves red btn']) !!}
{!!Form::close()!!}

</div>
</td>
</td>

</tr>

@endforeach

</table>
{{$libros ->links()}}
@endif
@endsection
