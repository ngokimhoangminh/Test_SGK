<?php

namespace App\Policies;

use App\Models\Tasks;
use App\Models\User;
use App\Models\Roles;
use Illuminate\Auth\Access\HandlesAuthorization;

class TasksPolicy
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
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Tasks  $tasks
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Tasks $tasks)
    {
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
        //
        return $user->role_id == Roles::IS_ADMIN;
    }


    public function update(User $user, Tasks $tasks)
    {
        return $tasks->user_id == $user->id && in_array( $user->role_id, [ Roles::IS_ADMIN, Roles::IS_MANAGER ] );
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Tasks  $tasks
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Tasks $tasks)
    {
        //
        return $tasks->user_id == $user->id && in_array( $user->role_id, [ Roles::IS_ADMIN, Roles::IS_MANAGER ] );
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Tasks  $tasks
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Tasks $tasks)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Tasks  $tasks
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Tasks $tasks)
    {
        //
    }
}
