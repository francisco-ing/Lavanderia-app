@extends('content');

@section('content');

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="display:flex; justify-content:center;"> 
    <h1>Egreso de ropa</h1>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
  
  <form action="{{ route('egreso.store') }}" method="post" enctype="multipart/form-data">
   @csrf
  
    <label for="id">Codigo lote</label><br>
    <input type="text" id="id" name="id"><br>

    <label for="encargado">Encargado</label><br>
    <input type="text" id="encargado" name="encargado"><br>

    <label for="fecha">Fecha</label><br>
    <input valuie type="date" id="fecha" name="fecha" readonly><br>

    <label for="hora">Hora</label><br>
    <input type="time" id="hora" name="hora" readonly><br>

    <label for="cantidad">Cantidad (Kilos)</label><br>
    <input type="text" id="cantidad" name="cantidad"><br><br>
  

    <button type="submit" class="btn btn-primary">Registrar egreso</button>
  </form>

  </div>
  </div>

@endsection