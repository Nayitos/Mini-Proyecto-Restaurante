@extends('/layout')
@section('tres')

   <input id="buscar" type="text">
<h4><font color="indigo" face=arial>Datos del libro</h4></font>    <table>
<thead>
  
      <th>  Id</th>
      <th>  isbn</th>
      <th>  Título</th>
      <th>  Autor Primario</th>
      <th>  Autor Secundario</th>
      <th>  Editorial</th>

</thead>
      <tbody>
      </tbody> 
    </table>
@endsection

@section('footer')
 <script type="text/javascript">
  var search = document.getElementById('buscar');
console.log(search.id);
    $(document).ready(function(){
      //lo que se imprime en consola
      console.log("Cargó");
      function busqueda(Query = ""){
      console.log('Nos vamos al controlador'); 
      console.log(Query);      
        $.ajax({
          url: "{{route('prueba4.ajax')}}",
          method: 'GET',
          data:{Query:Query},
          dataType:'json',
          success: function(data)
          {
            console.log(data);
           $('tbody').html(data.valor);
           //tbody toma le elemnto tbody y la signamos un valor u objeto
           //data es la variable y . valor es el nombre del contenedor de los datos
           //error 500 means problema en la sintaxis del controller
           console.log("Entro al success");
          }
        })
      }
      $(document).on('keyup','#buscar',function(){
        //cuando yo escriba en el inpút que tiene el id busqueda se active la función busqueda
      var x = $(this).val();
      busqueda(x);

      });
    });
  </script>

@endsection