<div class="space-y-6">


    {{-- Header --}}
    <div class="flex justify-between">

        <div>
            <flux:heading size="xl">
                Permissions Management
            </flux:heading>


            <flux:subheading>
                Manage system permissions.
            </flux:subheading>
        </div>
        <flux:button variant="primary" icon="plus" x-on:click="$flux.modal('create-permission').show()">

            Add Permission

        </flux:button>

    </div>



    {{-- Stats --}}
    <flux:card class="p-6">

        <flux:text class="text-zinc-500">
            Total Permissions
        </flux:text>


        <flux:heading size="xl">
            {{ $totalPermissions }}
        </flux:heading>

    </flux:card>




    {{-- Search --}}
    <div class="flex gap-4">


        <flux:input wire:model.live.debounce.300ms="search" placeholder="Search permissions..."
            icon="magnifying-glass" />


        <flux:select wire:model.live="perPage">

            <option value="10">
                10
            </option>


            <option value="25">
                25
            </option>


            <option value="50">
                50
            </option>


        </flux:select>


    </div>




    {{-- Table --}}
    <div
        class="overflow-hidden rounded-xl border border-zinc-200 bg-white shadow-sm dark:border-zinc-800 dark:bg-zinc-900">


        <div class="overflow-x-auto">


            <table class="min-w-full divide-y divide-zinc-200 dark:divide-zinc-800">


                <thead class="bg-zinc-50 dark:bg-zinc-800/50">

                    <tr>


                        <th class="px-6 py-4 text-left text-xs font-semibold uppercase text-zinc-500">
                            Permission
                        </th>


                        <th class="px-6 py-4 text-center text-xs font-semibold uppercase text-zinc-500">
                            Group
                        </th>


                        <th class="px-6 py-4 text-center text-xs font-semibold uppercase text-zinc-500">
                            Guard
                        </th>


                        <th class="px-6 py-4 text-right text-xs font-semibold uppercase text-zinc-500">
                            Actions
                        </th>


                    </tr>

                </thead>


                <tbody class="divide-y divide-zinc-200 dark:divide-zinc-800">


                    @forelse($permissions as $permission)
                        <tr class="hover:bg-zinc-50 dark:hover:bg-zinc-800/40">


                            {{-- Permission Name --}}
                            <td class="px-6 py-4">


                                <p class="font-semibold text-zinc-900 dark:text-white">

                                    {{ str($permission->name)->headline() }}

                                </p>


                                <p class="text-sm text-zinc-500">

                                    {{ $permission->name }}

                                </p>


                            </td>



                            {{-- Group --}}
                            <td class="px-6 py-4 text-center">


                                <flux:badge color="sky">

                                    {{ str(explode('.', $permission->name)[0])->headline() }}

                                </flux:badge>


                            </td>



                            {{-- Guard --}}
                            <td class="px-6 py-4 text-center">


                                <flux:badge color="emerald">

                                    {{ $permission->guard_name }}

                                </flux:badge>


                            </td>



                            {{-- Actions --}}
                            <td class="px-6 py-4">


                                <div class="flex justify-end gap-2">


                                    <flux:button size="sm" variant="ghost" icon="pencil-square"
                                        wire:click="edit({{ $permission->id }})"
                                        x-on:click="$flux.modal('edit-permission').show()">
                                    </flux:button>



                                    <flux:button size="sm" variant="danger" icon="trash"
                                        wire:click="confirmDelete({{ $permission->id }})"
                                        x-on:click="$flux.modal('delete-permission').show()">

                                    </flux:button>


                                </div>


                            </td>


                        </tr>


                    @empty


                        <tr>

                            <td colspan="4" class="px-6 py-12 text-center">


                                <flux:heading size="lg">
                                    No Permissions Found
                                </flux:heading>


                                <flux:text class="mt-2">
                                    Create your first permission.
                                </flux:text>


                            </td>

                        </tr>
                    @endforelse


                </tbody>


            </table>


        </div>


    </div>




    {{-- Pagination --}}
    <div>

        {{ $permissions->links() }}

    </div>

    <flux:modal name="create-permission" class="md:w-xl">

        <div class="space-y-6">


            <div>

                <flux:heading size="lg">
                    Create Permission
                </flux:heading>


                <flux:text class="mt-2">
                    Create a new system permission.
                </flux:text>

            </div>



            <flux:input wire:model="name" label="Permission Name" placeholder="users.create" />



            <div class="flex justify-end gap-3">


                <flux:button variant="ghost" x-on:click="$flux.modal('create-permission').close()">

                    Cancel

                </flux:button>



                <flux:button variant="primary" wire:click="save">

                    Create

                </flux:button>


            </div>


        </div>


    </flux:modal>

    {{-- Edit Permission Modal --}}

    <flux:modal name="edit-permission" class="md:w-xl">


        <div class="space-y-6">


            <div>

                <flux:heading size="lg">

                    Edit Permission

                </flux:heading>


                <flux:text class="mt-2">

                    Update permission details.

                </flux:text>


            </div>



            <flux:input wire:model="name" label="Permission Name" placeholder="users.create" />



            <div class="flex justify-end gap-3">


                <flux:button variant="ghost" x-on:click="$flux.modal('edit-permission').close()">

                    Cancel

                </flux:button>



                <flux:button variant="primary" wire:click="update">

                    Update

                </flux:button>


            </div>


        </div>


    </flux:modal>
    {{-- Delete Permission Modal --}}

    <flux:modal name="delete-permission" class="md:w-xl">


        <div class="space-y-6">


            <div>

                <flux:heading size="lg">

                    Delete Permission

                </flux:heading>


                <flux:text class="mt-2">

                    Are you sure you want to delete this permission?

                </flux:text>


            </div>



            @if ($deletingPermission)
                <flux:badge color="red">

                    {{ $deletingPermission->name }}

                </flux:badge>
            @endif




            <div class="flex justify-end gap-3">


                <flux:button variant="ghost" x-on:click="$flux.modal('delete-permission').close()">

                    Cancel

                </flux:button>



                <flux:button variant="danger" wire:click="delete">

                    Delete

                </flux:button>


            </div>


        </div>


    </flux:modal>
</div>
