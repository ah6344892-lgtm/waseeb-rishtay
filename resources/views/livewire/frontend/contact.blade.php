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
                            We're Here to Help
                        </span>

                    </div>

                    {{-- Heading --}}
                    <h1 style="font-family:'Bebas Neue',sans-serif"
                        class="mt-6 text-5xl leading-none tracking-wide text-gray-900 md:text-6xl lg:text-7xl">

                        Contact

                        <span class="text-primary">
                            Waseeb Rishtay
                        </span>

                    </h1>

                    {{-- Description --}}
                    <p class="mt-6 max-w-xl text-lg leading-8 text-gray-600">

                        Have questions about our matrimonial services?
                        Our support team is always ready to guide you and help
                        you find the right solution.

                    </p>

                    {{-- Buttons --}}
                    <div class="mt-10 flex flex-wrap gap-4">

                        <a href="#contact-form"
                            class="rounded-xl bg-primary px-8 py-4 font-semibold text-white shadow-lg transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">

                            Send Message

                        </a>

                        <a href="https://wa.me/{{ config('contact.whatsapp') }}" target="_blank"
                            class="rounded-xl border border-primary px-8 py-4 font-semibold text-primary transition-all duration-300 hover:bg-primary hover:text-white">

                            WhatsApp Us

                        </a>

                    </div>

                </div>

                {{-- Right Side --}}
                <div>

                    <div class="rounded-[30px] border border-gray-100 bg-white p-8">

                        <div class="flex items-center gap-4">

                            <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-primary/10 text-4xl">

                                💬

                            </div>

                            <div>

                                <h3 class="text-2xl font-bold text-gray-900">

                                    Online Support

                                </h3>

                                <p class="text-gray-500">

                                    Fast • Friendly • Secure

                                </p>

                            </div>

                        </div>

                        <div class="my-8 border-t border-gray-100"></div>

                        {{-- Support Info --}}
                        <div class="space-y-5">

                            <div class="flex items-center justify-between rounded-2xl bg-primary/5 p-4">

                                <span class="font-medium text-gray-600">

                                    WhatsApp

                                </span>

                                <span class="font-bold text-primary">

                                    Available

                                </span>

                            </div>

                            <div class="flex items-center justify-between rounded-2xl bg-secondary/10 p-4">

                                <span class="font-medium text-gray-600">

                                    Email Support

                                </span>

                                <span class="font-bold text-secondary">

                                    24 Hours

                                </span>

                            </div>

                            <div class="flex items-center justify-between rounded-2xl bg-green-50 p-4">

                                <span class="font-medium text-gray-600">

                                    Response Time

                                </span>

                                <span class="font-bold text-green-600">

                                    Within 24 Hours

                                </span>

                            </div>

                        </div>

                        {{-- Bottom Card --}}
                        <div class="mt-8 rounded-2xl bg-gradient-to-r from-primary to-secondary p-5 text-white">

                            <h4 class="text-xl font-bold">

                                Need Assistance?

                            </h4>

                            <p class="mt-2 leading-7 text-white/90">

                                Whether you have questions about registration,
                                profiles or verification, we're just a message away.

                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <section class="relative py-20">

        <div class="">

            {{-- Heading --}}
            <div class="mx-auto max-w-3xl text-center">

                <span class="inline-flex rounded-full bg-primary/10 px-5 py-2 text-sm font-semibold text-primary">

                    Contact Options

                </span>

                <h2 class="mt-6 text-4xl font-bold text-gray-900 lg:text-5xl">

                    Choose The Best Way
                    <span class="text-primary">
                        To Reach Us
                    </span>

                </h2>

                <p class="mt-6 text-lg leading-8 text-gray-600">

                    Whether you have a question, need assistance, or want to report
                    an issue, we're always ready to help you.

                </p>

            </div>

            {{-- Cards --}}
            <div class="mt-16 grid gap-8 md:grid-cols-2 xl:grid-cols-4">

                {{-- WhatsApp --}}
                <a href="https://wa.me/{{ config('contact.whatsapp') }}" target="_blank"
                    class="group rounded-3xl border border-gray-100 bg-white p-8 shadow-lg transition-all duration-300 hover:-translate-y-2 hover:border-primary/20 hover:shadow-2xl">

                    <div
                        class="flex h-16 w-16 items-center justify-center rounded-2xl bg-green-100 text-4xl transition group-hover:scale-110">

                        💬

                    </div>

                    <h3 class="mt-6 text-2xl font-bold text-gray-900">
                        WhatsApp
                    </h3>

                    <p class="mt-4 leading-7 text-gray-600">
                        Chat directly with our support team for quick assistance.
                    </p>

                    <div class="mt-6 font-semibold text-primary">
                        +92 31234567890 →
                    </div>

                </a>

                {{-- Email --}}
                <a href="mailto:{{ config('contact.email') }}"
                    class="group rounded-3xl border border-gray-100 bg-white p-8 shadow-lg transition-all duration-300 hover:-translate-y-2 hover:border-primary/20 hover:shadow-2xl">

                    <div
                        class="flex h-16 w-16 items-center justify-center rounded-2xl bg-primary/10 text-4xl transition group-hover:scale-110">

                        ✉️

                    </div>

                    <h3 class="mt-6 text-2xl font-bold text-gray-900">
                        Email Support
                    </h3>

                    <p class="mt-4 leading-7 text-gray-600">
                        Send us your questions and we'll reply as soon as possible.
                    </p>

                    <div class="mt-6 font-semibold text-primary">
                        info@waseebrishtay.com
                    </div>

                </a>

                {{-- Support Hours --}}
                <div
                    class="group rounded-3xl border border-gray-100 bg-white p-8 shadow-lg transition-all duration-300 hover:-translate-y-2 hover:border-primary/20 hover:shadow-2xl">

                    <div
                        class="flex h-16 w-16 items-center justify-center rounded-2xl bg-secondary/15 text-4xl transition group-hover:scale-110">

                        🕒

                    </div>

                    <h3 class="mt-6 text-2xl font-bold text-gray-900">
                        Support Hours
                    </h3>

                    <p class="mt-4 leading-7 text-gray-600">
                        Our online support team is available throughout the week.
                    </p>

                    <div class="mt-6 font-semibold text-primary">
                        9:00 AM – 9:00 PM
                    </div>

                </div>

                {{-- Help Center --}}
                <div
                    class="group rounded-3xl border border-gray-100 bg-white p-8 shadow-lg transition-all duration-300 hover:-translate-y-2 hover:border-primary/20 hover:shadow-2xl">

                    <div
                        class="flex h-16 w-16 items-center justify-center rounded-2xl bg-amber-100 text-4xl transition group-hover:scale-110">

                        ❓

                    </div>

                    <h3 class="mt-6 text-2xl font-bold text-gray-900">
                        Help Center
                    </h3>

                    <p class="mt-4 leading-7 text-gray-600">
                        Browse FAQs and useful guides before contacting support.
                    </p>

                    <div class="mt-6 font-semibold text-primary">
                        View FAQs →
                    </div>

                </div>

            </div>

        </div>

    </section>
    <section id="contact-form" class="relative py-20">

        <div class="">

            <div class="grid gap-10 lg:grid-cols-5">

                {{-- Contact Form --}}
                <div class="lg:col-span-3">

                    <div class="rounded-[32px] border border-gray-100 bg-white p-8 shadow-xl lg:p-10">

                        <span
                            class="inline-flex rounded-full bg-primary/10 px-4 py-2 text-sm font-semibold text-primary">
                            Send Message
                        </span>

                        <h2 class="mt-5 text-4xl font-bold text-gray-900">
                            We'd Love To Hear From You
                        </h2>

                        <p class="mt-4 text-gray-600 leading-7">
                            Fill out the form below and our support team will get
                            back to you as soon as possible.
                        </p>

                        <form class="mt-10 space-y-6">

                            <div class="grid gap-6 md:grid-cols-2">

                                <div>

                                    <label class="mb-2 block font-medium text-gray-700">
                                        Full Name
                                    </label>

                                    <input type="text" placeholder="Enter your full name"
                                        class="w-full rounded-xl border border-gray-200 px-5 py-3 transition focus:border-primary focus:outline-none focus:ring-4 focus:ring-primary/10">

                                </div>

                                <div>

                                    <label class="mb-2 block font-medium text-gray-700">
                                        Email Address
                                    </label>

                                    <input type="email" placeholder="example@email.com"
                                        class="w-full rounded-xl border border-gray-200 px-5 py-3 transition focus:border-primary focus:outline-none focus:ring-4 focus:ring-primary/10">

                                </div>

                            </div>

                            <div class="grid gap-6 md:grid-cols-2">

                                <div>

                                    <label class="mb-2 block font-medium text-gray-700">
                                        Phone Number
                                    </label>

                                    <input type="text" placeholder="+92 300 1234567"
                                        class="w-full rounded-xl border border-gray-200 px-5 py-3 transition focus:border-primary focus:outline-none focus:ring-4 focus:ring-primary/10">

                                </div>

                                <div>

                                    <label class="mb-2 block font-medium text-gray-700">
                                        Subject
                                    </label>

                                    <select
                                        class="w-full rounded-xl border border-gray-200 px-5 py-3 transition focus:border-primary focus:outline-none focus:ring-4 focus:ring-primary/10">

                                        <option>Select Subject</option>
                                        <option>General Inquiry</option>
                                        <option>Technical Support</option>
                                        <option>Profile Verification</option>
                                        <option>Report a Problem</option>
                                        <option>Other</option>

                                    </select>

                                </div>

                            </div>

                            <div>

                                <label class="mb-2 block font-medium text-gray-700">
                                    Your Message
                                </label>

                                <textarea rows="6" placeholder="Write your message here..."
                                    class="w-full rounded-xl border border-gray-200 px-5 py-4 transition focus:border-primary focus:outline-none focus:ring-4 focus:ring-primary/10"></textarea>

                            </div>

                            <button
                                class="inline-flex items-center gap-3 rounded-xl bg-primary px-8 py-4 font-semibold text-white shadow-lg transition hover:-translate-y-1 hover:shadow-xl">

                                Send Message →

                            </button>

                        </form>

                    </div>

                </div>

                {{-- Right Sidebar --}}
                <div class="space-y-6 lg:col-span-2">

                    {{-- Why Contact Us --}}
                    <div class="rounded-[30px] border border-gray-100 bg-white p-8 shadow-xl">

                        <span
                            class="inline-flex rounded-full bg-secondary/10 px-4 py-2 text-sm font-semibold text-secondary">
                            Why Contact Us?
                        </span>

                        <h3 class="mt-5 text-3xl font-bold text-gray-900">
                            We're Always Ready To Help
                        </h3>

                        <p class="mt-4 leading-7 text-gray-600">
                            Whether you're creating your first profile or need
                            assistance with verification, our support team is here
                            to guide you.
                        </p>

                        <div class="mt-8 space-y-5">

                            <div class="flex items-center gap-4">

                                <div
                                    class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary/10 text-xl">

                                    ⚡

                                </div>

                                <div>

                                    <h4 class="font-semibold text-gray-900">
                                        Quick Response
                                    </h4>

                                    <p class="text-sm text-gray-500">
                                        Reply within 24 hours.
                                    </p>

                                </div>

                            </div>

                            <div class="flex items-center gap-4">

                                <div
                                    class="flex h-12 w-12 items-center justify-center rounded-xl bg-green-100 text-xl">

                                    🔒

                                </div>

                                <div>

                                    <h4 class="font-semibold text-gray-900">
                                        Secure Communication
                                    </h4>

                                    <p class="text-sm text-gray-500">
                                        Your information remains private.
                                    </p>

                                </div>

                            </div>

                            <div class="flex items-center gap-4">

                                <div
                                    class="flex h-12 w-12 items-center justify-center rounded-xl bg-secondary/10 text-xl">

                                    ❤️

                                </div>

                                <div>

                                    <h4 class="font-semibold text-gray-900">
                                        Friendly Support
                                    </h4>

                                    <p class="text-sm text-gray-500">
                                        Dedicated assistance whenever needed.
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                    {{-- Response Card --}}
                    <div class="rounded-[30px] bg-gradient-to-r from-primary to-secondary p-8 text-white shadow-xl">

                        <h3 class="text-2xl font-bold">
                            Response Promise
                        </h3>

                        <p class="mt-4 leading-7 text-white/90">
                            Every message is reviewed carefully. We aim to reply
                            within 24 hours and resolve your query as quickly as
                            possible.
                        </p>

                        <div class="mt-8 flex items-center justify-between">

                            <div>

                                <h4 class="text-3xl font-bold">
                                    24 Hours
                                </h4>

                                <p class="text-white/80">
                                    Average Response
                                </p>

                            </div>

                            <div class="text-6xl">
                                💬
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <section class="relative overflow-hidden">

        {{-- Background Blur --}}
        {{-- <div class="absolute -left-24 top-10 h-72 w-72 rounded-full bg-primary/10 blur-3xl"></div>
        <div class="absolute -right-24 bottom-0 h-72 w-72 rounded-full bg-secondary/10 blur-3xl"></div> --}}

        <div class="relative">

            {{-- Heading --}}
            <div class="mx-auto max-w-3xl text-center">

                <span class="inline-flex rounded-full bg-primary/10 px-5 py-2 text-sm font-semibold text-primary">

                    Why Choose Our Support

                </span>

                <h2 class="mt-6 text-4xl font-bold text-gray-900 lg:text-5xl">

                    We're Always Here
                    <span class="text-primary">
                        To Help You
                    </span>

                </h2>

                <p class="mt-6 text-lg leading-8 text-gray-600">

                    Our support team is committed to providing quick responses,
                    secure communication and a smooth experience for every member.

                </p>

            </div>

            {{-- Features --}}
            <div class="mt-16 grid gap-8 md:grid-cols-2 xl:grid-cols-4">

                {{-- Card --}}
                <div
                    class="group rounded-3xl border border-gray-100 bg-white p-8 shadow-lg transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">

                    <div
                        class="flex h-16 w-16 items-center justify-center rounded-2xl bg-primary/10 text-4xl transition group-hover:scale-110">

                        ⚡

                    </div>

                    <h3 class="mt-6 text-2xl font-bold text-gray-900">

                        Fast Response

                    </h3>

                    <p class="mt-4 leading-7 text-gray-600">

                        We usually respond to your questions within 24 hours.

                    </p>

                </div>

                {{-- Card --}}
                <div
                    class="group rounded-3xl border border-gray-100 bg-white p-8 shadow-lg transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">

                    <div
                        class="flex h-16 w-16 items-center justify-center rounded-2xl bg-green-100 text-4xl transition group-hover:scale-110">

                        🔒

                    </div>

                    <h3 class="mt-6 text-2xl font-bold text-gray-900">

                        Private & Secure

                    </h3>

                    <p class="mt-4 leading-7 text-gray-600">

                        Your information and conversations remain confidential.

                    </p>

                </div>

                {{-- Card --}}
                <div
                    class="group rounded-3xl border border-gray-100 bg-white p-8 shadow-lg transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">

                    <div
                        class="flex h-16 w-16 items-center justify-center rounded-2xl bg-secondary/10 text-4xl transition group-hover:scale-110">

                        ❤️

                    </div>

                    <h3 class="mt-6 text-2xl font-bold text-gray-900">

                        Friendly Guidance

                    </h3>

                    <p class="mt-4 leading-7 text-gray-600">

                        We guide you politely throughout your matrimonial journey.

                    </p>

                </div>

                {{-- Card --}}
                <div
                    class="group rounded-3xl border border-gray-100 bg-white p-8 shadow-lg transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">

                    <div
                        class="flex h-16 w-16 items-center justify-center rounded-2xl bg-amber-100 text-4xl transition group-hover:scale-110">

                        ✅

                    </div>

                    <h3 class="mt-6 text-2xl font-bold text-gray-900">

                        Verified Assistance

                    </h3>

                    <p class="mt-4 leading-7 text-gray-600">

                        Get accurate guidance directly from our support team.

                    </p>

                </div>

            </div>

            {{-- Bottom Highlight --}}
            <div
                class="mt-16 rounded-[32px] border border-primary/10 bg-white p-8 lg:flex lg:items-center lg:justify-between">

                <div>

                    <h3 class="text-3xl font-bold text-gray-900">

                        Your Satisfaction Is Our Priority

                    </h3>

                    <p class="mt-4 max-w-3xl leading-8 text-gray-600">

                        Whether you have questions about registration, profile
                        verification, privacy, or finding the right match,
                        we're committed to making your experience simple,
                        secure and enjoyable.

                    </p>

                </div>

                <div class="mt-8 lg:mt-0">

                    <div
                        class="flex h-24 w-24 items-center justify-center rounded-full bg-primary text-5xl text-white">

                        🤝

                    </div>

                </div>

            </div>

        </div>

    </section>
    <section class="relative overflow-hidden mt-10">

        {{-- Background Blur --}}
        {{-- <div class="absolute -left-24 top-10 h-72 w-72 rounded-full bg-primary/10 blur-3xl"></div>
        <div class="absolute -right-24 bottom-0 h-72 w-72 rounded-full bg-secondary/10 blur-3xl"></div> --}}

        <div class="relative">

            <div class="grid gap-16 lg:grid-cols-12">

                {{-- Left Content --}}
                <div class="lg:col-span-4">

                    <span class="inline-flex rounded-full bg-primary/10 px-5 py-2 text-sm font-semibold text-primary">

                        Frequently Asked Questions

                    </span>

                    <h2 class="mt-6 text-4xl font-bold text-gray-900">

                        Got Questions?

                        <span class="text-primary">
                            We've Got Answers
                        </span>

                    </h2>

                    <p class="mt-6 leading-8 text-gray-600">

                        Before contacting support, you may find the answer to your
                        question below. We've answered the most common questions
                        asked by our members.

                    </p>

                    {{-- Stats --}}
                    <div class="mt-10 rounded-3xl bg-primary p-8 text-white">

                        <h3 class="text-5xl font-bold">

                            95%

                        </h3>

                        <p class="mt-3 text-white/80">

                            Most questions are answered through our FAQ section.

                        </p>

                    </div>

                </div>

                {{-- Right --}}
                <div class="space-y-5 lg:col-span-8">

                    {{-- FAQ 1 --}}
                    <details
                        class="group rounded-3xl border border-gray-200 bg-white p-6 shadow-sm transition open:border-primary open:shadow-lg">

                        <summary
                            class="flex cursor-pointer list-none items-center justify-between text-lg font-semibold text-gray-900">

                            How do I create my profile?

                            <span class="text-2xl transition group-open:rotate-45">
                                +
                            </span>

                        </summary>

                        <p class="mt-5 leading-7 text-gray-600">

                            Simply register an account, complete your personal
                            information, and submit your profile for verification.

                        </p>

                    </details>

                    {{-- FAQ 2 --}}
                    <details
                        class="group rounded-3xl border border-gray-200 bg-white p-6 shadow-sm transition open:border-primary open:shadow-lg">

                        <summary
                            class="flex cursor-pointer list-none items-center justify-between text-lg font-semibold text-gray-900">

                            Is my personal information secure?

                            <span class="text-2xl transition group-open:rotate-45">
                                +
                            </span>

                        </summary>

                        <p class="mt-5 leading-7 text-gray-600">

                            Yes. Your information is protected and only shared
                            according to your privacy settings.

                        </p>

                    </details>

                    {{-- FAQ 3 --}}
                    <details
                        class="group rounded-3xl border border-gray-200 bg-white p-6 shadow-sm transition open:border-primary open:shadow-lg">

                        <summary
                            class="flex cursor-pointer list-none items-center justify-between text-lg font-semibold text-gray-900">

                            How long does profile verification take?

                            <span class="text-2xl transition group-open:rotate-45">
                                +
                            </span>

                        </summary>

                        <p class="mt-5 leading-7 text-gray-600">

                            Verification is usually completed within 24–48 hours
                            after submitting the required information.

                        </p>

                    </details>

                    {{-- FAQ 4 --}}
                    <details
                        class="group rounded-3xl border border-gray-200 bg-white p-6 shadow-sm transition open:border-primary open:shadow-lg">

                        <summary
                            class="flex cursor-pointer list-none items-center justify-between text-lg font-semibold text-gray-900">

                            Is registration free?

                            <span class="text-2xl transition group-open:rotate-45">
                                +
                            </span>

                        </summary>

                        <p class="mt-5 leading-7 text-gray-600">

                            Yes. You can create your account for free and start
                            exploring the platform immediately.

                        </p>

                    </details>

                    {{-- FAQ 5 --}}
                    <details
                        class="group rounded-3xl border border-gray-200 bg-white p-6 shadow-sm transition open:border-primary open:shadow-lg">

                        <summary
                            class="flex cursor-pointer list-none items-center justify-between text-lg font-semibold text-gray-900">

                            How can I contact support?

                            <span class="text-2xl transition group-open:rotate-45">
                                +
                            </span>

                        </summary>

                        <p class="mt-5 leading-7 text-gray-600">

                            You can contact us through the contact form, WhatsApp,
                            or email. We'll respond as soon as possible.

                        </p>

                    </details>

                </div>

            </div>

        </div>

    </section>

</div>
