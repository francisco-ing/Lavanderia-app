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

    <label for="servicio">Servicio Clinico</label><br>
    <select id="servicio" name="servicio">
        <option value="kinesiologia">Kinesiologia</option>
        <option value="pediatria">Pediatria</option>
        <option value="odontologia">Odontología </option>
        <option value="ginecologia">Ginecologia</option>
        <option value="obstetricia">Obstetricia</option>
        <option value="Medicina general">Medicina general</option>
        <option value="laboratorio">Laboratorio</option>
    </select>
    <br>

    <label for="servicio">Tipo ropa: </label><br>
    <select id="tipo_ropa" name="tipo_ropa">
        <option value="limpia">Limpia</option>
        <option value="sucia">Sucia</option>
    </select>
    <br>

    <label for="cantidad">Cantidad (Kilos)</label><br>
    <input type="text" id="cantidad" name="cantidad"><br><br>


    <button type="submit" class="btn btn-primary">Registrar egreso</button>
  </form>

  </div>
  </div>

@endsection
