<section class="relative overflow-hidden">

    <div class="">

        <div class="grid grid-cols-1 items-center gap-10 lg:grid-cols-2 lg:gap-24">

            {{-- Left Content --}}
            {{-- Left Content --}}
            <div class="relative z-10">

                {{-- Badge --}}
                <div
                    class="flex items-center gap-2 rounded-2xl border border-gray-100 bg-white p-5 shadow-md transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">

                    <span class="relative flex h-3 w-3">

                        <span
                            class="absolute inline-flex h-full w-full rounded-full bg-green-500 opacity-70 animate-ping"></span>

                        <span class="relative inline-flex h-3 w-3 rounded-full bg-green-500"></span>

                    </span>

                    <span class="text-sm font-semibold tracking-wide text-primary">
                        Trusted Matrimonial Platform
                    </span>

                </div>

                {{-- Heading --}}
                <h1 style="font-family: Bebas Neue; !important"
                    class="mt-6 text-center text-4xl font-extrabold leading-tight tracking-wide text-gray-900 sm:text-5xl lg:text-left lg:text-6xl">

                    Find Your

                    <span class="text-primary">
                        Perfect Life Partner
                    </span>

                    <br>

                    <span class="text-secondary">
                        With Trust & Confidence
                    </span>

                </h1>

                {{-- Description --}}
                <p class="mt-6 max-w-xl text-center text-base leading-8 text-gray-600 sm:text-lg lg:text-left">

                    Waseeb Rishtay connects genuine individuals and families through
                    verified profiles, complete privacy and a secure matchmaking
                    experience, making your search for the right life partner simple,
                    respectful and trustworthy.

                </p>

                {{-- Buttons --}}
                <div class="mt-8 flex flex-col gap-4 sm:flex-row lg:justify-start justify-center">

                    <a href="{{ route('create_profile') }}"
                        class="w-full sm:w-auto group inline-flex hover:scale-105 items-center rounded-xl bg-primary px-7 py-3 font-semibold text-white shadow-lg transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">

                        Create Profile

                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="ml-2 h-5 w-5 transition-transform duration-300 group-hover:translate-x-1"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">

                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />

                        </svg>

                    </a>

                    <a href="{{ route('profiles') }}"
                        class="w-full sm:w-auto rounded-xl hover:scale-105 border border-primary bg-white px-7 py-3 font-semibold text-primary transition-all duration-300 hover:bg-primary hover:text-white hover:shadow-lg">

                        Browse Profiles

                    </a>

                </div>

                {{-- Features --}}
                <div class="mt-8 flex flex-col gap-4 sm:flex-row sm:flex-wrap lg:gap-6">

                    <div class="flex items-center gap-2 text-gray-700">

                        <div class="flex h-8 w-8 items-center justify-center rounded-full bg-green-100">

                            ✓

                        </div>

                        <span>Verified Profiles</span>

                    </div>

                    <div class="flex items-center gap-2 text-gray-700">

                        <div class="flex h-8 w-8 items-center justify-center rounded-full bg-blue-100">

                            🔒

                        </div>

                        <span>100% Privacy</span>

                    </div>

                    <div class="flex items-center gap-2 text-gray-700">

                        <div class="flex h-8 w-8 items-center justify-center rounded-full bg-pink-100">

                            ❤

                        </div>

                        <span>Trusted Matches</span>

                    </div>

                </div>

                {{-- Statistics --}}
                <div class="mt-12 grid grid-cols-1 gap-4 sm:grid-cols-3">

                    <div
                        class="rounded-2xl border border-gray-100 bg-white p-5 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-lg">

                        <h3 class="text-3xl font-bold text-primary">

                            500+

                        </h3>

                        <p class="mt-1 text-sm text-gray-500">

                            Verified Profiles

                        </p>

                    </div>

                    <div
                        class="rounded-2xl border border-gray-100 bg-white p-5 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-lg">

                        <h3 class="text-3xl font-bold text-primary">

                            200+

                        </h3>

                        <p class="mt-1 text-sm text-gray-500">

                            Happy Families

                        </p>

                    </div>

                    <div
                        class="rounded-2xl border border-gray-100 bg-white p-5 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-lg">

                        <h3 class="text-3xl font-bold text-primary">

                            24/7

                        </h3>

                        <p class="mt-1 text-sm text-gray-500">

                            Support

                        </p>

                    </div>

                </div>

            </div>

            {{-- Right Side --}}
            {{-- Right Side --}}
            <div class="relative mt-12 lg:mt-0">

                {{-- Background Glow --}}
                <div class="absolute -top-6 -right-6 h-40 w-40 rounded-full">
                </div>

                <div class="absolute -bottom-6 -left-6 h-40 w-40 rounded-full bg-secondary/10 blur-3xl">
                </div>

                {{-- Main Card --}}
                <div
                    class="relative overflow-hidden rounded-3xl border border-gray-100 bg-white p-5 sm:p-6 lg:p-8 shadow-xl transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl">

                    {{-- Header --}}
                    <div class="flex items-center gap-4">

                        <div class="relative">

                            <img src="{{ asset('waseeb-rishtay.png') }}" alt="Logo"
                                class="h-16 w-16 rounded-full border-4 border-white shadow-lg ring-4 ring-primary/10">

                            <span
                                class="absolute bottom-0 right-0 h-4 w-4 rounded-full border-2 border-white bg-green-500">
                            </span>

                        </div>

                        <div>

                            <h3 class="text-xl font-bold text-gray-900">
                                Waseeb Rishtay
                            </h3>

                            <p class="mt-1 text-sm text-gray-500">
                                Trusted Marriage Bureau
                            </p>

                        </div>

                    </div>

                    {{-- Divider --}}
                    <div class="my-8 border-t border-gray-100"></div>

                    {{-- Stats --}}
                    <div class="space-y-4">

                        <div
                            class="flex items-center justify-between rounded-2xl border border-gray-100 bg-gray-50 px-5 py-4 transition duration-300 hover:border-primary/20 hover:bg-white">

                            <div>

                                <p class="text-sm text-gray-500">
                                    Verified Profiles
                                </p>

                                <h4 class="mt-1 text-lg font-semibold text-gray-900">
                                    Trusted Members
                                </h4>

                            </div>

                            <span class="rounded-full bg-primary/10 px-4 py-1 text-sm font-bold text-primary">

                                500+

                            </span>

                        </div>

                        <div
                            class="flex items-center justify-between rounded-2xl border border-gray-100 bg-gray-50 px-5 py-4 transition duration-300 hover:border-primary/20 hover:bg-white">

                            <div>

                                <p class="text-sm text-gray-500">
                                    Successful Matches
                                </p>

                                <h4 class="mt-1 text-lg font-semibold text-gray-900">
                                    Happy Families
                                </h4>

                            </div>

                            <span class="rounded-full bg-secondary/10 px-4 py-1 text-sm font-bold text-secondary">

                                200+

                            </span>

                        </div>

                        <div
                            class="flex items-center justify-between rounded-2xl border border-gray-100 bg-gray-50 px-5 py-4 transition duration-300 hover:border-primary/20 hover:bg-white">

                            <div>

                                <p class="text-sm text-gray-500">
                                    Privacy Protection
                                </p>

                                <h4 class="mt-1 text-lg font-semibold text-gray-900">
                                    Secure Platform
                                </h4>

                            </div>

                            <span class="rounded-full bg-green-100 px-4 py-1 text-sm font-bold text-green-700">

                                100%

                            </span>

                        </div>

                    </div>

                    {{-- Footer --}}
                    <div class="mt-8 rounded-2xl bg-gradient-to-r from-primary to-secondary p-5 text-white">

                        <p class="text-sm text-white/80">
                            Join hundreds of families who trust Waseeb Rishtay to find meaningful relationships.
                        </p>

                    </div>

                </div>

                {{-- Floating Card 1 --}}
                <div
                    class="absolute -left-8 top-20 hidden rounded-2xl border border-gray-100 bg-white px-5 py-4 shadow-lg lg:block transition-all duration-300 hover:-translate-y-2">

                    <p class="text-xs uppercase tracking-wide text-gray-500">
                        Today
                    </p>

                    <h4 class="mt-1 text-xl font-bold text-primary">
                        +25
                    </h4>

                    <p class="text-sm text-gray-500">
                        New Profiles
                    </p>

                </div>

                {{-- Floating Card 2 --}}
                <div
                    class="absolute -bottom-8 -right-8 hidden rounded-2xl border border-primary/10 bg-white px-6 py-4 shadow-lg lg:block">

                    <div class="flex items-center gap-2">

                        <span class="h-3 w-3 rounded-full bg-green-500"></span>

                        <span class="text-sm font-medium text-gray-700">
                            Trusted by Thousands
                        </span>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
