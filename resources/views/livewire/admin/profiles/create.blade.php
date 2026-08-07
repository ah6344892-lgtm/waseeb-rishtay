<div>
    {{-- Simplicity is the essence of happiness. - Cedric Bledsoe --}}
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
                Create Profile
            </flux:breadcrumbs.item>
        </flux:breadcrumbs>

        {{-- Header --}}
        <div class="flex items-center justify-between">

            <div>
                <flux:heading size="xl">
                    Create Profile
                </flux:heading>

                <flux:text class="mt-2">
                    Add a new matrimonial profile.
                </flux:text>
            </div>

            <flux:button variant="ghost" icon="arrow-left" :href="route('admin.profiles.index')">
                Back to Profiles
            </flux:button>

        </div>

        {{-- Form Card --}}
        <flux:card class="p-8">

            {{-- Form will start from Step 2 --}}
            <form wire:submit="save">

                <div class="grid gap-6 md:grid-cols-2">

                    {{-- Fields will be added in Step 2 --}}
                    {{-- Profile Image --}}
                    <div class="md:col-span-2">

                        <flux:input wire:model="image" type="file" label="Profile Image" accept="image/*" />
                        {{-- <flux:error name="image" /> --}}
                        <flux:error name="image" />

                        @if ($image)
                            <img src="{{ $image->temporaryUrl() }}"
                                class="mt-4 h-32 w-32 rounded-xl object-cover border">
                        @endif

                    </div>

                    {{-- Name --}}
                    <flux:input wire:model.defer="name" label="Full Name" placeholder="Enter full name" />

                    {{-- Gender --}}
                    <flux:select wire:model.defer="gender" label="Gender">
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </flux:select>

                    {{-- Date of Birth --}}
                    <flux:input wire:model.live="date_of_birth" type="date" label="Date of Birth" />

                    {{-- Age --}}
                    <flux:input wire:model="age" label="Age" readonly />

                    {{-- Height --}}
                    <flux:input wire:model.defer="height" label="Height" placeholder="5'8&quot;" />

                    {{-- City --}}
                    <flux:input wire:model.defer="city" label="City" placeholder="Enter city" />

                    {{-- Caste --}}
                    <flux:input wire:model.defer="caste" label="Caste" placeholder="Enter caste" />

                    {{-- Sect --}}
                    <flux:input wire:model.defer="sect" label="Sect" placeholder="Optional" />

                    {{-- Marital Status --}}
                    <div class="md:col-span-2">

                        <flux:select wire:model.defer="marital_status" label="Marital Status">
                            <option value="">Select Status</option>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Divorced">Divorced</option>
                            <option value="Widowed">Widowed</option>
                        </flux:select>

                    </div>
                    <flux:input wire:model.defer="education" label="Education" />

                    <flux:input wire:model.defer="profession" label="Profession" />

                    <flux:textarea wire:model.defer="family_details" label="Family Details" />

                    <flux:input wire:model.defer="phone" label="Phone" />
                    {{-- Desired Partner --}}
                    <div class="md:col-span-2 mt-4">

                        <flux:separator text="Desired Partner" />

                    </div>

                    {{-- Desired Age From --}}
                    <flux:input wire:model.defer="desired_age_from" type="number" min="18" max="100"
                        label="Desired Age From" placeholder="18" />

                    {{-- Desired Age To --}}
                    <flux:input wire:model.defer="desired_age_to" type="number" min="18" max="100"
                        label="Desired Age To" placeholder="30" />

                    {{-- Desired Education --}}
                    <div class="md:col-span-2">

                        <flux:input wire:model.defer="desired_education" label="Desired Education"
                            placeholder="e.g. BS Computer Science" />

                    </div>

                    {{-- Other Requirements --}}
                    <div class="md:col-span-2">

                        <flux:textarea wire:model.defer="other_requirements" rows="4" label="Other Requirements"
                            placeholder="Write any additional partner requirements..." />

                    </div>
                </div>


                <div class="mt-8 flex justify-end gap-3">

                    <flux:button variant="ghost" :href="route('admin.profiles.index')">
                        Cancel
                    </flux:button>

                    <flux:button type="submit" variant="primary" icon="check">
                        Save Profile
                    </flux:button>

                </div>

            </form>

        </flux:card>

    </div>
</div>
