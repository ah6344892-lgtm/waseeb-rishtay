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

                @foreach (range(1, 6) as $profile)
                    <div
                        class="group overflow-hidden rounded-3xl border border-gray-100 bg-white shadow-lg transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">

                        {{-- Image --}}
                        <div class="relative">

                            <img src="https://placehold.co/600x700"
                                class="h-80 w-full object-cover transition duration-500 group-hover:scale-105">

                            {{-- Verified --}}
                            <span
                                class="absolute left-4 top-4 rounded-full bg-green-500 px-3 py-1 text-xs font-semibold text-white">

                                ✓ Verified

                            </span>

                            {{-- Online --}}
                            <span
                                class="absolute right-4 top-4 flex items-center gap-2 rounded-full bg-white px-3 py-1 text-xs font-semibold text-gray-700 shadow">

                                <span class="h-2.5 w-2.5 rounded-full bg-green-500"></span>

                                Online

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

                                    Ahmed Ali

                                </h3>

                                <span
                                    class="rounded-full bg-secondary/10 px-3 py-1 text-sm font-semibold text-secondary">

                                    ID #1024

                                </span>

                            </div>

                            <p class="mt-2 text-gray-500">

                                Software Engineer

                            </p>

                            {{-- Details --}}
                            <div class="mt-6 grid grid-cols-2 gap-4">

                                <div class="rounded-xl border border-gray-100 bg-gray-50 p-3">

                                    <p class="text-xs text-gray-500">

                                        Age

                                    </p>

                                    <h4 class="mt-1 font-semibold">

                                        27 Years

                                    </h4>

                                </div>

                                <div class="rounded-xl border border-gray-100 bg-gray-50 p-3">

                                    <p class="text-xs text-gray-500">

                                        City

                                    </p>

                                    <h4 class="mt-1 font-semibold">

                                        Lahore

                                    </h4>

                                </div>

                                <div class="rounded-xl border border-gray-100 bg-gray-50 p-3">

                                    <p class="text-xs text-gray-500">

                                        Education

                                    </p>

                                    <h4 class="mt-1 font-semibold">

                                        BS CS

                                    </h4>

                                </div>

                                <div class="rounded-xl border border-gray-100 bg-gray-50 p-3">

                                    <p class="text-xs text-gray-500">

                                        Religion

                                    </p>

                                    <h4 class="mt-1 font-semibold">

                                        Muslim

                                    </h4>

                                </div>

                            </div>

                            {{-- Buttons --}}
                            <div class="mt-8 flex gap-3">

                                <a href="#"
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
