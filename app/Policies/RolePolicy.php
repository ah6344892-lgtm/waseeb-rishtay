<?php

namespace App\Policies;

// use App\Models\Role;
use Spatie\Permission\Models\Role;
use App\Models\User;

class RolePolicy
{
    /**
     * Super admin bypass.
     */
    private function isSuperAdmin(User $user): bool
    {
        return $user->hasRole('super-admin');
    }

    /**
     * Determine whether the user can view any roles.
     */
    public function viewAny(User $user): bool
    {
        if ($this->isSuperAdmin($user)) {
            return true;
        }

        return $user->can('role.view');
    }

    /**
     * Determine whether the user can view the role.
     */
    public function view(User $user, Role $role): bool
    {
        if ($this->isSuperAdmin($user)) {
            return true;
        }

        return $user->can('role.view');
    }

    /**
     * Determine whether the user can create roles.
     */
    public function create(User $user): bool
    {
        if ($this->isSuperAdmin($user)) {
            return true;
        }

        return $user->can('role.create');
    }

    /**
     * Determine whether the user can update the role.
     */
    public function update(User $user, Role $role): bool
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
        | Self Role Protection
        |--------------------------------------------------------------------------
        |
        | User apna khud ka role modify nahi kar sakta.
        |
        */

        if ($user->hasRole($role->name)) {
            return false;
        }

        /*
        |--------------------------------------------------------------------------
        | Super Admin Protection
        |--------------------------------------------------------------------------
        |
        | Admin/User super-admin ko modify nahi kar sakte.
        |
        */

        if ($role->name === 'super-admin') {
            return false;
        }

        /*
        |--------------------------------------------------------------------------
        | Admin Protection
        |--------------------------------------------------------------------------
        |
        | Normal user admin ko modify nahi kar sakta.
        |
        */

        if ($role->name === 'admin' && $user->hasRole('user')) {
            return false;
        }

        /*
        |--------------------------------------------------------------------------
        | Permission
        |--------------------------------------------------------------------------
        */

        return $user->can('role.edit');
    }

    /**
     * Determine whether the user can delete the role.
     */
    public function delete(User $user, Role $role): bool
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
        | Self Role Protection
        |--------------------------------------------------------------------------
        */

        if ($user->hasRole($role->name)) {
            return false;
        }

        /*
        |--------------------------------------------------------------------------
        | Protected Roles
        |--------------------------------------------------------------------------
        |
        | super-admin aur admin delete nahi honge.
        |
        */

        if (in_array($role->name, ['super-admin', 'admin'])) {
            return false;
        }

        /*
        |--------------------------------------------------------------------------
        | Permission
        |--------------------------------------------------------------------------
        */

        return $user->can('role.delete');
    }
}
