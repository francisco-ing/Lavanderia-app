<!DOCTYPE html>
<html>
<head>
<title>Inicio</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
<script src="{{ asset('js/defecto.js') }}"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body class="w3-light-grey">

<!-- Top container // CERRAR SESION -->
<div class="w3-bar w3-top w3-blue w3-large" style="z-index:4">
<a style="color:black;" class="w3-bar-item w3-right"  href="{{ route('logout') }}" onclick="event.preventDefault();
document.getElementById('logout-form').submit();">{{ __('Cerrar Sesion') }}</a>
<form id="logout-form" action="{{route('logout')}}" method="POST">
@csrf
</form>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-blue" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s8 w3-bar">
      <p>Bienvenido, <br><strong>Francisco Soto</strong>
      <p>Hoy es 22-22-2222</p>
      <p>Lappvanderia</p>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Funciones</h5>
  </div>
  <div class="w3-bar-block">
    <a href="home" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-home"></i>  Inicio</a>
    <a href="ingreso" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-registered"></i>  Registrar Ingreso</a>
    <a href="egreso" class="w3-bar-item w3-button w3-padding"><i class="fa fa-registered"></i>  Registrar Egreso</a>
    <a href="transaccion" class="w3-bar-item w3-button w3-padding"><i class="fa fa-search fa-fw"></i>  Buscar Transacciones</a>
    <a href="modificar" class="w3-bar-item w3-button w3-padding"><i class="fa fa-edit fa-fw"></i>  Modificar datos de ropa</a>
  </div>
</nav>
  @yield('content')
</body>
</html>
