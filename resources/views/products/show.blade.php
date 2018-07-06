

        @extends('layout')
        @section('tres')
        <h1> nEl nombre del producto es: {{$product->id}}</h1>
        <h1> La descripcion producto es: {{$product->description}}</h1>
        
        @endsection
