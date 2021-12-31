<?php

namespace App\Policies;

use App\Models\Responsible;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ResponsiblePolicy
{

    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return in_array(3, collect($user->permissions)->map(fn ($permission) => $permission->id)->toArray());
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user)
    {
        return in_array(3, collect($user->permissions)->map(fn ($permission) => $permission->id)->toArray());
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return in_array(3, collect($user->permissions)->map(fn ($permission) => $permission->id)->toArray());
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user)
    {
        return in_array(3, collect($user->permissions)->map(fn ($permission) => $permission->id)->toArray());
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user)
    {
        return in_array(3, collect($user->permissions)->map(fn ($permission) => $permission->id)->toArray());
        //
    }

    public function deleteAny(User $user)
    {
        return in_array(3, collect($user->permissions)->map(fn ($permission) => $permission->id)->toArray());
        //
    }
}
