<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * ES {Una lista de tipos de excepción con sus correspondientes niveles de registro personalizados.}
     * EN {A list of exception types with their corresponding custom log levels.}
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * ES {Una lista de tipos de excepción que no se reportan.}
     * EN {A list of the exception types that are not reported.}
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * ES {Una lista de las entradas que nunca se guardan en la sesión durante excepciones de validación.}
     * EN {A list of the inputs that are never flashed to the session on validation exceptions.}
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * ES {Registrar los callbacks de manejo de excepciones para la aplicación.}
     * EN {Register the exception handling callbacks for the application.}
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
}
