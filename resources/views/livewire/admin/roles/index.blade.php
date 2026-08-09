<div class="space-y-8">

    {{-- ========================================= --}}
    {{-- Header --}}
    {{-- ========================================= --}}
    <div class="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">

        <div class="space-y-2">
            <flux:heading size="xl">
                Roles Management
            </flux:heading>

            <flux:subheading>
                Manage system roles and their permissions.
            </flux:subheading>

            <flux:breadcrumbs class="mt-4">
                <flux:breadcrumbs.item :href="route('dashboard')">
                    Dashboard
                </flux:breadcrumbs.item>

                <flux:breadcrumbs.item>
                    Roles
                </flux:breadcrumbs.item>
            </flux:breadcrumbs>
        </div>

        @can('create', Role::class)
            <flux:button variant="primary" icon="plus" x-on:click="$flux.modal('create-role').show()">
                Add Role
            </flux:button>
        @endcan

    </div>

    {{-- ========================================= --}}
    {{-- Stats Cards --}}
    {{-- ========================================= --}}
    <div class="grid grid-cols-1 gap-6 md:grid-cols-2 xl:grid-cols-3">

        {{-- Total Roles --}}
        <flux:card class="p-6">

            <div class="flex items-center justify-between">

                <div class="space-y-2">

                    <flux:text class="text-zinc-500">
                        Total Roles
                    </flux:text>

                    <flux:heading size="xl">
                        {{ $totalRoles }}
                    </flux:heading>

                </div>

                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-100 dark:bg-blue-500/10">

                    <flux:icon.shield-check class="size-6 text-blue-600" />

                </div>

            </div>

        </flux:card>

        {{-- Total Permissions --}}
        <flux:card class="p-6">

            <div class="flex items-center justify-between">

                <div class="space-y-2">

                    <flux:text class="text-zinc-500">
                        Permissions
                    </flux:text>

                    <flux:heading size="xl">
                        {{ $totalPermissions }}
                    </flux:heading>

                </div>

                <div
                    class="flex h-12 w-12 items-center justify-center rounded-xl bg-emerald-100 dark:bg-emerald-500/10">

                    <flux:icon.key class="size-6 text-emerald-600" />

                </div>

            </div>

        </flux:card>

        {{-- Assigned Users --}}
        <flux:card class="p-6">

            <div class="flex items-center justify-between">

                <div class="space-y-2">

                    <flux:text class="text-zinc-500">
                        Assigned Users
                    </flux:text>

                    <flux:heading size="xl">
                        {{ $totalUsers }}
                    </flux:heading>

                </div>

                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-amber-100 dark:bg-amber-500/10">

                    <flux:icon.users class="size-6 text-amber-600" />

                </div>

            </div>

        </flux:card>

    </div>
    {{-- ========================================= --}}
    {{-- Search & Filters --}}
    {{-- ========================================= --}}
    <div class="rounded-xl border border-zinc-200 bg-white p-4 shadow-sm dark:border-zinc-800 dark:bg-zinc-900">

        <div class="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">

            {{-- Left Side --}}
            <div class="flex flex-1 flex-col gap-4 sm:flex-row">

                {{-- Search --}}
                <div class="flex-1">
                    <flux:input wire:model.live.debounce.300ms="search" icon="magnifying-glass"
                        placeholder="Search roles..." />
                </div>

                {{-- Per Page --}}
                <div class="w-full sm:w-40">
                    <flux:select wire:model.live="perPage">

                        <option value="10">10 per page</option>
                        <option value="25">25 per page</option>
                        <option value="50">50 per page</option>
                        <option value="100">100 per page</option>

                    </flux:select>
                </div>

            </div>

            {{-- Right Side --}}
            <div class="flex items-center justify-end">

                <flux:button variant="primary" icon="plus">
                    Add Role
                </flux:button>

            </div>

        </div>

    </div>
    {{-- ========================================= --}}
    {{-- Roles Table --}}
    {{-- ========================================= --}}
    <div
        class="overflow-hidden rounded-xl border border-zinc-200 bg-white shadow-sm dark:border-zinc-800 dark:bg-zinc-900">

        <div class="overflow-x-auto">

            <table class="min-w-full divide-y divide-zinc-200 dark:divide-zinc-800">

                <thead class="bg-zinc-50 dark:bg-zinc-800/50">
                    <tr>

                        <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-zinc-500">
                            Role
                        </th>

                        <th class="px-6 py-4 text-center text-xs font-semibold uppercase tracking-wider text-zinc-500">
                            Permissions
                        </th>

                        <th class="px-6 py-4 text-center text-xs font-semibold uppercase tracking-wider text-zinc-500">
                            Users
                        </th>

                        <th class="px-6 py-4 text-center text-xs font-semibold uppercase tracking-wider text-zinc-500">
                            Created
                        </th>

                        <th class="px-6 py-4 text-right text-xs font-semibold uppercase tracking-wider text-zinc-500">
                            Actions
                        </th>

                    </tr>
                </thead>

                <tbody class="divide-y divide-zinc-200 dark:divide-zinc-800">

                    @forelse ($roles as $role)
                        <tr class="hover:bg-zinc-50 dark:hover:bg-zinc-800/40 transition">

                            {{-- Role --}}
                            <td class="px-6 py-4">

                                <div class="space-y-1">

                                    <p class="font-semibold text-zinc-900 dark:text-white">
                                        {{ $role->name }}
                                    </p>

                                    <p class="text-sm text-zinc-500">
                                        {{ $role->guard_name }}
                                    </p>

                                </div>

                            </td>

                            {{-- Permissions --}}
                            <td class="px-6 py-4 text-center">

                                <flux:badge color="sky">
                                    {{ $role->permissions_count }} Permissions
                                </flux:badge>

                            </td>

                            {{-- Users --}}
                            <td class="px-6 py-4 text-center">

                                <flux:badge color="emerald">
                                    {{ $role->users_count }} Users
                                </flux:badge>

                            </td>

                            {{-- Created --}}
                            <td class="px-6 py-4 text-center text-sm text-zinc-500">
                                {{ $role->created_at->format('d M Y') }}
                            </td>

                            {{-- Actions --}}
                            <td class="px-6 py-4">

                                <div class="flex justify-end gap-2">

                                    @can('update', $role)
                                        <flux:button size="sm" variant="ghost" icon="pencil-square"
                                            wire:click="edit({{ $role->id }})"
                                            x-on:click="$flux.modal('edit-role').show()" />
                                    @endcan

                                    @can('delete', $role)
                                        <flux:button size="sm" variant="ghost" icon="trash"
                                            class="text-red-600 hover:text-red-700"
                                            wire:click="confirmDelete({{ $role->id }})"
                                            x-on:click="$flux.modal('delete-role').show()" />
                                    @endcan

                                </div>

                            </td>

                        </tr>
                    @empty
                        <tr>
                            {{-- ========================================= --}}
                            {{-- Empty State --}}
                            {{-- ========================================= --}}
                            <div
                                class="flex flex-col items-center justify-center rounded-xl border border-dashed border-zinc-300 bg-white px-6 py-16 text-center dark:border-zinc-700 dark:bg-zinc-900">

                                <div
                                    class="mb-4 flex h-16 w-16 items-center justify-center rounded-full bg-zinc-100 dark:bg-zinc-800">

                                    <flux:icon.shield-check class="size-8 text-zinc-400" />

                                </div>

                                <flux:heading size="lg">
                                    No Roles Found
                                </flux:heading>

                                <flux:subheading class="mt-2">
                                    There are no roles available yet. Create your first role to get started.
                                </flux:subheading>

                                <div class="mt-6">
                                    <flux:button variant="primary" icon="plus">
                                        Create Role
                                    </flux:button>
                                </div>

                            </div>
                        </tr>
                    @endforelse

                </tbody>

            </table>

        </div>

    </div>
    {{-- ========================================= --}}
    {{-- Table Footer --}}
    {{-- ========================================= --}}
    <div class="w-full">
        {{ $roles->links() }}
    </div>

    {{-- ========================================= --}}
    {{-- Create Role Modal --}}
    {{-- ========================================= --}}

    <flux:modal name="create-role" class="md:w-3xl">

        <form wire:submit="save">

            <div class="space-y-6">

                {{-- Header --}}
                <div>
                    <flux:heading size="lg">
                        Create Role
                    </flux:heading>

                    <flux:text class="mt-2">
                        Create a new role and assign permissions.
                    </flux:text>
                </div>


                {{-- Role Name --}}
                <flux:input wire:model="name" label="Role Name" placeholder="e.g. manager" autocomplete="off" />

                @error('name')
                    <flux:text class="text-red-600">
                        {{ $message }}
                    </flux:text>
                @enderror


                {{-- Permissions --}}
                <div class="space-y-4">

                    <div class="flex items-center justify-between">

                        <div>
                            <flux:heading size="sm">
                                Permissions
                            </flux:heading>

                            <flux:text class="text-sm">
                                Select permissions for this role.
                            </flux:text>
                        </div>

                    </div>


                    @if ($this->groupedPermissions->isNotEmpty())

                        <div class="space-y-4">

                            @foreach ($this->groupedPermissions as $group => $permissions)
                                <div wire:key="permission-group-{{ $group }}"
                                    class="rounded-xl border border-zinc-200 dark:border-zinc-700">

                                    {{-- Group Header --}}
                                    <div
                                        class="flex flex-col gap-3 border-b border-zinc-200 bg-zinc-50 px-4 py-3 dark:border-zinc-700 dark:bg-zinc-800/50 sm:flex-row sm:items-center sm:justify-between">

                                        <div>
                                            <flux:heading size="sm">
                                                {{ str($group)->headline() }}
                                            </flux:heading>

                                            <flux:text class="text-xs">
                                                {{ $permissions->count() }} permissions
                                            </flux:text>
                                        </div>


                                        {{-- Group Actions --}}
                                        <div class="flex items-center gap-2">

                                            <flux:button type="button" size="sm" variant="ghost"
                                                wire:click="selectGroup('{{ $group }}')">
                                                Select All
                                            </flux:button>

                                            <flux:button type="button" size="sm" variant="ghost"
                                                wire:click="unselectGroup('{{ $group }}')">
                                                Clear
                                            </flux:button>

                                        </div>

                                    </div>


                                    {{-- Permission List --}}
                                    <div class="grid grid-cols-1 gap-2 p-4 sm:grid-cols-2">

                                        @foreach ($permissions as $permission)
                                            <label wire:key="permission-{{ $permission->id }}"
                                                class="flex cursor-pointer items-center gap-3 rounded-lg border border-transparent p-3 transition hover:border-zinc-200 hover:bg-zinc-50 dark:hover:border-zinc-700 dark:hover:bg-zinc-800">

                                                <input type="checkbox" wire:model="selectedPermissions"
                                                    value="{{ $permission->name }}"
                                                    class="size-4 rounded border-zinc-300 text-indigo-600 focus:ring-indigo-500">

                                                <div class="min-w-0">

                                                    <p class="text-sm font-medium text-zinc-900 dark:text-white">
                                                        {{ str(explode('.', $permission->name)[1] ?? $permission->name)->headline() }}
                                                    </p>

                                                    <p class="truncate text-xs text-zinc-500">
                                                        {{ $permission->name }}
                                                    </p>

                                                </div>

                                            </label>
                                        @endforeach

                                    </div>

                                </div>
                            @endforeach

                        </div>
                    @else
                        <div
                            class="rounded-xl border border-dashed border-zinc-300 p-8 text-center dark:border-zinc-700">

                            <flux:icon name="key" class="mx-auto size-8 text-zinc-400" />

                            <flux:heading size="sm" class="mt-3">
                                No Permissions Found
                            </flux:heading>

                            <flux:text class="mt-1">
                                Create permissions first before creating a role.
                            </flux:text>

                        </div>

                    @endif


                    @error('selectedPermissions')
                        <flux:text class="text-red-600">
                            {{ $message }}
                        </flux:text>
                    @enderror

                </div>


                {{-- Footer --}}
                <div class="flex justify-end gap-3 border-t border-zinc-200 pt-5 dark:border-zinc-700">

                    <flux:modal.close>

                        <flux:button type="button" variant="ghost">
                            Cancel
                        </flux:button>

                    </flux:modal.close>


                    <flux:button type="submit" variant="primary" icon="plus" wire:loading.attr="disabled"
                        wire:target="save">

                        <span wire:loading.remove wire:target="save">
                            Create Role
                        </span>

                        <span wire:loading wire:target="save">
                            Creating...
                        </span>

                    </flux:button>

                </div>

            </div>

        </form>

    </flux:modal>
    {{-- ========================================= --}}
    {{-- Edit Role Modal --}}
    {{-- ========================================= --}}

    <flux:modal name="edit-role" class="md:w-3xl">

        <form wire:submit="update">

            <div class="space-y-6">

                {{-- Header --}}
                <div>
                    <flux:heading size="lg">
                        Edit Role
                    </flux:heading>

                    <flux:text class="mt-2">
                        Update the role name and assigned permissions.
                    </flux:text>
                </div>


                {{-- Role Name --}}
                <div>

                    <flux:input wire:model="editName" label="Role Name" placeholder="Enter role name"
                        autocomplete="off" />

                    @error('editName')
                        <flux:text class="mt-1 text-red-600">
                            {{ $message }}
                        </flux:text>
                    @enderror

                </div>


                {{-- Permissions --}}
                <div class="space-y-4">

                    <div>

                        <flux:heading size="sm">
                            Permissions
                        </flux:heading>

                        <flux:text class="text-sm">
                            Select the permissions this role should have.
                        </flux:text>

                    </div>


                    @if ($this->groupedPermissions->isNotEmpty())

                        <div class="space-y-4">

                            @foreach ($this->groupedPermissions as $group => $permissions)
                                <div wire:key="edit-permission-group-{{ $group }}"
                                    class="rounded-xl border border-zinc-200 dark:border-zinc-700">

                                    {{-- Group Header --}}
                                    <div
                                        class="flex flex-col gap-3 border-b border-zinc-200 bg-zinc-50 px-4 py-3 dark:border-zinc-700 dark:bg-zinc-800/50 sm:flex-row sm:items-center sm:justify-between">

                                        <div>

                                            <flux:heading size="sm">
                                                {{ str($group)->headline() }}
                                            </flux:heading>

                                            <flux:text class="text-xs">
                                                {{ $permissions->count() }} permissions
                                            </flux:text>

                                        </div>


                                        {{-- Group Actions --}}
                                        <div class="flex items-center gap-2">

                                            <flux:button type="button" size="sm" variant="ghost"
                                                wire:click="selectEditGroup('{{ $group }}')">
                                                Select All
                                            </flux:button>

                                            <flux:button type="button" size="sm" variant="ghost"
                                                wire:click="unselectEditGroup('{{ $group }}')">
                                                Clear
                                            </flux:button>

                                        </div>

                                    </div>


                                    {{-- Permissions --}}
                                    <div class="grid grid-cols-1 gap-2 p-4 sm:grid-cols-2">

                                        @foreach ($permissions as $permission)
                                            <label wire:key="edit-permission-{{ $permission->id }}"
                                                class="flex cursor-pointer items-center gap-3 rounded-lg border border-transparent p-3 transition hover:border-zinc-200 hover:bg-zinc-50 dark:hover:border-zinc-700 dark:hover:bg-zinc-800">

                                                <input type="checkbox" wire:model="editSelectedPermissions"
                                                    value="{{ $permission->name }}"
                                                    class="size-4 rounded border-zinc-300 text-indigo-600 focus:ring-indigo-500">

                                                <div class="min-w-0">

                                                    <p class="text-sm font-medium text-zinc-900 dark:text-white">
                                                        {{ str(explode('.', $permission->name)[1] ?? $permission->name)->headline() }}
                                                    </p>

                                                    <p class="truncate text-xs text-zinc-500">
                                                        {{ $permission->name }}
                                                    </p>

                                                </div>

                                            </label>
                                        @endforeach

                                    </div>

                                </div>
                            @endforeach

                        </div>
                    @else
                        <div
                            class="rounded-xl border border-dashed border-zinc-300 p-8 text-center dark:border-zinc-700">

                            <flux:icon name="key" class="mx-auto size-8 text-zinc-400" />

                            <flux:heading size="sm" class="mt-3">
                                No Permissions Found
                            </flux:heading>

                            <flux:text class="mt-1">
                                Create permissions first before editing a role.
                            </flux:text>

                        </div>

                    @endif


                    @error('editSelectedPermissions')
                        <flux:text class="text-red-600">
                            {{ $message }}
                        </flux:text>
                    @enderror

                </div>


                {{-- Footer --}}
                <div class="flex justify-end gap-3 border-t border-zinc-200 pt-5 dark:border-zinc-700">

                    <flux:modal.close>

                        <flux:button type="button" variant="ghost" wire:click="resetEditForm">
                            Cancel
                        </flux:button>

                    </flux:modal.close>


                    <flux:button type="submit" variant="primary" icon="check" wire:loading.attr="disabled"
                        wire:target="update">

                        <span wire:loading.remove wire:target="update">
                            Update Role
                        </span>

                        <span wire:loading wire:target="update">
                            Updating...
                        </span>

                    </flux:button>

                </div>

            </div>

        </form>

    </flux:modal>
    {{-- ========================================= --}}
    {{-- Delete Role Modal --}}
    {{-- ========================================= --}}

    <flux:modal name="delete-role" class="md:w-md">

        <div class="space-y-6">

            {{-- Header --}}
            <div class="flex items-start gap-4">

                <div
                    class="flex size-10 shrink-0 items-center justify-center rounded-full bg-red-100 dark:bg-red-900/30">

                    <flux:icon name="trash" class="size-5 text-red-600" />

                </div>

                <div>

                    <flux:heading size="lg">
                        Delete Role
                    </flux:heading>

                    <flux:text class="mt-1">
                        This action cannot be undone.
                    </flux:text>

                </div>

            </div>


            {{-- Message --}}
            <div class="rounded-lg bg-zinc-50 p-4 dark:bg-zinc-800">

                <flux:text>

                    Are you sure you want to delete the role

                    <strong class="text-zinc-900 dark:text-white">
                        {{ $deletingRoleName }}
                    </strong>

                    ?

                </flux:text>

            </div>


            {{-- Warning --}}
            <div
                class="flex gap-3 rounded-lg border border-red-200 bg-red-50 p-4 dark:border-red-900/50 dark:bg-red-900/20">

                <flux:icon name="exclamation-triangle" class="mt-0.5 size-5 shrink-0 text-red-600" />

                <flux:text class="text-red-700 dark:text-red-400">
                    All permissions assigned to this role will also be removed.
                </flux:text>

            </div>


            {{-- Footer --}}
            <div class="flex justify-end gap-3">

                <flux:modal.close>

                    <flux:button type="button" variant="ghost">
                        Cancel
                    </flux:button>

                </flux:modal.close>


                <flux:button type="button" variant="danger" icon="trash" wire:click="delete"
                    wire:loading.attr="disabled" wire:target="delete">

                    <span wire:loading.remove wire:target="delete">
                        Delete Role
                    </span>

                    <span wire:loading wire:target="delete">
                        Deleting...
                    </span>

                </flux:button>

            </div>

        </div>

    </flux:modal>
</div>
