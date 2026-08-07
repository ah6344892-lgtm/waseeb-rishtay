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

            Edit User

        </flux:breadcrumbs.item>

    </flux:breadcrumbs>

    {{-- Header --}}
    <div class="flex items-center justify-between">

        <div>

            <flux:heading size="xl">

                Edit User

            </flux:heading>

            <flux:text class="mt-2">

                Update user information.

            </flux:text>

        </div>

        <flux:button variant="ghost" icon="arrow-left" :href="route('admin.users.index')">

            Back to Users

        </flux:button>

    </div>
    <div wire:loading.class="opacity-50 pointer-events-none" wire:target="update">
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
                        New Password (optional)
                    </flux:label>

                    <flux:input type="password" autocomplete="new-password" wire:model.live="password" />

                    <flux:error name="password" />

                </flux:field>
                <flux:field>

                    <flux:label>
                        Confirm New Password
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

                    @if ($currentAvatar)
                        <div class="mb-6">

                            <p class="mb-2 text-sm text-zinc-500">

                                Current Avatar

                            </p>

                            <img src="{{ $user->avatar_url }}" class="h-24 w-24 rounded-full border object-cover">

                        </div>
                        <div>
                            @if ($currentAvatar)
                                <flux:button variant="danger" size="sm" wire:click="removeAvatar">

                                    Remove Avatar

                                </flux:button>
                            @endif
                        </div>
                    @endif

                    <flux:field>

                        <flux:label>
                            Change Avatar
                        </flux:label>

                        <input type="file" wire:model="avatar" accept="image/*"
                            class="block w-full rounded-lg border border-zinc-300 px-3 py-2">

                        <flux:error name="avatar" />

                        <div wire:loading wire:target="avatar">

                            <flux:text>

                                Uploading avatar...

                            </flux:text>

                        </div>

                    </flux:field>
                    @if ($avatar)
                        <div class="mt-5">

                            <p class="mb-2 text-sm text-zinc-500">
                                New Avatar Preview
                            </p>

                            <img src="{{ $avatar->temporaryUrl() }}" class="h-24 w-24 rounded-full border object-cover">

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

                <flux:button variant="primary" wire:click="update" wire:loading.attr="disabled" wire:target="update">

                    <span wire:loading.remove wire:target="update">
                        Update User
                    </span>

                    <span wire:loading wire:target="update">
                        Updating...
                    </span>

                </flux:button>

            </div>

        </flux:card>

    </div>
</div>
