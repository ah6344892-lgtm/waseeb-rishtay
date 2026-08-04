<section class="relative overflow-hidden bg-gradient-to-b from-white via-rose-50/30 to-white py-24">

    {{-- Background --}}
    <div class="absolute inset-0">

        <div class="absolute left-0 top-0 h-80 w-80 rounded-full bg-primary/5 blur-3xl"></div>

        <div class="absolute bottom-0 right-0 h-80 w-80 rounded-full bg-secondary/5 blur-3xl"></div>

    </div>

    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        {{-- Heading --}}
        <div class="mx-auto max-w-3xl text-center">

            <span
                class="inline-flex items-center rounded-full border border-primary/10 bg-gradient-to-br from-primary/10 to-secondary/10 px-5 py-2 text-sm font-semibold text-primary">

                💍 How It Works

            </span>

            <h2 class="mt-6 text-4xl font-extrabold leading-tight tracking-tight text-gray-900 md:text-5xl">

                Find Your Perfect Match

                <span class="text-primary">

                    In Three Simple Steps

                </span>

            </h2>

            <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-gray-600">

                Creating your profile, completing your information, and
                connecting with verified members is quick, secure, and
                designed to help you find the right life partner.

            </p>

        </div>

        {{-- Cards Wrapper --}}
        <div class="relative mt-20">

            {{-- Connector Line (Desktop Only) --}}
            <div class="absolute left-0 right-0 top-12 hidden lg:block">

                <div
                    class="mx-auto h-1 max-w-4xl rounded-full bg-gradient-to-r from-primary via-secondary to-primary/40">
                </div>

            </div>

            {{-- Cards Grid --}}
            <div class="relative grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                {{-- Step 1 --}}
                <div
                    class="group relative overflow-hidden rounded-3xl border border-gray-200 bg-white p-8 shadow-md transition-all duration-300 hover:-translate-y-3 hover:border-primary/20 hover:shadow-2xl">

                    {{-- Top Border --}}
                    <div class="absolute left-0 top-0 h-1 w-full bg-gradient-to-r from-primary to-secondary">
                    </div>

                    {{-- Watermark --}}
                    <span class="absolute right-6 top-5 text-6xl font-black text-gray-100">

                        01

                    </span>

                    {{-- Icon --}}
                    <div
                        class="relative flex h-16 w-16 items-center justify-center rounded-2xl bg-gradient-to-br from-primary/10 to-secondary/10 text-3xl">

                        👤

                    </div>

                    <h3 class="relative mt-6 text-2xl tracking-tight font-bold text-gray-900">

                        Create Account

                    </h3>

                    <p class="relative mt-4 leading-8 text-gray-600">

                        Sign up in just a few minutes and create your secure matrimonial
                        account to begin your journey.

                    </p>

                </div>

                {{-- Step 2 --}}
                <div
                    class="group relative overflow-hidden rounded-3xl border border-gray-200 bg-white p-8 shadow-md transition-all duration-300 hover:-translate-y-3 hover:border-primary/20 hover:shadow-2xl">

                    <div class="absolute left-0 top-0 h-1 w-full bg-gradient-to-r from-primary to-secondary">
                    </div>

                    <span class="absolute right-6 top-5 text-6xl font-black text-gray-100">

                        02

                    </span>

                    <div
                        class="relative flex h-16 w-16 items-center justify-center rounded-2xl bg-gradient-to-br from-primary/10 to-secondary/10 text-3xl">

                        📝

                    </div>

                    <h3 class="relative mt-6 text-2xl tracking-tight font-bold text-gray-900">

                        Complete Profile

                    </h3>

                    <p class="relative mt-4 leading-8 text-gray-600">

                        Add your personal details, education, profession and preferences so
                        others can know you better.

                    </p>

                </div>

                {{-- Step 3 --}}
                <div
                    class="group relative overflow-hidden rounded-3xl border border-gray-200 bg-white p-8 shadow-md transition-all duration-300 hover:-translate-y-3 hover:border-primary/20 hover:shadow-2xl">

                    <div class="absolute left-0 top-0 h-1 w-full bg-gradient-to-r from-primary to-secondary">
                    </div>

                    <span class="absolute right-6 top-5 text-6xl font-black text-gray-100">

                        03

                    </span>

                    <div
                        class="relative flex h-16 w-16 items-center justify-center rounded-2xl bg-gradient-to-br from-primary/10 to-secondary/10 text-3xl">

                        ❤️

                    </div>

                    <h3 class="relative mt-6 text-2xl tracking-tight font-bold text-gray-900">

                        Find Your Match

                    </h3>

                    <p class="relative mt-4 leading-8 text-gray-600">

                        Browse verified profiles and connect with compatible people in a safe,
                        respectful and private environment.

                    </p>

                </div>
                {{-- Bottom CTA --}}
                <div class="mt-16 text-center">

                    <p class="text-lg text-gray-600">

                        Start your journey today and connect with verified profiles.

                    </p>

                    <div class="mt-6 flex flex-wrap justify-center gap-4">

                        <a href="{{ route('register') }}"
                            class="inline-flex items-center rounded-xl bg-primary px-8 py-3 font-semibold text-white shadow-lg transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl">

                            Create Free Account

                        </a>

                        <a href="{{ route('profiles') }}"
                            class="inline-flex items-center rounded-xl border border-primary bg-white px-8 py-3 font-semibold text-primary transition-all duration-300 hover:bg-primary hover:text-white">

                            Browse Profiles

                        </a>

                    </div>

                </div>

            </div>

        </div>

</section>
