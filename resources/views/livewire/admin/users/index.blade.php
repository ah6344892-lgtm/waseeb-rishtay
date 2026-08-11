<div class="space-y-8">

    {{-- Breadcrumb --}}
    <flux:breadcrumbs>
        <flux:breadcrumbs.item :href="route('admin.dashboard')">
            Dashboard
        </flux:breadcrumbs.item>

        <flux:breadcrumbs.item>
            Users
        </flux:breadcrumbs.item>
    </flux:breadcrumbs>

    {{-- Header --}}
    <div class="flex items-center justify-between">

        <div>

            <flux:heading size="xl">
                Users
            </flux:heading>

            <flux:text class="mt-2">
                Manage all system users.
            </flux:text>

        </div>

        <flux:button variant="primary" icon="plus" :href="route('admin.users.create')">

            Add User

        </flux:button>

    </div>
    <div class="grid gap-6 md:grid-cols-3">

        <flux:card class="p-6">

            <p class="text-sm text-zinc-500">
                Total Users
            </p>

            <h2 class="mt-2 text-3xl font-bold">
                {{ Number::abbreviate($totalUsers) }}
            </h2>

        </flux:card>

        <flux:card class="p-6">

            <p class="text-sm text-zinc-500">
                Active Users
            </p>

            <h2 class="mt-2 text-3xl font-bold text-green-600">
                {{ Number::abbreviate($activeUsers) }}
            </h2>

        </flux:card>

        <flux:card class="p-6">

            <p class="text-sm text-zinc-500">
                Inactive Users
            </p>

            <h2 class="mt-2 text-3xl font-bold text-red-600">
                {{ Number::abbreviate($inactiveUsers) }}
            </h2>

        </flux:card>

    </div>
    {{-- <div class="max-w-md">

        <flux:input wire:model.live.debounce.500ms="search" icon="magnifying-glass"
            placeholder="Search by name or email..." />

    </div> --}}
    @if (session()->has('success'))
        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 2000)" x-show="show" x-cloak
            x-transition:enter="transform transition ease-out duration-300"
            x-transition:enter-start="-translate-y-full opacity-0" x-transition:enter-end="translate-y-0 opacity-100"
            x-transition:leave="transform transition ease-in duration-300"
            x-transition:leave-start="translate-y-0 opacity-100" x-transition:leave-end="-translate-y-full opacity-0"
            class="fixed top-4 left-1/2 z-50 w-full max-w-md -translate-x-1/2 px-4">
            <flux:callout color="green" icon="check-circle">
                {{ session('success') }}
            </flux:callout>
        </div>
    @endif
    <div class="grid gap-4 md:grid-cols-5">

        {{-- Search --}}
        <flux:input wire:model.live.debounce.500ms="search" placeholder="Search..." icon="magnifying-glass" />

        {{-- Role --}}
        <flux:select wire:model.live="role">

            <option value="">
                All Roles
            </option>

            @foreach ($roles as $role)
                <option value="{{ $role->name }}">

                    {{ $role->name }}

                </option>
            @endforeach

        </flux:select>

        {{-- Status --}}
        <flux:select wire:model.live="status">

            <option value="">
                All Status
            </option>

            <option value="active">
                Active
            </option>

            <option value="inactive">
                Inactive
            </option>

        </flux:select>

        {{-- Per Page --}}
        <flux:select wire:model.live="perPage">

            <option value="10">10</option>

            <option value="25">25</option>

            <option value="50">50</option>

            <option value="100">100</option>

        </flux:select>

        {{-- Reset --}}
        <flux:button variant="ghost" wire:click="resetFilters" icon="arrow-path">

            Reset

        </flux:button>

    </div>
    <div>

        <flux:card class="overflow-hidden p-0">

            <flux:table class="p-1">

                <flux:table.columns>

                    <flux:table.column wire:click="sortBy('name')" class="cursor-pointer">User</flux:table.column>

                    <flux:table.column wire:click="sortBy('email')" class="cursor-pointer">Email</flux:table.column>

                    <flux:table.column>Role</flux:table.column>

                    <flux:table.column>Status</flux:table.column>

                    <flux:table.column wire:click="sortBy('created_at')" class="cursor-pointer">Joined
                    </flux:table.column>

                    <flux:table.column align="end">
                        Actions
                    </flux:table.column>

                </flux:table.columns>

                <flux:table.rows>

                    @forelse ($users as $user)
                        <flux:table.row>

                            {{-- User --}}
                            <flux:table.cell>

                                <div class="flex items-center gap-3">

                                    <img src="{{ $user->avatar_url }}" alt="{{ $user->name }}"
                                        class="h-10 w-10 rounded-full object-cover border">

                                    <div>

                                        <div class="font-medium">
                                            {{ $user->name }}
                                        </div>

                                        <div class="text-xs text-zinc-500">
                                            #{{ $user->id }}
                                        </div>

                                    </div>

                                </div>

                            </flux:table.cell>

                            {{-- Email --}}
                            <flux:table.cell>

                                {{ $user->email }}

                            </flux:table.cell>

                            {{-- Role --}}
                            <flux:table.cell>

                                <flux:badge color="sky">

                                    {{ $user->getRoleNames()->first() ?? 'No Role' }}

                                </flux:badge>

                            </flux:table.cell>

                            {{-- Status --}}
                            <flux:table.cell>

                                @if ($user->status === 'active')
                                    <flux:badge color="green">

                                        Active

                                    </flux:badge>
                                @else
                                    <flux:badge color="red">

                                        Inactive

                                    </flux:badge>
                                @endif

                            </flux:table.cell>

                            {{-- Joined --}}
                            <flux:table.cell>

                                {{ $user->created_at->format('d M, Y') }}

                            </flux:table.cell>

                            {{-- Actions --}}
                            <flux:table.cell align="end">

                                <div class="flex justify-end gap-2">

                                    @can('update', $user)
                                        <flux:button size="xs" variant="ghost" icon="pencil-square"
                                            :href="route('admin.users.edit', $user)">

                                            Edit

                                        </flux:button>
                                    @endcan

                                    @can('delete', $user)
                                        <flux:button size="xs" variant="danger" icon="trash"
                                            wire:click="confirmDelete({{ $user->id }})">

                                            Delete

                                        </flux:button>
                                    @endcan

                                </div>

                            </flux:table.cell>

                        </flux:table.row>

                    @empty

                        <flux:table.row>

                            <flux:table.cell colspan="6">

                                <div class="flex flex-col items-center justify-center py-14">

                                    <flux:icon.users class="size-12 text-zinc-400" />

                                    <flux:heading size="sm" class="mt-4">

                                        No Users Found

                                    </flux:heading>

                                    <flux:text class="mt-2">

                                        Create your first user to get started.

                                    </flux:text>

                                    @can('create', User::class)
                                        <flux:button class="mt-6" variant="primary" icon="plus"
                                            :href="route('admin.users.create')">

                                            Add User

                                        </flux:button>
                                    @endcan

                                </div>

                            </flux:table.cell>

                        </flux:table.row>
                    @endforelse

                </flux:table.rows>

            </flux:table>

        </flux:card>
        @if ($users->hasPages())
            <div class="mt-6">

                {{ $users->links() }}

            </div>
        @endif
    </div>
    <flux:modal wire:model="showDeleteModal">

        <div class="space-y-6">

            <div>

                <flux:heading size="lg">

                    Delete User

                </flux:heading>

                <flux:text class="mt-2">

                    Are you sure you want to delete this user?

                </flux:text>

            </div>

            <div class="flex justify-end gap-3">

                <flux:button variant="ghost" wire:click="$set('showDeleteModal', false)">

                    Cancel

                </flux:button>

                <flux:button variant="danger" wire:click="delete" wire:loading.attr="disabled">

                    Delete

                </flux:button>

            </div>

        </div>

    </flux:modal>
</div>
