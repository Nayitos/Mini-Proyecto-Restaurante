@extends('layouts/appx')

@section('primero')
   <input id="buscar" type="text">
    <h3 id="respuesta">Placeholder</h3>
    <table>
      <tbody>
      </tbody>
    </table>
@endsection

@section('footer')
 <script type="text/javascript">
  var search = document.getElementById('buscar');
console.log(search.id);
    $(document).ready(function(){
      console.log("Cargó");
      function busqueda(Query = ""){
      console.log('Nos vamos al controlador'); 
      console.log(Query);      
        $.ajax({
          url: "{{route('prueba.ajax')}}",
          method: 'GET',
          data:{Query:Query},
          dataType:'json',
          success: function(data)
          {
           $('tbody').html(data.valor);
           //tbody toma le elemnto tbody y la signamos un valor u objeto
           //data es la variable y . valor es el nombre del contenedor de los datos
           //error 500 means problema en la sintaxis del controller
           console.log("Entro al success");
          }
        })
      }
      $(document).on('keyup','#buscar',function(){
        //cuando yo escriba en el inút que tiene el id busqueda se active la función busqueda
      var x = $(this).val();
      busqueda(x);

      });
    });
  </script>

@endsection