@extends('content');
@section('content');

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="display:flex; justify-content:center;">
    <h1>Modificar datos</h1>
  </header>


  <div class="w3-row-padding w3-margin-bottom">
    <h1>Traslados de ropa</h1>
    <form action="{{ route('servicioclinico.traslado') }}" method="post" enctype="multipart/form-data">
        @csrf
    <label for="servicioDesde">Cambiar desde</label><br>
    <select id="servicioDesde" name="servicioDesde">
        <option value="kinesiologia">Kinesiologia</option>
        <option value="pediatria">Pediatria</option>
        <option value="odontologia">Odontología </option>
        <option value="ginecologia">Ginecologia</option>
        <option value="obstetricia">Obstetricia</option>
        <option value="Medicina general">Medicina general</option>
        <option value="laboratorio">Laboratorio</option>
    </select>

    <br>
    <label for="servicioHasta">Hasta</label><br>
    <select id="servicioHasta" name="servicioHasta">
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
    </form>


    <br>

    <h1>Eliminar cantidades de ropa</h1>
    <form action="{{ route('servicioclinico.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="servicio">Area de ropa a eliminar</label><br>
        <select id="servicio" name="servicio">
            <option value="kinesiologia">Kinesiologia</option>
            <option value="pediatria">Pediatria</option>
            <option value="odontologia">Odontología</option>
            <option value="ginecologia">Ginecologia</option>
            <option value="obstetricia">Obstetricia</option>
            <option value="Medicina general">Medicina general</option>
            <option value="laboratorio">Laboratorio</option>
        </select>
        <br>
        <label for="cantidad">Cantidad (Kilos)</label><br>
        <input type="text" id="cantidad" name="cantidad"><br>
        <br>
        <button type="submit" class="btn btn-primary">ELIMINAR</button>
        <br>
    </form>

  </div>
  </div>

@endsection
