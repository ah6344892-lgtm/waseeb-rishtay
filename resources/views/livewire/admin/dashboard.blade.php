<div class="space-y-8">

    <!-- Dashboard Header -->
    <section
        class="flex flex-col gap-6 rounded-3xl border border-zinc-200 bg-white p-6 shadow-sm lg:flex-row lg:items-center lg:justify-between dark:border-zinc-700 dark:bg-zinc-900">

        <!-- Left -->
        <div class="space-y-2">

            <flux:breadcrumbs>
                <flux:breadcrumbs.item :href="route('admin.dashboard')">
                    Dashboard
                </flux:breadcrumbs.item>
            </flux:breadcrumbs>

            <div>
                <h1 class="text-3xl font-bold tracking-tight">
                    Welcome back,
                    <span class="text-primary">
                        {{ auth()->user()->name }}
                    </span>
                </h1>

                <p class="mt-2 text-sm text-zinc-500">
                    Here's what's happening in your website today.
                </p>
            </div>

        </div>

        <!-- Right -->
        <div class="flex flex-wrap items-center gap-3">

            <div class="rounded-xl border border-zinc-200 px-4 py-3 dark:border-zinc-700">

                <p class="text-xs uppercase tracking-wide text-zinc-500">
                    Today
                </p>

                <p class="font-semibold">
                    {{ now()->format('l, d M Y') }}
                </p>
            </div>

            <flux:button icon="plus" :href="route('admin.profiles.create')" variant="primary">

                Add Profile

            </flux:button>

            <flux:button icon="user-plus" :href="route('admin.users.create')" variant="filled">

                Add User

            </flux:button>

        </div>

    </section>
    <!-- Statistics -->
    <section class="grid grid-cols-1 gap-6 sm:grid-cols-2 xl:grid-cols-3">

        <!-- Total Users -->
        <flux:card class="p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-zinc-500">Total Users</p>

                    <h2 class="mt-2 text-3xl font-bold">
                        {{ Number::abbreviate($totalUsers) }}
                    </h2>

                    <p class="mt-2 text-xs text-zinc-500">
                        Registered users
                    </p>
                </div>

                <flux:icon.users class="size-10 text-primary" />
            </div>
        </flux:card>

        <!-- Total Profiles -->
        <flux:card class="p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-zinc-500">Total Profiles</p>

                    <h2 class="mt-2 text-3xl font-bold">
                        {{ Number::abbreviate($totalProfiles) }}
                    </h2>

                    <p class="mt-2 text-xs text-zinc-500">
                        All marriage profiles
                    </p>
                </div>

                <flux:icon.identification class="size-10 text-primary" />
            </div>
        </flux:card>

        <!-- Pending -->
        <flux:card class="p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-zinc-500">Pending Profiles</p>

                    <h2 class="mt-2 text-3xl font-bold">
                        {{ Number::abbreviate($pendingProfiles) }}
                    </h2>

                    <p class="mt-2 text-xs text-amber-600">
                        Waiting for approval
                    </p>
                </div>

                <flux:icon.clock class="size-10 text-amber-500" />
            </div>
        </flux:card>

        <!-- Approved -->
        <flux:card class="p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-zinc-500">Approved Profiles</p>

                    <h2 class="mt-2 text-3xl font-bold">
                        {{ Number::abbreviate($approvedProfiles) }}
                    </h2>

                    <p class="mt-2 text-xs text-green-600">
                        Live on website
                    </p>
                </div>

                <flux:icon.check-circle class="size-10 text-green-500" />
            </div>
        </flux:card>

        <!-- Rejected -->
        <flux:card class="p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-zinc-500">Rejected Profiles</p>

                    <h2 class="mt-2 text-3xl font-bold">
                        {{ Number::abbreviate($rejectedProfiles) }}
                    </h2>

                    <p class="mt-2 text-xs text-red-600">
                        Rejected by admin
                    </p>
                </div>

                <flux:icon.x-circle class="size-10 text-red-500" />
            </div>
        </flux:card>

        <!-- Premium -->
        {{-- <flux:card class="p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-zinc-500">Premium Members</p>

                    <h2 class="mt-2 text-3xl font-bold">
                        {{ Number::abbreviate($premiumMembers) }}
                    </h2>

                    <p class="mt-2 text-xs text-primary">
                        Active premium accounts
                    </p>
                </div>

                <flux:icon.star class="size-10 text-primary" />
            </div>
        </flux:card> --}}

    </section>
    <section class="space-y-5">

        <div class="flex items-center justify-between">
            <div>
                <flux:heading size="lg">Recent Profiles</flux:heading>

                <flux:text class="mt-1">
                    Recently created marriage profiles.
                </flux:text>
            </div>

            <flux:button :href="route('admin.profiles.index')" variant="ghost" size="sm"
                icon-trailing="arrow-right">
                View All
            </flux:button>
        </div>

        <div class="overflow-hidden p-0">

            <flux:table>

                <flux:table.columns>
                    <flux:table.column>Name</flux:table.column>
                    <flux:table.column>Gender</flux:table.column>
                    <flux:table.column>City</flux:table.column>
                    <flux:table.column>Status</flux:table.column>
                    <flux:table.column>Created</flux:table.column>
                    <flux:table.column align="end">Action</flux:table.column>
                </flux:table.columns>

                <flux:table.rows>

                    @forelse ($recentProfiles as $profile)
                        <flux:table.row>

                            <flux:table.cell class="font-medium">
                                {{ $profile['name'] }}
                            </flux:table.cell>

                            <flux:table.cell>
                                {{ $profile['gender'] }}
                            </flux:table.cell>

                            <flux:table.cell>
                                {{ $profile['city'] }}
                            </flux:table.cell>

                            <flux:table.cell>

                                @switch($profile['status'])
                                    @case('Approved')
                                        <flux:badge color="green">
                                            Approved
                                        </flux:badge>
                                    @break

                                    @case('Pending')
                                        <flux:badge color="amber">
                                            Pending
                                        </flux:badge>
                                    @break

                                    @default
                                        <flux:badge color="red">
                                            Rejected
                                        </flux:badge>
                                @endswitch

                            </flux:table.cell>

                            <flux:table.cell class="text-zinc-500">
                                {{ $profile['created_at'] }}
                            </flux:table.cell>

                            <flux:table.cell align="end">

                                <flux:button :href="route('admin.profiles.edit', $profile['id'])" variant="ghost"
                                    size="xs" icon="pencil-square">
                                    Edit
                                </flux:button>

                            </flux:table.cell>

                        </flux:table.row>

                        @empty

                            <flux:table.row>

                                <flux:table.cell colspan="6">

                                    <div class="flex flex-col items-center justify-center py-10 gap-2">

                                        <flux:icon.inbox class="size-10 text-zinc-400" />

                                        <flux:heading size="sm">
                                            No profiles found
                                        </flux:heading>

                                        <flux:text>
                                            There are no recently created profiles.
                                        </flux:text>

                                    </div>

                                </flux:table.cell>

                            </flux:table.row>
                        @endforelse

                    </flux:table.rows>

                </flux:table>

                {{-- </flux:card> --}}
            </div>

        </section>
        <section class="space-y-5">

            <div class="flex items-center justify-between">

                <div>
                    <h2 class="text-xl font-semibold">
                        Recent Users
                    </h2>

                    <p class="text-sm text-zinc-500">
                        Latest registered users.
                    </p>
                </div>

                <flux:button variant="ghost" size="sm" :href="route('admin.users.index')">

                    View All

                </flux:button>

            </div>

            <flux:table>

                <flux:table.columns>

                    <flux:table.column>Name</flux:table.column>

                    <flux:table.column>Email</flux:table.column>

                    <flux:table.column>Role</flux:table.column>

                    <flux:table.column>Status</flux:table.column>

                    <flux:table.column>Joined</flux:table.column>

                    <flux:table.column align="end">
                        Action
                    </flux:table.column>

                </flux:table.columns>

                <flux:table.rows>

                    @forelse ($recentUsers as $user)
                        <flux:table.row>

                            <flux:table.cell variant="strong">
                                {{ $user['name'] }}
                            </flux:table.cell>

                            <flux:table.cell>
                                {{ $user['email'] }}
                            </flux:table.cell>

                            <flux:table.cell>

                                <flux:badge color="sky">
                                    {{ $user['role'] }}
                                </flux:badge>

                            </flux:table.cell>

                            <flux:table.cell>

                                <flux:badge color="green">
                                    {{ $user['status'] }}
                                </flux:badge>

                            </flux:table.cell>

                            <flux:table.cell>
                                {{ $user['joined'] }}
                            </flux:table.cell>

                            <flux:table.cell align="end">

                                <flux:button size="xs" variant="ghost" :href="route('admin.users.edit', $user['id'])">

                                    Edit

                                </flux:button>

                            </flux:table.cell>

                        </flux:table.row>

                    @empty

                        <flux:table.row>

                            <flux:table.cell colspan="6" class="py-12 text-center text-zinc-500">

                                No users found.

                            </flux:table.cell>

                        </flux:table.row>
                    @endforelse

                </flux:table.rows>

            </flux:table>

        </section>
        <div class="grid gap-6 lg:grid-cols-2">

            {{-- Quick Actions --}}
            <flux:card>

                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-lg font-semibold">
                        Quick Actions
                    </h2>

                    <flux:icon.bolt class="size-5 text-primary" />
                </div>

                <div class="grid grid-cols-2 gap-4">

                    <flux:button variant="primary" :href="route('admin.profiles.create')" icon="plus">

                        Add Profile

                    </flux:button>

                    <flux:button variant="filled" :href="route('admin.users.create')" icon="user-plus">

                        Add User

                    </flux:button>

                    <flux:button variant="ghost" :href="route('admin.roles.index')" icon="shield-check">

                        Roles

                    </flux:button>

                    <flux:button variant="ghost" :href="route('admin.permissions.index')" icon="lock-closed">

                        Permissions

                    </flux:button>

                </div>

            </flux:card>

            {{-- Pending Activities --}}
            <flux:card>

                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-lg font-semibold">
                        Pending Activities
                    </h2>

                    <flux:icon.clock class="size-5 text-amber-500" />
                </div>

                <div class="space-y-4">

                    <div class="flex items-center justify-between">

                        <div>
                            <p class="font-medium">
                                Pending Profile Approvals
                            </p>

                            <p class="text-sm text-zinc-500">
                                Waiting for review
                            </p>
                        </div>

                        <flux:badge color="amber">
                            {{ $pendingApprovals }}
                        </flux:badge>

                    </div>

                    <flux:separator />

                    <div class="flex items-center justify-between">

                        <div>
                            <p class="font-medium">
                                Unread Messages
                            </p>

                            <p class="text-sm text-zinc-500">
                                Contact form messages
                            </p>
                        </div>

                        <flux:badge color="red">
                            {{ $unreadMessages }}
                        </flux:badge>

                    </div>

                    <flux:separator />

                    <div class="flex items-center justify-between">

                        <div>
                            <p class="font-medium">
                                New Users Today
                            </p>

                            <p class="text-sm text-zinc-500">
                                Registered today
                            </p>
                        </div>

                        <flux:badge color="green">
                            {{ $newUsersToday }}
                        </flux:badge>

                    </div>

                    <flux:separator />

                    <div class="flex items-center justify-between">

                        <div>
                            <p class="font-medium">
                                Expired Memberships
                            </p>

                            <p class="text-sm text-zinc-500">
                                Need renewal
                            </p>
                        </div>

                        <flux:badge color="zinc">
                            {{ $expiredMemberships }}
                        </flux:badge>

                    </div>

                </div>

            </flux:card>

        </div>
    </div>
