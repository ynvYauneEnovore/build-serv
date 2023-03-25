<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * ES {Definir el cronograma de comandos de la aplicación.}
     * EN {Define the application's command schedule.]
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();
    }

    /**
     * ES {Registrar los comandos para la aplicación.}
     * EN {Register the commands for the application.}
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}




/**
* DEV: Yovan Yaune Enovore
* EMAIL: yovanuxf@gmail.com
* Este código define el cronograma de comandos para la aplicación. 
* Puedes usarlo para programar la ejecución de comandos de Laravel 
* en intervalos regulares, como ejecutar tareas programadas 
* (por ejemplo, enviar correos electrónicos, generar informes)
* o para realizar tareas repetitivas en segundo plano 
* (por ejemplo, limpiar la caché, actualizar la base de datos). 
* También puedes definir tus propios comandos 
* personalizados y programar su ejecución utilizando este archivo.
*/
