@extends('layouts.app')

@section('title', 'Cookiebeleid | N.O.A Trinity')
@section('meta_description', 'Cookiebeleid van N.O.A Trinity. Lees welke cookies wij plaatsen, waarvoor ze dienen, hoe lang ze bewaard worden en hoe je ze kunt beheren of uitschakelen.')
@section('robots', 'noindex, follow')

@section('content')

    {{-- ============================================ --}}
    {{-- HERO --}}
    {{-- ============================================ --}}
    <section class="relative overflow-hidden bg-gradient-to-br from-creme via-roze-light/30 to-creme pt-32 sm:pt-40 pb-16 sm:pb-24">
        <div class="absolute top-16 left-[10%] w-72 h-72 bg-roze/15 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-[15%] w-56 h-56 bg-lavendel/15 rounded-full blur-3xl"></div>

        <svg class="absolute -top-12 -right-12 w-60 h-60 opacity-10 sm:opacity-15" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <path fill="#B8848B" d="M44.4,-63C56.5,-52.4,64.6,-38,67.2,-23.4C69.9,-8.7,67.2,6.1,64.4,22.8C61.6,39.5,58.6,58.1,47.9,69.8C37.1,81.6,18.6,86.6,1.5,84.5C-15.5,82.4,-31,73.2,-44.1,62.2C-57.2,51.2,-68,38.4,-75.4,22.8C-82.8,7.2,-86.8,-11.1,-78.9,-22.6C-71,-34.1,-51.2,-38.6,-36.1,-48.3C-20.9,-58,-10.5,-72.8,2.8,-76.7C16.2,-80.6,32.3,-73.7,44.4,-63Z" transform="translate(100 100)" />
        </svg>

        <div class="relative z-10 max-w-[1400px] mx-auto px-6 lg:px-8 text-center">
            <p class="reveal text-roze-dark text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Juridisch</p>
            <h1 class="reveal font-serif text-4xl sm:text-5xl md:text-6xl font-bold leading-tight mb-6">
                Cookiebeleid
            </h1>
            <p class="reveal text-base sm:text-lg text-zwart/70 leading-relaxed max-w-2xl mx-auto">
                Wij gebruiken cookies om je ervaring op onze website te verbeteren. Hier lees je welke cookies wij plaatsen en waarvoor.
            </p>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- CONTENT --}}
    {{-- ============================================ --}}
    <section class="py-16 sm:py-24 bg-white">
        <div class="max-w-[900px] mx-auto px-6 lg:px-8">
            <div class="prose prose-lg max-w-none text-zwart/70 leading-relaxed space-y-10">

                {{-- 1 --}}
                <div class="reveal">
                    <h2 class="font-serif text-2xl font-bold text-zwart mb-4">1. Wat zijn cookies?</h2>
                    <p>
                        Cookies zijn kleine tekstbestanden die op je computer, tablet of telefoon worden geplaatst wanneer je onze website bezoekt. Ze helpen ons om de website goed te laten werken, je voorkeuren te onthouden en het gebruik van de website te analyseren.
                    </p>
                </div>

                {{-- 2 --}}
                <div class="reveal">
                    <h2 class="font-serif text-2xl font-bold text-zwart mb-4">2. Welke cookies gebruiken wij?</h2>

                    {{-- Functionele cookies --}}
                    <h3 class="font-serif text-xl font-bold text-zwart mt-6 mb-3">Functionele cookies</h3>
                    <p>
                        Deze cookies zijn noodzakelijk voor het functioneren van de website. Zonder deze cookies werken bepaalde onderdelen van de website niet goed.
                    </p>
                    <div class="mt-4 overflow-x-auto rounded-xl border border-zwart/10">
                        <table class="w-full text-sm">
                            <thead>
                                <tr class="bg-creme/50">
                                    <th class="px-4 py-3 text-left font-semibold text-zwart">Cookie</th>
                                    <th class="px-4 py-3 text-left font-semibold text-zwart">Doel</th>
                                    <th class="px-4 py-3 text-left font-semibold text-zwart">Bewaartermijn</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-zwart/5">
                                <tr>
                                    <td class="px-4 py-3"><code class="text-roze-dark bg-roze-light/30 px-1.5 py-0.5 rounded text-xs">XSRF-TOKEN</code></td>
                                    <td class="px-4 py-3">Beveiliging van formulieren tegen cross-site request forgery</td>
                                    <td class="px-4 py-3">Sessie</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-3"><code class="text-roze-dark bg-roze-light/30 px-1.5 py-0.5 rounded text-xs">laravel_session</code></td>
                                    <td class="px-4 py-3">Sessiebeheer voor de website</td>
                                    <td class="px-4 py-3">2 uur</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    {{-- Voorkeurscookies --}}
                    <h3 class="font-serif text-xl font-bold text-zwart mt-8 mb-3">Voorkeurscookies</h3>
                    <p>
                        Deze cookies onthouden jouw voorkeuren, zodat je deze niet elke keer opnieuw hoeft in te stellen.
                    </p>
                    <div class="mt-4 overflow-x-auto rounded-xl border border-zwart/10">
                        <table class="w-full text-sm">
                            <thead>
                                <tr class="bg-creme/50">
                                    <th class="px-4 py-3 text-left font-semibold text-zwart">Cookie</th>
                                    <th class="px-4 py-3 text-left font-semibold text-zwart">Doel</th>
                                    <th class="px-4 py-3 text-left font-semibold text-zwart">Bewaartermijn</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-zwart/5">
                                <tr>
                                    <td class="px-4 py-3"><code class="text-roze-dark bg-roze-light/30 px-1.5 py-0.5 rounded text-xs">cookie-consent</code></td>
                                    <td class="px-4 py-3">Onthoudt je cookievoorkeuren (localStorage)</td>
                                    <td class="px-4 py-3">Onbeperkt</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- 3 --}}
                <div class="reveal">
                    <h2 class="font-serif text-2xl font-bold text-zwart mb-4">3. Cookies van derden</h2>
                    <p>
                        Onze website kan gebruik maken van diensten van derden, zoals Google Maps op de contactpagina. Deze diensten kunnen eigen cookies plaatsen. Wij hebben geen invloed op de cookies die deze derden plaatsen. Raadpleeg het privacybeleid van de betreffende dienst voor meer informatie.
                    </p>
                </div>

                {{-- 4 --}}
                <div class="reveal">
                    <h2 class="font-serif text-2xl font-bold text-zwart mb-4">4. Cookies beheren</h2>
                    <p>
                        Je kunt zelf bepalen of je cookies wilt toestaan. Bij je eerste bezoek aan onze website vragen wij je toestemming voor het plaatsen van cookies. Je kunt je keuze op elk moment wijzigen door je browserinstellingen aan te passen.
                    </p>
                    <p class="mt-4">Hieronder vind je instructies per browser:</p>
                    <ul class="list-disc list-inside space-y-1 mt-4">
                        <li><strong class="text-zwart">Google Chrome:</strong> Instellingen &rarr; Privacy en beveiliging &rarr; Cookies</li>
                        <li><strong class="text-zwart">Firefox:</strong> Instellingen &rarr; Privacy &amp; beveiliging &rarr; Cookies en sitegegevens</li>
                        <li><strong class="text-zwart">Safari:</strong> Voorkeuren &rarr; Privacy &rarr; Cookies en websitedata</li>
                        <li><strong class="text-zwart">Microsoft Edge:</strong> Instellingen &rarr; Cookies en sitemachtigingen</li>
                    </ul>
                    <p class="mt-4">
                        <strong class="text-zwart">Let op:</strong> het uitschakelen van cookies kan ertoe leiden dat bepaalde onderdelen van de website niet goed functioneren.
                    </p>
                </div>

                {{-- 5 --}}
                <div class="reveal">
                    <h2 class="font-serif text-2xl font-bold text-zwart mb-4">5. Jouw rechten</h2>
                    <p>
                        Je hebt het recht om je persoonsgegevens in te zien, te corrigeren of te laten verwijderen. Voor meer informatie over jouw rechten verwijzen wij je naar onze <a href="{{ route('privacyverklaring') }}" class="text-roze-dark underline underline-offset-2 hover:text-zwart transition-colors">privacyverklaring</a>.
                    </p>
                </div>

                {{-- 6 --}}
                <div class="reveal">
                    <h2 class="font-serif text-2xl font-bold text-zwart mb-4">6. Contact</h2>
                    <p>
                        Heb je vragen over ons cookiebeleid? Neem dan contact met ons op via <a href="mailto:{{ $settings->email }}" class="text-roze-dark underline underline-offset-2 hover:text-zwart transition-colors">{{ $settings->email }}</a> of bel ons op <a href="tel:{{ $settings->telefoon_link }}" class="text-roze-dark underline underline-offset-2 hover:text-zwart transition-colors">{{ $settings->telefoon }}</a>.
                    </p>
                </div>

                {{-- 7 --}}
                <div class="reveal">
                    <h2 class="font-serif text-2xl font-bold text-zwart mb-4">7. Wijzigingen</h2>
                    <p>
                        Wij kunnen dit cookiebeleid van tijd tot tijd aanpassen. De meest recente versie is altijd beschikbaar op deze pagina.
                    </p>
                    <p class="mt-4 text-sm text-zwart/40">
                        Laatst bijgewerkt: {{ now()->format('d-m-Y') }}
                    </p>
                </div>

            </div>
        </div>
    </section>

@endsection
