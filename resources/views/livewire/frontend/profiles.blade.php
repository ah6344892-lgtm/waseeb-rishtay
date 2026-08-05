<div>
    <section class="relative overflow-hidden">

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 items-center gap-12 lg:grid-cols-2">

                {{-- Left Content --}}
                <div>

                    {{-- Badge --}}
                    <div
                        class="inline-flex items-center gap-3 rounded-2xl border border-gray-100 bg-white px-5 py-3 shadow-md">

                        <span class="relative flex h-3 w-3">
                            <span
                                class="absolute inline-flex h-full w-full animate-ping rounded-full bg-green-500 opacity-70"></span>
                            <span class="relative inline-flex h-3 w-3 rounded-full bg-green-500"></span>
                        </span>

                        <span class="text-sm font-semibold tracking-wide text-primary">
                            Verified Marriage Profiles
                        </span>

                    </div>

                    {{-- Heading --}}
                    <h1 style="font-family: 'Bebas Neue', sans-serif"
                        class="mt-6 text-4xl leading-tight tracking-wide text-gray-900 sm:text-5xl lg:text-6xl">

                        Browse

                        <span class="text-primary">
                            Verified Profiles
                        </span>

                        <br>

                        <span class="text-secondary">
                            Find Your Perfect Match
                        </span>

                    </h1>

                    {{-- Description --}}
                    <p class="mt-6 max-w-xl text-lg leading-8 text-gray-600">

                        Explore genuine and verified marriage profiles from trusted
                        families. Find compatible matches with complete privacy,
                        security and confidence.

                    </p>

                    {{-- Buttons --}}
                    <div class="mt-8 flex flex-col gap-4 sm:flex-row">

                        <a href="{{ route('register') }}"
                            class="inline-flex items-center justify-center rounded-xl bg-primary px-7 py-3 font-semibold text-white shadow-lg transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">

                            Create Profile

                        </a>

                        <a href="#profiles"
                            class="inline-flex items-center justify-center rounded-xl border border-primary px-7 py-3 font-semibold text-primary transition-all duration-300 hover:bg-primary hover:text-white">

                            Browse Profiles

                        </a>

                    </div>

                </div>

                {{-- Right Card --}}
                <div class="relative">

                    <div
                        class="overflow-hidden rounded-3xl border border-gray-100 bg-white p-8 shadow-xl transition duration-300 hover:-translate-y-1 hover:shadow-2xl">

                        <div class="flex items-center gap-4">

                            <img src="{{ asset('waseeb-rishtay.png') }}"
                                class="h-16 w-16 rounded-full border-4 border-white shadow ring-4 ring-primary/10"
                                alt="Logo">

                            <div>

                                <h3 class="text-xl font-bold text-gray-900">
                                    Waseeb Rishtay
                                </h3>

                                <p class="text-sm text-gray-500">
                                    Find Your Perfect Match
                                </p>

                            </div>

                        </div>

                        <div class="my-8 border-t"></div>

                        <div class="grid grid-cols-3 gap-4">

                            <div class="rounded-2xl border border-gray-100 bg-gray-50 p-5 text-center">

                                <h3 class="text-3xl font-bold text-primary">
                                    500+
                                </h3>

                                <p class="mt-1 text-sm text-gray-500">
                                    Profiles
                                </p>

                            </div>

                            <div class="rounded-2xl border border-gray-100 bg-gray-50 p-5 text-center">

                                <h3 class="text-3xl font-bold text-secondary">
                                    200+
                                </h3>

                                <p class="mt-1 text-sm text-gray-500">
                                    Families
                                </p>

                            </div>

                            <div class="rounded-2xl border border-gray-100 bg-gray-50 p-5 text-center">

                                <h3 class="text-3xl font-bold text-green-600">
                                    100%
                                </h3>

                                <p class="mt-1 text-sm text-gray-500">
                                    Verified
                                </p>

                            </div>

                        </div>

                        <div class="mt-8 rounded-2xl bg-gradient-to-r from-primary to-secondary p-5 text-white">

                            <p class="text-sm text-white/90">
                                Discover verified profiles and connect with genuine
                                families in a safe and trusted environment.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
    {{-- End Hero --}}
    {{-- Profiles Section --}}
    <section id="profiles" class="relative py-12 lg:py-16">

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <div class="overflow-hidden rounded-3xl border border-gray-100 bg-white p-6 shadow-xl lg:p-8">

                {{-- Heading --}}
                <div class="flex flex-col gap-3 lg:flex-row lg:items-center lg:justify-between">

                    <div>

                        <span
                            class="inline-flex items-center rounded-full bg-primary/10 px-4 py-1 text-sm font-semibold text-primary">
                            Advanced Search
                        </span>

                        <h2 class="mt-3 text-3xl font-bold text-gray-900">
                            Find Your Ideal Match
                        </h2>

                        <p class="mt-2 text-gray-500">
                            Filter verified profiles according to your preferences.
                        </p>

                    </div>

                    <button
                        class="rounded-xl border border-primary px-5 py-3 font-semibold text-primary transition hover:bg-primary hover:text-white">
                        Reset Filters
                    </button>

                </div>

                {{-- Filters --}}
                <div class="mt-10 grid grid-cols-1 gap-10 sm:grid-cols-2 xl:grid-cols-5">

                    {{-- Gender --}}
                    <div class="mb-5">
                        <label class="mb-2 block text-sm font-semibold text-gray-700">
                            Gender
                        </label>

                        <select
                            class="w-full rounded-xl border border-gray-200 bg-white px-4 py-3 outline-none transition focus:border-primary focus:ring-4 focus:ring-primary/10">

                            <option>Any</option>
                            <option>Male</option>
                            <option>Female</option>

                        </select>
                    </div>

                    {{-- Age --}}
                    <div class="mb-5">
                        <label class="mb-2 block text-sm font-semibold text-gray-700">
                            Age
                        </label>

                        <select
                            class="w-full rounded-xl border border-gray-200 bg-white px-4 py-3 outline-none transition focus:border-primary focus:ring-4 focus:ring-primary/10">

                            <option>18 - 25</option>
                            <option>26 - 30</option>
                            <option>31 - 35</option>
                            <option>36+</option>

                        </select>
                    </div>

                    {{-- City --}}
                    <div class="mb-5">
                        <label class="mb-2 block text-sm font-semibold text-gray-700">
                            City
                        </label>

                        <select
                            class="w-full rounded-xl border border-gray-200 bg-white px-4 py-3 outline-none transition focus:border-primary focus:ring-4 focus:ring-primary/10">

                            <option>All Cities</option>
                            <option>Lahore</option>
                            <option>Karachi</option>
                            <option>Islamabad</option>
                            <option>Multan</option>

                        </select>
                    </div>

                    {{-- Education --}}
                    <div class="mb-5">
                        <label class="mb-2 block text-sm font-semibold text-gray-700">
                            Education
                        </label>

                        <select
                            class="w-full rounded-xl border border-gray-200 bg-white px-4 py-3 outline-none transition focus:border-primary focus:ring-4 focus:ring-primary/10">

                            <option>Any</option>
                            <option>Matric</option>
                            <option>Intermediate</option>
                            <option>Graduate</option>
                            <option>Master</option>

                        </select>
                    </div>

                    {{-- Search --}}
                    <div class="flex items-end">

                        <button
                            class="w-full rounded-xl bg-primary px-6 py-3 font-semibold text-white shadow-lg transition-all duration-300 hover:-translate-y-1 hover:bg-primary/90 hover:shadow-xl">

                            Search Profiles

                        </button>

                    </div>

                </div>

                {{-- Popular Searches --}}
                <div class="mt-8">

                    <p class="mb-3 text-sm font-semibold text-gray-700">
                        Popular Searches
                    </p>

                    <div class="flex flex-wrap gap-3">

                        <button
                            class="rounded-full border border-primary/20 bg-primary/5 px-4 py-2 text-sm text-primary transition hover:bg-primary hover:text-white">
                            Doctor
                        </button>

                        <button
                            class="rounded-full border border-primary/20 bg-primary/5 px-4 py-2 text-sm text-primary transition hover:bg-primary hover:text-white">
                            Engineer
                        </button>

                        <button
                            class="rounded-full border border-primary/20 bg-primary/5 px-4 py-2 text-sm text-primary transition hover:bg-primary hover:text-white">
                            Government Job
                        </button>

                        <button
                            class="rounded-full border border-primary/20 bg-primary/5 px-4 py-2 text-sm text-primary transition hover:bg-primary hover:text-white">
                            Overseas
                        </button>

                        <button
                            class="rounded-full border border-primary/20 bg-primary/5 px-4 py-2 text-sm text-primary transition hover:bg-primary hover:text-white">
                            Hafiz-e-Quran
                        </button>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <section class="py-14 lg:py-20">

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            {{-- Section Heading --}}
            <div class="flex flex-col gap-4 lg:flex-row lg:items-end lg:justify-between">

                <div>

                    <span class="inline-flex rounded-full bg-primary/10 px-4 py-2 text-sm font-semibold text-primary">
                        Verified Profiles
                    </span>

                    <h2 class="mt-4 text-4xl font-bold text-gray-900">
                        Browse Latest Profiles
                    </h2>

                    <p class="mt-3 max-w-2xl text-gray-600">
                        Discover genuine and verified marriage profiles carefully
                        reviewed for privacy, trust and authenticity.
                    </p>

                </div>

                <a href="#"
                    class="rounded-xl border border-primary px-6 py-3 font-semibold text-primary transition hover:bg-primary hover:text-white">

                    View All Profiles

                </a>

            </div>

            {{-- Cards --}}
            <div class="mt-12 grid grid-cols-1 gap-8 md:grid-cols-2 xl:grid-cols-3">

                {{-- @foreach (range(1, 6) as $profile) --}}
                @foreach ($profiles as $profile)
                    <div
                        class="group overflow-hidden rounded-3xl border border-gray-100 bg-white shadow-lg transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">

                        {{-- Image --}}
                        <div class="relative">

                            {{-- <img src="{{ $profile->image ? asset('storage/' . $profile->image) : 'https://placehold.co/600x700' }}"
                                alt="{{ $profile->name }}"
                                class="h-80 w-full object-cover transition duration-500 group-hover:scale-105"> --}}
                            <div class="relative h-80 overflow-hidden rounded-2xl bg-gray-100">

                                {{-- Blur Background --}}
                                <img src="{{ asset('profile_images/f-pic1.jpg') }}" alt="{{ $profile->name }}"
                                    class="absolute inset-0 h-full w-full scale-110 object-cover blur-2xl opacity-30">

                                {{-- Main Image --}}
                                <img src="{{ asset('profile_images/f-pic1.jpg') }}" alt="{{ $profile->name }}"
                                    class="relative z-0 h-full w-full object-contain transition-transform duration-500 group-hover:scale-105">

                            </div>

                            {{-- Verified --}}
                            <span
                                class="absolute left-4 top-4 rounded-full px-3 py-1 text-xs font-semibold text-white
                {{ $profile->is_verified ? 'bg-green-500' : 'bg-red-500' }}">

                                {{ $profile->is_verified ? 'Verified' : 'Unverified' }}

                            </span>

                            {{-- Paid Badge --}}
                            @if ($profile->is_paid)
                                <span
                                    class="absolute left-4 top-14 rounded-full bg-yellow-500 px-3 py-1 text-xs font-semibold text-white">
                                    Premium
                                </span>
                            @endif

                            {{-- Active --}}
                            <span
                                class="absolute right-4 top-4 flex items-center gap-2 rounded-full bg-white px-3 py-1 text-xs font-semibold text-gray-700 shadow">

                                <span
                                    class="h-2.5 w-2.5 rounded-full {{ $profile->is_active ? 'bg-green-500' : 'bg-red-500' }}"></span>

                                {{ $profile->is_active ? 'Active' : 'Inactive' }}

                            </span>

                            {{-- Favourite --}}
                            <button
                                class="absolute bottom-4 right-4 flex h-12 w-12 items-center justify-center rounded-full bg-white shadow-lg transition hover:bg-primary hover:text-white">

                                ❤

                            </button>

                        </div>

                        {{-- Content --}}
                        <div class="p-6">

                            <div class="flex items-center justify-between">

                                <h3 class="text-2xl font-bold text-gray-900">
                                    {{ $profile->name }}
                                </h3>

                                <span
                                    class="rounded-full bg-secondary/10 px-3 py-1 text-sm font-semibold text-secondary">
                                    {{ $profile->profile_id }}
                                </span>

                            </div>

                            <p class="mt-2 text-gray-500">
                                {{ $profile->profession }} • {{ $profile->marital_status }}
                            </p>

                            {{-- Details --}}
                            <div class="mt-6 grid grid-cols-2 gap-4">

                                <div class="rounded-xl border border-gray-100 bg-gray-50 p-3">
                                    <p class="text-xs text-gray-500">
                                        Age
                                    </p>

                                    <h4 class="mt-1 font-semibold">
                                        {{ $profile->age }} Years
                                    </h4>
                                </div>

                                <div class="rounded-xl border border-gray-100 bg-gray-50 p-3">
                                    <p class="text-xs text-gray-500">
                                        City
                                    </p>

                                    <h4 class="mt-1 font-semibold">
                                        {{ $profile->city }}
                                    </h4>
                                </div>

                                <div class="rounded-xl border border-gray-100 bg-gray-50 p-3">
                                    <p class="text-xs text-gray-500">
                                        Education
                                    </p>

                                    <h4 class="mt-1 font-semibold">
                                        {{ $profile->education }}
                                    </h4>
                                </div>

                                <div class="rounded-xl border border-gray-100 bg-gray-50 p-3">
                                    <p class="text-xs text-gray-500">
                                        Sect
                                    </p>

                                    <h4 class="mt-1 font-semibold">
                                        {{ $profile->sect ?? 'N/A' }}
                                    </h4>
                                </div>

                                <div class="rounded-xl border border-gray-100 bg-gray-50 p-3">
                                    <p class="text-xs text-gray-500">
                                        Caste
                                    </p>

                                    <h4 class="mt-1 font-semibold">
                                        {{ $profile->caste }}
                                    </h4>
                                </div>

                                <div class="rounded-xl border border-gray-100 bg-gray-50 p-3">
                                    <p class="text-xs text-gray-500">
                                        Height
                                    </p>

                                    <h4 class="mt-1 font-semibold">
                                        {{ $profile->height }}
                                    </h4>
                                </div>

                            </div>

                            {{-- Buttons --}}
                            <div class="mt-8 flex gap-3">

                                <a href="{{ route('profile_detail', $profile->profile_id) }}"
                                    class="flex-1 rounded-xl bg-primary px-5 py-3 text-center font-semibold text-white transition hover:bg-primary/90">

                                    View Profile

                                </a>

                                <button
                                    class="rounded-xl border border-primary px-5 py-3 font-semibold text-primary transition hover:bg-primary hover:text-white">

                                    Connect

                                </button>

                            </div>

                        </div>

                    </div>
                @endforeach

            </div>

        </div>

    </section>
    <section class="pb-16 lg:pb-24">

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            {{-- Results & Sort --}}
            <div
                class="mb-10 flex flex-col gap-5 rounded-3xl border border-gray-100 bg-white p-6 shadow-lg lg:flex-row lg:items-center lg:justify-between">

                <div>

                    <h3 class="text-2xl font-bold text-gray-900">
                        Search Results
                    </h3>

                    <p class="mt-2 text-gray-500">
                        Showing
                        <span class="font-semibold text-primary">
                            {{ $profiles->firstItem() ?? 0 }} - {{ $profiles->lastItem() ?? 0 }}
                        </span>
                        of
                        <span class="font-semibold text-primary">
                            {{ $profiles->total() }}
                        </span>
                        verified profiles.
                    </p>

                </div>

                <div class="flex flex-col gap-3 sm:flex-row">

                    <select wire:model.live="sort"
                        class="rounded-xl border border-gray-200 bg-white px-5 py-3 outline-none transition focus:border-primary focus:ring-4 focus:ring-primary/10">

                        <option value="newest">Newest First</option>
                        <option value="oldest">Oldest First</option>
                        <option value="age_low">Age: Low to High</option>
                        <option value="age_high">Age: High to Low</option>

                    </select>

                </div>

            </div>

            {{-- Pagination --}}
            {{-- <div class="mt-10 flex flex-wrap items-center justify-center gap-3">

                <button
                    class="rounded-xl border border-gray-200 bg-white px-5 py-3 font-medium text-gray-600 transition hover:border-primary hover:text-primary">

                    Previous

                </button>

                <button
                    class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary font-bold text-white shadow-lg">

                    1

                </button>

                <button
                    class="flex h-12 w-12 items-center justify-center rounded-xl border border-gray-200 bg-white transition hover:border-primary hover:text-primary">

                    2

                </button>

                <button
                    class="flex h-12 w-12 items-center justify-center rounded-xl border border-gray-200 bg-white transition hover:border-primary hover:text-primary">

                    3

                </button>

                <button
                    class="flex h-12 w-12 items-center justify-center rounded-xl border border-gray-200 bg-white transition hover:border-primary hover:text-primary">

                    4

                </button>

                <button
                    class="rounded-xl border border-gray-200 bg-white px-5 py-3 font-medium text-gray-600 transition hover:border-primary hover:text-primary">

                    Next

                </button>

            </div> --}}
            <div>
                @if ($profiles->hasPages())
                    <div class="mt-12">
                        {{ $profiles->links(data: ['scrollTo' => false]) }}
                    </div>
                @endif
            </div>
            {{-- Empty State (Show only when no profiles found) --}}
            {{-- Remove "hidden" when needed --}}
            <div class="hidden mt-16">

                <div
                    class="rounded-3xl border border-dashed border-gray-300 bg-white px-8 py-16 text-center shadow-lg">

                    <div class="mx-auto flex h-24 w-24 items-center justify-center rounded-full bg-primary/10">

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-primary" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">

                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-4.3-4.3m1.8-5.2a7 7 0 11-14 0 7 7 0 0114 0z" />

                        </svg>

                    </div>

                    <h3 class="mt-8 text-3xl font-bold text-gray-900">
                        No Profiles Found
                    </h3>

                    <p class="mx-auto mt-4 max-w-xl text-gray-500">
                        We couldn't find any profiles matching your search criteria.
                        Try changing your filters or search again.
                    </p>

                    <button
                        class="mt-8 rounded-xl bg-primary px-8 py-3 font-semibold text-white shadow-lg transition hover:bg-primary/90">

                        Reset Filters

                    </button>

                </div>

            </div>

        </div>

    </section>
    <section class="relative overflow-hidden py-20 mt-2">

        {{-- Background --}}
        {{-- <div class="absolute inset-0 bg-gradient-to-br from-primary/5 via-white to-secondary/10"></div> --}}

        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <div class="overflow-hidden rounded-[32px] border border-primary/10 bg-white shadow-2xl">

                <div class="grid items-center gap-12 p-8 lg:grid-cols-2 lg:p-16">

                    {{-- Left --}}
                    <div>

                        <span
                            class="inline-flex rounded-full bg-primary/10 px-4 py-2 text-sm font-semibold text-primary">

                            Join Waseeb Rishtay

                        </span>

                        <h2 class="mt-6 text-4xl font-bold leading-tight text-gray-900 lg:text-5xl">

                            Your Perfect Match
                            <span class="text-primary">
                                Is Waiting
                            </span>

                        </h2>

                        <p class="mt-6 text-lg leading-8 text-gray-600">

                            Thousands of verified families trust Waseeb Rishtay
                            to find compatible life partners in a secure,
                            respectful and private environment.

                        </p>

                        <div class="mt-10 flex flex-col gap-4 sm:flex-row">

                            <a href="{{ route('register') }}"
                                class="rounded-xl bg-primary px-8 py-4 text-center font-semibold text-white shadow-lg transition duration-300 hover:-translate-y-1 hover:shadow-xl">

                                Create Free Profile

                            </a>

                            <a href="{{ route('contact') }}"
                                class="rounded-xl border border-primary px-8 py-4 text-center font-semibold text-primary transition duration-300 hover:bg-primary hover:text-white">

                                Contact Us

                            </a>

                        </div>

                    </div>

                    {{-- Right --}}
                    <div>

                        <div class="grid grid-cols-2 gap-5">

                            <div class="rounded-2xl border border-primary/10 bg-primary/5 p-6 text-center">

                                <h3 class="text-4xl font-bold text-primary">
                                    500+
                                </h3>

                                <p class="mt-2 text-gray-600">
                                    Verified Profiles
                                </p>

                            </div>

                            <div class="rounded-2xl border border-secondary/20 bg-secondary/10 p-6 text-center">

                                <h3 class="text-4xl font-bold text-secondary">
                                    250+
                                </h3>

                                <p class="mt-2 text-gray-600">
                                    Happy Families
                                </p>

                            </div>

                            <div class="rounded-2xl border border-green-200 bg-green-50 p-6 text-center">

                                <h3 class="text-4xl font-bold text-green-600">
                                    100%
                                </h3>

                                <p class="mt-2 text-gray-600">
                                    Verified Members
                                </p>

                            </div>

                            <div class="rounded-2xl border border-amber-200 bg-amber-50 p-6 text-center">

                                <h3 class="text-4xl font-bold text-amber-500">
                                    24/7
                                </h3>

                                <p class="mt-2 text-gray-600">
                                    Customer Support
                                </p>

                            </div>

                        </div>

                        {{-- Trust Features --}}
                        <div class="mt-8 rounded-2xl bg-gray-50 p-6">

                            <h4 class="text-lg font-bold text-gray-900">

                                Why Choose Us?

                            </h4>

                            <div class="mt-5 space-y-4">

                                <div class="flex items-center gap-3">

                                    <div
                                        class="flex h-10 w-10 items-center justify-center rounded-full bg-primary/10 text-primary">

                                        ✓

                                    </div>

                                    <span class="font-medium text-gray-700">
                                        100% Verified Profiles
                                    </span>

                                </div>

                                <div class="flex items-center gap-3">

                                    <div
                                        class="flex h-10 w-10 items-center justify-center rounded-full bg-primary/10 text-primary">

                                        ✓

                                    </div>

                                    <span class="font-medium text-gray-700">
                                        Secure & Private Platform
                                    </span>

                                </div>

                                <div class="flex items-center gap-3">

                                    <div
                                        class="flex h-10 w-10 items-center justify-center rounded-full bg-primary/10 text-primary">

                                        ✓

                                    </div>

                                    <span class="font-medium text-gray-700">
                                        Trusted by Thousands of Families
                                    </span>

                                </div>

                                <div class="flex items-center gap-3">

                                    <div
                                        class="flex h-10 w-10 items-center justify-center rounded-full bg-primary/10 text-primary">

                                        ✓

                                    </div>

                                    <span class="font-medium text-gray-700">
                                        Easy Search & Smart Matching
                                    </span>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
</div>
