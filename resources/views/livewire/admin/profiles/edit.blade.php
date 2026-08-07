<div>
    {{-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius --}}
    <div class="space-y-8">

        {{-- Breadcrumb --}}
        <flux:breadcrumbs>

            <flux:breadcrumbs.item :href="route('admin.dashboard')">
                Dashboard
            </flux:breadcrumbs.item>

            <flux:breadcrumbs.item :href="route('admin.profiles.index')">
                Profiles
            </flux:breadcrumbs.item>

            <flux:breadcrumbs.item>
                Edit Profile
            </flux:breadcrumbs.item>

        </flux:breadcrumbs>

        {{-- Header --}}
        <div class="flex items-center justify-between">

            <div>

                <flux:heading size="xl">
                    Edit Profile
                </flux:heading>

                <flux:text class="mt-2">
                    Update profile information.
                </flux:text>

            </div>

            <flux:button variant="ghost" icon="arrow-left" :href="route('admin.profiles.index')">
                Back to Profiles
            </flux:button>

        </div>

        <flux:card class="p-8">

            <form wire:submit="update">

                <div class="grid gap-6 md:grid-cols-2">

                    {{-- Step 2 --}}
                    {{-- Form fields will be added here --}}
                    <div class="grid gap-6 md:grid-cols-2">

                        {{-- ========================= --}}
                        {{-- Profile Image --}}
                        {{-- ========================= --}}
                        <div class="md:col-span-2">

                            <flux:input wire:model="image" type="file" label="Profile Image" accept="image/*" />

                            <flux:error name="image" />

                            <div class="mt-4">

                                @if ($image)
                                    {{-- New Selected Image --}}
                                    <img src="{{ $image->temporaryUrl() }}"
                                        class="h-32 w-32 rounded-xl border object-cover">
                                @elseif ($profile->image)
                                    {{-- Current Image --}}
                                    <img src="{{ Storage::url($profile->image) }}"
                                        class="h-32 w-32 rounded-xl border object-cover">
                                @endif

                            </div>

                        </div>

                        {{-- ========================= --}}
                        {{-- Personal Details --}}
                        {{-- ========================= --}}

                        <flux:input wire:model.defer="name" label="Full Name" />

                        <flux:select wire:model.defer="gender" label="Gender">
                            <option value="">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </flux:select>

                        <flux:input wire:model.live="date_of_birth" type="date" label="Date of Birth" />

                        <flux:input wire:model="age" label="Age" readonly />

                        <flux:input wire:model.defer="height" label="Height" />

                        <flux:input wire:model.defer="city" label="City" />

                        <flux:input wire:model.defer="caste" label="Caste" />

                        <flux:input wire:model.defer="sect" label="Sect" />

                        <div class="md:col-span-2">

                            <flux:select wire:model.defer="marital_status" label="Marital Status">
                                <option value="">Select Status</option>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Divorced">Divorced</option>
                                <option value="Widowed">Widowed</option>
                            </flux:select>

                        </div>

                        {{-- ========================= --}}
                        {{-- Education --}}
                        {{-- ========================= --}}

                        <flux:input wire:model.defer="education" label="Education" />

                        <flux:input wire:model.defer="profession" label="Profession" />

                        {{-- ========================= --}}
                        {{-- Family --}}
                        {{-- ========================= --}}

                        <div class="md:col-span-2">

                            <flux:textarea wire:model.defer="family_details" rows="4" label="Family Details" />

                        </div>

                        {{-- ========================= --}}
                        {{-- Desired Partner --}}
                        {{-- ========================= --}}

                        <div class="md:col-span-2">

                            <flux:separator text="Desired Partner" />

                        </div>

                        <flux:input wire:model.defer="desired_age_from" type="number" label="Desired Age From" />

                        <flux:input wire:model.defer="desired_age_to" type="number" label="Desired Age To" />

                        <div class="md:col-span-2">

                            <flux:input wire:model.defer="desired_education" label="Desired Education" />

                        </div>

                        <div class="md:col-span-2">

                            <flux:textarea wire:model.defer="other_requirements" rows="4"
                                label="Other Requirements" />

                        </div>

                        {{-- ========================= --}}
                        {{-- Contact --}}
                        {{-- ========================= --}}

                        <div class="md:col-span-2">

                            <flux:input wire:model.defer="phone" label="Phone Number" />

                        </div>

                    </div>

                </div>

                <div class="mt-8 flex justify-end gap-3">

                    <flux:button variant="ghost" :href="route('admin.profiles.index')">
                        Cancel
                    </flux:button>

                    <flux:button type="submit" variant="primary" icon="check">
                        Update Profile
                    </flux:button>

                </div>

            </form>

        </flux:card>

    </div>
</div>
