@extends('/layout')
@section('tres')

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
    </tr>
    @foreach($libros as $libro)
    <tr>
    <td >{{$libro->id}}</td>
    <td >{{$libro->isbn}}</td>
    <td >{{$libro->titulo}}</td>
    <td >{{$libro->idAutorPrimario}}</td>
    <td >{{$libro->idAutorSecundario}}</td>
    <td >{{$libro->idEditorial}}</td>
    <td><a class="waves-effect waves-light  indigo lighten-1 btn" href="{!! '/libros/'.$libro->id.'/edit'!!}"><i class="material-icons right">edit</i>Editar</a>
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
@endsection