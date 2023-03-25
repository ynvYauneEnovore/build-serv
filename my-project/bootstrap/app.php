<?php

/*
|--------------------------------------------------------------------------
| Crear la aplicación {Create The Application}
|--------------------------------------------------------------------------
|
| ES
| {Lo primero que haremos es crear una nueva instancia de aplicación Laravel 
| que sirve como "pegamento" para todos los componentes de Laravel y es el 
| contenedor IoC para la vinculación del sistema de todas las partes diversas.}
|
| EN
| {The first thing we will do is create a new Laravel application instance
| which serves as the "glue" for all the components of Laravel, and is
| the IoC container for the system binding all of the various parts.}
|
*/

$app = new Illuminate\Foundation\Application(
    $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__)
);

/*
|--------------------------------------------------------------------------
| Vincular interfaces importantes {Bind Important Interfaces}
|--------------------------------------------------------------------------
|
| ES
| {A continuación, debemos enlazar algunas interfaces importantes en el 
| contenedor para que podamos resolverlas cuando sea necesario. 
| Los núcleos ("kernels") manejan las solicitudes entrantes a esta aplicación
| tanto desde la web como desde la CLI.}
|
| EN
| {Next, we need to bind some important interfaces into the container so
| we will be able to resolve them when needed. The kernels serve the
| incoming requests to this application from both the web and CLI.}
|
*/

$app->singleton(
    Illuminate\Contracts\Http\Kernel::class,
    App\Http\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

/*
|--------------------------------------------------------------------------
| Devolver la aplicación {Return The Application}
|--------------------------------------------------------------------------
|
| ES
| {Este script devuelve la instancia de la aplicación. La instancia se da
| al script que la llama para que podamos separar la construcción de las 
| instancias de la ejecución real de la aplicación y el envío de respuestas.}
|
| EN
| {This script returns the application instance. The instance is given to
| the calling script so we can separate the building of the instances
| from the actual running of the application and sending responses.}
|
*/

return $app;
