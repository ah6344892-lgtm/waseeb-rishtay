<!DOCTYPE html>
<html style="scroll-behavior: smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- SEO --}}
    <title>{{ $title ?? 'Waseeb Rishtay' }}</title>
    <meta name="description" content="{{ $description ?? 'Waseeb Rishtay - Find your perfect life partner.' }}">
    <meta name="keywords" content="Waseeb Rishtay, Rishta, Marriage, Matrimony, Pakistan">

    {{-- Favicon --}}
    <link rel="icon" type="image/png" href="{{ asset('waseeb-rishtay.png') }}">

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://fonts.googleapis.com/css?family=Bebas Neue' rel='stylesheet'>

    {{-- Styles --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>

<body class="min-h-screen bg-white dark:bg-zinc-800">
    {{-- <flux:header container class=" "> --}}
    <flux:header container
        class="sticky top-0 z-50 h-16 px-4 sm:px-6 lg:px-8 border-b border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">
        <flux:sidebar.toggle class="lg:hidden mr-2" icon="bars-2" inset="left" />

        <x-app-logo href="{{ route('home') }}" wire:navigate />

        <flux:navbar class="-mb-px max-lg:hidden">
            <flux:navbar.item icon="home" :href="route('home')" :current="request()->routeIs('home')" wire:navigate>
                {{ __('Home') }}
            </flux:navbar.item>

            <flux:navbar.item icon="users" :href="route('profiles')" :current="request()->routeIs('profiles*')"
                wire:navigate>
                {{ __('Profiles') }}
            </flux:navbar.item>

            <flux:navbar.item icon="information-circle" :href="route('about')" :current="request()->routeIs('about')"
                wire:navigate>
                {{ __('About') }}
            </flux:navbar.item>

            <flux:navbar.item icon="phone" :href="route('contact')" :current="request()->routeIs('contact')"
                wire:navigate>
                {{ __('Contact') }}
            </flux:navbar.item>

            {{-- @can('viewAny', App\Models\User::class) --}}
            {{-- @role('admin|super-admin') --}}
            <flux:navbar.item icon="squares-2x2" :href="route('admin.dashboard')"
                :current="request()->routeIs('admin.dashboard')" wire:navigate>
                {{ __('Dashboard') }}
            </flux:navbar.item>
            {{-- @endrole --}}
            {{-- @endcan --}}
        </flux:navbar>

        <flux:spacer />

        <flux:navbar class="hidden lg:flex me-1.5 space-x-0.5 rtl:space-x-reverse py-0!">
            <flux:tooltip :content="__('Search')" position="bottom">
                <flux:navbar.item class="!h-10 [&>div>svg]:size-5" icon="magnifying-glass" href="#"
                    :label="__('Search')" />
            </flux:tooltip>
            {{-- <flux:tooltip :content="__('Repository')" position="bottom">
                <flux:navbar.item class="h-10 max-lg:hidden [&>div>svg]:size-5" icon="folder-git-2"
                    href="https://github.com/laravel/livewire-starter-kit" target="_blank" :label="__('Repository')" />
            </flux:tooltip>
            <flux:tooltip :content="__('Documentation')" position="bottom">
                <flux:navbar.item class="h-10 max-lg:hidden [&>div>svg]:size-5" icon="book-open-text"
                    href="https://laravel.com/docs/starter-kits#livewire" target="_blank"
                    :label="__('Documentation')" />
            </flux:tooltip> --}}
        </flux:navbar>

        @auth
            <x-desktop-user-menu />
        @else
            <a href="{{ route('login') }}">
                <p>Login</p>
            </a>
        @endauth
    </flux:header>

    <!-- Mobile Menu -->
    <flux:sidebar collapsible="mobile" sticky
        class="lg:hidden border-e border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">
        <flux:sidebar.header>
            <x-app-logo :sidebar="true" href="{{ route('admin.dashboard') }}" wire:navigate />
            <flux:sidebar.collapse
                class="in-data-flux-sidebar-on-desktop:not-in-data-flux-sidebar-collapsed-desktop:-mr-2" />
        </flux:sidebar.header>

        <flux:sidebar.nav>
            <flux:sidebar.group>

                <flux:sidebar.item icon="home" :href="route('home')" :current="request()->routeIs('home')"
                    wire:navigate>
                    Home
                </flux:sidebar.item>

                <flux:sidebar.item icon="users" :href="route('profiles')" :current="request()->routeIs('profiles*')"
                    wire:navigate>
                    Profiles
                </flux:sidebar.item>

                <flux:sidebar.item icon="information-circle" :href="route('about')"
                    :current="request()->routeIs('about')" wire:navigate>
                    About
                </flux:sidebar.item>

                <flux:sidebar.item icon="phone" :href="route('contact')" :current="request()->routeIs('contact')"
                    wire:navigate>
                    Contact
                </flux:sidebar.item>

                <flux:sidebar.item icon="squares-2x2" :href="route('admin.dashboard')"
                    :current="request()->routeIs('admin.dashboard')" wire:navigate>
                    Dashboard
                </flux:sidebar.item>

            </flux:sidebar.group>
        </flux:sidebar.nav>

        <flux:spacer />

        {{-- <flux:sidebar.nav>
            <flux:sidebar.item icon="folder-git-2" href="https://github.com/laravel/livewire-starter-kit"
                target="_blank">
                {{ __('Repository') }}
            </flux:sidebar.item>
            <flux:sidebar.item icon="book-open-text" href="https://laravel.com/docs/starter-kits#livewire"
                target="_blank">
                {{ __('Documentation') }}
            </flux:sidebar.item>
        </flux:sidebar.nav> --}}
    </flux:sidebar>

    <div class="flex flex-col gap-1">
        <main class="mx-auto w-full px-4 sm:px-6 lg:px-8">
            {{ $slot }}
        </main>
        @include('components.frontend.footer')
    </div>
    @persist('toast')
        <flux:toast.group>
            <flux:toast />
        </flux:toast.group>
    @endpersist

    @fluxScripts
</body>

</html>
