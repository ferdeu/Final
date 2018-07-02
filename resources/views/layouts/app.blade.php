<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>BudgetFork</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
    body {
    background-image: url("/../../../../images/back-login.jpg");
    font-family: 'Lora';
    }
    .panel-heading {
    text-align: center;
    }
    .navbar-default .navbar-nav>li>a, .navbar-default .navbar-text {
      color: #fff;
    }
    .panel{
      background-color: #a9444233;
      color: #fff;
    }
    .panel-default>.panel-heading {
    color: #fff;
    background-color: #ffffff00;
    /* border-color: #ffffff00; */
    }
    .btn{
      display: block;
      margin-left: auto;
      margin-right: auto;
    }
    .btn-primary{
      border-color: #a94442;
      background-color: #af4c4c;
    }
    .btn-link {
      color: #a3ddff;
      font-weight: 1000;
    }
    .navbar.navbar-default.navbar-static-top{
      background-color: rgba(0, 0, 0, 0.65);
      color:white;
    }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}" style="color:#fff";>
                      <img src="/../../../../images/logo-nav.png" alt="logo" class="logo"></a>
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Iniciar Sesion</a></li>
                            <li><a href="{{ route('register') }}">Registrarse</a></li>
                        @else
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">
								  {{ csrf_field() }}
                                  <img src="{{ asset('/storage/' . Auth::user()->image) }}" style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%">
                                  {{ Auth::user()->nombre }} <span class="caret"></span>
                              </a>

                                <ul class="dropdown-menu">
                                  <li>
                                      <a href="{{ route('productos') }}">
                                          Productos
                                      </a>
                                      <form id="profile-form" action="{{ route('productos') }}" method="GET" style="display: none;">
                                          {{ csrf_field() }}
                                      </form>
                                  </li>
								
                                  <li>
                                      <a href="{{ route('agregar') }}">
                                          Agregar Productos
                                      </a>
                                      <form id="profile-form" action="{{ route('agregar') }}" method="GET" style="display: none;">
                                          {{ csrf_field() }}
                                      </form>
                                  </li>
								
                                  <li>
                                      <a href="{{ route('buscador') }}">
                                          Buscador
                                      </a>
                                      <form id="profile-form" action="{{ route('buscador') }}" method="GET" style="display: none;">
                                          {{ csrf_field() }}
                                      </form>
                                  </li>
                                  <li>
                                      <a href="{{ route('profile') }}">
                                          Perfil
                                      </a>
                                      <form id="profile-form" action="{{ route('profile') }}" method="GET" style="display: none;">
                                          {{ csrf_field() }}
                                      </form>
                                  </li>
                                  <li>
                                      <a href="{{ route('logout') }}"
                                          onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                          Logout
                                      </a>

                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                          {{ csrf_field() }}
                                      </form>
                                  </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
