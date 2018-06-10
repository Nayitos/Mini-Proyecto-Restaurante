
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Bus Pass - Pasa sin Problemas</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class=" indigo lighten-3  indigo darken-2" role="navigation">
      <div class="nav-wrapper">
          <a href="home" class="brand-logo"  large: 6rem><i class="material-icons">format_list_numbered</i>MateChidas</a>
          <ul class="right hide-on-med-and-down">
            <li><a href="home"><i class="material-icons">keyboard_backspace </i></a></li>
            Volver
          </ul>
        </div>
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Logo</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Navbar Link</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
    
      <br><br>

    </div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row"> 
      <div class="col s4">
     @yield('Primero')  
  
  </div>
  <div class="col s4"> 

      @yield('Segundo')  
  
  </div>
  <div class="col s4">
    
      @yield('Tercero')  
  
  </div>

  <div class="col s9">
    
    @yield('enmedio')  
      </div>
      
    </div>

  <div class="col s10">
    
    @yield('tres')  
      </div>
      
    </div>
    
    </div>  
    </div>
    <br><br>
  </div>  

  

  <footer class="page-footer indigo lighten-2">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Quieres hacer ejercicios chidos?</h5>
          <p class="grey-text text-lighten-4">Utiliza nuestras opciones para resolver tus problemas.</p>


        </div>
      
    
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">MateChidas</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="{!!asset('js/jquery-3.3.1.min.js')!!}"></script>
  <script src="{!!asset('js/materialize.js')!!}"></script>
  <script src="{!!asset('js/init.js')!!}"></script>
  <script> $(document).ready(function(){  $('select').formSelect(); });  </script>
  </body>
</html>
