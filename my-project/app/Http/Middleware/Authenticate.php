<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * ES {Obtener la ruta a la que se debe redirigir al usuario cuando no está autenticado.}
     * EN {Get the path the user should be redirected to when they are not authenticated.}
     */
    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : route('login');
    }
}
