@extends('content');
@section('content');

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="display:flex; justify-content:center;">
    <h1>Inicio</h1>
  </header>

  <div class="w3-row-padding w3-margin-bottom">

    <div id="notificaciones">
      <h3>Centro de notificaciones</h3>

    @forelse($servicio_clinicos as $servicio_clinico)
      <div id="notificaciones">
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <h4 class="alert-heading">ATENCION</h4>
        <p>Atencion, escases de ropa en el area de {{ $servicio_clinico->nombre }} quedan {{ $servicio_clinico->cantidad  }} kilos de ropa </p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      </div>


  @empty
      <p>No hay ingresos con cantidad menor a 5.</p>
  @endforelse



  </div>


@endsection
