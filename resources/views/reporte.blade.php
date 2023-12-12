{{-- resources/views/reporte.blade.php --}}

<div>
    <h2>Reporte de Transacciones</h2>
    <h3>Ingresos</h3>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Encargado</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Código de Lote</th>
                <th>Cantidad</th>
                <th>Tipo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transacciones as $transaccion)
                <tr>
                    <td>{{ $transaccion->id }}</td>
                    <td>{{ $transaccion->encargado }}</td>
                    <td>{{ $transaccion->fecha }}</td>
                    <td>{{ $transaccion->hora }}</td>
                    <td>{{ $transaccion->cod_lote }}</td>
                    <td>{{ $transaccion->cantidad }}</td>
                    <td>{{ $transaccion->tipo_ropa }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <h3>Egresos</h3>
    <table>
        <thead>
            <tr>
                <th>Encargado</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Código de Lote</th>
                <th>Cantidad</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transacciones2 as $transaccion2)
                <tr>
                    <td>{{ $transaccion2->encargado }}</td>
                    <td>{{ $transaccion2->fecha }}</td>
                    <td>{{ $transaccion2->hora }}</td>
                    <td>{{ $transaccion2->id }}</td>
                    <td>{{ $transaccion2->cantidad }}</td>
                    <td>{{ $transaccion2->tipo_ropa }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
