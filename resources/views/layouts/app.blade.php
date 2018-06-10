<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md  navbar-laravel color navbar-dark bg-dark">
            <div class="container text-white ">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Mate Perrones
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                     <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                        @if (Auth::user()->level==2);
                         
                <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> 
                 Ejercicios 1 - 4 </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        
                        <a class="dropdown-item" href="/formpitagoras"
                          onclick="event.preventDefault();
                          Route::get('/formpitagoras').submit();">
                          Pitgaroas </a>
                          
                          <a class="dropdown-item" href="/formbinomio"
                          onclick="event.preventDefault();
                          Route::get('/formbinomio').submit();">
                          Binomio al cudrado </a>

                          <a class="dropdown-item" href="/formformulageneral"
                          onclick="event.preventDefault();
                          Route::get('/formformulageneral').submit();">
                          Formula General</a>

                          <a class="dropdown-item" href="/formbinomioalcubo"
                          onclick="event.preventDefault();
                          Route::get('/formbinomioalcubo').submit();">
                          Binomio al cubo </a>

                        @endif
                        @if (Auth::user()->level==3);

              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> 
                 Ejercicios 6 - 10 </a>
                 
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/formvolumenfiguras"
                          onclick="event.preventDefault();
                          Route::get('/formvolumenfiguras').submit();">
                          Volumenes de figuras</a>
                          
                          <a class="dropdown-item" href="/formderivadasimple"
                          onclick="event.preventDefault();
                          Route::get('/formderivadasimple').submit();">
                          Derivada simple </a>

                          <a class="dropdown-item" href="/formlimit"
                          onclick="event.preventDefault();
                          Route::get('/formlimit').submit();">
                          Tabla de multiplicacion y suma </a>

                          <a class="dropdown-item" href="/formconversiones"
                          onclick="event.preventDefault();
                          Route::get('/formconversiones').submit();">
                          Conversiones </a>

                          <a class="dropdown-item" href="/formpendienterecta"
                          onclick="event.preventDefault();
                          Route::get('/formpendienterecta').submit();">
                          Pendiente </a>

                         <a class="dropdown-item" href="/formdivisionessimples"
                          onclick="event.preventDefault();
                          Route::get('/formdivisionessimples').submit();">
                          Operaciones fraciones </a>



                        @endif

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->email }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                  
                                  
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
