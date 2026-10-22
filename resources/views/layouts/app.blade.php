<!DOCTYPE html>
<html lang="nl" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @php
        // yieldContent() levert al ge-escapete HTML; daarom hieronder {!! !!}.
        $seoTitel = $__env->yieldContent('title', 'Cryolipolyse & Laserontharen in Leeuwarden | N.O.A Trinity');
        $seoOmschrijving = $__env->yieldContent('meta_description', 'N.O.A Trinity Body Shaping in Leeuwarden: cryolipolyse, body sculpting en diode laserontharing. Persoonlijke begeleiding en een behandelplan op maat.');
        $seoAfbeelding = $__env->yieldContent('og_image', asset('images/merk/noa-trinity-logo.jpg'));
        $seoRobots = $__env->yieldContent('robots', 'index, follow');
        $seoIndexeerbaar = ! str_contains($seoRobots, 'noindex');
    @endphp
    <title>{!! $seoTitel !!}</title>
    <meta name="description" content="{!! $seoOmschrijving !!}">
    <meta name="keywords" content="@yield('meta_keywords', 'cryolipolyse, vetbevriezen, body sculpting, laserontharen, diode laser, lichaamsvormgeving, Body-Wizard Duo, MedCos, Leeuwarden')">
    <meta name="robots" content="{!! $seoRobots !!}">
    @if($seoIndexeerbaar)
        <link rel="canonical" href="{{ url()->current() }}">
    @endif
    <meta name="theme-color" content="#FAF9F6">

    {{-- Favicon --}}
    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    {{-- Open Graph --}}
    <meta property="og:title" content="{!! $seoTitel !!}">
    <meta property="og:description" content="{!! $seoOmschrijving !!}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{!! $seoAfbeelding !!}">
    <meta property="og:locale" content="nl_NL">
    <meta property="og:site_name" content="N.O.A Trinity">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{!! $seoTitel !!}">
    <meta name="twitter:description" content="{!! $seoOmschrijving !!}">
    <meta name="twitter:image" content="{!! $seoAfbeelding !!}">

    {{-- Structured data (schema.org) --}}
    @if($seoIndexeerbaar)
        <script type="application/ld+json">{!! \App\Support\StructuredData::json(\App\Support\StructuredData::graph($settings ?? null, [
            'url' => url()->current(),
            'titel' => html_entity_decode($seoTitel, ENT_QUOTES | ENT_HTML5),
            'omschrijving' => html_entity_decode($seoOmschrijving, ENT_QUOTES | ENT_HTML5),
            'afbeelding' => html_entity_decode($seoAfbeelding, ENT_QUOTES | ENT_HTML5),
            'kruimel' => html_entity_decode($__env->yieldContent('breadcrumb'), ENT_QUOTES | ENT_HTML5) ?: null,
            'dienst' => html_entity_decode($__env->yieldContent('dienst'), ENT_QUOTES | ENT_HTML5) ?: null,
        ])) !!}</script>
    @endif

    @fonts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-creme text-zwart font-sans antialiased overflow-x-hidden">

    {{-- ============================================ --}}
    {{-- NAVIGATIE --}}
    {{-- ============================================ --}}
    <nav id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                {{-- Links: menu (op tablets past het menu niet naast het logo; daar geldt het hamburgermenu) --}}
                <div class="hidden lg:flex items-center gap-8 flex-1">
                    <a href="{{ route('home') }}" class="text-sm font-semibold transition-colors {{ request()->routeIs('home') ? 'text-zwart' : 'text-zwart/70 hover:text-zwart' }}">Home</a>

                    {{-- Behandelingen met submenu --}}
                    <div class="relative group/dropdown">
                        <button class="text-sm font-semibold transition-colors inline-flex items-center gap-1 {{ request()->routeIs('cryolipolyse', 'body-sculpting', 'laserontharen') ? 'text-zwart' : 'text-zwart/70 hover:text-zwart' }}">
                            Behandelingen
                            <svg class="w-3.5 h-3.5 transition-transform group-hover/dropdown:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="absolute top-full left-0 pt-2 opacity-0 invisible group-hover/dropdown:opacity-100 group-hover/dropdown:visible transition-all duration-200">
                            <div class="bg-white rounded-xl shadow-lg border border-zwart/5 py-2 min-w-[220px]">
                                <a href="{{ route('cryolipolyse') }}" class="block px-5 py-2.5 text-sm transition-colors {{ request()->routeIs('cryolipolyse') ? 'text-zwart bg-roze-light/30' : 'text-zwart/70 hover:text-zwart hover:bg-roze-light/30' }}">Cryolipolyse</a>
                                <a href="{{ route('body-sculpting') }}" class="block px-5 py-2.5 text-sm transition-colors {{ request()->routeIs('body-sculpting') ? 'text-zwart bg-roze-light/30' : 'text-zwart/70 hover:text-zwart hover:bg-roze-light/30' }}">Body Sculpting</a>
                                <a href="{{ route('laserontharen') }}" class="block px-5 py-2.5 text-sm transition-colors {{ request()->routeIs('laserontharen') ? 'text-zwart bg-roze-light/30' : 'text-zwart/70 hover:text-zwart hover:bg-roze-light/30' }}">Diode Laser – Laserontharen</a>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('gallerij') }}" class="text-sm font-semibold transition-colors {{ request()->routeIs('gallerij') ? 'text-zwart' : 'text-zwart/70 hover:text-zwart' }}">Gallerij</a>
                    <a href="{{ route('over-mij') }}" class="text-sm font-semibold transition-colors {{ request()->routeIs('over-mij') ? 'text-zwart' : 'text-zwart/70 hover:text-zwart' }}">Over mij</a>
                    <a href="{{ route('contact') }}" class="text-sm font-semibold transition-colors {{ request()->routeIs('contact') ? 'text-zwart' : 'text-zwart/70 hover:text-zwart' }}">Contact</a>
                </div>

                {{-- Midden: logo --}}
                <a href="{{ route('home') }}" class="absolute left-1/2 -translate-x-1/2" aria-label="N.O.A Trinity — home">
                    {{-- Knoop met naam op brede schermen, alleen de knoop als er weinig ruimte is --}}
                    <img src="/assets/logo.png" alt="N.O.A. Trinity" class="hidden xl:block h-11 w-auto" width="819" height="160">
                    <img src="/assets/logo-icoon.png" alt="N.O.A. Trinity" class="xl:hidden h-11 w-auto" width="552" height="512">
                </a>

                {{-- Rechts: button + hamburger --}}
                <div class="hidden lg:flex items-center flex-1 justify-end">
                    <x-afspraak-link class="bg-zwart text-creme px-6 py-2.5 rounded-full text-sm font-semibold hover:bg-roze-dark transition-colors">
                        Maak jouw afspraak
                    </x-afspraak-link>
                </div>

                <button id="mobile-menu-btn" class="lg:hidden relative w-10 h-10 flex flex-col items-center justify-center gap-[5px] ml-auto" aria-label="Menu openen">
                    <span class="block w-6 h-[2px] bg-zwart rounded-full transition-all duration-500 ease-[cubic-bezier(0.77,0,0.18,1)] origin-center" id="hamburger-top"></span>
                    <span class="block w-6 h-[2px] bg-zwart rounded-full transition-all duration-500 ease-[cubic-bezier(0.77,0,0.18,1)] origin-center" id="hamburger-mid"></span>
                    <span class="block w-4 h-[2px] bg-zwart rounded-full transition-all duration-500 ease-[cubic-bezier(0.77,0,0.18,1)] origin-center self-end" id="hamburger-bot"></span>
                </button>
            </div>
        </div>
    </nav>

    {{-- Mobile Menu Overlay --}}
    <div id="mobile-menu" class="fixed inset-0 z-40 bg-creme/98 backdrop-blur-sm flex flex-col items-center justify-center transition-all duration-500 opacity-0 pointer-events-none">
        {{-- Decoratieve achtergrond-elementen --}}
        <div class="absolute top-20 right-8 w-32 h-32 bg-roze/15 rounded-full blur-2xl"></div>
        <div class="absolute bottom-32 left-8 w-40 h-40 bg-lavendel/10 rounded-full blur-2xl"></div>

        <nav class="flex flex-col items-center gap-6">
            <a href="{{ route('home') }}" class="mobile-menu-link font-serif text-3xl text-zwart hover:text-roze-dark transition-colors mobile-link opacity-0 translate-y-4">Home</a>
            <a href="{{ route('cryolipolyse') }}" class="mobile-menu-link font-serif text-3xl text-zwart hover:text-roze-dark transition-colors mobile-link opacity-0 translate-y-4">Cryolipolyse</a>
            <a href="{{ route('body-sculpting') }}" class="mobile-menu-link font-serif text-3xl text-zwart hover:text-roze-dark transition-colors mobile-link opacity-0 translate-y-4">Body Sculpting</a>
            <a href="{{ route('laserontharen') }}" class="mobile-menu-link font-serif text-3xl text-zwart hover:text-roze-dark transition-colors mobile-link opacity-0 translate-y-4">Laserontharen</a>
            <a href="{{ route('gallerij') }}" class="mobile-menu-link font-serif text-3xl text-zwart hover:text-roze-dark transition-colors mobile-link opacity-0 translate-y-4">Gallerij</a>
            <a href="{{ route('over-mij') }}" class="mobile-menu-link font-serif text-3xl text-zwart hover:text-roze-dark transition-colors mobile-link opacity-0 translate-y-4">Over mij</a>
            <a href="{{ route('contact') }}" class="mobile-menu-link font-serif text-3xl text-zwart hover:text-roze-dark transition-colors mobile-link opacity-0 translate-y-4">Contact</a>

            <div class="mobile-menu-link opacity-0 translate-y-4 mt-4">
                <x-afspraak-link class="bg-zwart text-creme px-8 py-3.5 rounded-full text-sm font-semibold hover:bg-roze-dark transition-colors mobile-link">
                    Maak jouw afspraak
                </x-afspraak-link>
            </div>
        </nav>

        {{-- Social links onderaan --}}
        <div class="mobile-menu-link opacity-0 translate-y-4 absolute bottom-12 flex items-center gap-6">
            @include('partials.social-links', ['linkClass' => 'text-zwart/30 hover:text-roze-dark transition-colors', 'iconClass' => 'w-5 h-5'])
        </div>
    </div>

    {{-- ============================================ --}}
    {{-- PAGINA CONTENT --}}
    {{-- ============================================ --}}
    @yield('content')

    {{-- ============================================ --}}
    {{-- CTA BANNER — pagina-specifiek --}}
    {{-- ============================================ --}}
    @yield('cta')

    {{-- ============================================ --}}
    {{-- FOOTER --}}
    {{-- ============================================ --}}
    <footer class="bg-zwart text-white/80 pt-12 sm:pt-16 pb-8">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 sm:gap-12 mb-12 sm:mb-16">

                <div class="reveal reveal-delay-1 col-span-2 md:col-span-1">
                    <a href="{{ route('home') }}" class="inline-block">
                        <img src="/assets/logo-volledig.png" alt="N.O.A. Trinity Bodyshaping — Freeze it. Shape it. Love it." class="w-56 h-auto" width="640" height="349" loading="lazy">
                    </a>
                    <p class="mt-5 text-sm leading-relaxed text-white/50">
                        N.O.A Trinity Body Shaping: cryolipolyse (vetbevriezen) met de Body-Wizard Duo, body sculpting en diode laserontharing. Niet-invasieve behandelingen met persoonlijke begeleiding.
                    </p>
                </div>

                <div class="reveal reveal-delay-2">
                    <h4 class="font-serif text-lg font-bold text-white mb-4">Menu</h4>
                    <ul class="space-y-3">
                        <li><a href="{{ route('home') }}" class="text-sm font-semibold hover:text-roze transition-colors">Home</a></li>
                        <li><a href="{{ route('cryolipolyse') }}" class="text-sm font-semibold hover:text-roze transition-colors">Cryolipolyse</a></li>
                        <li><a href="{{ route('body-sculpting') }}" class="text-sm font-semibold hover:text-roze transition-colors">Body Sculpting</a></li>
                        <li><a href="{{ route('laserontharen') }}" class="text-sm font-semibold hover:text-roze transition-colors">Laserontharen</a></li>
                        <li><a href="{{ route('gallerij') }}" class="text-sm font-semibold hover:text-roze transition-colors">Gallerij</a></li>
                        <li><a href="{{ route('over-mij') }}" class="text-sm font-semibold hover:text-roze transition-colors">Over mij</a></li>
                        <li><a href="{{ route('contact') }}" class="text-sm font-semibold hover:text-roze transition-colors">Contact</a></li>
                    </ul>
                </div>

                <div class="reveal reveal-delay-3">
                    <h4 class="font-serif text-lg font-bold text-white mb-4">Contact</h4>
                    <ul class="space-y-3 text-sm">
                        <li class="flex items-start gap-2">
                            <svg class="w-4 h-4 mt-0.5 shrink-0 text-roze" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <span>{{ $settings->adres }}<br>{{ $settings->postcode_stad }}</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 shrink-0 text-roze" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <a href="tel:{{ $settings->telefoon_link }}" class="hover:text-roze transition-colors">{{ $settings->telefoon }}</a>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 shrink-0 text-roze" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <a href="mailto:{{ $settings->email }}" class="hover:text-roze transition-colors">{{ $settings->email }}</a>
                        </li>
                    </ul>
                </div>

                <div class="reveal reveal-delay-4">
                    <h4 class="font-serif text-lg font-bold text-white mb-4">Openingstijden</h4>
                    <ul class="space-y-2 text-sm">
                        @include('partials.openingstijden', ['itemClass' => 'flex justify-between gap-4', 'labelClass' => '', 'tijdClass' => 'text-white/50 text-right'])
                    </ul>

                    <div class="flex gap-4 mt-6">
                        @include('partials.social-links', ['linkClass' => 'w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-roze/30 transition-colors', 'iconClass' => 'w-5 h-5'])
                    </div>
                </div>

            </div>

            <div class="border-t border-white/10 pt-8 flex flex-col sm:flex-row items-center justify-between gap-4">
                <p class="text-xs sm:text-sm text-white/40">
                    &copy; {{ date('Y') }} N.O.A Trinity. Alle rechten voorbehouden.
                </p>
                <div class="flex flex-wrap items-center justify-center gap-x-6 gap-y-2">
                    <a href="{{ route('privacyverklaring') }}" class="text-xs sm:text-sm text-white/40 hover:text-roze transition-colors">Privacyverklaring</a>
                    <a href="{{ route('cookiebeleid') }}" class="text-xs sm:text-sm text-white/40 hover:text-roze transition-colors">Cookiebeleid</a>
                    <a href="{{ route('algemene-voorwaarden') }}" class="text-xs sm:text-sm text-white/40 hover:text-roze transition-colors">Algemene voorwaarden</a>
                </div>
            </div>
            <div class="mt-6 text-right">
                <p class="text-xs text-white/30">
                    Gemaakt door <a href="https://halfmanmedia.nl" target="_blank" rel="noopener noreferrer" class="hover:text-roze transition-colors">HalfmanMedia</a>
                </p>
            </div>
        </div>
    </footer>

    {{-- ============================================ --}}
    {{-- COOKIE CONSENT BAR --}}
    {{-- ============================================ --}}
    <div id="cookie-consent" class="fixed bottom-0 left-0 right-0 z-50 transition-all duration-500 translate-y-full">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-8 pb-6">
            <div class="bg-white rounded-2xl shadow-xl border border-zwart/5 p-6 sm:p-8 flex flex-col sm:flex-row items-start sm:items-center gap-6">
                <div class="flex-1">
                    <h3 class="font-serif text-lg font-bold mb-1">Wij gebruiken cookies</h3>
                    <p class="text-sm text-zwart/60 leading-relaxed">
                        Wij gebruiken cookies om je ervaring op onze website te verbeteren en om ons websiteverkeer te analyseren. Door op "Accepteren" te klikken ga je akkoord met ons
                        <a href="{{ route('cookiebeleid') }}" class="text-roze-dark underline underline-offset-2 hover:text-zwart transition-colors">cookiebeleid</a>.
                    </p>
                </div>
                <div class="flex items-center gap-3 shrink-0">
                    <button id="cookie-decline" class="px-5 py-2.5 rounded-full text-sm font-semibold border border-zwart/15 text-zwart/70 hover:border-zwart/30 hover:text-zwart transition-colors">
                        Weigeren
                    </button>
                    <button id="cookie-accept" class="px-5 py-2.5 rounded-full text-sm font-semibold bg-zwart text-creme hover:bg-roze-dark transition-colors">
                        Accepteren
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================ --}}
    {{-- JAVASCRIPT --}}
    {{-- ============================================ --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const navbar = document.getElementById('navbar');
            const mobileMenuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            const mobileLinks = document.querySelectorAll('.mobile-link');
            let menuOpen = false;

            function handleScroll() {
                if (window.scrollY > 50) {
                    navbar.classList.add('bg-creme/95', 'backdrop-blur-md', 'shadow-sm');
                } else {
                    navbar.classList.remove('bg-creme/95', 'backdrop-blur-md', 'shadow-sm');
                }
            }
            window.addEventListener('scroll', handleScroll);
            handleScroll();

            var hamburgerTop = document.getElementById('hamburger-top');
            var hamburgerMid = document.getElementById('hamburger-mid');
            var hamburgerBot = document.getElementById('hamburger-bot');
            var menuLinks = document.querySelectorAll('.mobile-menu-link');

            function openMenu() {
                menuOpen = true;
                hamburgerTop.style.transform = 'translateY(7px) rotate(45deg)';
                hamburgerTop.style.width = '24px';
                hamburgerMid.style.opacity = '0';
                hamburgerMid.style.transform = 'scaleX(0)';
                hamburgerBot.style.transform = 'translateY(-7px) rotate(-45deg)';
                hamburgerBot.style.width = '24px';
                hamburgerBot.style.alignSelf = 'center';

                mobileMenu.classList.remove('opacity-0', 'pointer-events-none');
                mobileMenu.classList.add('opacity-100', 'pointer-events-auto');
                document.body.style.overflow = 'hidden';

                menuLinks.forEach(function (link, i) {
                    setTimeout(function () {
                        link.style.opacity = '1';
                        link.style.transform = 'translateY(0)';
                        link.style.transition = 'opacity 0.4s cubic-bezier(0.16, 1, 0.3, 1), transform 0.4s cubic-bezier(0.16, 1, 0.3, 1)';
                    }, 100 + i * 70);
                });
            }

            function closeMenu() {
                menuOpen = false;
                hamburgerTop.style.transform = '';
                hamburgerTop.style.width = '';
                hamburgerMid.style.opacity = '';
                hamburgerMid.style.transform = '';
                hamburgerBot.style.transform = '';
                hamburgerBot.style.width = '';
                hamburgerBot.style.alignSelf = '';

                menuLinks.forEach(function (link) {
                    link.style.transition = 'opacity 0.2s ease, transform 0.2s ease';
                    link.style.opacity = '0';
                    link.style.transform = 'translateY(16px)';
                });

                mobileMenu.classList.add('opacity-0', 'pointer-events-none');
                mobileMenu.classList.remove('opacity-100', 'pointer-events-auto');
                document.body.style.overflow = '';
            }

            mobileMenuBtn.addEventListener('click', function () {
                if (menuOpen) {
                    closeMenu();
                } else {
                    openMenu();
                }
            });

            mobileLinks.forEach(function (link) {
                link.addEventListener('click', function () {
                    closeMenu();
                });
            });

            // Scroll-in-view animaties (Intersection Observer)
            var revealElements = document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-scale');
            if ('IntersectionObserver' in window) {
                var revealObserver = new IntersectionObserver(function (entries) {
                    entries.forEach(function (entry) {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('in-view');
                            revealObserver.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.15, rootMargin: '0px 0px -50px 0px' });

                revealElements.forEach(function (el) {
                    revealObserver.observe(el);
                });
            } else {
                revealElements.forEach(function (el) {
                    el.classList.add('in-view');
                });
            }

            // Cookie consent
            var cookieBar = document.getElementById('cookie-consent');
            var cookieAccept = document.getElementById('cookie-accept');
            var cookieDecline = document.getElementById('cookie-decline');

            if (!localStorage.getItem('cookie-consent')) {
                setTimeout(function () {
                    cookieBar.classList.remove('translate-y-full');
                    cookieBar.classList.add('translate-y-0');
                }, 1500);
            }

            function hideCookieBar(choice) {
                localStorage.setItem('cookie-consent', choice);
                cookieBar.classList.add('translate-y-full');
                cookieBar.classList.remove('translate-y-0');
            }

            cookieAccept.addEventListener('click', function () {
                hideCookieBar('accepted');
            });

            cookieDecline.addEventListener('click', function () {
                hideCookieBar('declined');
            });
        });
    </script>

    @yield('scripts')

</body>
</html>
