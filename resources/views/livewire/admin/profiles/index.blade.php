<div>
    <div class="space-y-8">

        {{-- Breadcrumb --}}
        <flux:breadcrumbs>
            <flux:breadcrumbs.item :href="route('admin.dashboard')">
                Dashboard
            </flux:breadcrumbs.item>

            <flux:breadcrumbs.item>
                Profiles
            </flux:breadcrumbs.item>
        </flux:breadcrumbs>

        {{-- Header --}}
        <div class="flex items-center justify-between">

            <div>
                <flux:heading size="xl">
                    Profiles
                </flux:heading>

                <flux:text class="mt-2">
                    Manage all matrimonial profiles.
                </flux:text>
            </div>

            <flux:button variant="primary" icon="plus" :href="route('admin.profiles.create')">
                Add Profile
            </flux:button>

        </div>

        {{-- Statistics --}}
        <div class="grid gap-6 md:grid-cols-4">

            <flux:card class="p-6">
                <p class="text-sm text-zinc-500">
                    Total Profiles
                </p>

                <h2 class="mt-2 text-3xl font-bold">
                    {{ Number::abbreviate($totalProfiles) }}
                </h2>
            </flux:card>

            <flux:card class="p-6">
                <p class="text-sm text-zinc-500">
                    Male Profiles
                </p>

                <h2 class="mt-2 text-3xl font-bold text-sky-600">
                    {{ Number::abbreviate($maleProfiles) }}
                </h2>
            </flux:card>

            <flux:card class="p-6">
                <p class="text-sm text-zinc-500">
                    Female Profiles
                </p>

                <h2 class="mt-2 text-3xl font-bold text-pink-600">
                    {{ Number::abbreviate($femaleProfiles) }}
                </h2>
            </flux:card>

            <flux:card class="p-6">
                <p class="text-sm text-zinc-500">
                    Pending Approval
                </p>

                <h2 class="mt-2 text-3xl font-bold text-amber-600">
                    {{ Number::abbreviate($pendingProfiles) }}
                </h2>
            </flux:card>

        </div>
        @if (session()->has('success'))
            <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 2000)" x-show="show" x-cloak
                x-transition:enter="transform transition ease-out duration-300"
                x-transition:enter-start="-translate-y-full opacity-0"
                x-transition:enter-end="translate-y-0 opacity-100"
                x-transition:leave="transform transition ease-in duration-300"
                x-transition:leave-start="translate-y-0 opacity-100"
                x-transition:leave-end="-translate-y-full opacity-0"
                class="fixed top-4 left-1/2 z-50 w-full max-w-md -translate-x-1/2 px-4">
                <flux:callout color="green" icon="check-circle">
                    {{ session('success') }}
                </flux:callout>
            </div>
        @endif
        <div class="grid gap-4 md:grid-cols-6">

            {{-- Search --}}
            <flux:input wire:model.live.debounce.500ms="search" placeholder="Search..." icon="magnifying-glass" />

            {{-- Gender --}}
            <flux:select wire:model.live="gender">
                <option value="">All Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </flux:select>

            {{-- Status --}}
            <flux:select wire:model.live="status">
                <option value="">All Status</option>
                <option value="pending">Pending</option>
                <option value="approved">Approved</option>
                <option value="rejected">Rejected</option>
            </flux:select>

            {{-- Verified --}}
            <flux:select wire:model.live="verified">
                <option value="">All Verification</option>
                <option value="1">Verified</option>
                <option value="0">Not Verified</option>
            </flux:select>

            {{-- Per Page --}}
            <flux:select wire:model.live="perPage">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </flux:select>

            {{-- Reset --}}
            <flux:button variant="ghost" icon="arrow-path" wire:click="resetFilters">
                Reset
            </flux:button>

        </div>
        <div>

            <flux:card class="overflow-hidden p-0">

                <flux:table class="p-1">

                    <flux:table.columns>

                        <flux:table.column>Image</flux:table.column>

                        <flux:table.column>Profile ID</flux:table.column>

                        <flux:table.column>Name</flux:table.column>

                        <flux:table.column>Gender</flux:table.column>

                        <flux:table.column>Age</flux:table.column>

                        <flux:table.column>City</flux:table.column>

                        <flux:table.column>Profession</flux:table.column>

                        <flux:table.column>Status</flux:table.column>

                        <flux:table.column>Verified</flux:table.column>

                        <flux:table.column>Featured</flux:table.column>

                        <flux:table.column>Active</flux:table.column>

                        <flux:table.column align="center">
                            Actions
                        </flux:table.column>

                    </flux:table.columns>

                    <flux:table.rows>

                        @forelse ($profiles as $profile)
                            <flux:table.row>

                                {{-- Image --}}
                                <flux:table.cell>

                                    <img src="{{ $profile->image ? Storage::url($profile->image) : 'https://placehold.co/60x60?text=No+Image' }}"
                                        class="h-12 w-12 rounded-lg object-cover border" alt="{{ $profile->name }}">

                                </flux:table.cell>

                                {{-- Profile ID --}}
                                <flux:table.cell>

                                    <span class="font-medium">
                                        {{ $profile->profile_id }}
                                    </span>

                                </flux:table.cell>

                                {{-- Name --}}
                                <flux:table.cell>

                                    <div>
                                        <div class="font-medium">
                                            {{ $profile->name }}
                                        </div>

                                        <div class="text-xs text-zinc-500">
                                            {{ $profile->phone }}
                                        </div>
                                    </div>

                                </flux:table.cell>

                                {{-- Gender --}}
                                <flux:table.cell>

                                    <flux:badge color="{{ $profile->gender == 'Male' ? 'sky' : 'pink' }}">
                                        {{ $profile->gender }}
                                    </flux:badge>

                                </flux:table.cell>

                                {{-- Age --}}
                                <flux:table.cell>

                                    {{ $profile->age }} Years

                                </flux:table.cell>

                                {{-- City --}}
                                <flux:table.cell>

                                    {{ $profile->city }}

                                </flux:table.cell>

                                {{-- Profession --}}
                                <flux:table.cell>

                                    {{ $profile->profession }}

                                </flux:table.cell>

                                {{-- Status --}}
                                {{-- <flux:table.cell>

                                    @php
                                        $statusColor = match ($profile->status) {
                                            'approved' => 'green',
                                            'rejected' => 'red',
                                            default => 'amber',
                                        };
                                    @endphp

                                    <flux:badge color="{{ $statusColor }}">
                                        {{ ucfirst($profile->status) }}
                                    </flux:badge>

                                </flux:table.cell> --}}
                                <flux:table.cell>

                                    @switch($profile->status)
                                        @case('approved')
                                            <flux:badge color="green" icon="check-circle">
                                                Approved
                                            </flux:badge>
                                        @break

                                        @case('rejected')
                                            <flux:badge color="red" icon="x-circle">
                                                Rejected
                                            </flux:badge>
                                        @break

                                        @default
                                            <flux:badge color="amber" icon="clock">
                                                Pending
                                            </flux:badge>
                                    @endswitch

                                </flux:table.cell>

                                {{-- Verified --}}
                                {{-- <flux:table.cell>

                                    @if ($profile->is_verified)
                                        <flux:badge color="green">
                                            Verified
                                        </flux:badge>
                                    @else
                                        <flux:badge color="zinc">
                                            Unverified
                                        </flux:badge>
                                    @endif

                                </flux:table.cell> --}}
                                <flux:table.cell>

                                    @if ($profile->is_verified)
                                        <flux:badge color="green" icon="check-badge">
                                            Verified
                                        </flux:badge>
                                    @else
                                        <flux:badge color="zinc">
                                            Unverified
                                        </flux:badge>
                                    @endif

                                </flux:table.cell>

                                {{-- Featured --}}
                                <flux:table.cell>

                                    @if ($profile->is_featured)
                                        <flux:badge color="yellow" icon="star">
                                            Featured
                                        </flux:badge>
                                    @else
                                        <flux:badge color="zinc">
                                            Normal
                                        </flux:badge>
                                    @endif

                                </flux:table.cell>

                                {{-- Active --}}
                                <flux:table.cell>

                                    @if ($profile->is_active)
                                        <flux:badge color="green" icon="bolt">
                                            Active
                                        </flux:badge>
                                    @else
                                        <flux:badge color="red" icon="pause-circle">
                                            Inactive
                                        </flux:badge>
                                    @endif

                                </flux:table.cell>

                                {{-- Actions --}}
                                {{-- <flux:table.cell align="end">

                                    <div class="flex justify-end gap-2">

                                        <flux:button size="xs" variant="ghost" icon="pencil-square"
                                            :href="route('admin.profiles.edit', $profile)">
                                            Edit
                                        </flux:button>

                                        <flux:button size="xs" variant="danger" icon="trash"
                                            wire:click="confirmDelete({{ $profile->id }})">
                                            Delete
                                        </flux:button>

                                    </div>

                                </flux:table.cell> --}}
                                <flux:table.cell align="end">

                                    <div class="flex justify-end gap-2">

                                        {{-- Edit --}}
                                        <flux:tooltip content="Edit">
                                            <flux:button size="xs" variant="ghost" icon="pencil-square"
                                                :href="route('admin.profiles.edit', $profile)" />
                                        </flux:tooltip>

                                        {{-- Approve --}}
                                        @if ($profile->status !== 'approved')
                                            <flux:tooltip content="Approve">
                                                <flux:button size="xs" variant="ghost" color="green"
                                                    icon="check" wire:click="approve({{ $profile->id }})" />
                                            </flux:tooltip>
                                        @endif

                                        {{-- Reject --}}
                                        @if ($profile->status !== 'rejected')
                                            <flux:tooltip content="Reject">
                                                <flux:button size="xs" variant="ghost" color="red"
                                                    icon="x-mark" wire:click="reject({{ $profile->id }})" />
                                            </flux:tooltip>
                                        @endif

                                        {{-- Verify --}}
                                        <flux:tooltip content="Verify">
                                            <flux:button size="xs" variant="ghost"
                                                color="{{ $profile->is_verified ? 'green' : 'zinc' }}"
                                                icon="check-badge"
                                                wire:click="toggleVerified({{ $profile->id }})" />
                                        </flux:tooltip>

                                        {{-- Featured --}}
                                        <flux:tooltip content="Featured">
                                            <flux:button size="xs" variant="ghost"
                                                color="{{ $profile->is_featured ? 'yellow' : 'zinc' }}"
                                                icon="star" wire:click="toggleFeatured({{ $profile->id }})" />
                                        </flux:tooltip>

                                        {{-- Active --}}
                                        <flux:tooltip content="Active">
                                            <flux:button size="xs" variant="ghost"
                                                color="{{ $profile->is_active ? 'green' : 'red' }}"
                                                icon="{{ $profile->is_active ? 'eye' : 'eye-slash' }}"
                                                wire:click="toggleActive({{ $profile->id }})" />
                                        </flux:tooltip>

                                    </div>

                                </flux:table.cell>

                            </flux:table.row>

                            @empty

                                <flux:table.row>

                                    <flux:table.cell colspan="10">

                                        <div class="flex flex-col items-center justify-center py-14">

                                            <flux:icon.user-group class="size-12 text-zinc-400" />

                                            <flux:heading size="sm" class="mt-4">
                                                No Profiles Found
                                            </flux:heading>

                                            <flux:text class="mt-2">
                                                Create your first profile to get started.
                                            </flux:text>

                                            <flux:button class="mt-6" variant="primary" icon="plus"
                                                :href="route('admin.profiles.create')">
                                                Add Profile
                                            </flux:button>

                                        </div>

                                    </flux:table.cell>

                                </flux:table.row>
                            @endforelse

                        </flux:table.rows>

                    </flux:table>

                </flux:card>

                @if ($profiles->hasPages())
                    <div class="mt-6">
                        {{ $profiles->links() }}
                    </div>
                @endif

            </div>
        </div>
        <flux:modal wire:model="showDeleteModal">

            <div class="space-y-6">

                <div>

                    <flux:heading size="lg">
                        Delete Profile
                    </flux:heading>

                    <flux:text class="mt-2">
                        Are you sure you want to delete this profile?
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
