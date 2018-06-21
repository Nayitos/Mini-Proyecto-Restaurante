@extends('layout')
@section('tres')

<input id="busqueda" type="text" name="">
<h3 id="respuesta">Placeholder</h3>

@endsection


@section('footer')
  <script type="text/javascript">
    $(document).ready(function(){
      function busqueda(Query =""){
        $.ajax({
          url: "{{route('prueba.ajax')}} ",
          method: 'GET',
          data: {Query:Query},
          dataType:'json',
          success: function(data)
          {
            console.log("ejem");
            console.log(data);
          }
        })
      }
      $(document).on('keyup','#busqueda',function(){
        var x = this.val();
        busqueda(x);
      });
    });
  </script>
@endsection