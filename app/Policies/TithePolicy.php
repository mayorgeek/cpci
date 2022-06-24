<?php

namespace App\Policies;

use App\Models\Tithe;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TithePolicy
{
    use HandlesAuthorization;

    public function before(User $user, $ability)
    {
        if ($user->isAdmin())
        {
            return true;
        }
    }

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Tithe  $tithe
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Tithe $tithe)
    {
        return $user->name == $tithe->name;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Tithe  $tithe
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Tithe $tithe)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Tithe  $tithe
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Tithe $tithe)
    {
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Tithe  $tithe
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Tithe $tithe)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Tithe  $tithe
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Tithe $tithe)
    {
        //
    }
}
