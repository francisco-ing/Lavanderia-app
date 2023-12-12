{{-- resources/views/emails/aviso.blade.php --}}

<div>
    <h2>¡Aviso importante!</h2>
    <p>Se han detectado servicios clínicos que cumplen con menos o igual a una cantidad de 5 kilos:</p>

    <ul>
        @foreach ($serviciosClinicos as $servicioClinico)
            <li>Nombre: {{ $servicioClinico->nombre }}</li>
            <li>Cantidad: {{ $servicioClinico->cantidad }}</li>
            <p>******************************************************</p>
        @endforeach
    </ul>

    <p>Por favor, tomar las medidas necesarias.</p>
</div>
