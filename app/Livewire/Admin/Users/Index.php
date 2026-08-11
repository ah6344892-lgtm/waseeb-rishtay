<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;

class Index extends Component
{
    use WithPagination;

    public string $search = '';
    public int $perPage = 5;
    public string $role = '';
    public string $status = '';
    public string $sortField = 'created_at';
    public string $sortDirection = 'desc';
    public ?User $deletingUser = null;
    public bool $showDeleteModal = false;

    public function mount(): void
    {
        $this->authorize('viewAny', User::class);
    }
    public function updatingRole()
    {
        $this->resetPage();
    }

    public function updatingStatus()
    {
        $this->resetPage();
    }

    public function updatingPerPage()
    {
        $this->resetPage();
    }

    public function confirmDelete(User $user): void
    {
        $this->deletingUser = $user;
        $this->showDeleteModal = true;
    }

    public function delete(): void
    {

        if (! $this->deletingUser) {
            return;
        }

        $this->authorize('delete', $this->deletingUser);

        $this->deletingUser->delete();
        $this->deletingUser = null;
        $this->showDeleteModal = false;

        // session()->flash('success', 'User deleted successfully.');
        // $this->dispatch('notify', [
        //     'type' => 'success',
        //     'message' => 'User deleted successfully.'
        // ]);
        session()->flash('success', 'User created successfully.');
    }

    public function sortBy(string $field): void
    {
        if ($this->sortField === $field) {

            $this->sortDirection = $this->sortDirection === 'asc'
                ? 'desc'
                : 'asc';
        } else {

            $this->sortField = $field;
            $this->sortDirection = 'asc';
        }
    }

    public function resetFilters(): void
    {
        $this->reset([
            'search',
            'role',
            'status',
        ]);

        $this->perPage = 10;

        $this->sortField = 'created_at';

        $this->sortDirection = 'desc';

        $this->resetPage();
    }

    public function render()
    {
        $users = User::query()

            ->when($this->search, function ($query) {

                $query->where(function ($q) {

                    $q->where('name', 'like', "%{$this->search}%")
                        ->orWhere('email', 'like', "%{$this->search}%");
                });
            })

            ->when($this->status, function ($query) {

                $query->where('status', $this->status);
            })

            ->when($this->role, function ($query) {

                $query->role($this->role);
            })

            ->orderBy($this->sortField, $this->sortDirection)

            ->paginate($this->perPage);

        return view('admin.users.index', [
            'users' => $users,

            'totalUsers' => User::count(),

            'activeUsers' => User::where('status', 'active')->count(),

            'inactiveUsers' => User::where('status', 'inactive')->count(),
            'roles' => Role::orderBy('name')->get(),
        ]);
    }
}
