<?php

namespace App\Policies;

use App\Models\Offering;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class OfferingPolicy
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
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Offering  $offering
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Offering $offering)
    {
        return $user->name == $offering->name;
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
     * @param  \App\Models\Offering  $offering
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Offering $offering)
    {
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Offering  $offering
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Offering $offering)
    {
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Offering  $offering
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Offering $offering)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Offering  $offering
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Offering $offering)
    {
        //
    }
}
