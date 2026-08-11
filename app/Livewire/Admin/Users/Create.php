<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Illuminate\Validation\Rules\Password;
use Livewire\Component;
use Spatie\Permission\Models\Role;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Create extends Component
{
    use WithFileUploads;

    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';
    public string $role = '';
    public string $status = 'active';
    public $avatar;

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:25'],

            'email' => ['required', 'email', 'unique:users,email'],

            'password' => ['required', 'confirmed', Password::defaults()],

            'role' => ['required', 'exists:roles,name'],

            'status' => ['required', 'in:active,inactive'],

            'avatar' => ['nullable', 'image', 'max:2048', 'mimes:jpg,jpeg,png,webp']
        ];
    }

    public function message(): array
    {
        return [
            'password.confirmed' => 'The password confirmation does not match.',
            'role.exists' => 'The selected role is invalid.',
            'status.in' => 'The selected status is invalid.',
            'email.unique' => 'The email has already been taken.',
            'required' => 'The :attribute field is required.',
            'max' => 'The :attribute may not be greater than :max characters.',
            'string' => 'The :attribute must be a string.',
            'confirmed' => 'The :attribute confirmation does not match.',
            'password' => 'The :attribute field is required.',
            'in' => 'The :attribute field is required.',
            'exists' => 'The :attribute field is required.',
            'email' => 'The :attribute field is required.',
            'unique' => 'The :attribute field is required.',
            'required' => 'The :attribute field is required.',
        ];
    }

    public function mount(): void
    {
        $this->authorize('create', User::class);
    }

    /*
    public function save(): void
    {
        $this->authorize('create', User::class);

        $validated = $this->validate();

        $avatar = null;

        if ($this->avatar) {

            $avatar = $this->avatar->store('avatars', 'public');
        }

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => $validated['password'],
            'status' => $validated['status'],
            'avatar' => $avatar,
        ]);

        $user->assignRole($validated['role']);

        session()->flash('success', 'User created successfully.');

        $this->redirectRoute('admin.users.index', navigate: true);
    }
    */
    public function save(): void
    {
        /*
    |--------------------------------------------------------------------------
    | Create Authorization
    |--------------------------------------------------------------------------
    */

        $this->authorize('create', User::class);

        /*
    |--------------------------------------------------------------------------
    | Validate
    |--------------------------------------------------------------------------
    */

        $validated = $this->validate();

        /*
    |--------------------------------------------------------------------------
    | Role Authorization
    |--------------------------------------------------------------------------
    */

        $this->authorize(
            'assignRoleToNewUser',
            [
                new User,
                $validated['role'],
            ]
        );

        /*
    |--------------------------------------------------------------------------
    | Avatar
    |--------------------------------------------------------------------------
    */

        $avatar = null;

        if ($this->avatar) {
            $avatar = $this->avatar->store(
                'avatars',
                'public'
            );
        }

        /*
    |--------------------------------------------------------------------------
    | Create User
    |--------------------------------------------------------------------------
    */

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => $validated['password'],
            'status' => $validated['status'],
            'avatar' => $avatar,
        ]);

        /*
    |--------------------------------------------------------------------------
    | Assign Role
    |--------------------------------------------------------------------------
    */

        $user->assignRole($validated['role']);

        /*
    |--------------------------------------------------------------------------
    | Success
    |--------------------------------------------------------------------------
    */

        session()->flash(
            'success',
            'User created successfully.'
        );

        $this->redirectRoute(
            'admin.users.index',
            navigate: true
        );
    }
    public function resetForm(): void
    {
        $this->reset([
            'name',
            'email',
            'password',
            'password_confirmation',
            'role',
            'avatar',
        ]);

        $this->status = 'active';

        $this->resetValidation();
    }

    public function updated($property): void
    {
        $this->validateOnly($property);
    }

    public function render()
    {
        $authUser = auth()->user();

        $roles = Role::query()
            ->when(
                ! $authUser->hasRole('super-admin'),
                fn($query) => $query->where('name', 'user')
            )
            ->orderBy('name')
            ->get();

        return view('livewire.admin.users.create', [
            'roles' => $roles,
        ]);
    }
}
