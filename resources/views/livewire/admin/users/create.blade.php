<div class="space-y-8">

    {{-- Breadcrumb --}}
    <flux:breadcrumbs>

        <flux:breadcrumbs.item :href="route('admin.dashboard')">
            Dashboard
        </flux:breadcrumbs.item>

        <flux:breadcrumbs.item :href="route('admin.users.index')">
            Users
        </flux:breadcrumbs.item>

        <flux:breadcrumbs.item>
            Create User
        </flux:breadcrumbs.item>

    </flux:breadcrumbs>

    {{-- Header --}}
    <div class="flex items-center justify-between">

        <div>

            <flux:heading size="xl">
                Create User
            </flux:heading>

            <flux:text class="mt-2">
                Add a new system user.
            </flux:text>

        </div>

        <flux:button variant="ghost" icon="arrow-left" :href="route('admin.users.index')">

            Back to Users

        </flux:button>

    </div>
    <flux:card class="p-8">

        <div class="grid gap-6 md:grid-cols-2">
            <flux:field>

                <flux:label>
                    Name
                </flux:label>

                <flux:input wire:model.live="name" placeholder="Full name" />

                <flux:error name="name" />

            </flux:field>
            <flux:field>

                <flux:label>
                    Email
                </flux:label>

                <flux:input type="email" wire:model.live="email" placeholder="Email address" />

                <flux:error name="email" />

            </flux:field>
            <flux:field>

                <flux:label>
                    Password
                </flux:label>

                <flux:input type="password" autocomplete="new-password" wire:model.live="password" />

                <flux:error name="password" />

            </flux:field>
            <flux:field>

                <flux:label>
                    Confirm Password
                </flux:label>

                <flux:input type="password" autocomplete="new-password" wire:model.live="password_confirmation" />

            </flux:field>
            <flux:field>

                <flux:label>
                    Role
                </flux:label>

                <flux:select wire:model.live="role">

                    <option value="">
                        Select Role
                    </option>

                    @foreach ($roles as $role)
                        <option value="{{ $role->name }}">
                            {{ $role->name }}
                        </option>
                    @endforeach

                </flux:select>

                <flux:error name="role" />

            </flux:field>
            <flux:field>

                <flux:label>
                    Status
                </flux:label>

                <flux:select wire:model.live="status">

                    <option value="active">
                        Active
                    </option>

                    <option value="inactive">
                        Inactive
                    </option>

                </flux:select>

            </flux:field>
            <flux:field>

                <flux:label>
                    Avatar
                </flux:label>

                <input type="file" wire:model.live="avatar" accept="image/*"
                    class="block w-full rounded-lg border border-zinc-300 px-3 py-2">

                <flux:error name="avatar" />
                @if ($avatar)
                    <div class="mt-4">

                        <img src="{{ $avatar->temporaryUrl() }}" class="h-24 w-24 rounded-full object-cover border">

                    </div>
                @endif

            </flux:field>
        </div>

        <div class="mt-8 flex justify-end gap-3">

            <flux:button variant="ghost" wire:click="resetForm">

                Reset

            </flux:button>

            <flux:button variant="ghost" :href="route('admin.users.index')">

                Cancel

            </flux:button>

            <flux:button variant="primary" wire:click="save" wire:loading.attr="disabled" wire:target="save">

                <span wire:loading.remove>
                    Create User
                </span>

                <span wire:loading>
                    Creating...
                </span>

            </flux:button>

        </div>

    </flux:card>

</div>
