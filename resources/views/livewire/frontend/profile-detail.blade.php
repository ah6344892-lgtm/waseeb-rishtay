<div>
    <section class="bg-gradient-to-b from-primary/5 via-white to-white py-10 lg:py-14">

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <div class="overflow-hidden rounded-3xl border border-gray-100 bg-white shadow-xl">

                <div class="grid gap-10 p-8 lg:grid-cols-[320px,1fr] lg:p-10">

                    {{-- Profile Image --}}
                    <div>

                        {{-- <div class="overflow-hidden rounded-3xl border border-gray-200 bg-gray-100">

                            @if ($profile->image)
                                <img src="{{ asset('profile_images/f-pic1.jpg') }}" alt="{{ $profile->name }}"
                                    class="h-[420px] w-full object-cover object-top">
                            @else
                                <img src="https://placehold.co/500x700" alt="{{ $profile->name }}"
                                    class="h-[420px] w-full object-cover">
                            @endif

                        </div> --}}
                        <div class="relative h-[420px] overflow-hidden rounded-3xl border border-gray-200 bg-gray-100">

                            @if ($profile->image)
                                {{-- Blur Background --}}
                                <img src="{{ $profile->image ? Storage::url($profile->image) : 'https://placehold.co/60x60?text=No+Image' }}"
                                    alt=""
                                    class="absolute inset-0 h-full w-full scale-110 object-cover blur-2xl opacity-30">

                                {{-- Main Image --}}
                                <img src="{{ $profile->image ? Storage::url($profile->image) : 'https://placehold.co/60x60?text=No+Image' }}"
                                    alt="{{ $profile->name }}" class="relative z-10 h-full w-full object-contain">
                            @else
                                <img src="https://placehold.co/500x700" alt="{{ $profile->name }}"
                                    class="h-full w-full object-contain">
                            @endif

                        </div>

                    </div>

                    {{-- Profile Info --}}
                    <div class="flex flex-col justify-center">

                        {{-- Badges --}}
                        <div class="flex flex-wrap gap-3">

                            <span
                                class="rounded-full px-4 py-2 text-sm font-semibold
                            {{ $profile->is_verified ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">

                                {{ $profile->is_verified ? '✔ Verified' : '✖ Unverified' }}

                            </span>

                            @if ($profile->is_paid)
                                <span
                                    class="rounded-full bg-yellow-100 px-4 py-2 text-sm font-semibold text-yellow-700">

                                    ⭐ Premium

                                </span>
                            @endif

                            <span
                                class="rounded-full px-4 py-2 text-sm font-semibold
                            {{ $profile->is_active ? 'bg-primary/10 text-primary' : 'bg-gray-200 text-gray-600' }}">

                                {{ $profile->is_active ? '● Active' : 'Inactive' }}

                            </span>

                        </div>

                        {{-- Name --}}
                        <h1 class="mt-6 text-4xl font-bold tracking-tight text-gray-900 lg:text-5xl">

                            {{ $profile->name }}

                        </h1>

                        {{-- Profile ID --}}
                        <div class="mt-3">

                            <span class="rounded-xl bg-secondary/10 px-4 py-2 font-semibold text-secondary">

                                Profile ID :
                                {{ $profile->profile_id }}

                            </span>

                        </div>

                        {{-- Profession --}}
                        <p class="mt-6 text-lg text-gray-600">

                            {{ $profile->profession }}

                        </p>

                        {{-- Quick Info --}}
                        <div class="mt-8 grid grid-cols-2 gap-4 md:grid-cols-4">

                            <div class="rounded-2xl border border-gray-100 bg-gray-50 p-4">

                                <p class="text-sm text-gray-500">
                                    Age
                                </p>

                                <h3 class="mt-1 text-lg font-bold">
                                    {{ $profile->age }} Years
                                </h3>

                            </div>

                            <div class="rounded-2xl border border-gray-100 bg-gray-50 p-4">

                                <p class="text-sm text-gray-500">
                                    Gender
                                </p>

                                <h3 class="mt-1 text-lg font-bold">
                                    {{ $profile->gender }}
                                </h3>

                            </div>

                            <div class="rounded-2xl border border-gray-100 bg-gray-50 p-4">

                                <p class="text-sm text-gray-500">
                                    City
                                </p>

                                <h3 class="mt-1 text-lg font-bold">
                                    {{ $profile->city }}
                                </h3>

                            </div>

                            <div class="rounded-2xl border border-gray-100 bg-gray-50 p-4">

                                <p class="text-sm text-gray-500">
                                    Height
                                </p>

                                <h3 class="mt-1 text-lg font-bold">
                                    {{ $profile->height ?? 'N/A' }}
                                </h3>

                            </div>

                        </div>

                        {{-- Buttons --}}
                        <div class="mt-10 flex flex-wrap gap-4">

                            <button
                                class="rounded-xl bg-primary px-7 py-3 font-semibold text-white transition hover:bg-primary/90">

                                Connect

                            </button>

                            <a href="{{ route('profiles') }}"
                                class="rounded-xl border border-primary px-7 py-3 font-semibold text-primary transition hover:bg-primary hover:text-white">

                                Back to Profiles

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
    {{-- ============================= --}}
    {{-- Personal Information --}}
    {{-- ============================= --}}

    <section class="py-10">

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <div class="rounded-3xl border border-gray-100 bg-white p-8 shadow-xl">

                {{-- Heading --}}
                <div class="mb-8 flex items-center gap-4">

                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-primary/10 text-primary">

                        👤

                    </div>

                    <div>

                        <h2 class="text-3xl font-bold text-gray-900">
                            Personal Information
                        </h2>

                        <p class="mt-1 text-gray-500">
                            Basic details about this profile.
                        </p>

                    </div>

                </div>

                {{-- Information Grid --}}
                <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">

                    {{-- Gender --}}
                    <div class="rounded-2xl border border-gray-100 bg-gray-50 p-5">
                        <p class="text-sm text-gray-500">Gender</p>
                        <h4 class="mt-2 text-lg font-semibold text-gray-900">
                            {{ $profile->gender }}
                        </h4>
                    </div>

                    {{-- Age --}}
                    <div class="rounded-2xl border border-gray-100 bg-gray-50 p-5">
                        <p class="text-sm text-gray-500">Age</p>
                        <h4 class="mt-2 text-lg font-semibold text-gray-900">
                            {{ $profile->age }} Years
                        </h4>
                    </div>

                    {{-- Height --}}
                    <div class="rounded-2xl border border-gray-100 bg-gray-50 p-5">
                        <p class="text-sm text-gray-500">Height</p>
                        <h4 class="mt-2 text-lg font-semibold text-gray-900">
                            {{ $profile->height ?? 'N/A' }}
                        </h4>
                    </div>

                    {{-- City --}}
                    <div class="rounded-2xl border border-gray-100 bg-gray-50 p-5">
                        <p class="text-sm text-gray-500">City</p>
                        <h4 class="mt-2 text-lg font-semibold text-gray-900">
                            {{ $profile->city }}
                        </h4>
                    </div>

                    {{-- Caste --}}
                    <div class="rounded-2xl border border-gray-100 bg-gray-50 p-5">
                        <p class="text-sm text-gray-500">Caste</p>
                        <h4 class="mt-2 text-lg font-semibold text-gray-900">
                            {{ $profile->caste }}
                        </h4>
                    </div>

                    {{-- Sect --}}
                    <div class="rounded-2xl border border-gray-100 bg-gray-50 p-5">
                        <p class="text-sm text-gray-500">Sect</p>
                        <h4 class="mt-2 text-lg font-semibold text-gray-900">
                            {{ $profile->sect ?: 'Not Mentioned' }}
                        </h4>
                    </div>

                    {{-- Marital Status --}}
                    <div class="rounded-2xl border border-gray-100 bg-gray-50 p-5 sm:col-span-2 lg:col-span-3">

                        <p class="text-sm text-gray-500">
                            Marital Status
                        </p>

                        <h4 class="mt-2 text-lg font-semibold text-gray-900">
                            {{ $profile->marital_status }}
                        </h4>

                    </div>

                </div>

            </div>

        </div>

    </section>
    {{-- ============================= --}}
    {{-- Education & Family --}}
    {{-- ============================= --}}

    <section class="pb-10">

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <div class="rounded-3xl border border-gray-100 bg-white p-8 shadow-xl">

                {{-- Heading --}}
                <div class="mb-8 flex items-center gap-4">

                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-secondary/10 text-secondary">

                        🎓

                    </div>

                    <div>

                        <h2 class="text-3xl font-bold text-gray-900">
                            Education & Family
                        </h2>

                        <p class="mt-1 text-gray-500">
                            Educational, professional and family background.
                        </p>

                    </div>

                </div>

                {{-- Top Cards --}}
                <div class="grid gap-5 lg:grid-cols-2">

                    {{-- Education --}}
                    <div class="rounded-2xl border border-gray-100 bg-gray-50 p-6 transition hover:shadow-md">

                        <p class="text-sm font-medium text-gray-500">
                            Education
                        </p>

                        <h3 class="mt-3 text-2xl font-bold text-gray-900">
                            {{ $profile->education }}
                        </h3>

                    </div>

                    {{-- Profession --}}
                    <div class="rounded-2xl border border-gray-100 bg-gray-50 p-6 transition hover:shadow-md">

                        <p class="text-sm font-medium text-gray-500">
                            Profession
                        </p>

                        <h3 class="mt-3 text-2xl font-bold text-gray-900">
                            {{ $profile->profession }}
                        </h3>

                    </div>

                </div>

                {{-- Family Details --}}
                <div class="mt-8">

                    <div class="rounded-2xl border border-gray-100 bg-gray-50 p-6">

                        <h3 class="text-xl font-bold text-gray-900">
                            Family Details
                        </h3>

                        <div class="mt-4 leading-8 text-gray-600">

                            @if ($profile->family_details)
                                {{ $profile->family_details }}
                            @else
                                <span class="italic text-gray-400">
                                    Family details are not available.
                                </span>
                            @endif

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
    {{-- ============================= --}}
    {{-- Partner Preference --}}
    {{-- ============================= --}}

    <section class="pb-10">

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <div class="rounded-3xl border border-gray-100 bg-white p-8 shadow-xl">

                {{-- Heading --}}
                <div class="mb-8 flex items-center gap-4">

                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-primary/10 text-primary">

                        ❤️

                    </div>

                    <div>

                        <h2 class="text-3xl font-bold text-gray-900">
                            Partner Preference
                        </h2>

                        <p class="mt-1 text-gray-500">
                            Preferred qualities and requirements for a life partner.
                        </p>

                    </div>

                </div>

                {{-- Preference Cards --}}
                <div class="grid gap-5 md:grid-cols-2 lg:grid-cols-3">

                    {{-- Desired Age --}}
                    <div class="rounded-2xl border border-gray-100 bg-gray-50 p-6 transition hover:shadow-md">

                        <p class="text-sm font-medium text-gray-500">
                            Desired Age
                        </p>

                        <h3 class="mt-3 text-xl font-bold text-gray-900">

                            @if ($profile->desired_age_from && $profile->desired_age_to)
                                {{ $profile->desired_age_from }}
                                -
                                {{ $profile->desired_age_to }}
                                Years
                            @else
                                Not Specified
                            @endif

                        </h3>

                    </div>

                    {{-- Desired Education --}}
                    <div class="rounded-2xl border border-gray-100 bg-gray-50 p-6 transition hover:shadow-md">

                        <p class="text-sm font-medium text-gray-500">
                            Desired Education
                        </p>

                        <h3 class="mt-3 text-xl font-bold text-gray-900">

                            {{ $profile->desired_education ?? 'Not Specified' }}

                        </h3>

                    </div>

                    {{-- Other Requirements --}}
                    <div
                        class="rounded-2xl border border-gray-100 bg-gray-50 p-6 transition hover:shadow-md md:col-span-2 lg:col-span-1">

                        <p class="text-sm font-medium text-gray-500">
                            Other Requirements
                        </p>

                        <div class="mt-3 leading-7 text-gray-700">

                            @if ($profile->other_requirements)
                                {{ $profile->other_requirements }}
                            @else
                                <span class="italic text-gray-400">
                                    No additional requirements mentioned.
                                </span>
                            @endif

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
    {{-- ============================= --}}
    {{-- Contact & Actions --}}
    {{-- ============================= --}}

    <section class="pb-16 lg:pb-24">

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <div class="overflow-hidden rounded-3xl border border-gray-100 bg-white shadow-xl">

                <div class="grid gap-10 p-8 lg:grid-cols-[1fr,320px] lg:p-10">

                    {{-- Left --}}
                    <div>

                        <div class="mb-8">

                            <span
                                class="inline-flex rounded-full bg-primary/10 px-4 py-2 text-sm font-semibold text-primary">

                                Contact Information

                            </span>

                            <h2 class="mt-4 text-3xl font-bold text-gray-900">
                                Get in Touch
                            </h2>

                            <p class="mt-2 text-gray-500">
                                Contact information and profile status.
                            </p>

                        </div>

                        <div class="grid gap-5 md:grid-cols-2">

                            {{-- Phone --}}
                            <div class="rounded-2xl border border-gray-100 bg-gray-50 p-5">

                                <p class="text-sm text-gray-500">
                                    Phone Number
                                </p>

                                <h3 class="mt-2 text-xl font-bold text-gray-900">
                                    {{ $profile->phone }}
                                </h3>

                            </div>

                            {{-- Member Since --}}
                            <div class="rounded-2xl border border-gray-100 bg-gray-50 p-5">

                                <p class="text-sm text-gray-500">
                                    Member Since
                                </p>

                                <h3 class="mt-2 text-xl font-bold text-gray-900">
                                    {{ $profile->created_at->format('d M Y') }}
                                </h3>

                            </div>

                            {{-- Verification --}}
                            <div class="rounded-2xl border border-gray-100 bg-gray-50 p-5 md:col-span-2">

                                <p class="text-sm text-gray-500">
                                    Verification Status
                                </p>

                                <h3 class="mt-2 text-xl font-bold">

                                    @if ($profile->is_verified)

                                        <span class="text-green-600">
                                            ✔ Verified
                                        </span>

                                        @if ($profile->verified_at)
                                            <span class="mt-2 block text-sm font-normal text-gray-500">

                                                Verified on
                                                {{ $profile->verified_at->format('d M Y') }}

                                            </span>
                                        @endif
                                    @else
                                        <span class="text-red-600">
                                            ✖ Not Verified
                                        </span>

                                    @endif

                                </h3>

                            </div>

                        </div>

                    </div>

                    {{-- Right --}}
                    <div
                        class="flex flex-col justify-center rounded-3xl bg-gradient-to-br from-primary to-secondary p-8 text-white">

                        <h3 class="text-3xl font-bold">
                            Interested?
                        </h3>

                        <p class="mt-4 leading-8 text-white/90">

                            If this profile matches your preferences,
                            you can contact or connect with this member.

                        </p>

                        <button
                            class="mt-8 rounded-xl bg-white px-6 py-3 font-semibold text-primary transition hover:scale-105">

                            Connect Now

                        </button>

                        <a href="{{ route('home') }}"
                            class="mt-4 rounded-xl border border-white/40 px-6 py-3 text-center font-semibold text-white transition hover:bg-white hover:text-primary">

                            Back to Profiles

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>
</div>
