<nav x-data="{ open: false }" class="sticky top-0 z-50 border-b border-gray-200 bg-primary backdrop-blur">
    <div class="mx-auto flex h-20 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">

        {{-- Logo --}}
        <a href="{{ route('home') }}" class="flex items-center gap-3">
            <img src="{{ asset('waseeb-rishtay.png') }}" alt="Waseeb Rishtay"
                class="h-12 w-12 rounded-full border-2 border-secondary">

            <div class="hidden sm:block">
                <h1 class="text-xl font-bold text-white">
                    Waseeb Rishtay
                </h1>

                <p class="-mt-1 text-xs text-secondary font-bold">
                    Find Your Perfect Match
                </p>
            </div>
        </a>

        {{-- Desktop Menu --}}
        <div class="hidden items-center gap-8 lg:flex">

            <a href="{{ route('home') }}"
                class="{{ request()->routeIs('home') ? 'text-primary font-semibold' : 'text-gray-700 hover:text-primary' }}">
                Home
            </a>

            <a href="{{ route('about') }}"
                class="{{ request()->routeIs('about') ? 'text-primary font-semibold' : 'text-gray-700 hover:text-primary' }}">
                About
            </a>

            <a href="{{ route('profiles') }}"
                class="{{ request()->routeIs('profiles*') ? 'text-primary font-semibold' : 'text-gray-700 hover:text-primary' }}">
                Profiles
            </a>

            <a href="{{ route('contact') }}"
                class="{{ request()->routeIs('contact') ? 'text-primary font-semibold' : 'text-gray-700 hover:text-primary' }}">
                Contact
            </a>

        </div>

        {{-- Right Side --}}
        <div class="hidden items-center gap-3 lg:flex">

            <a href="{{ route('login') }}"
                class="rounded-lg border border-primary px-5 py-2 font-medium text-primary transition-all duration-500 hover:bg-primary hover:text-white">
                Login
            </a>

            <a href="{{ route('register') }}"
                class="rounded-lg border border-primary bg-primary px-5 py-2 font-medium text-white transition-all duration-500 hover:bg-white hover:text-primary">
                Register
            </a>

        </div>

        {{-- Mobile Button --}}
        <button @click="open=!open" class="lg:hidden">

            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">

                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />

            </svg>

        </button>

    </div>

    {{-- Mobile Menu --}}
    <div x-show="open" x-transition @click.outside="open=false" class="border-t border-gray-200 bg-white lg:hidden">

        <div class="space-y-2 px-4 py-5">

            <a href="{{ route('home') }}" class="block rounded-lg px-4 py-2 hover:bg-gray-100">
                Home
            </a>

            <a href="{{ route('about') }}" class="block rounded-lg px-4 py-2 hover:bg-gray-100">
                About
            </a>

            <a href="{{ route('profiles') }}" class="block rounded-lg px-4 py-2 hover:bg-gray-100">
                Profiles
            </a>

            <a href="{{ route('contact') }}" class="block rounded-lg px-4 py-2 hover:bg-gray-100">
                Contact
            </a>

            <hr>

            <a href="{{ route('login') }}"
                class="block rounded-lg border border-primary px-4 py-2 text-center text-primary">
                Login
            </a>

            <a href="{{ route('register') }}" class="block rounded-lg bg-primary px-4 py-2 text-center text-white">
                Register
            </a>

        </div>

    </div>
</nav>
