<?php

namespace App\Console\Commands;

use App\Mail\AvisosMailable;
use App\Models\servicio_clinico;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class VerificarCampoYEnviarCorreo extends Command
{
    protected $signature = 'verificar-campo-y-enviar-correo';

    protected $description = 'Verificar un campo y enviar correo si es necesario';

    public function handle()
    {
        $limite = 5; // Cambia esto al valor límite que deseas
        $campo = 'cantidad'; // Cambia esto al nombre de tu campo

        $serviciosClinicos = servicio_clinico::where($campo, '<=', $limite)->get();

        if ($serviciosClinicos->isNotEmpty()) {
            Mail::to('fr.sotol@duocuc.cl')->send(new AvisosMailable($serviciosClinicos));
            $this->info('Correo enviado correctamente.');
        } else {
            $this->info('No hay registros que cumplan con el criterio.');
        }
    }
}
