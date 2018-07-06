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
<a class="waves-effect waves-light  indigo lighten-1 btn" href="/prestamos/create"><i class="material-icons right">create</i>Crear uno nuevo</a><br>
<table>
    <tr>
    <th >ID</th>
    <th >ID Libro</th>
    <th >ID Alumno</th>
    <th >ID Usuario</th>
    <th >Fecha de prestamo</th>
    <th >Fecha de entrega</th>
    </tr>
    @foreach($prestamos as $prestamo)
    <tr>
    <td> <a  href="{!!'/prestamos/'.$prestamo->id!!}">{{$prestamo->id}}</a></td>
    <td >{{$prestamo->idLibro}}</td>
    <td >{{$prestamo->idAlumno}}</td>
    <td >{{$prestamo->idUser}}</td>
    <td >{{$prestamo->fechaPrestamo}}</td>
    <td >{{$prestamo->fechaEntrega}}</td>
    <td><a class="waves-effect waves-light  indigo lighten-1 btn" href="{!! '/prestamos/'.$prestamo->id.'/edit'!!}"><i class="material-icons right">edit</i>Editar</a>
    <div id=formDelete>
    {!!Form::open(['url' => '/prestamos/'.$prestamo->id, 'method' => 'delete', 'style'=> 'display: inline-block;','onSubmit'=>'return confirmDelete()']) !!}
    {!!Form::button('<i class="material-icons right">delete</i>Eliminar', ['type'=>'submit', 'class'=>'"waves-effect waves-light  red btn']) !!}
    {!!Form::close()!!}
    </div>
    </td>
    </td>
    
    </tr>
    @endforeach
</table>
{{$prestamos ->links()}}
@endsection
