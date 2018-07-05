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
        <a class="indigo btn" href="/categories/create"><i class="material-icons right">create</i>New</a>
        <br>
        <table>
            <tr>
                <th>ID</th>
                <th>Description</th>
                <th>Acciones</th>
            </tr>
        @foreach($categories as $category)
            <tr>
                <td>{{ $category->id}}</td>
                <td>{{ $category->description}}</td>
                <td><a class="waves-effect waves-light  indigo lighten-1 btn" href="{!! '/categories/'.$category->id.'/edit'!!}"><i class="material-icons right">edit</i>Edit</a>
                <div id=formDelete>
                {!!Form::open(['url' => '/categories/'.$category->id, 'method' => 'delete', 'style'=> 'display: inline-block;']) !!}
                {!!Form::button('<i class="material-icons right">delete</i>Delete', ['type'=>'submit', 'class'=>'"waves-effect waves-light red accent-4 btn']) !!}
                {!!Form::close()!!}
                </div>
                </td>
            </tr>
        @endforeach
        </table>
        {{$categories->links()}}
        @endsection
</body>
</html>
