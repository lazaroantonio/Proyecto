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
    background:url(https://static.bhphoto.com/images/images500x500/acer_nh_q6waa_001_triton_500_i7_10750h_32gb_1591103155_1566183.jpg)no-repeat;
    background-size: contain;
    position: center;
    height: 40%;
    width: 80% ;
  }


  .membresia{
    background:url(data:image/png;base64,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)no-repeat;
    background-size: contain;
    position: center;
    height: 40%;
    width: 60% ;

  }

  .rol{
    text-align: center;
    height: 40%;
    width: 60% ;
    position: relative;

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
<a href="#"><img class="foto" width="90" height="100"  src="https://lh3.googleusercontent.com/cxQIp6eqxxSRbpYH1H6l4gPr2UNEhZ908hgZHYL-FXTXRHA5k2usVVvO0s3lfesDZoiSDCPPfVI-AUJbWb4dD5Q8zRwzG8O3sIXXCBKblk_M_gS9Bos8JCEieJ4i2gYA8aBUYTXIOJk6d5gG7Zat2n3jF0xVuh2Z_aNd55BlqYTGl3p0M3bJrSl_EniUAoE1IFUc4y6zREgqcbYc0-FtClFNbwR5um__vEZtP8FqorI9-G5ZGa7AkQXvKNJIj4A4EDKioCUeI-Pd0BY9won94JEyJUfP06GP-I8RwdyuFsObXBlB_sNU1T7Za9WzQewCbOGXW8EG1qnyui9qdJXSlp3_A8S2CNosvXA-LjfORZTVQP_B8-zWuX5Erdx2TDBPJZW3yNjgZ1ayofhDn-PzLDP3sjzAC-hIH3kBdkWpU8NvIWdxoNncyGnX6SZ0A-UAKM8nH9x263xSjBL2LdwI6s47NwgabtmHNGsw_UGm51KzNU_I_G1boSs6l5oEoWUqt_U20jo08YghPOTf_PuHJfCxBVBBovaPjDeiwNb85I76ktoVHphJiwCiDe6lUEjwI8AEBcdfu9GhniLNncE5IUNdRmOjPzyXK7BAPiYvbosscIQXYaKaiHPBTS0rgOp7xqaRxlZIUUJHNCRlS9qmbwingqAcjYbQ4iP4-c2h9woa1DShXOIrnj-DgXLg=s250-k-rw-no" alt=""></a>
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
    <div class="col-sm-4">
      <h2>LO MAS NUEVO!!</h2>
      <h5>Acer 15.6" Predator Triton 500 Gaming Laptop:</h5>
      <div class="predator"></div>
      <p>Características principales
        2.6 GHz Intel Core i7-10750H Six-Core
        16GB DDR4 | 1TB NVMe PCIe M.2 SSD
        15.6" 1920 x 1080 G-SYNC IPS Display
        NVIDIA GeForce RTX 2080 SUPER (8GB)</p>
      <h3>MARCAS RECONOCIDAS</h3>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="#">Asus</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Dell</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">HP</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>

    <div class="col-sm-8">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <h2>COMUNIDAD GAMER</h2>
                <h5>21 de Agosto, 2020</h5>
              <div class="carousel-item active">
                <img class="d-block w-100"   height="350px" width="400px"  src="https://esports.as.com/2018/12/31/fifa/finales-LCS-Madrid_1204989497_125495_1440x600.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" height="350px" width="400px"    src="https://agendatecnologicaweb.com/wp-content/uploads/Asus2-1100x680.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" height="350px" width="400px"   src="https://cdn.tn.com.ar/sites/default/files/styles/1366x765/public/2016/06/30/tecnofields.jpg" alt="Third slide">
              </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <button class="btn btn-outline-danger"type="submit">Entradas</button>
          <button class="btn btn-outline-danger" type="submit">Torneo eSports</button>
          <p>eSports..</p>
          <p>Durante los Gaming Days, podrás disfrutar de multitud de eventos y de Torneos en los que tú y tus amigos pueden participar.
            Puedes inscribirte individualmente o como equipo a cualquiera de los torneos que tendremos durante el evento, consultando la página específica de tu ciudad para ver el procedimiento de inscripción.
          </p>
          <br>
      <h2>MEMBRESIA NAILUJ</h2>
      <h5>NJE</h5>
      <div class="membresia"></div>
      <div class="rol">
      <button class="btn btn-outline-secondary" >
        <a class="nav-link" href="{{ url ("usuario/create")}}"><font color="white">Registrate</font></a>
    </button>
      <p>Registrate y Obten tu membresia con nosotros y accede a ofertas exclusivas, foros entre otros beneficios</p>
    </div>
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
