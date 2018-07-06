@extends('/layout')
@section('tres')

<script type="text/javascript">
    <script>
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
<a class="waves-effect waves-light  indigo lighten-1 btn" href="/alumnos/create"><i class="material-icons right">create</i>Crear</a><br>
<table>
    <tr>
    <th >ID</th>
    <th >No. de Control</th>
    <th >Nombre</th>
    <th >Apellido Paterno</th>
    <th >Apellido Materno</th>
    <th >Direccion</th>
    <th >Telefono</th>
    </tr>
    @foreach($alumnos as $alumno)
    <tr>
    <td> <a  href="{!! '/alumnos/'.$alumno->id!!}">{{$alumno ->id}}</a></td>
    <td >{{$alumno->noControl}}</td>
    <td >{{$alumno->nombre}}</td>
    <td >{{$alumno->apellidoPaterno}}</td>
    <td >{{$alumno->apellidoMaterno}}</td>
    <td >{{$alumno->direccion}}</td>
    <td >{{$alumno->telefono}}</td>
    <td><a class="waves-effect waves-light  indigo lighten-1 btn" href="{!! '/alumnos/'.$alumno->id.'/edit'!!}"><i class="material-icons right">edit</i>Editar</a>
    <div id=formDelete>
    {!!Form::open(['url' => '/alumnos/'.$alumno->id, 'method' => 'delete', 'style'=> 'display: inline-block;','onSubmit'=>'return confirmDelete()']) !!}
    {!!Form::button('<i class="material-icons right">delete</i>Eliminar', ['type'=>'submit', 'class'=>'"waves-effect waves-light red accent-4 btn']) !!}
    {!!Form::close()!!}
    </div>
    </td>
    </td>
    
    </tr>
    @endforeach
</table>
{{$alumnos ->links()}}
@endsection