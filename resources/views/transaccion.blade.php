@extends('content');
<script>
    function cambiarTipoInput() {
        var seleccion = document.getElementById("busqueda").value;
        var campoBusqueda = document.getElementById("campo_busqueda");

        if (seleccion == "fecha") {
            campoBusqueda.type = "date";
        } else {
            campoBusqueda.type = "text";
        }
    }
</script>
@section('content');

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="display:flex; justify-content:center;"> 
    <h1>Transacciones</h1>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
  <form action="{{ route('transaccion.index') }}" method="get">
    <label for="busqueda">Buscar por:</label>
    <select id="busqueda" name="busqueda" onchange="cambiarTipoInput()">
        <option value="id">Referencia</option>
        <option value="fecha">Fecha</option>
    </select>
    
    <input type="text" id="campo_busqueda" value="{{$busqueda}}" name="busqueda">
    <input type="submit" value= "Buscar">
</form>
  <div id="container">
    <h4>Ingresos</h4>
    <div class="row">
      <div class="col-1x-12">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Encargado</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Lote</th>
                <th>Cantidad</th>
              </tr>
              <tbody>
                @if(count($ingresos)<=0)
                <tr>
                  nada
                </tr>
                @else

                 @foreach ($ingresos as $ingreso)
                <tr>
                  <td>{{$ingreso->id}}</td>
                  <td>{{$ingreso->encargado}}</td>
                  <td>{{$ingreso->fecha}}</td>
                  <td>{{$ingreso->hora}}</td>
                  <td>{{$ingreso->cod_lote}}</td>
                  <td>{{$ingreso->cantidad}}</td>
                </tr>
                @endforeach
                @foreach ($egresos as $egreso)
                <tr>
                  <td></td>
                  <td>{{$egreso->encargado}}</td>
                  <td>{{$egreso->fecha}}</td>
                  <td>{{$egreso->hora}}</td>
                  <td>{{$egreso->id}}</td>
                  <td>{{$egreso->cantidad}}</td>
                </tr>
                @endforeach
                @endif
              </tbody>
            </thead>
          </table>
          <a class="btn btn-success" href="">Generar reporte</a>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>

@endsection