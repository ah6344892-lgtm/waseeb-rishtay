<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Spatie\Permission\Models\Role;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    public User $user;
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';
    public string $role = '';
    public string $status = 'active';
    public $avatar;
    public ?string $currentAvatar = null;

    public function mount(User $user): void
    {
        $this->user = $user;

        $this->name = $user->name;

        $this->email = $user->email;

        $this->status = $user->status;

        $this->role = $user->getRoleNames()->first() ?? '';

        $this->currentAvatar = $user->avatar;
    }

    protected function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],

            'email' => [
                'required',
                'email',
                Rule::unique('users', 'email')->ignore($this->user->id),
            ],

            'password' => [
                'nullable',
                'confirmed',
                Password::defaults(),
            ],

            'role' => [
                'required',
                'exists:roles,name',
            ],

            'status' => [
                'required',
                'in:active,inactive',
            ],

            'avatar' => ['nullable', 'image', 'max:2048', 'mimes:jpg,jpeg,png,webp'],
        ];
    }

    public function updated($property): void
    {
        $this->validateOnly($property);
    }

    public function update(): void
    {
        $validated = $this->validate();

        $this->user->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'status' => $validated['status'],
        ]);

        if (! empty($validated['password'])) {

            $this->user->update([
                'password' => $validated['password'],
            ]);
        }
        if ($this->avatar) {

            if (
                $this->user->avatar &&
                Storage::disk('public')->exists($this->user->avatar)
            ) {
                Storage::disk('public')->delete($this->user->avatar);
            }

            $this->user->avatar = $this->avatar->store(
                'avatars',
                'public'
            );
        }

        $this->user->save();

        $this->user->syncRoles($validated['role']);

        session()->flash('success', 'User updated successfully.');

        $this->redirectRoute('admin.users.index', navigate: true);
    }

    public function resetForm(): void
    {
        $this->resetValidation();

        $this->name = $this->user->name;
        $this->email = $this->user->email;
        $this->status = $this->user->status;
        $this->role = $this->user->getRoleNames()->first() ?? '';

        $this->password = '';
        $this->password_confirmation = '';
        $this->avatar = null;
    }

    public function removeAvatar(): void
    {
        if (
            $this->user->avatar &&
            Storage::disk('public')->exists($this->user->avatar)
        ) {
            Storage::disk('public')->delete($this->user->avatar);
        }

        $this->user->update([
            'avatar' => null,
        ]);

        $this->currentAvatar = null;
    }

    public function render()
    {
        return view('livewire.admin.users.edit', ['roles' => Role::orderBy('name')->get()]);
    }
}
