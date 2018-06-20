



        @extends('layout')
        @section('tres')
        <h4>Nombre del producto: {{$product->name}}</h4>
        <h4>Description del producto: {{$product->description}}</h4>
        <h4>Nombre del producto: {{$product->category_id}}</h4>
        <h4>Precio del producto: {{$product->price}}</h4>
        @endsection

