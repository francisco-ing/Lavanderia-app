
        document.addEventListener('DOMContentLoaded', function() {
            var inputFecha = document.getElementById('fecha');
            var fechaActual = new Date().toISOString().split('T')[0];
            inputFecha.value = fechaActual;
        });
        document.addEventListener('DOMContentLoaded', function() {
            var inputHora = document.getElementById('hora');
            var horaActual = new Date().toISOString().slice(11, 16);

            // Convertir la cadena de la hora actual a un objeto Date
            var horaActualDate = new Date('1970-01-01T' + horaActual + 'Z');

            // Restarle 3 horas a la hora actual
            horaActualDate.setHours(horaActualDate.getHours() - 3);

            // Obtener la nueva hora en formato "HH:mm"
            var nuevaHora = horaActualDate.toISOString().slice(11, 16);

            inputHora.value = nuevaHora;
        });
