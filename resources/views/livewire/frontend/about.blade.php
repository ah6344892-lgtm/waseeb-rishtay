<div>
    <section class="relative overflow-hidden">

        {{-- Background Blur --}}
        {{-- <div class="absolute -left-24 top-10 h-72 w-72 rounded-full bg-primary/10 blur-3xl"></div>
        <div class="absolute -right-24 bottom-10 h-72 w-72 rounded-full bg-secondary/10 blur-3xl"></div> --}}

        <div class="relative">

            <div class="grid items-center gap-12 lg:grid-cols-2">

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
                            Trusted Matrimonial Platform
                        </span>

                    </div>

                    {{-- Heading --}}
                    <h1 style="font-family: 'Bebas Neue', sans-serif"
                        class="mt-6 text-5xl leading-none tracking-wide text-gray-900 md:text-6xl lg:text-7xl">

                        About

                        <span class="text-primary">
                            Waseeb Rishtay
                        </span>

                    </h1>

                    {{-- Description --}}
                    <p class="mt-6 max-w-xl text-lg leading-8 text-gray-600">

                        We are committed to helping individuals and families find
                        genuine, verified and compatible life partners through a
                        secure, trusted and modern matrimonial platform.

                    </p>

                    {{-- Buttons --}}
                    <div class="mt-10 flex flex-col gap-4 sm:flex-row">

                        <a href="{{ route('profiles') }}"
                            class="rounded-xl bg-primary px-8 py-4 text-center font-semibold text-white shadow-lg transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">

                            Browse Profiles

                        </a>

                        <a href="{{ route('contact') }}"
                            class="rounded-xl border border-primary px-8 py-4 text-center font-semibold text-primary transition-all duration-300 hover:bg-primary hover:text-white">

                            Contact Us

                        </a>

                    </div>

                </div>

                {{-- Right Side --}}
                <div class="relative">

                    <div class="overflow-hidden rounded-3xl border border-gray-100 bg-white p-8">

                        {{-- Logo --}}
                        <div class="flex items-center gap-4">

                            <img src="{{ asset('waseeb-rishtay.png') }}" alt="Waseeb Rishtay"
                                class="h-16 w-16 rounded-full border-4 border-primary/10 shadow-lg">

                            <div>

                                <h3 class="text-2xl font-bold text-gray-900">
                                    Waseeb Rishtay
                                </h3>

                                <p class="text-sm text-gray-500">
                                    Find Your Perfect Match
                                </p>

                            </div>

                        </div>

                        {{-- Divider --}}
                        <div class="my-8 border-t border-gray-100"></div>

                        {{-- Stats --}}
                        <div class="grid grid-cols-2 gap-5">

                            <div class="rounded-2xl bg-primary/5 p-5 text-center">

                                <h3 class="text-3xl font-bold text-primary">
                                    500+
                                </h3>

                                <p class="mt-1 text-sm text-gray-600">
                                    Verified Profiles
                                </p>

                            </div>

                            <div class="rounded-2xl bg-secondary/10 p-5 text-center">

                                <h3 class="text-3xl font-bold text-secondary">
                                    250+
                                </h3>

                                <p class="mt-1 text-sm text-gray-600">
                                    Happy Families
                                </p>

                            </div>

                            <div class="rounded-2xl bg-green-50 p-5 text-center">

                                <h3 class="text-3xl font-bold text-green-600">
                                    100%
                                </h3>

                                <p class="mt-1 text-sm text-gray-600">
                                    Verified Members
                                </p>

                            </div>

                            <div class="rounded-2xl bg-amber-50 p-5 text-center">

                                <h3 class="text-3xl font-bold text-amber-500">
                                    24/7
                                </h3>

                                <p class="mt-1 text-sm text-gray-600">
                                    Support
                                </p>

                            </div>

                        </div>

                        {{-- Bottom Quote --}}
                        <div class="mt-8 rounded-2xl bg-gradient-to-r from-primary to-secondary p-5 text-white">

                            <p class="leading-7">
                                "Building trusted relationships by connecting hearts,
                                families and futures with privacy, respect and
                                confidence."
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <section class="relative mt-10">

        <div class="">

            <div class="grid items-center gap-16 lg:grid-cols-2">

                {{-- Left Side --}}
                <div class="relative">

                    {{-- Main Card --}}
                    <div class="rounded-[30px] border border-gray-100 bg-white p-8 shadow-2xl">

                        <span
                            class="inline-flex rounded-full bg-primary/10 px-4 py-2 text-sm font-semibold text-primary">
                            Our Story
                        </span>

                        <h2 class="mt-6 text-4xl font-bold text-gray-900">
                            Connecting Hearts,
                            <span class="text-primary">
                                Building Families
                            </span>
                        </h2>

                        <p class="mt-6 leading-8 text-gray-600">
                            Waseeb Rishtay was created with one simple goal:
                            to help individuals and families find genuine,
                            trustworthy and compatible life partners through
                            a modern, secure and respectful matrimonial platform.
                        </p>

                        <p class="mt-5 leading-8 text-gray-600">
                            We believe marriage is one of life's most important
                            decisions. That's why we focus on authenticity,
                            privacy and meaningful connections instead of
                            random matches.
                        </p>

                    </div>

                    {{-- Floating Card --}}
                    <div
                        class="absolute -bottom-8 -right-6 hidden w-64 rounded-3xl border border-primary/10 bg-white p-6 shadow-xl lg:block">

                        <div class="flex items-center gap-3">

                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-2xl bg-primary text-white text-xl">

                                ❤️

                            </div>

                            <div>

                                <h4 class="font-bold text-gray-900">
                                    Trusted Since
                                </h4>

                                <p class="text-sm text-gray-500">
                                    Building Relationships
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

                {{-- Right Side --}}
                <div class="space-y-6">

                    {{-- Mission --}}
                    <div
                        class="rounded-3xl border border-gray-100 bg-white p-7 shadow-lg transition duration-300 hover:-translate-y-1 hover:shadow-xl">

                        <div class="flex items-start gap-5">

                            <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-primary/10 text-3xl">

                                🎯

                            </div>

                            <div>

                                <h3 class="text-2xl font-bold text-gray-900">
                                    Our Mission
                                </h3>

                                <p class="mt-3 leading-7 text-gray-600">
                                    To provide a safe, reliable and user-friendly
                                    platform where genuine people can confidently
                                    search for their life partners.
                                </p>

                            </div>

                        </div>

                    </div>

                    {{-- Vision --}}
                    <div
                        class="rounded-3xl border border-gray-100 bg-white p-7 shadow-lg transition duration-300 hover:-translate-y-1 hover:shadow-xl">

                        <div class="flex items-start gap-5">

                            <div
                                class="flex h-14 w-14 items-center justify-center rounded-2xl bg-secondary/20 text-3xl">

                                🌍

                            </div>

                            <div>

                                <h3 class="text-2xl font-bold text-gray-900">
                                    Our Vision
                                </h3>

                                <p class="mt-3 leading-7 text-gray-600">
                                    To become Pakistan's most trusted matrimonial
                                    platform by connecting families with honesty,
                                    transparency and respect.
                                </p>

                            </div>

                        </div>

                    </div>

                    {{-- Values --}}
                    <div class="rounded-3xl bg-gradient-to-r from-primary to-secondary p-7 text-white shadow-xl">

                        <h3 class="text-2xl font-bold">
                            Our Core Values
                        </h3>

                        <div class="mt-6 grid grid-cols-2 gap-4">

                            <div class="flex items-center gap-2">
                                <span>✔</span>
                                <span>Trust</span>
                            </div>

                            <div class="flex items-center gap-2">
                                <span>✔</span>
                                <span>Privacy</span>
                            </div>

                            <div class="flex items-center gap-2">
                                <span>✔</span>
                                <span>Respect</span>
                            </div>

                            <div class="flex items-center gap-2">
                                <span>✔</span>
                                <span>Integrity</span>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <section class="relative overflow-hidden py-20">

        {{-- Background Blur --}}
        <div class="absolute left-0 top-20 h-72 w-72 rounded-full bg-primary/5 blur-3xl"></div>
        <div class="absolute right-0 bottom-10 h-72 w-72 rounded-full bg-secondary/10 blur-3xl"></div>

        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            {{-- Heading --}}
            <div class="mx-auto max-w-3xl text-center">

                <span class="inline-flex rounded-full bg-primary/10 px-5 py-2 text-sm font-semibold text-primary">
                    Why Choose Us
                </span>

                <h2 class="mt-6 text-4xl font-bold text-gray-900 lg:text-5xl">
                    Why Thousands of Families
                    <span class="text-primary">
                        Trust Waseeb Rishtay
                    </span>
                </h2>

                <p class="mt-6 text-lg leading-8 text-gray-600">
                    We provide a secure, trusted and modern platform designed
                    to help individuals and families find the right life partner
                    with confidence.
                </p>

            </div>

            {{-- Features --}}
            <div class="mt-16 grid gap-8 md:grid-cols-2 xl:grid-cols-3">

                {{-- Card --}}
                <div
                    class="group rounded-3xl border border-gray-100 bg-white p-8 shadow-lg transition duration-300 hover:-translate-y-2 hover:border-primary/20 hover:shadow-2xl">

                    <div
                        class="flex h-16 w-16 items-center justify-center rounded-2xl bg-primary/10 text-4xl transition group-hover:bg-primary group-hover:text-white">

                        🛡️

                    </div>

                    <h3 class="mt-6 text-2xl font-bold text-gray-900">
                        Verified Profiles
                    </h3>

                    <p class="mt-4 leading-7 text-gray-600">
                        Every profile is carefully reviewed to ensure genuine,
                        trustworthy and authentic members.
                    </p>

                </div>

                {{-- Card --}}
                <div
                    class="group rounded-3xl border border-gray-100 bg-white p-8 shadow-lg transition duration-300 hover:-translate-y-2 hover:border-primary/20 hover:shadow-2xl">

                    <div
                        class="flex h-16 w-16 items-center justify-center rounded-2xl bg-primary/10 text-4xl transition group-hover:bg-primary group-hover:text-white">

                        🔒

                    </div>

                    <h3 class="mt-6 text-2xl font-bold text-gray-900">
                        Privacy First
                    </h3>

                    <p class="mt-4 leading-7 text-gray-600">
                        Your personal information remains secure with advanced
                        privacy controls and protected communication.
                    </p>

                </div>

                {{-- Card --}}
                <div
                    class="group rounded-3xl border border-gray-100 bg-white p-8 shadow-lg transition duration-300 hover:-translate-y-2 hover:border-primary/20 hover:shadow-2xl">

                    <div
                        class="flex h-16 w-16 items-center justify-center rounded-2xl bg-primary/10 text-4xl transition group-hover:bg-primary group-hover:text-white">

                        ❤️

                    </div>

                    <h3 class="mt-6 text-2xl font-bold text-gray-900">
                        Genuine Matches
                    </h3>

                    <p class="mt-4 leading-7 text-gray-600">
                        Find compatible life partners based on values,
                        preferences and family expectations.
                    </p>

                </div>

                {{-- Card --}}
                <div
                    class="group rounded-3xl border border-gray-100 bg-white p-8 shadow-lg transition duration-300 hover:-translate-y-2 hover:border-primary/20 hover:shadow-2xl">

                    <div
                        class="flex h-16 w-16 items-center justify-center rounded-2xl bg-primary/10 text-4xl transition group-hover:bg-primary group-hover:text-white">

                        👨‍👩‍👧

                    </div>

                    <h3 class="mt-6 text-2xl font-bold text-gray-900">
                        Family Focused
                    </h3>

                    <p class="mt-4 leading-7 text-gray-600">
                        A respectful environment where both individuals and
                        families can confidently search for suitable proposals.
                    </p>

                </div>

                {{-- Card --}}
                <div
                    class="group rounded-3xl border border-gray-100 bg-white p-8 shadow-lg transition duration-300 hover:-translate-y-2 hover:border-primary/20 hover:shadow-2xl">

                    <div
                        class="flex h-16 w-16 items-center justify-center rounded-2xl bg-primary/10 text-4xl transition group-hover:bg-primary group-hover:text-white">

                        ⚡

                    </div>

                    <h3 class="mt-6 text-2xl font-bold text-gray-900">
                        Easy Search
                    </h3>

                    <p class="mt-4 leading-7 text-gray-600">
                        Advanced search filters help you quickly find
                        profiles that match your preferences.
                    </p>

                </div>

                {{-- Card --}}
                <div
                    class="group rounded-3xl border border-gray-100 bg-white p-8 shadow-lg transition duration-300 hover:-translate-y-2 hover:border-primary/20 hover:shadow-2xl">

                    <div
                        class="flex h-16 w-16 items-center justify-center rounded-2xl bg-primary/10 text-4xl transition group-hover:bg-primary group-hover:text-white">

                        🤝

                    </div>

                    <h3 class="mt-6 text-2xl font-bold text-gray-900">
                        Dedicated Support
                    </h3>

                    <p class="mt-4 leading-7 text-gray-600">
                        Our support team is always available to help you
                        throughout your matrimonial journey.
                    </p>

                </div>

            </div>

        </div>

    </section>
    <section class="relative overflow-hidden">

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            {{-- Heading --}}
            <div class="mx-auto max-w-3xl text-center">

                <span class="inline-flex rounded-full bg-primary/10 px-5 py-2 text-sm font-semibold text-primary">

                    Simple Process

                </span>

                <h2 class="mt-6 text-4xl font-bold text-gray-900 lg:text-5xl">

                    How
                    <span class="text-primary">
                        Waseeb Rishtay
                    </span>
                    Works

                </h2>

                <p class="mt-6 text-lg leading-8 text-gray-600">

                    Finding your life partner has never been easier.
                    Follow these simple steps and start your journey today.

                </p>

            </div>

            {{-- Timeline --}}
            <div class="relative mt-20">

                {{-- Line --}}
                <div
                    class="absolute left-1/2 top-10 hidden h-[calc(100%-80px)] w-1 -translate-x-1/2 rounded-full bg-primary/10 lg:block">
                </div>

                <div class="space-y-10">

                    {{-- Step 1 --}}
                    <div class="grid items-center gap-8 lg:grid-cols-2">

                        <div class="text-right">

                            <div
                                class="rounded-3xl border border-gray-100 bg-white p-8 shadow-lg transition hover:-translate-y-2 hover:shadow-xl">

                                <h3 class="text-2xl font-bold text-gray-900">
                                    Create Your Account
                                </h3>

                                <p class="mt-4 leading-7 text-gray-600">
                                    Register in just a few minutes and securely
                                    create your matrimonial account.
                                </p>

                            </div>

                        </div>

                        <div class="flex justify-center">

                            <div
                                class="flex h-20 w-20 items-center justify-center rounded-full bg-primary text-3xl font-bold text-white shadow-xl">

                                1

                            </div>

                        </div>

                    </div>

                    {{-- Step 2 --}}
                    <div class="grid items-center gap-8 lg:grid-cols-2">

                        <div class="order-2 lg:order-1 flex justify-center">

                            <div
                                class="flex h-20 w-20 items-center justify-center rounded-full bg-secondary text-3xl font-bold text-white shadow-xl">

                                2

                            </div>

                        </div>

                        <div class="order-1 lg:order-2">

                            <div
                                class="rounded-3xl border border-gray-100 bg-white p-8 shadow-lg transition hover:-translate-y-2 hover:shadow-xl">

                                <h3 class="text-2xl font-bold text-gray-900">
                                    Complete Your Profile
                                </h3>

                                <p class="mt-4 leading-7 text-gray-600">
                                    Add your personal, educational and family
                                    information to build a complete profile.
                                </p>

                            </div>

                        </div>

                    </div>

                    {{-- Step 3 --}}
                    <div class="grid items-center gap-8 lg:grid-cols-2">

                        <div class="text-right">

                            <div
                                class="rounded-3xl border border-gray-100 bg-white p-8 shadow-lg transition hover:-translate-y-2 hover:shadow-xl">

                                <h3 class="text-2xl font-bold text-gray-900">
                                    Profile Verification
                                </h3>

                                <p class="mt-4 leading-7 text-gray-600">
                                    Our team reviews profiles to ensure authenticity
                                    and maintain a trusted platform.
                                </p>

                            </div>

                        </div>

                        <div class="flex justify-center">

                            <div
                                class="flex h-20 w-20 items-center justify-center rounded-full bg-primary text-3xl font-bold text-white shadow-xl">

                                3

                            </div>

                        </div>

                    </div>

                    {{-- Step 4 --}}
                    <div class="grid items-center gap-8 lg:grid-cols-2">

                        <div class="order-2 lg:order-1 flex justify-center">

                            <div
                                class="flex h-20 w-20 items-center justify-center rounded-full bg-secondary text-3xl font-bold text-white shadow-xl">

                                4

                            </div>

                        </div>

                        <div class="order-1 lg:order-2">

                            <div
                                class="rounded-3xl border border-gray-100 bg-white p-8 shadow-lg transition hover:-translate-y-2 hover:shadow-xl">

                                <h3 class="text-2xl font-bold text-gray-900">
                                    Search Compatible Matches
                                </h3>

                                <p class="mt-4 leading-7 text-gray-600">
                                    Use smart filters to discover verified profiles
                                    that match your preferences.
                                </p>

                            </div>

                        </div>

                    </div>

                    {{-- Step 5 --}}
                    <div class="grid items-center gap-8 lg:grid-cols-2">

                        <div class="text-right">

                            <div
                                class="rounded-3xl border border-gray-100 bg-white p-8 shadow-lg transition hover:-translate-y-2 hover:shadow-xl">

                                <h3 class="text-2xl font-bold text-gray-900">
                                    Connect with Families
                                </h3>

                                <p class="mt-4 leading-7 text-gray-600">
                                    Send requests and communicate respectfully with
                                    suitable families.
                                </p>

                            </div>

                        </div>

                        <div class="flex justify-center">

                            <div
                                class="flex h-20 w-20 items-center justify-center rounded-full bg-primary text-3xl font-bold text-white shadow-xl">

                                5

                            </div>

                        </div>

                    </div>

                    {{-- Step 6 --}}
                    <div class="grid items-center gap-8 lg:grid-cols-2">

                        <div class="order-2 lg:order-1 flex justify-center">

                            <div
                                class="flex h-20 w-20 items-center justify-center rounded-full bg-secondary text-3xl font-bold text-white shadow-xl">

                                ❤

                            </div>

                        </div>

                        <div class="order-1 lg:order-2">

                            <div
                                class="rounded-3xl border border-primary/20 bg-gradient-to-r from-primary to-secondary p-8 text-white shadow-xl">

                                <h3 class="text-2xl font-bold">
                                    Start a New Journey
                                </h3>

                                <p class="mt-4 leading-7 text-white/90">
                                    Build a lifelong relationship with confidence,
                                    trust and the support of Waseeb Rishtay.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <section class="relative overflow-hidden py-20">

        {{-- Background Blur --}}
        {{-- <div class="absolute -left-20 top-20 h-72 w-72 rounded-full bg-primary/10 blur-3xl"></div>
        <div class="absolute -right-20 bottom-0 h-72 w-72 rounded-full bg-secondary/10 blur-3xl"></div> --}}

        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            {{-- Heading --}}
            <div class="mx-auto max-w-3xl text-center">

                <span class="inline-flex rounded-full bg-primary/10 px-5 py-2 text-sm font-semibold text-primary">
                    Our Achievements
                </span>

                <h2 class="mt-6 text-4xl font-bold text-gray-900 lg:text-5xl">
                    Trusted by
                    <span class="text-primary">Thousands of Families</span>
                </h2>

                <p class="mt-6 text-lg leading-8 text-gray-600">
                    Every successful match strengthens our commitment to helping
                    families find the right life partner with trust and confidence.
                </p>

            </div>

            {{-- Statistics --}}
            <div class="mt-16 grid gap-6 sm:grid-cols-2 xl:grid-cols-4">

                <div class="rounded-3xl border border-primary/10 bg-white p-8 text-center shadow-lg">

                    <div class="text-5xl font-bold text-primary">
                        500+
                    </div>

                    <h3 class="mt-4 text-xl font-semibold text-gray-900">
                        Verified Profiles
                    </h3>

                    <p class="mt-2 text-gray-600">
                        Genuine and verified members.
                    </p>

                </div>

                <div class="rounded-3xl border border-secondary/20 bg-white p-8 text-center shadow-lg">

                    <div class="text-5xl font-bold text-secondary">
                        250+
                    </div>

                    <h3 class="mt-4 text-xl font-semibold text-gray-900">
                        Happy Families
                    </h3>

                    <p class="mt-2 text-gray-600">
                        Families connected successfully.
                    </p>

                </div>

                <div class="rounded-3xl border border-green-200 bg-white p-8 text-center shadow-lg">

                    <div class="text-5xl font-bold text-green-600">
                        100%
                    </div>

                    <h3 class="mt-4 text-xl font-semibold text-gray-900">
                        Privacy
                    </h3>

                    <p class="mt-2 text-gray-600">
                        Safe & secure matchmaking.
                    </p>

                </div>

                <div class="rounded-3xl border border-amber-200 bg-white p-8 text-center shadow-lg">

                    <div class="text-5xl font-bold text-amber-500">
                        24/7
                    </div>

                    <h3 class="mt-4 text-xl font-semibold text-gray-900">
                        Support
                    </h3>

                    <p class="mt-2 text-gray-600">
                        We're always here to help.
                    </p>

                </div>

            </div>

            {{-- Testimonials --}}
            <div class="mt-20 grid gap-8 lg:grid-cols-3">

                {{-- Testimonial --}}
                <div class="rounded-3xl border border-gray-100 bg-white p-8 shadow-lg">

                    <div class="mb-6 flex text-yellow-400 text-xl">
                        ★★★★★
                    </div>

                    <p class="leading-8 text-gray-600">
                        "Waseeb Rishtay made our search simple and trustworthy.
                        We found the perfect match in a respectful environment."
                    </p>

                    <div class="mt-8 flex items-center gap-4">

                        <div
                            class="flex h-14 w-14 items-center justify-center rounded-full bg-primary text-xl font-bold text-white">
                            A
                        </div>

                        <div>

                            <h4 class="font-bold text-gray-900">
                                Ahmed Khan
                            </h4>

                            <p class="text-sm text-gray-500">
                                Lahore
                            </p>

                        </div>

                    </div>

                </div>

                {{-- Testimonial --}}
                <div class="rounded-3xl border border-gray-100 bg-white p-8 shadow-lg">

                    <div class="mb-6 flex text-yellow-400 text-xl">
                        ★★★★★
                    </div>

                    <p class="leading-8 text-gray-600">
                        "Professional support, verified profiles and an excellent
                        experience throughout the entire process."
                    </p>

                    <div class="mt-8 flex items-center gap-4">

                        <div
                            class="flex h-14 w-14 items-center justify-center rounded-full bg-secondary text-xl font-bold text-white">
                            S
                        </div>

                        <div>

                            <h4 class="font-bold text-gray-900">
                                Sara Malik
                            </h4>

                            <p class="text-sm text-gray-500">
                                Multan
                            </p>

                        </div>

                    </div>

                </div>

                {{-- Testimonial --}}
                <div class="rounded-3xl border border-gray-100 bg-white p-8 shadow-lg">

                    <div class="mb-6 flex text-yellow-400 text-xl">
                        ★★★★★
                    </div>

                    <p class="leading-8 text-gray-600">
                        "A reliable platform where families can confidently search
                        for genuine marriage proposals."
                    </p>

                    <div class="mt-8 flex items-center gap-4">

                        <div
                            class="flex h-14 w-14 items-center justify-center rounded-full bg-green-600 text-xl font-bold text-white">
                            F
                        </div>

                        <div>

                            <h4 class="font-bold text-gray-900">
                                Fatima Noor
                            </h4>

                            <p class="text-sm text-gray-500">
                                Islamabad
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <section class="">

        <div class="">

            <div class="relative overflow-hidden rounded-[32px] border border-primary/10">

                {{-- Background Blur --}}
                {{-- <div class="absolute -left-20 -top-20 h-72 w-72 rounded-full bg-primary/10 blur-3xl">
                </div>

                <div class="absolute -right-20 -bottom-20 h-72 w-72 rounded-full bg-secondary/10 blur-3xl">
                </div> --}}

                <div class="relative p-8 lg:p-14">

                    <div class="grid items-center gap-12 lg:grid-cols-2">

                        {{-- Left --}}
                        <div>

                            <span
                                class="inline-flex rounded-full bg-primary/10 px-5 py-2 text-sm font-semibold text-primary">

                                Join Our Community

                            </span>

                            <h2 class="mt-6 text-4xl font-bold text-gray-900 lg:text-5xl">

                                Your Journey Towards
                                <span class="text-primary">
                                    a Beautiful Relationship
                                </span>
                                Starts Here.

                            </h2>

                            <p class="mt-6 text-lg leading-8 text-gray-600">

                                Become part of a trusted matrimonial platform where
                                genuine people and respected families connect with
                                confidence, privacy and trust.

                            </p>

                            <div class="mt-10 flex flex-wrap gap-4">

                                <a href="{{ route('create_profile') }}"
                                    class="rounded-xl bg-primary px-8 py-4 font-semibold text-white transition hover:-translate-y-1 hover:shadow-xl">

                                    Create Free Profile

                                </a>

                                <a href="{{ route('profiles') }}"
                                    class="rounded-xl border border-primary px-8 py-4 font-semibold text-primary transition hover:bg-primary hover:text-white">

                                    Browse Profiles

                                </a>

                            </div>

                        </div>

                        {{-- Right --}}
                        <div class="grid grid-cols-2 gap-5">

                            <div class="rounded-2xl bg-primary/5 p-6 text-center">

                                <div class="text-4xl font-bold text-primary">
                                    500+
                                </div>

                                <p class="mt-2 text-gray-600">
                                    Verified Profiles
                                </p>

                            </div>

                            <div class="rounded-2xl bg-secondary/10 p-6 text-center">

                                <div class="text-4xl font-bold text-secondary">
                                    250+
                                </div>

                                <p class="mt-2 text-gray-600">
                                    Happy Families
                                </p>

                            </div>

                            <div class="rounded-2xl bg-green-50 p-6 text-center">

                                <div class="text-4xl">
                                    🛡️
                                </div>

                                <h4 class="mt-3 font-bold text-gray-900">
                                    Secure
                                </h4>

                                <p class="mt-2 text-sm text-gray-500">
                                    Privacy Protected
                                </p>

                            </div>

                            <div class="rounded-2xl bg-amber-50 p-6 text-center">

                                <div class="text-4xl">
                                    ❤️
                                </div>

                                <h4 class="mt-3 font-bold text-gray-900">
                                    Trusted
                                </h4>

                                <p class="mt-2 text-sm text-gray-500">
                                    Genuine Families
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
</div>
