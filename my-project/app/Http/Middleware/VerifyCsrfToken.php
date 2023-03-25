<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * ES {Las URIs que deben ser excluidas de la verificación CSRF}
     * EN {The URIs that should be excluded from CSRF verification.}
     *
     * @var array<int, string>
     */
    protected $except = [
        //
    ];
}
