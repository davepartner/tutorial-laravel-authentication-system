<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Synergy ERP helps teams manage finance, sales, inventory, and operations from one modern dashboard.">

        <title>{{ config('app.name', 'Synergy ERP') }} | Smart ERP Platform</title>
        <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-slate-50 text-slate-800 antialiased">
        <div class="min-h-screen">
            <header class="border-b border-slate-200/80 bg-white/95 backdrop-blur">
                <div class="mx-auto flex w-full max-w-7xl items-center justify-between px-4 py-4 sm:px-6 lg:px-8">
                    <a href="{{ url('/') }}" class="flex items-center">
                        <img src="{{ asset('images/synergy-logo.svg') }}" alt="Synergy ERP" class="h-auto w-44 sm:w-48">
                    </a>

                    @if (Route::has('login'))
                        <nav class="flex items-center gap-2 sm:gap-3">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white transition hover:bg-indigo-700">
                                    Go to Dashboard
                                </a>
                            @else
                                <a href="{{ route('login') }}" class="rounded-md px-4 py-2 text-sm font-semibold text-slate-700 transition hover:bg-slate-100">
                                    Log in
                                </a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white transition hover:bg-indigo-700">
                                        Get Started
                                    </a>
                                @endif
                            @endauth
                        </nav>
                    @endif
                </div>
            </header>

            <main>
                <section class="relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-indigo-50 via-white to-cyan-50"></div>
                    <div class="relative mx-auto grid w-full max-w-7xl gap-10 px-4 py-16 sm:px-6 lg:grid-cols-2 lg:items-center lg:gap-14 lg:px-8 lg:py-24">
                        <div>
                            <p class="inline-flex rounded-full border border-indigo-100 bg-indigo-50 px-3 py-1 text-xs font-semibold uppercase tracking-wide text-indigo-700">
                                Modern ERP for growing teams
                            </p>
                            <h1 class="mt-5 text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl lg:text-5xl">
                                Run finance, sales, and operations in one place.
                            </h1>
                            <p class="mt-5 max-w-xl text-base leading-7 text-slate-600 sm:text-lg">
                                Synergy ERP gives your business a single source of truth with real-time dashboards, process automation, and role-based access built for scale.
                            </p>

                            <div class="mt-8 flex flex-wrap items-center gap-3">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="rounded-md bg-indigo-600 px-5 py-3 text-sm font-semibold text-white transition hover:bg-indigo-700">
                                        Open Dashboard
                                    </a>
                                @else
                                    <a href="{{ route('register') }}" class="rounded-md bg-indigo-600 px-5 py-3 text-sm font-semibold text-white transition hover:bg-indigo-700">
                                        Start Free
                                    </a>
                                    <a href="{{ route('login') }}" class="rounded-md border border-slate-300 bg-white px-5 py-3 text-sm font-semibold text-slate-700 transition hover:bg-slate-100">
                                        Sign In
                                    </a>
                                @endauth
                            </div>

                            <dl class="mt-10 grid grid-cols-3 gap-4 sm:gap-6">
                                <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm">
                                    <dt class="text-xs font-medium text-slate-500">Uptime</dt>
                                    <dd class="mt-1 text-lg font-bold text-slate-900">99.9%</dd>
                                </div>
                                <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm">
                                    <dt class="text-xs font-medium text-slate-500">Automations</dt>
                                    <dd class="mt-1 text-lg font-bold text-slate-900">120+</dd>
                                </div>
                                <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm">
                                    <dt class="text-xs font-medium text-slate-500">Teams onboarded</dt>
                                    <dd class="mt-1 text-lg font-bold text-slate-900">4,000+</dd>
                                </div>
                            </dl>
                        </div>

                        <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-xl sm:p-6">
                            <img src="{{ asset('images/synergy-logo.svg') }}" alt="Synergy Logo" class="h-auto w-52">
                            <div class="mt-5 space-y-4">
                                <div class="rounded-xl border border-slate-100 bg-slate-50 p-4">
                                    <p class="text-xs font-semibold uppercase tracking-wide text-slate-500">Financial Overview</p>
                                    <p class="mt-2 text-2xl font-bold text-slate-900">$128,540</p>
                                    <p class="text-sm text-emerald-600">+12.4% this month</p>
                                </div>
                                <div class="grid grid-cols-2 gap-3">
                                    <div class="rounded-xl border border-slate-100 bg-white p-4">
                                        <p class="text-xs text-slate-500">Open Orders</p>
                                        <p class="mt-1 text-xl font-bold text-slate-900">248</p>
                                    </div>
                                    <div class="rounded-xl border border-slate-100 bg-white p-4">
                                        <p class="text-xs text-slate-500">Stock Alerts</p>
                                        <p class="mt-1 text-xl font-bold text-amber-600">17</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="mx-auto w-full max-w-7xl px-4 py-14 sm:px-6 lg:px-8 lg:py-20">
                    <div class="mx-auto max-w-2xl text-center">
                        <h2 class="text-2xl font-bold text-slate-900 sm:text-3xl">Built with global best practices</h2>
                        <p class="mt-3 text-slate-600">Secure authentication, responsive design, clear information hierarchy, and clean workflows for enterprise operations.</p>
                    </div>

                    <div class="mt-10 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                        <article class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
                            <h3 class="text-base font-semibold text-slate-900">Operational Visibility</h3>
                            <p class="mt-2 text-sm leading-6 text-slate-600">Track KPIs and team performance in real time with executive-ready dashboards.</p>
                        </article>
                        <article class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
                            <h3 class="text-base font-semibold text-slate-900">Secure by Default</h3>
                            <p class="mt-2 text-sm leading-6 text-slate-600">Role-based access, verified accounts, CSRF protection, and Laravel-first security standards.</p>
                        </article>
                        <article class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
                            <h3 class="text-base font-semibold text-slate-900">Scalable Architecture</h3>
                            <p class="mt-2 text-sm leading-6 text-slate-600">Built on Laravel and modern frontend tooling to support growth from startup to enterprise.</p>
                        </article>
                    </div>
                </section>

                <section class="mx-auto w-full max-w-7xl px-4 pb-16 sm:px-6 lg:px-8 lg:pb-24">
                    <div class="rounded-2xl bg-slate-900 px-6 py-10 text-white sm:px-10 sm:py-12 lg:flex lg:items-center lg:justify-between">
                        <div>
                            <h2 class="text-2xl font-bold sm:text-3xl">Ready to centralize your business operations?</h2>
                            <p class="mt-2 text-slate-300">Launch faster with Synergy ERP and manage your core business processes from one platform.</p>
                        </div>
                        <div class="mt-6 lg:mt-0">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="inline-flex rounded-md bg-white px-5 py-3 text-sm font-semibold text-slate-900 transition hover:bg-slate-100">
                                    Continue to Dashboard
                                </a>
                            @else
                                <a href="{{ route('register') }}" class="inline-flex rounded-md bg-white px-5 py-3 text-sm font-semibold text-slate-900 transition hover:bg-slate-100">
                                    Create Account
                                </a>
                            @endauth
                        </div>
                    </div>
                </section>
            </main>

            <footer class="border-t border-slate-200 bg-white">
                <div class="mx-auto flex w-full max-w-7xl flex-col items-center justify-between gap-3 px-4 py-6 text-sm text-slate-500 sm:flex-row sm:px-6 lg:px-8">
                    <p>© {{ date('Y') }} Synergy ERP. All rights reserved.</p>
                    <p>Built with Laravel best practices.</p>
                </div>
            </footer>
        </div>
    </body>
</html>
