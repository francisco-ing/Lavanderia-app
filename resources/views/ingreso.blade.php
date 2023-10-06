@extends('content');
@section('content');

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:50px;">

  <!-- Header -->
  <header class="w3-container" style="display:flex; justify-content:center;">
    <h1>Ingreso de ropa</h1>
  </header>

  <div class="w3-row-padding w3-margin">

  <form action="{{ route('ingreso.store') }}" method="post" enctype="multipart/form-data">
   @csrf

    <label for="id">Id</label><br>
    <input type="text" id="id" name="id"><br>

    <label for="encargado">Encargado</label><br>
    <input type="text" id="encargado" name="encargado"><br>

    <label for="fecha">Fecha</label><br>
    <input type="date" id="fecha" name="fecha" readonly><br>

    <label for="hora">Hora</label><br>
    <input type="time" id="hora" name="hora" readonly><br>

    <label for="codLote">Codigo lote</label><br>
    <input type="text" id="cod_lote" name="cod_lote"><br>

    <label for="cantidad">Cantidad (Kilos)</label><br>
    <input type="text" id="cantidad" name="cantidad"><br><br>


    <button type="submit" class="btn btn-primary">Registrar ingreso</button>
  </form>
  </div>
  </div>

@endsection

