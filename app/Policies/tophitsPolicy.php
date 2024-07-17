<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Tophits;
use Illuminate\Auth\Access\HandlesAuthorization;

class TophitsPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_tophits');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Tophits $tophits): bool
    {
        return $user->can('view_tophits');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_tophits');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Tophits $tophits): bool
    {
        return $user->can('update_tophits');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Tophits $tophits): bool
    {
        return $user->can('delete_tophits');
    }

    /**
     * Determine whether the user can bulk delete.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_tophits');
    }

    /**
     * Determine whether the user can permanently delete.
     */
    public function forceDelete(User $user, Tophits $tophits): bool
    {
        return $user->can('force_delete_tophits');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_tophits');
    }

    /**
     * Determine whether the user can restore.
     */
    public function restore(User $user, Tophits $tophits): bool
    {
        return $user->can('restore_tophits');
    }

    /**
     * Determine whether the user can bulk restore.
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_tophits');
    }

    /**
     * Determine whether the user can replicate.
     */
    public function replicate(User $user, Tophits $tophits): bool
    {
        return $user->can('replicate_tophits');
    }

    /**
     * Determine whether the user can reorder.
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_tophits');
    }
}
