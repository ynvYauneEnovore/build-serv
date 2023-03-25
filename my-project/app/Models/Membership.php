<?php

namespace App\Models;

use Laravel\Jetstream\Membership as JetstreamMembership;

class Membership extends JetstreamMembership
{
    /**
     * ES {Indica si los IDs se autoincrementan.}
     * EN {Indicates if the IDs are auto-incrementing.}
     *
     * @var bool
     */
    public $incrementing = true;
}
