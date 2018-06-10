@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header  bg-dark text-white">Bienvenido</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                         
                        </div>
                    @endif
                    Tu eres!:   {{ Auth::user()->name}} , prueba realizar algún ejercicio
                    chido en la parte superior izquierda, seleccionando el de tu necesidad, dependiendo tu nivel de usuario 
                    se te mostrarán los ejercicios que se pueden realizar.
                   

                </div>
            </div>
        </div>
    </div>
</div>


@endsection
