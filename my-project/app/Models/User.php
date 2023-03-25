<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * ES {Los atributos que se pueden asignar masivamente.}
     * EN {The attributes that are mass assignable.}
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * ES {Las atributos que deben estar ocultos para la serialización.}
     * EN {The attributes that should be hidden for serialization.}
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * ES {Los atributos que deben ser convertidos.}
     * EN {The attributes that should be cast.}
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * ES {Las funciones de acceso para agregar a la forma de matriz del modelo.}
     * EN {The accessors to append to the model's array form.}
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];
}



/**
 * DEV: Yovan Yaune Enovore
 * EMAIL: yovanuxf@gmail.com
 * Esta es una propiedad en los modelos de Eloquent en Laravel que define los atributos
 * que se pueden asignar en masa desde un array o una solicitud HTTP. Para mejorar la seguridad, 
 * solo se deben permitir atributos específicos para ser asignados en masa y protegerse 
 * contra la asignación masiva de atributos no deseados. La propiedad $fillable se utiliza 
 * para permitir la asignación masiva de atributos específicos, mientras que la propiedad 
 * $guarded se utiliza para especificar qué atributos no se deben asignar en masa.
 */