<!DOCTYPE html>
<html lang="es">
<head>
  {!!Html::style('css/micss.css')!!}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Clínica</title>

    <!-- Bootstrap -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    {!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('css/micss.css')!!}
      {!!Html::style('css/minav.css')!!}
    {!!Html::style('css/navbar-fixed-top.css')!!}
    {!!Html::script('js/bootstrap.min.js')!!}

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>

<body id="app-layout" class="bg-default" >
    <nav class="navbar navbar-cust  ">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}" >
                  <span class="glyphicon glyphicon-home" style="margin-right: 3px; font-size: 20px"></span>

                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav" style="margin-left: 8%;">

                  <li>
                    <a  href="{{ url('/user/paciente') }}">
                    <span class="glyphicon glyphicon-th-list" style="margin-right: 5px; font-size: 15px;"></span>
                    Ver Mis Proximas Consultas
                  </a>
                </li>


                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())

                        <li><a href="{{ url('/login') }}"><i class="glyphicon glyphicon-log-in" style="margin-right: 5px;"></i>Iniciar sesión</a></li>
                        <li><a href="{{ url('/register') }}"><i class="glyphicon glyphicon-credit-card" style="margin-right: 5px;"></i>Registrar</a></li>


                    @else


                              @if(Auth::user()->idrol==1)
                                <li><a href="{{ url('/Admin') }}"><i class=" 	glyphicon glyphicon-th-large"></i></i> Mi Panel</a></li>
                                <li><a href={{route('User.index')}}><i class="glyphicon glyphicon-user"></i></i> Mi Perfil</a></li>

                              @endif

                              @if(Auth::user()->idrol==2)
                                <li><a href="{{ url('/Docente/mostrar') }}"><i class=" 	glyphicon glyphicon-th-large"></i></i> Mi Panel</a></li>
                                <li><a href={{route('User.index')}}><i class="glyphicon glyphicon-user"></i></i> Mi Perfil</a></li>



                              @endif

                              @if(Auth::user()->idrol==3)
                                <li><a href="{{ url('/Alumno') }}"><i class=" glyphicon glyphicon-th-large"></i></i> Mi Panel</a></li>
                                <li><a href={{route('User.index')}}><i class="glyphicon glyphicon-user"></i></i> Mi Perfil</a></li>

                              @endif


                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Cerrar Sesión</a></li>


                    @endif
                </ul>
            </div>
        </div>
    </nav>


</body>

  <body style="background-color:  #FFFFFF ; "   >
      <!--  <div class=" fondoC centro text" >-->
          @yield('content')
      <!--  </div>  /container -->
  </body>

</html>
