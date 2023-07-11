<?php

namespace App\Policies;

use App\Models\Milk;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class MilkPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Milk $milk)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Milk $milk)
    {
        return $user->id === $milk->cattle->herd->user->id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Milk $milk)
    {
        return $user->id === $milk->cattle->herd->user->id;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Milk $milk)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Milk $milk)
    {
        //
    }
}
