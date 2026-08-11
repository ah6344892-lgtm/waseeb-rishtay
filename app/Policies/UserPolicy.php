<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    /**
     * Determine whether the user can assign roles to the user.
     */
    /*
        public function assignRole(User $user, User $model, string $role): bool
        {
            if ($this->isSuperAdmin($user)) {
                return true;
            }

            if ($user->id === $model->id) {
                return false;
            }

            if ($model->hasRole('super-admin')) {
                return false;
            }

            if ($model->hasRole('admin') && $user->hasRole('user')) {
                return false;
            }

            // Only admin can assign roles to normal users
            if ($user->hasRole('admin')) {
                return $role === 'user' && $user->can('user.edit');
            }

            return $user->hasRole('admin')
                && $user->can('user.edit');
        }
    */

    public function assignRole(User $user, User $model, string $role): bool
    {
        // Super admin can assign any role
        if ($this->isSuperAdmin($user)) {
            return true;
        }

        // Nobody can change their own role
        if ($user->id === $model->id) {
            return false;
        }

        // Admin can assign only user role
        if ($user->hasRole('admin')) {
            return $role === 'user' && $user->can('user.edit');
        }

        return false;
    }

    /**
     * Super admin bypass.
     */
    private function isSuperAdmin(User $user): bool
    {
        return $user->hasRole('super-admin');
    }

    /**
     * Determine whether the user can view any users.
     */
    public function viewAny(User $user): bool
    {
        if ($this->isSuperAdmin($user)) {
            return true;
        }

        return $user->can('user.view');
    }

    /**
     * Determine whether the user can view the user.
     */
    public function view(User $user, User $model): bool
    {
        if ($this->isSuperAdmin($user)) {
            return true;
        }

        return $user->can('user.view');
    }

    /**
     * Determine whether the user can create users.
     */
    public function create(User $user): bool
    {
        if ($this->isSuperAdmin($user)) {
            return true;
        }

        return $user->hasRole('admin')
            && $user->can('user.create');
    }

    /**
     * Determine whether the user can create users.
     */
    public function assignRoleToNewUser(
        User $user,
        string $role
    ): bool {
        if ($this->isSuperAdmin($user)) {
            return true;
        }

        return $user->hasRole('admin')
            && $role === 'user'
            && $user->can('user.create');
    }

    /**
     * Determine whether the user can update the user.
     */
    /*
    public function update(User $user, User $model): bool
    {
        /*
        |--------------------------------------------------------------------------
        | Super Admin
        |--------------------------------------------------------------------------
        */

    /*   if ($this->isSuperAdmin($user)) {
            return true;
        }

        /*
        |--------------------------------------------------------------------------
        | Cannot modify yourself
        |--------------------------------------------------------------------------
        */

    /*   if ($user->id === $model->id) {
            return false;
        }

        /*
        |--------------------------------------------------------------------------
        | Cannot modify Super Admin
        |--------------------------------------------------------------------------
        */

    /*   if ($model->hasRole('super-admin')) {
            return false;
        }

        /*
        |--------------------------------------------------------------------------
        | Admin Protection
        |--------------------------------------------------------------------------
        |
        | Normal users cannot modify admins.
        |
        */

    /*  if (
            $model->hasRole('admin') &&
            $user->hasRole('user')
        ) {
            return false;
        }

        /*
        |--------------------------------------------------------------------------
        | Permission
        |--------------------------------------------------------------------------
        */

    //  return $user->can('user.edit');
    //}

    public function update(User $user, User $model): bool
    {
        // Super admin can update anyone
        if ($this->isSuperAdmin($user)) {
            return true;
        }

        // User can edit their own basic information
        if ($user->id === $model->id) {
            return true;
        }

        // Nobody can modify super-admin
        if ($model->hasRole('super-admin')) {
            return false;
        }

        // Normal user cannot modify admin
        if (
            $model->hasRole('admin') &&
            $user->hasRole('user')
        ) {
            return false;
        }

        return $user->can('user.edit');
    }

    /**
     * Determine whether the user can delete the user.
     */
    public function delete(User $user, User $model): bool
    {
        /*
        |--------------------------------------------------------------------------
        | Super Admin
        |--------------------------------------------------------------------------
        */

        if ($this->isSuperAdmin($user)) {
            return true;
        }

        /*
        |--------------------------------------------------------------------------
        | Cannot delete yourself
        |--------------------------------------------------------------------------
        */

        if ($user->id === $model->id) {
            return false;
        }

        /*
        |--------------------------------------------------------------------------
        | Cannot delete Super Admin
        |--------------------------------------------------------------------------
        */

        if ($model->hasRole('super-admin')) {
            return false;
        }

        /*
        |--------------------------------------------------------------------------
        | Admin Protection
        |--------------------------------------------------------------------------
        */

        if (
            $model->hasRole('admin') &&
            $user->hasRole('user')
        ) {
            return false;
        }

        /*
        |--------------------------------------------------------------------------
        | Permission
        |--------------------------------------------------------------------------
        */

        return $user->can('user.delete');
    }
}
