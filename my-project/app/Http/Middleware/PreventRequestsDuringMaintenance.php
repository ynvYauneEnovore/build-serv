<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance as Middleware;

class PreventRequestsDuringMaintenance extends Middleware
{
    /**
     * ES {Las URIs que deberían ser accesibles mientras el modo de mantenimiento está habilitado.}
     * EN {The URIs that should be reachable while maintenance mode is enabled.}
     *
     * @var array<int, string>
     */
    protected $except = [
        //
    ];
}
