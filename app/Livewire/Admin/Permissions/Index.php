<?php

namespace App\Livewire\Admin\Permissions;

use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Permission;

class Index extends Component
{
    use WithPagination;


    public string $search = '';
    public int $perPage = 10;
    public string $name = '';
    public ?Permission $editingPermission = null;
    public ?Permission $deletingPermission = null;

    protected function rules(): array
    {
        return [

            'name' => [
                'required',
                'string',
                'max:255',
                'unique:permissions,name',
            ],

        ];
    }

    public function edit(int $id): void
    {
        $this->editingPermission = Permission::findOrFail($id);


        $this->name = $this->editingPermission->name;


        // $this->dispatch(
        //     'modal-open',
        //     name: 'edit-permission'
        // );
        $this->dispatch('modal-open', name: 'edit-permission');
    }

    public function confirmDelete(int $id): void
    {
        $this->deletingPermission = Permission::findOrFail($id);


        // $this->dispatch(
        //     'open-modal',
        //     'delete-permission'
        // );
    }

    public function delete(): void
    {

        if (!$this->deletingPermission) {
            return;
        }


        // Check permission assigned to roles
        if ($this->deletingPermission->roles()->count() > 0) {


            $this->dispatch(
                'modal-close',
                'delete-permission'
            );


            session()->flash(
                'error',
                'This permission is assigned to roles and cannot be deleted.'
            );


            return;
        }



        $this->deletingPermission->delete();



        $this->reset('deletingPermission');



        $this->dispatch(
            'modal-close',
            'delete-permission'
        );


        session()->flash(
            'success',
            'Permission deleted successfully.'
        );
    }

    public function update(): void
    {

        $this->validate([

            'name' => [

                'required',

                'string',

                'max:255',

                'unique:permissions,name,' . $this->editingPermission->id,

            ],

        ]);



        $this->editingPermission->update([

            'name' => $this->name,

        ]);



        $this->reset([

            'name',

            'editingPermission',

        ]);



        $this->dispatch(
            'close-modal',
            'edit-permission'
        );


        session()->flash(

            'success',

            'Permission updated successfully.'

        );
    }

    public function save(): void
    {
        $this->validate();


        Permission::create([

            'name' => $this->name,

            'guard_name' => 'web',

        ]);


        $this->reset('name');


        $this->dispatch('close-modal', 'create-permission');


        session()->flash(
            'success',
            'Permission created successfully.'
        );
    }

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

        $permissions = Permission::query()

            ->when($this->search, function ($query) {

                $query->where(
                    'name',
                    'like',
                    '%' . $this->search . '%'
                );
            })

            ->latest()

            ->paginate($this->perPage);



        return view('livewire.admin.permissions.index', [

            'permissions' => $permissions,

            'totalPermissions' => Permission::count(),

        ]);
    }
}
