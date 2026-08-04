<div>
    @include('components.frontend.hero')
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

                @foreach ($profiles as $profile)
                    <div
                        class="group overflow-hidden rounded-3xl border border-gray-100 bg-white shadow-lg transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">

                        {{-- Image --}}
                        <div class="relative">

                            {{-- <img src="{{ $profile->image ? asset('storage/' . $profile->image) : 'https://placehold.co/600x700' }}"
                                alt="{{ $profile->name }}"
                                class="h-80 w-full object-cover transition duration-500 group-hover:scale-105"> --}}
                            <img src="https://placehold.co/600x700"
                                class="h-80 w-full object-cover transition duration-500 group-hover:scale-105">

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

                                <a href=""
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
</div>
