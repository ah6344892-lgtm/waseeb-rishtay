<?php

namespace App\Livewire\Admin\Roles;

use App\Models\User;
use Illuminate\Support\Collection;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Flux\Concerns\InteractsWithComponents;

class Index extends Component
{
    use WithPagination, InteractsWithComponents;

    public string $search = '';
    public int $perPage = 10;
    public string $name = '';
    public array $selectedPermissions = [];
    public Collection $permissions;
    public ?int $editingRoleId = null;
    public string $editName = '';
    public array $editSelectedPermissions = [];
    public ?int $deletingRoleId = null;
    public string $deletingRoleName = '';

    protected function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'max:255',
                'unique:roles,name',
            ],

            'selectedPermissions' => [
                'required',
                'array',
                'min:1',
            ],
        ];
    }

    public function edit(int $roleId): void
    {
        $role = Role::findOrFail($roleId);

        $this->authorize('update', $role);

        $this->editingRoleId = $role->id;

        $this->editName = $role->name;

        $this->editSelectedPermissions = $role
            ->permissions
            ->pluck('name')
            ->toArray();

        $this->resetValidation();
    }

    public function selectEditGroup(string $group): void
    {
        $permissions = $this->groupedPermissions[$group]
            ->pluck('name')
            ->toArray();

        $this->editSelectedPermissions = array_values(
            array_unique(
                array_merge(
                    $this->editSelectedPermissions,
                    $permissions
                )
            )
        );
    }

    public function unselectEditGroup(string $group): void
    {
        $permissions = $this->groupedPermissions[$group]
            ->pluck('name')
            ->toArray();

        $this->editSelectedPermissions = array_values(
            array_diff(
                $this->editSelectedPermissions,
                $permissions
            )
        );
    }

    public function resetEditForm(): void
    {
        $this->reset([
            'editingRoleId',
            'editName',
            'editSelectedPermissions',
        ]);

        $this->resetValidation();
    }

    public function mount(): void
    {
        $this->authorize('viewAny', Role::class);

        $this->permissions = Permission::orderBy('name')->get();
    }

    public function confirmDelete(int $roleId): void
    {
        $role = Role::findOrFail($roleId);

        $this->deletingRoleId = $role->id;

        $this->deletingRoleName = $role->name;

        $this->resetValidation();
    }

    public function delete(): void
    {
        $role = Role::findOrFail($this->deletingRoleId);

        /*
    |--------------------------------------------------------------------------
    | Protected Roles
    |--------------------------------------------------------------------------
    */

        $this->authorize('delete', $role);

        // if (in_array($role->name, ['admin', 'super-admin', 'super admin'])) {
        //     // session()->flash(
        //     //     'error',
        //     //     'This role cannot be deleted.'
        //     // );
        //     $this->dispatch('modal-close', 'delete-role');

        //     $this->toast(
        //         variant: 'error',
        //         heading: 'Error',
        //         text: 'This role cannot be deleted.'
        //     );

        //     return;
        // }

        /*
    |--------------------------------------------------------------------------
    | Delete Role
    |--------------------------------------------------------------------------
    */

        $role->delete();

        /*
    |--------------------------------------------------------------------------
    | Reset Delete State
    |--------------------------------------------------------------------------
    */

        $this->deletingRoleId = null;

        $this->deletingRoleName = '';

        /*
    |--------------------------------------------------------------------------
    | Success Message
    |--------------------------------------------------------------------------
    */

        // session()->flash(
        //     'success',
        //     'Role deleted successfully.'
        // );
        $this->dispatch('modal-close', 'delete-role');

        $this->toast(
            variant: 'success',
            heading: 'Success',
            text: 'Role deleted successfully.'
        );
    }

    /*
    |--------------------------------------------------------------------------
    | Permission Groups
    |--------------------------------------------------------------------------
    */

    public function getGroupedPermissionsProperty()
    {
        return $this->permissions->groupBy(function ($permission) {

            return explode('.', $permission->name)[0];
        });
    }

    /*
    |--------------------------------------------------------------------------
    | Select All
    |--------------------------------------------------------------------------
    */

    public function selectGroup(string $group): void
    {
        $permissions = $this->groupedPermissions[$group]
            ->pluck('name')
            ->toArray();

        $this->selectedPermissions = array_values(
            array_unique(
                array_merge($this->selectedPermissions, $permissions)
            )
        );
    }

    /*
    |--------------------------------------------------------------------------
    | Unselect Group
    |--------------------------------------------------------------------------
    */

    public function unselectGroup(string $group): void
    {
        $permissions = $this->groupedPermissions[$group]
            ->pluck('name')
            ->toArray();

        $this->selectedPermissions = array_values(
            array_diff(
                $this->selectedPermissions,
                $permissions
            )
        );
    }

    /*
    |--------------------------------------------------------------------------
    | Reset Form
    |--------------------------------------------------------------------------
    */

    public function resetForm(): void
    {
        $this->reset([
            'name',
            'selectedPermissions',
        ]);

        $this->resetValidation();
    }

    /*
    |--------------------------------------------------------------------------
    | Save Role
    |--------------------------------------------------------------------------
    */

    public function save(): void
    {
        $this->authorize('create', Role::class);

        $this->validate();

        $role = Role::create([
            'name' => $this->name,
            'guard_name' => 'web',
        ]);

        $role->syncPermissions(
            $this->selectedPermissions
        );

        $this->resetForm();

        $this->permissions = Permission::orderBy('name')->get();

        $this->dispatch('modal-close', 'create-role');

        // session()->flash(
        //     'success',
        //     'Role created successfully.'
        // );
        $this->toast(
            variant: 'success',
            heading: 'Success',
            text: 'Role created successfully.',
        );
    }

    public function update(): void
    {
        $this->validate([
            'editName' => [
                'required',
                'string',
                'max:255',
                'unique:roles,name,' . $this->editingRoleId,
            ],

            'editSelectedPermissions' => [
                'required',
                'array',
                'min:1',
            ],
        ]);

        $role = Role::findOrFail($this->editingRoleId);

        $this->authorize('update', $role);

        $role->update([
            'name' => $this->editName,
        ]);

        $role->syncPermissions(
            $this->editSelectedPermissions
        );

        $this->resetEditForm();

        $this->dispatch('modal-close', 'edit-role');

        // session()->flash(
        //     'success',
        //     'Role updated successfully.'
        // );

        $this->toast(
            variant: 'success',
            heading: 'Success',
            text: 'Role updated successfully.'
        );
    }

    /*
    |--------------------------------------------------------------------------
    | Pagination
    |--------------------------------------------------------------------------
    */

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingPerPage()
    {
        $this->resetPage();
    }

    public function render()
    {
        $roles = Role::query()
            ->withCount('permissions')
            ->when($this->search, function ($query) {
                $query->where(
                    'name',
                    'like',
                    '%' . $this->search . '%'
                );
            })
            ->latest()
            ->paginate($this->perPage);

        return view('livewire.admin.roles.index', [

            'roles' => $roles,

            'totalRoles' => Role::count(),

            'totalPermissions' => Permission::count(),

            'totalUsers' => User::count(),

        ]);
    }
}
