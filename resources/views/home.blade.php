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
      <div id="notificaciones">
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <h4 class="alert-heading">Egreso</h4>
        <p>Atencion, lote 001 de ropa listo para su entrega.</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <h4 class="alert-heading">Egreso</h4>
        <p>Atencion, lote 003 de ropa listo para su entrega.</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      </div>
    </div>
  </div>
  </div>

@endsection