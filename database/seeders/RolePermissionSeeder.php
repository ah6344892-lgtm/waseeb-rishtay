<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
        |--------------------------------------------------------------------------
        | Permissions
        |--------------------------------------------------------------------------
        */

        $permissions = [
            // Users
            'user.view',
            'user.create',
            'user.edit',
            'user.delete',

            // Roles
            'role.view',
            'role.create',
            'role.edit',
            'role.delete',

            // Permissions
            'permission.view',
            'permission.create',
            'permission.edit',
            'permission.delete',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate([
                'name' => $permission,
                'guard_name' => 'web',
            ]);
        }

        /*
        |--------------------------------------------------------------------------
        | Roles
        |--------------------------------------------------------------------------
        */

        $superAdmin = Role::firstOrCreate([
            'name' => 'super-admin',
            'guard_name' => 'web',
        ]);

        $admin = Role::firstOrCreate([
            'name' => 'admin',
            'guard_name' => 'web',
        ]);

        $user = Role::firstOrCreate([
            'name' => 'user',
            'guard_name' => 'web',
        ]);

        /*
        |--------------------------------------------------------------------------
        | Admin Permissions
        |--------------------------------------------------------------------------
        */

        $admin->syncPermissions([
            'user.view',
            'user.create',
            'user.edit',
            'user.delete',

            'role.view',
            'role.create',
            'role.edit',
            'role.delete',

            'permission.view',
            'permission.create',
            'permission.edit',
            'permission.delete',
        ]);

        /*
        |--------------------------------------------------------------------------
        | User Permissions
        |--------------------------------------------------------------------------
        */

        $user->syncPermissions([
            'user.view',
        ]);

        /*
        |--------------------------------------------------------------------------
        | Super Admin
        |--------------------------------------------------------------------------
        |
        | Super admin permissions will be handled through Gate::before()
        | so we don't need to assign every permission here.
        |
        */

        $superAdmin->syncPermissions([]);
    }
}
