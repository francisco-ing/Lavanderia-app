<!DOCTYPE html>
<html>
<head>
<title>Inicio</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
</head>
<body class="w3-light-grey">

<!-- Top container // CERRAR SESION -->
<div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesion') }}
                                    </a>

                                    <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-blue w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s8 w3-bar">
      <span>Bienvenido, <strong>Francisco Soto</strong></span><br>
      <p>Hoy es 22-22-2222</p>
      <p>MeliClean</p>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Funciones</h5>
  </div>
  <div class="w3-bar-block">
    <a href="ingreso" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-registered"></i>  Registrar Ingreso</a>
    <a href="egreso" class="w3-bar-item w3-button w3-padding"><i class="fa fa-registered"></i>  Registrar Egreso</a>
    <a href="transaccion" class="w3-bar-item w3-button w3-padding"><i class="fa fa-search fa-fw"></i>  Buscar Transacciones</a>
    <a href="modificar" class="w3-bar-item w3-button w3-padding"><i class="fa fa-edit fa-fw"></i>  Modificar datos de ropa</a>
  </div>
</nav>


<div class="w3-overlay w3-hide-large w3-animate-opacity"></div>

<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i>Inicio</b></h5>
  </header>

 <div>
  <h1>hola</h1>
 </div>
 
</body>
</html>
