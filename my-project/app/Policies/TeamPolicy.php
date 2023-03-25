<?php

namespace App\Policies;

use App\Models\Team;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TeamPolicy
{
    use HandlesAuthorization;

    /**
     * ES {Determinar si el usuario puede ver cualquier modelo.}
     * EN {Determine whether the user can view any models.}
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * ES {Determinar si el usuario puede ver el modelo.}
     * EN {Determine whether the user can view the model.}
     */
    public function view(User $user, Team $team): bool
    {
        return $user->belongsToTeam($team);
    }

    /**
     * ES {Determinar si el usuario puede crear modelos.}
     * EN {Determine whether the user can create models.}
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * ES {Determinar si el usuario puede actualizar el modelo.}
     * EN {Determine whether the user can update the model.}
     */
    public function update(User $user, Team $team): bool
    {
        return $user->ownsTeam($team);
    }

    /**
     * ES {Determinar si el usuario puede agregar miembros al equipo.}
     * EN {Determine whether the user can add team members.}
     */
    public function addTeamMember(User $user, Team $team): bool
    {
        return $user->ownsTeam($team);
    }

    /**
     * ES {Determinar si el usuario puede actualizar los permisos de los miembros del equipo.}
     * EN {Determine whether the user can update team member permissions.}
     */
    public function updateTeamMember(User $user, Team $team): bool
    {
        return $user->ownsTeam($team);
    }

    /**
     * ES {Determinar si el usuario puede eliminar miembros del equipo.}
     * EN {Determine whether the user can remove team members.}
     */
    public function removeTeamMember(User $user, Team $team): bool
    {
        return $user->ownsTeam($team);
    }

    /**
     * ES {Determinar si el usuario puede eliminar el modelo.}
     * EN {Determine whether the user can delete the model.}
     */
    public function delete(User $user, Team $team): bool
    {
        return $user->ownsTeam($team);
    }
}
