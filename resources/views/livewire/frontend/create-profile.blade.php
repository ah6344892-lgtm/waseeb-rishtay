<div class="min-h-screen">

    <div class="mx-auto">

        {{-- Header --}}
        <div class="mb-10 text-center">

            <span class="inline-flex rounded-full bg-primary/10 px-4 py-2 text-sm font-semibold text-primary">

                Create Your Profile

            </span>

            <h1 class="mt-4 text-4xl font-bold text-gray-900 sm:text-5xl" style="font-family: 'Bebas Neue';">

                Find Your Perfect Life Partner

            </h1>

            <p class="mx-auto mt-4 max-w-2xl text-gray-600">

                Create your marriage profile and connect with genuine
                individuals and families through Waseeb Rishtay.

            </p>

        </div>


        {{-- Success --}}
        @if (session()->has('success'))
            <div class="mb-8 rounded-2xl border border-green-200 bg-green-50 p-4 text-green-700">

                <div class="flex items-center gap-3">

                    <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-100">

                        ✓

                    </span>

                    <p class="font-medium">
                        {{ session('success') }}
                    </p>

                </div>

            </div>
        @endif


        {{-- Error --}}
        @if (session()->has('error'))
            <div class="mb-8 rounded-2xl border border-red-200 bg-red-50 p-4 text-red-700">

                {{ session('error') }}

            </div>
        @endif


        <form wire:submit="save">

            {{-- Main Card --}}
            <div class="overflow-hidden rounded-3xl border border-gray-100 bg-white shadow-xl">


                {{-- Card Header --}}
                <div
                    class="border-b border-gray-100 bg-gradient-to-r from-primary to-secondary px-6 py-6 text-white sm:px-8">

                    <div class="flex items-center gap-4">

                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-white/20 text-xl">

                            ❤

                        </div>

                        <div>

                            <h2 class="text-2xl font-bold">
                                Personal Information
                            </h2>

                            <p class="mt-1 text-sm text-white/80">
                                Tell us about yourself
                            </p>

                        </div>

                    </div>

                </div>


                <div class="space-y-10 p-6 sm:p-8 lg:p-10">


                    {{-- ================================================= --}}
                    {{-- Personal Details --}}
                    {{-- ================================================= --}}

                    <div>

                        <div class="mb-6">

                            <span class="text-sm font-semibold uppercase tracking-wider text-primary">

                                Step 01

                            </span>

                            <h3 class="mt-1 text-2xl font-bold text-gray-900">
                                Personal Details
                            </h3>

                        </div>


                        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">


                            {{-- Name --}}
                            <div>

                                <label class="mb-2 block text-sm font-semibold text-gray-700">
                                    Full Name *
                                </label>

                                <input type="text" wire:model="name" placeholder="Enter your full name"
                                    class="w-full rounded-xl border border-gray-200 px-4 py-3 outline-none transition focus:border-primary focus:ring-2 focus:ring-primary/10">

                                @error('name')
                                    <p class="mt-1 text-sm text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror

                            </div>


                            {{-- Gender --}}
                            <div>

                                <label class="mb-2 block text-sm font-semibold text-gray-700">
                                    Gender *
                                </label>

                                <select wire:model="gender"
                                    class="w-full rounded-xl border border-gray-200 bg-white px-4 py-3 outline-none transition focus:border-primary focus:ring-2 focus:ring-primary/10">

                                    <option value="">
                                        Select Gender
                                    </option>

                                    <option value="Male">
                                        Male
                                    </option>

                                    <option value="Female">
                                        Female
                                    </option>

                                </select>

                                @error('gender')
                                    <p class="mt-1 text-sm text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror

                            </div>


                            {{-- Age --}}
                            <div>

                                <label class="mb-2 block text-sm font-semibold text-gray-700">
                                    Age *
                                </label>

                                <input type="number" wire:model="age" min="18" max="100"
                                    placeholder="Enter your age"
                                    class="w-full rounded-xl border border-gray-200 px-4 py-3 outline-none transition focus:border-primary focus:ring-2 focus:ring-primary/10">

                                @error('age')
                                    <p class="mt-1 text-sm text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror

                            </div>


                            {{-- Height --}}
                            <div>

                                <label class="mb-2 block text-sm font-semibold text-gray-700">
                                    Height
                                </label>

                                <input type="text" wire:model="height" placeholder="e.g. 5' 8&quot;"
                                    class="w-full rounded-xl border border-gray-200 px-4 py-3 outline-none transition focus:border-primary focus:ring-2 focus:ring-primary/10">

                                @error('height')
                                    <p class="mt-1 text-sm text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror

                            </div>


                            {{-- City --}}
                            <div>

                                <label class="mb-2 block text-sm font-semibold text-gray-700">
                                    City *
                                </label>

                                <input type="text" wire:model="city" placeholder="Enter your city"
                                    class="w-full rounded-xl border border-gray-200 px-4 py-3 outline-none transition focus:border-primary focus:ring-2 focus:ring-primary/10">

                                @error('city')
                                    <p class="mt-1 text-sm text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror

                            </div>


                            {{-- Caste --}}
                            <div>

                                <label class="mb-2 block text-sm font-semibold text-gray-700">
                                    Caste *
                                </label>

                                <input type="text" wire:model="caste" placeholder="Enter caste"
                                    class="w-full rounded-xl border border-gray-200 px-4 py-3 outline-none transition focus:border-primary focus:ring-2 focus:ring-primary/10">

                                @error('caste')
                                    <p class="mt-1 text-sm text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror

                            </div>


                            {{-- Sect --}}
                            <div>

                                <label class="mb-2 block text-sm font-semibold text-gray-700">
                                    Sect
                                </label>

                                <input type="text" wire:model="sect" placeholder="e.g. Sunni, Shia"
                                    class="w-full rounded-xl border border-gray-200 px-4 py-3 outline-none transition focus:border-primary focus:ring-2 focus:ring-primary/10">

                            </div>


                            {{-- Marital Status --}}
                            <div>

                                <label class="mb-2 block text-sm font-semibold text-gray-700">
                                    Marital Status *
                                </label>

                                <select wire:model="marital_status"
                                    class="w-full rounded-xl border border-gray-200 bg-white px-4 py-3 outline-none transition focus:border-primary focus:ring-2 focus:ring-primary/10">

                                    <option value="">
                                        Select Status
                                    </option>

                                    <option value="Single">
                                        Single
                                    </option>

                                    <option value="Married">
                                        Married
                                    </option>

                                    <option value="Divorced">
                                        Divorced
                                    </option>

                                    <option value="Widowed">
                                        Widowed
                                    </option>

                                </select>

                            </div>

                            {{-- Phone --}}
                            <div class="w-full">

                                <label class="mb-2 block text-sm font-semibold text-gray-700">
                                    Phone *
                                </label>

                                <input type="number" wire:model="phone" placeholder="Enter phone"
                                    class="w-full rounded-xl border border-gray-200 px-4 py-3 outline-none transition focus:border-primary focus:ring-2 focus:ring-primary/10">

                                @error('caste')
                                    <p class="mt-1 text-sm text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror

                            </div>

                        </div>

                    </div>


                    {{-- Divider --}}
                    <div class="border-t border-gray-100"></div>


                    {{-- ================================================= --}}
                    {{-- Education --}}
                    {{-- ================================================= --}}

                    <div>

                        <div class="mb-6">

                            <span class="text-sm font-semibold uppercase tracking-wider text-primary">

                                Step 02

                            </span>

                            <h3 class="mt-1 text-2xl font-bold text-gray-900">
                                Education & Profession
                            </h3>

                        </div>


                        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">


                            {{-- Education --}}
                            <div>

                                <label class="mb-2 block text-sm font-semibold text-gray-700">
                                    Education *
                                </label>

                                <input type="text" wire:model="education" placeholder="e.g. Bachelor's, Master's"
                                    class="w-full rounded-xl border border-gray-200 px-4 py-3 outline-none transition focus:border-primary focus:ring-2 focus:ring-primary/10">

                                @error('education')
                                    <p class="mt-1 text-sm text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror

                            </div>


                            {{-- Profession --}}
                            <div>

                                <label class="mb-2 block text-sm font-semibold text-gray-700">
                                    Profession *
                                </label>

                                <input type="text" wire:model="profession" placeholder="e.g. Software Engineer"
                                    class="w-full rounded-xl border border-gray-200 px-4 py-3 outline-none transition focus:border-primary focus:ring-2 focus:ring-primary/10">

                                @error('profession')
                                    <p class="mt-1 text-sm text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror

                            </div>

                        </div>

                    </div>


                    {{-- Divider --}}
                    <div class="border-t border-gray-100"></div>


                    {{-- ================================================= --}}
                    {{-- Family --}}
                    {{-- ================================================= --}}

                    <div>

                        <div class="mb-6">

                            <span class="text-sm font-semibold uppercase tracking-wider text-primary">

                                Step 03

                            </span>

                            <h3 class="mt-1 text-2xl font-bold text-gray-900">
                                Family Details
                            </h3>

                        </div>


                        <textarea wire:model="family_details" rows="5" placeholder="Tell us about your family..."
                            class="w-full rounded-xl border border-gray-200 px-4 py-3 outline-none transition focus:border-primary focus:ring-2 focus:ring-primary/10"></textarea>

                        @error('family_details')
                            <p class="mt-1 text-sm text-red-500">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>


                    {{-- Divider --}}
                    <div class="border-t border-gray-100"></div>


                    {{-- ================================================= --}}
                    {{-- Desired Partner --}}
                    {{-- ================================================= --}}

                    <div>

                        <div class="mb-6">

                            <span class="text-sm font-semibold uppercase tracking-wider text-primary">

                                Step 04

                            </span>

                            <h3 class="mt-1 text-2xl font-bold text-gray-900">
                                Desired Partner
                            </h3>

                            <p class="mt-2 text-gray-500">
                                Tell us what kind of life partner you are looking for.
                            </p>

                        </div>


                        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">


                            {{-- Partner Age --}}
                            <div>

                                <label class="mb-2 block text-sm font-semibold text-gray-700">
                                    Preferred Age
                                </label>

                                <input type="text" wire:model="partner_age" placeholder="e.g. 25 - 30"
                                    class="w-full rounded-xl border border-gray-200 px-4 py-3 outline-none transition focus:border-primary focus:ring-2 focus:ring-primary/10">

                            </div>


                            {{-- Partner Height --}}
                            <div>

                                <label class="mb-2 block text-sm font-semibold text-gray-700">
                                    Preferred Height
                                </label>

                                <input type="text" wire:model="partner_height"
                                    placeholder="e.g. 5' 4&quot; - 5' 8&quot;"
                                    class="w-full rounded-xl border border-gray-200 px-4 py-3 outline-none transition focus:border-primary focus:ring-2 focus:ring-primary/10">

                            </div>


                            {{-- Partner City --}}
                            <div>

                                <label class="mb-2 block text-sm font-semibold text-gray-700">
                                    Preferred City
                                </label>

                                <input type="text" wire:model="partner_city" placeholder="Any preferred city?"
                                    class="w-full rounded-xl border border-gray-200 px-4 py-3 outline-none transition focus:border-primary focus:ring-2 focus:ring-primary/10">

                            </div>


                            {{-- Partner Education --}}
                            <div>

                                <label class="mb-2 block text-sm font-semibold text-gray-700">
                                    Preferred Education
                                </label>

                                <input type="text" wire:model="partner_education"
                                    placeholder="Preferred education"
                                    class="w-full rounded-xl border border-gray-200 px-4 py-3 outline-none transition focus:border-primary focus:ring-2 focus:ring-primary/10">

                            </div>


                            {{-- Partner Profession --}}
                            <div>

                                <label class="mb-2 block text-sm font-semibold text-gray-700">
                                    Preferred Profession
                                </label>

                                <input type="text" wire:model="partner_profession"
                                    placeholder="Preferred profession"
                                    class="w-full rounded-xl border border-gray-200 px-4 py-3 outline-none transition focus:border-primary focus:ring-2 focus:ring-primary/10">

                            </div>


                            {{-- Partner Marital Status --}}
                            <div>

                                <label class="mb-2 block text-sm font-semibold text-gray-700">
                                    Preferred Marital Status
                                </label>

                                <input type="text" wire:model="partner_marital_status" placeholder="e.g. Single"
                                    class="w-full rounded-xl border border-gray-200 px-4 py-3 outline-none transition focus:border-primary focus:ring-2 focus:ring-primary/10">

                            </div>


                            {{-- Partner Caste --}}
                            <div>

                                <label class="mb-2 block text-sm font-semibold text-gray-700">
                                    Preferred Caste
                                </label>

                                <input type="text" wire:model="partner_caste" placeholder="Preferred caste"
                                    class="w-full rounded-xl border border-gray-200 px-4 py-3 outline-none transition focus:border-primary focus:ring-2 focus:ring-primary/10">

                            </div>


                            {{-- Partner Sect --}}
                            <div>

                                <label class="mb-2 block text-sm font-semibold text-gray-700">
                                    Preferred Sect
                                </label>

                                <input type="text" wire:model="partner_sect" placeholder="Preferred sect"
                                    class="w-full rounded-xl border border-gray-200 px-4 py-3 outline-none transition focus:border-primary focus:ring-2 focus:ring-primary/10">

                            </div>

                        </div>


                        <div class="mt-6">

                            <label class="mb-2 block text-sm font-semibold text-gray-700">
                                Partner Family Details
                            </label>

                            <textarea wire:model="partner_family_details" rows="4"
                                placeholder="Any expectations regarding partner's family?"
                                class="w-full rounded-xl border border-gray-200 px-4 py-3 outline-none transition focus:border-primary focus:ring-2 focus:ring-primary/10"></textarea>

                        </div>

                    </div>


                    {{-- Divider --}}
                    <div class="border-t border-gray-100"></div>


                    {{-- ================================================= --}}
                    {{-- Image --}}
                    {{-- ================================================= --}}

                    <div>

                        <div class="mb-6">

                            <span class="text-sm font-semibold uppercase tracking-wider text-primary">

                                Step 05

                            </span>

                            <h3 class="mt-1 text-2xl font-bold text-gray-900">
                                Profile Photo
                            </h3>

                            <p class="mt-2 text-gray-500">
                                Upload a clear and recent photo.
                            </p>

                        </div>


                        <div
                            class="rounded-2xl border-2 border-dashed border-gray-200 bg-gray-50 p-8 text-center transition hover:border-primary/40">

                            @if ($image)
                                <img src="{{ $image->temporaryUrl() }}"
                                    class="mx-auto h-48 w-40 rounded-2xl object-cover shadow-lg">

                                <p class="mt-4 text-sm text-gray-500">
                                    Selected image
                                </p>
                            @else
                                <div
                                    class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-primary/10 text-2xl text-primary">

                                    📷

                                </div>

                                <p class="mt-4 font-semibold text-gray-700">
                                    Choose your profile photo
                                </p>

                                <p class="mt-1 text-sm text-gray-500">
                                    JPG, PNG or WEBP — Maximum 2MB
                                </p>
                            @endif


                            <label
                                class="mt-5 inline-flex cursor-pointer rounded-xl bg-primary px-6 py-3 font-semibold text-white shadow-lg transition hover:-translate-y-1 hover:bg-primary/90">

                                Choose Photo

                                <input type="file" wire:model="image" accept="image/jpeg,image/png,image/webp"
                                    class="hidden">

                            </label>


                            @error('image')
                                <p class="mt-3 text-sm text-red-500">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>

                    </div>


                    {{-- ================================================= --}}
                    {{-- Submit --}}
                    {{-- ================================================= --}}

                    <div class="rounded-2xl border border-primary/10 bg-primary/5 p-5">

                        <div class="flex gap-4">

                            <div
                                class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-primary/10 text-primary">

                                ✓

                            </div>

                            <div>

                                <h4 class="font-semibold text-gray-900">
                                    Profile Review
                                </h4>

                                <p class="mt-1 text-sm leading-6 text-gray-600">

                                    Your profile will be submitted for review.
                                    It will become visible to other users only
                                    after it has been approved by our admin team.

                                </p>

                            </div>

                        </div>

                    </div>


                    <div class="flex justify-end">

                        <button type="submit" wire:loading.attr="disabled"
                            class="inline-flex items-center rounded-xl bg-primary px-8 py-4 font-semibold text-white shadow-lg transition hover:-translate-y-1 hover:bg-primary/90 hover:shadow-xl disabled:cursor-not-allowed disabled:opacity-60">

                            <span wire:loading.remove wire:target="save">
                                Submit Profile
                            </span>

                            <span wire:loading wire:target="save">
                                Submitting...
                            </span>

                            <svg wire:loading.remove wire:target="save" xmlns="http://www.w3.org/2000/svg"
                                class="ml-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">

                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />

                            </svg>

                        </button>

                    </div>

                </div>

            </div>

        </form>

    </div>

</div>
