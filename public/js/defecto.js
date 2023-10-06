
        document.addEventListener('DOMContentLoaded', function() {
            var inputFecha = document.getElementById('fecha');
            var fechaActual = new Date().toISOString().split('T')[0];
            inputFecha.value = fechaActual;
        });
        document.addEventListener('DOMContentLoaded', function() {
            var inputHora = document.getElementById('hora');
            var horaActual = new Date().toISOString().slice(11, 16);
            inputHora.value = horaActual;
        });
