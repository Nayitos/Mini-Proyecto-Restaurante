@extends('/layout')
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
<a class="waves-effect waves-light btn black" href="/levels/create"><i class="material-icons right">create</i>Create a New One</a><br>
<table>
    <tr>
    <th >ID</th>
    <th >Description</th>
    <th >Acciones</th>
    </tr>
    @foreach($levels as $level)
    <tr>
    <td >{{$level->id}}</td>
    <td >{{$level->description}}</td>
   

    <td>  <a class="indigo btn" href="{!! '/levels/'.$level->id.'/edit'!!}"><i class="material-icons right">create</i>Editar</a>
    <div id=formDelete>
    {!!Form::open(['url' => '/levels/'.$level->id, 'method' => 'delete', 'style'=> 'display: inline-block;','id'=>'FormDelete()','onsubmit'=>'return ConfirmDelete()']) !!}
    {!!Form::button('<i class="material-icons right">delete</i>Delete', ['type'=>'submit', 'class'=>'"waves-effect waves-light red accent-4 btn']) !!}
    {!!Form::close()!!}
</div>
                
</td>
</tr>
    @endforeach
</table>

@endsection