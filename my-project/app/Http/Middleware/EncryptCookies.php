<?php

namespace App\Http\Middleware;

use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;

class EncryptCookies extends Middleware
{
    /**
     * ES {Las nombres de las cookies que no deben ser encriptadas.}
     * EN {The names of the cookies that should not be encrypted.}
     *
     * @var array<int, string>
     */
    protected $except = [
        //
    ];
}
