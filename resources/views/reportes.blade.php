@extends('content');
<script>
    function cambiarTipoInput() {
        var seleccion = document.getElementById("busqueda").value;
        var campoBusqueda = document.getElementById("campo_busqueda");

        if (seleccion == "fecha") {
            campoBusqueda.value = "";
            campoBusqueda.type = "date";
        } else {
            campoBusqueda.type = "text";
            campoBusqueda.value = "";
        }
    }
</script>
@section('content');

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h1>Generar reporte</h1>
  </header>

  <form action="{{ route('transaccion.reporte') }}" method="get">
    <label for="busqueda">Buscar por:</label>
    <select id="busqueda" name="busqueda" onchange="cambiarTipoInput()">
        <option value="id">Nombre</option>
        <option value="fecha">Fecha</option>
    </select>
    <input type="text" id="campo_busqueda" value="{{$busqueda}}" name="busqueda">
    <input type="submit" value= "Buscar">
</form>
  <div class="w3-row-padding w3-margin-bottom">
    <table class="table">
        <thead>
          <tr>
            <th></th>
            <th>Fecha</th>
          </tr>
          <tbody>
            @foreach ($servicio_clinico as $servicio_clinicos)
            <tr>
              <td>{{$servicio_clinico->nombre}}</td>
              <td>{{$servicio_clinico->cantidad}}</td>
            </tr>
            @endforeach
          </tbody>
        </thead>
      </table>
  </div>
  </div>

@endsection
