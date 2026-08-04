<footer class="px-4 sm:px-6 lg:px-8">

    {{-- CTA Section --}}
    <section class="mx-auto -mb-14 max-w-7xl px-4 sm:px-6 lg:px-8 relative z-10">
        <div
            class="rounded-3xl border border-secondary/20 bg-white p-8 shadow-xl lg:flex lg:items-center lg:justify-between">

            <div class="text-center lg:text-left">
                <h2 class="text-3xl font-bold text-primary">
                    Ready to Find Your Perfect Match?
                </h2>

                <p class="mt-2 text-gray-600">
                    Join thousands of families who trust Waseeb Rishtay to find the right life partner.
                </p>
            </div>

            <div class="mt-6 flex flex-col gap-3 sm:flex-row lg:mt-0">
                <a href="{{ route('register') }}"
                    class="w-full rounded-lg border border-primary bg-primary px-6 py-3 text-center font-medium text-white transition-all duration-300 hover:bg-white hover:text-primary sm:w-auto">
                    Register Now
                </a>

                <a href="{{ route('profiles') }}"
                    class="w-full rounded-lg border border-primary px-6 py-3 text-center font-medium text-primary transition-all duration-300 hover:bg-primary hover:text-white sm:w-auto">
                    Browse Profiles
                </a>
            </div>

        </div>
    </section>

    {{-- Footer --}}
    <div class="bg-primary pt-24">

        <div class="mx-auto max-w-7xl px-4 pb-10 sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 gap-10 sm:grid-cols-2 xl:grid-cols-4">

                {{-- Brand --}}
                <div class="flex items-center justify-center gap-3 lg:justify-start">

                    <div class="flex items-center gap-3">

                        <img src="{{ asset('waseeb-rishtay.png') }}" alt="Waseeb Rishtay"
                            class="h-14 w-14 rounded-full border-2 border-secondary shadow-lg">

                        <div>

                            <h2 class="text-2xl font-bold text-white">
                                Waseeb Rishtay
                            </h2>

                            <p class="text-sm text-secondary">
                                Find Your Perfect Match
                            </p>

                        </div>

                    </div>

                    <p class="mt-6 text-center leading-7 text-white/80 lg:text-left">
                        Waseeb Rishtay is a trusted matrimonial platform helping
                        families and individuals find suitable life partners
                        with privacy, trust and respect.
                    </p>

                </div>

                {{-- Quick Links --}}
                <div>

                    <h3 class="mb-6 text-lg font-semibold text-secondary">
                        Quick Links
                    </h3>

                    <ul class="space-y-4">

                        <li>
                            <div class="text-center sm:text-left">
                                <a href="{{ route('home') }}"
                                    class="text-white/80 transition-all duration-300 hover:translate-x-1 hover:text-secondary">
                                    Home
                                </a>
                            </div>
                        </li>

                        <li>
                            <div class="text-center sm:text-left">
                                <a href="{{ route('about') }}"
                                    class="text-white/80 transition-all duration-300 hover:translate-x-1 hover:text-secondary">
                                    About
                                </a>
                            </div>
                        </li>

                        <li>
                            <div class="text-center sm:text-left">
                                <a href="{{ route('profiles') }}"
                                    class="text-white/80 transition-all duration-300 hover:translate-x-1 hover:text-secondary">
                                    Profiles
                                </a>
                            </div>
                        </li>

                        <li>
                            <div class="text-center sm:text-left">
                                <a href="{{ route('contact') }}"
                                    class="text-white/80 transition-all duration-300 hover:translate-x-1 hover:text-secondary">
                                    Contact
                                </a>
                            </div>
                        </li>

                    </ul>

                </div>

                {{-- Support --}}
                <div>

                    <h3 class="mb-6 text-lg font-semibold text-secondary">
                        Support
                    </h3>

                    <ul class="space-y-4">

                        <li>
                            <a href="#"
                                class="text-white/80 transition-all duration-300 hover:translate-x-1 hover:text-secondary">
                                Privacy Policy
                            </a>
                        </li>

                        <li>
                            <a href="#"
                                class="text-white/80 transition-all duration-300 hover:translate-x-1 hover:text-secondary">
                                Terms & Conditions
                            </a>
                        </li>

                        <li>
                            <a href="#"
                                class="text-white/80 transition-all duration-300 hover:translate-x-1 hover:text-secondary">
                                FAQ's
                            </a>
                        </li>

                    </ul>

                </div>

                {{-- Contact --}}
                <div class="space-y-4 text-center text-white/80 sm:text-left">

                    <h3 class="mb-6 text-lg font-semibold text-secondary">
                        Contact Us
                    </h3>

                    <div class="space-y-4 text-white/80">

                        <p>📍 Taunsa Sharif, Punjab, Pakistan</p>

                        <a href="tel:+923001234567" class="block transition-all duration-300 hover:text-secondary">
                            📞 +92 300 1234567
                        </a>

                        <a href="mailto:info@waseebrishtay.com"
                            class="block transition-all duration-300 hover:text-secondary">
                            ✉ info@waseebrishtay.com
                        </a>

                    </div>

                    {{-- Social --}}
                    <div class="mt-8 flex justify-center gap-3 sm:justify-start">

                        <a href="#"
                            class="flex h-11 w-11 items-center justify-center rounded-full border border-white/20 text-white transition-all duration-300 hover:border-secondary hover:bg-secondary hover:text-primary">
                            FB
                        </a>

                        <a href="#"
                            class="flex h-11 w-11 items-center justify-center rounded-full border border-white/20 text-white transition-all duration-300 hover:border-secondary hover:bg-secondary hover:text-primary">
                            IG
                        </a>

                        <a href="#"
                            class="flex h-11 w-11 items-center justify-center rounded-full border border-white/20 text-white transition-all duration-300 hover:border-secondary hover:bg-secondary hover:text-primary">
                            WA
                        </a>

                    </div>

                </div>

            </div>

        </div>

        {{-- Bottom --}}
        <div class="border-t border-white/10">

            <div
                class="mx-auto flex max-w-7xl flex-col gap-4 px-4 py-6 text-center text-sm text-white/70 md:flex-row md:items-center md:justify-between md:text-left">

                <p>
                    © {{ date('Y') }} Waseeb Rishtay. All Rights Reserved.
                </p>

                <div class="flex flex-wrap justify-center gap-6 md:justify-end">

                    <a href="#" class="hover:text-secondary transition">Privacy</a>

                    <a href="#" class="hover:text-secondary transition">Terms</a>

                    <a href="#" class="hover:text-secondary transition">Cookies</a>

                </div>

            </div>

        </div>

    </div>

</footer>
