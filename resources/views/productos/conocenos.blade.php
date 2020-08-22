<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

  <title>Nailuj Electronics</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  .Portada {
    background:url(https://image.freepik.com/vector-gratis/fondo-lluvia-pixeles-violeta-abstracto_23-2148362568.jpg) no-repeat fixed center;
    background-size: cover;
    height: 120px;
    width: 100% ;
    text-align: center;

  }
  .predator{

    background-size: contain;
margin-left: 100px;
    height: 40%;
    width: 80% ;
   position: relative;

  }

  .hi{

    height: 40%;
    width: 80% ;
    text-align: center;
    margin-bottom: 500px;
  }


  .footer{
    margin-top:50px;
    width:100%;
    height:60px;
    background-color:#333;
    position: fixed;
  bottom: 0;
  text-align: center;
  opacity: 0.8;
   }
   .bodycrunch{
    background:url(https://www.benq.com/content/dam/b2c/en/monitors/ew-ex/e-series/hdri.jpg) no-repeat fixed center;
    background-size: cover;
   }
   .foto {
       padding: 10px;
        margin: 10px;
        float: left;
        }

  </style>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<font color="white">
<body class="bodycrunch">

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
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
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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



<div class="Portada" style="margin-bottom:0">
  <h1>Nailuj Electronics</h1>
  <p>Calidad y precios bajos en un solo lugar!</p>

</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Nailuj</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ url ("home")}}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url ("productos")}}">Productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url ("conocenos")}}">Conocenos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url ("soporte")}}">Soporte</a>
      </li>
      <div>
      <form class="form-inline" action="/action_page.php">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-success" type="submit">Search</button>
      </form>
    </div>
    </ul>
  </div>
</nav>

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="hi">
      <h2>CONOCENOS</h2>
      <h5>Quienes somos?</h5>
      <div class="predator"><img src="https://lh3.googleusercontent.com/ew6crjyrZvJNoZL-u6r0OTuDrxz4LvkPedfgeHphTe4hIjX7v9FKIXHyWAtjYHqw8nrPb5LY_jkDv0LFVSk2cDRqphLDjKhmIJHbtHltad0c8vtQtpb-qv5RWsNjWkxTbSZVdZBCC6I2_5FPDwkOXpLI2USpTKsMqT2YCHU1n3oKKbPTjRtAaafPSe49lxQArgG4yuoSJEOD0VykqQO9gjW0POBebGHhj9_ifFfyrTDYbEJWbp2vvNcNiRDK-wL0mIKZVlq6QvdqYzHCw_NRoqPV87pv4A8eykhi6h8IXB6XCeujG4UqD9eRR3vSWTSaaWCXGrcXiJxABLD1jxjHGOnftnSs3gtQTzs_HusqzcCUmvf_a-e1RyrY7TUIs3gm-SpsYP0FWpMWPFZDiELV1SlbS5cBS7p21ROaomunXCFWHhFCqU5o5w0zG2FinrxcFZQyCtn31woIbMnZmQFV0OvLd9W1cn4Nr-v9n-N9bAlFCZKiyoTYRUUK9XUoK10tvsw8gK_XwJxElmHXiy8W8ibhqWVyMPyUYJIJS2OZgP0d51V49dfwqzAE0gOyPniXk_TsKJ6GJOM78aMjEcDnOkZa3lZZUJWXkwYrIXQWaFbHRPlQE8pHzN50bhYdePHnt_Tm_D4jxWK25eHLmG4cA2-eYG9HmSsZNHw6P3JObL5-ERgeCC2uF_j3WtcP=w178-h220-no?authuser=0"></div>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/9zvAlTkZlNM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <p>DESCUBRE NUESTRA HISTORIA
        La marca NJES tiene una breve historia a sus espaldas. Nace en el año 2017 gracias a la iniciativa de tres jóvenes emprendedores.<br><br>

        Ya desde sus comienzos el gusto y la pasión por las “cosas bien hechas” no ha cambiado. Sin embargo, hay muchos otros aspectos que si han cambiado y que son apreciables por nuestros clientes y hacen que nuestra empresa sea única en su género.<br><br>

        En 2017 NJES ve la posibilidad de desarrollo en el sector de la venta de equipo de computo y software, que necesitaban de un adecuado soporte para la venta.
         NJES empieza con su expansión al territorio nacional, abriendo un departamento de envios y modernizando su tecnología con la introducción de nuevos equipos de computo. Esta fase de modernización no ha parado nunca y se ha convertido en un proceso continuo.
        </p>

      <hr class="d-sm-none">
    </div>
  </div>
</div>


<div class="footer"   style="font-size:10px;">

      <div class="row">
        <div class="col">INFORMACION</div>
        <div class="col">SERVICIO AL CLIENTE</div>
        <div class="col">REDES SOCIALES</div>
        <div class="col">GUIAS DE AYUDA</div>
      </div>
      <div class="row">
        <div class="col">Acerca de nosotros</div>
        <div class="col">Factura electronica</div>
        <div class="col">Facebook</div>
        <div class="col">Como crear una cuenta</div>
      </div>
      <br>
      <div class="row">
        <div class="col">Tels.636-100-76-42 / 636-158-56-56</div>
      </div>
    </font>

</div>
</body>
</font>
</html>
