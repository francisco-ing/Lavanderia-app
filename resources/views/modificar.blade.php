@extends('content');
@section('content');

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="display:flex; justify-content:center;">
    <h1>Modificar datos</h1>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <label for="servicio">Cambiar desde</label><br>
    <select id="servicio" name="servicio_desde">
        <option value="kinesiologia">Kinesiologia</option>
        <option value="pediatria">Pediatria</option>
        <option value="odontologia">Odontología </option>
        <option value="ginecologia">Ginecologia</option>
        <option value="obstetricia">Obstetricia</option>
        <option value="Medicina general">Medicina general</option>
        <option value="laboratorio">Laboratorio</option>
    </select>

    <br>
    <label for="servicio">Hasta</label><br>
    <select id="servicio" name="servicio_hasta">
        <option value="kinesiologia">Kinesiologia</option>
        <option value="pediatria">Pediatria</option>
        <option value="odontologia">Odontología </option>
        <option value="ginecologia">Ginecologia</option>
        <option value="obstetricia">Obstetricia</option>
        <option value="Medicina general">Medicina general</option>
        <option value="laboratorio">Laboratorio</option>
    </select>
    <br>

    <label for="cantidad">Cantidad (Kilos)</label><br>
    <input type="text" id="cantidad" name="cantidad"><br><br>

    <button type="submit" class="btn btn-primary">Guardar cambio</button>


    <br>
    <label for="servicio">Area a modificar</label><br>
    <select id="servicio" name="">
        <option value="kinesiologia">Kinesiologia</option>
        <option value="pediatria">Pediatria</option>
        <option value="odontologia">Odontología </option>
        <option value="ginecologia">Ginecologia</option>
        <option value="obstetricia">Obstetricia</option>
        <option value="Medicina general">Medicina general</option>
        <option value="laboratorio">Laboratorio</option>
    </select>
    <h3>+</h3><h3>-</h3>
    <br>
  </div>
  </div>

@endsection
