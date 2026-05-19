@extends('layouts.app')

@section('title', 'Cryolipolyse (Vetbevriezen) | N.O.A Trinity')
@section('meta_description', 'Cryolipolyse bij N.O.A Trinity: verwijder hardnekkig vet zonder operatie met de Body Wizard van Medcos. Geen hersteltijd, blijvend resultaat.')

@section('content')

    {{-- ============================================ --}}
    {{-- HERO — subpagina stijl, tekst + blobs --}}
    {{-- ============================================ --}}
    <section class="relative overflow-hidden bg-gradient-to-br from-creme via-roze-light/30 to-creme pt-32 sm:pt-40 pb-16 sm:pb-24">
        {{-- Decoratieve blur blobs --}}
        <div class="absolute top-16 right-[10%] w-64 h-64 bg-roze/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-[5%] w-48 h-48 bg-lavendel/15 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 left-1/3 w-24 h-24 bg-roze-light/30 rounded-full blur-2xl"></div>

        {{-- Decoratieve SVG blob --}}
        <svg class="absolute -bottom-16 -right-16 w-72 h-72 opacity-10 sm:opacity-15" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <path fill="#B8848B" d="M44.4,-63C56.5,-52.4,64.6,-38,67.2,-23.4C69.9,-8.7,67.2,6.1,64.4,22.8C61.6,39.5,58.6,58.1,47.9,69.8C37.1,81.6,18.6,86.6,1.5,84.5C-15.5,82.4,-31,73.2,-44.1,62.2C-57.2,51.2,-68,38.4,-75.4,22.8C-82.8,7.2,-86.8,-11.1,-78.9,-22.6C-71,-34.1,-51.2,-38.6,-36.1,-48.3C-20.9,-58,-10.5,-72.8,2.8,-76.7C16.2,-80.6,32.3,-73.7,44.4,-63Z" transform="translate(100 100)" />
        </svg>
        <svg class="absolute -top-10 -left-10 w-48 h-48 opacity-8" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <path fill="#8E9AAF" d="M44.4,-63C56.5,-52.4,64.6,-38,67.2,-23.4C69.9,-8.7,67.2,6.1,64.4,22.8C61.6,39.5,58.6,58.1,47.9,69.8C37.1,81.6,18.6,86.6,1.5,84.5C-15.5,82.4,-31,73.2,-44.1,62.2C-57.2,51.2,-68,38.4,-75.4,22.8C-82.8,7.2,-86.8,-11.1,-78.9,-22.6C-71,-34.1,-51.2,-38.6,-36.1,-48.3C-20.9,-58,-10.5,-72.8,2.8,-76.7C16.2,-80.6,32.3,-73.7,44.4,-63Z" transform="translate(100 100)" />
        </svg>

        <div class="relative z-10 max-w-[1400px] mx-auto px-6 lg:px-8 text-center">
            <p class="reveal text-roze-dark text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Cryolipolyse</p>
            <h1 class="reveal font-serif text-4xl sm:text-5xl md:text-6xl font-bold leading-tight mb-6">
                Vetbevriezen met<br>
                <span class="text-roze-dark">de Body Wizard</span>
            </h1>
            <p class="reveal text-base sm:text-lg md:text-xl text-zwart/70 leading-relaxed max-w-2xl mx-auto mb-8 sm:mb-10">
                Cryolipolyse is een klinisch bewezen en FDA-goedgekeurde methode om hardnekkig vet te verminderen zonder operatie, naalden of hersteltijd. Bij N.O.A Trinity werken wij uitsluitend met de gecertificeerde Body Wizard van Medcos.
            </p>
            <div class="reveal flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="inline-flex items-center justify-center bg-zwart text-creme px-8 py-4 rounded-full text-sm font-semibold hover:bg-roze-dark transition-colors">
                    Boek een gratis consult
                </a>
                <a href="#wat-is-cryolipolyse" class="inline-flex items-center justify-center border border-zwart/15 text-zwart px-8 py-4 rounded-full text-sm font-semibold hover:border-zwart/30 hover:text-roze-dark transition-colors">
                    Meer informatie
                </a>
            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- WAT IS CRYOLIPOLYSE — split layout --}}
    {{-- ============================================ --}}
    <section class="py-16 sm:py-24 lg:py-32 bg-white">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-center">

                {{-- Linkerkolom: afbeelding --}}
                <div class="reveal-left relative">
                    <div class="aspect-[4/5] rounded-3xl overflow-hidden">
                        <img src="/images/behandeling.jpg" alt="Cryolipolyse behandeling met Body Wizard van Medcos" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute -bottom-6 -right-6 w-48 h-48 bg-roze-light/30 rounded-2xl -z-10"></div>
                </div>

                {{-- Rechterkolom: tekst --}}
                <div class="reveal-right">
                    <p class="text-roze-dark text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Wat is cryolipolyse</p>
                    <h2 class="font-serif text-3xl sm:text-4xl md:text-5xl font-bold mb-6">
                        Vetcellen bevriezen<br>voor blijvend resultaat
                    </h2>
                    <div class="w-16 h-0.5 bg-roze mb-8"></div>
                    <p class="text-lg text-zwart/70 leading-relaxed mb-6">
                        Cryolipolyse, ook wel vetbevriezen genoemd, is een klinisch bewezen methode om hardnekkige vetophopingen gericht te verminderen. De behandeling is gebaseerd op het principe dat vetcellen gevoeliger zijn voor koude dan omliggend weefsel.
                    </p>
                    <p class="text-lg text-zwart/70 leading-relaxed mb-8">
                        Met de <strong class="text-zwart">Body Wizard van Medcos</strong> koelen wij vetcellen gecontroleerd af tot -6&#176;C a -10&#176;C. Hierdoor kristalliseren de vetcellen en sterven ze op natuurlijke wijze af. Je lichaam ruimt de afgestorven cellen vervolgens zelf op via het lymfestelsel. De behandeling is FDA-goedgekeurd, volledig niet-invasief en vereist geen naalden of hersteltijd.
                    </p>

                    {{-- 3 highlights --}}
                    <div class="grid grid-cols-3 gap-4">
                        <div class="reveal reveal-delay-1 text-center">
                            <div class="w-12 h-12 bg-roze-light rounded-xl flex items-center justify-center mx-auto mb-3">
                                <svg class="w-6 h-6 text-roze-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"/>
                                </svg>
                            </div>
                            <p class="text-sm font-semibold text-zwart">Geen operatie</p>
                        </div>
                        <div class="reveal reveal-delay-2 text-center">
                            <div class="w-12 h-12 bg-roze-light rounded-xl flex items-center justify-center mx-auto mb-3">
                                <svg class="w-6 h-6 text-roze-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <p class="text-sm font-semibold text-zwart">Geen hersteltijd</p>
                        </div>
                        <div class="reveal reveal-delay-3 text-center">
                            <div class="w-12 h-12 bg-roze-light rounded-xl flex items-center justify-center mx-auto mb-3">
                                <svg class="w-6 h-6 text-roze-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                                </svg>
                            </div>
                            <p class="text-sm font-semibold text-zwart">Blijvend resultaat</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- BEHANDELGEBIEDEN — grid met 6 kaarten --}}
    {{-- ============================================ --}}
    <section class="py-16 sm:py-24 lg:py-32 bg-creme">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-8">

            {{-- Sectie header --}}
            <div class="reveal max-w-2xl mb-10 sm:mb-16">
                <p class="text-roze-dark text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Behandelgebieden</p>
                <h2 class="font-serif text-3xl sm:text-4xl md:text-5xl font-bold mb-4">Welke zones behandelen wij?</h2>
                <p class="text-zwart/60 text-lg leading-relaxed">
                    Cryolipolyse is effectief op diverse lichaamszones waar hardnekkig vet zich ophoopt. Tijdens het gratis consult bepalen we samen welke gebieden het meest geschikt zijn voor jouw behandeling.
                </p>
            </div>

            {{-- Grid: 6 behandelgebied kaarten --}}
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

                {{-- Buik --}}
                <div class="reveal reveal-delay-1 bg-white rounded-2xl p-6 sm:p-8 shadow-sm hover:shadow-lg transition-shadow duration-300">
                    <div class="flex items-start gap-5">
                        <div class="w-14 h-14 bg-roze-light rounded-2xl flex items-center justify-center shrink-0">
                            <svg class="w-7 h-7 text-roze-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h7"/>
                            </svg>
                        </div>
                        <div>
                            <div class="flex items-center gap-2 mb-2">
                                <h3 class="font-serif text-lg font-bold">Buik</h3>
                                <span class="text-xs bg-roze-light text-roze-dark px-2 py-0.5 rounded-full font-semibold">Populair</span>
                            </div>
                            <p class="text-sm text-zwart/60 leading-relaxed">
                                De buik is het meest behandelde gebied. Ideaal voor het verminderen van een hardnekkig buikje dat niet reageert op dieet of sport.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Love handles --}}
                <div class="reveal reveal-delay-2 bg-white rounded-2xl p-6 sm:p-8 shadow-sm hover:shadow-lg transition-shadow duration-300">
                    <div class="flex items-start gap-5">
                        <div class="w-14 h-14 bg-roze-light rounded-2xl flex items-center justify-center shrink-0">
                            <svg class="w-7 h-7 text-roze-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-serif text-lg font-bold mb-2">Love handles</h3>
                            <p class="text-sm text-zwart/60 leading-relaxed">
                                De flanken, ook wel love handles genoemd, zijn een veelvoorkomend probleemgebied. Cryolipolyse biedt hier uitstekende resultaten.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Bovenbenen --}}
                <div class="reveal reveal-delay-3 bg-white rounded-2xl p-6 sm:p-8 shadow-sm hover:shadow-lg transition-shadow duration-300">
                    <div class="flex items-start gap-5">
                        <div class="w-14 h-14 bg-roze-light rounded-2xl flex items-center justify-center shrink-0">
                            <svg class="w-7 h-7 text-roze-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-serif text-lg font-bold mb-2">Bovenbenen</h3>
                            <p class="text-sm text-zwart/60 leading-relaxed">
                                Zowel de binnen- als buitenzijde van de bovenbenen kunnen effectief behandeld worden voor een slankere beenlijn.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Onderkin --}}
                <div class="reveal reveal-delay-1 bg-white rounded-2xl p-6 sm:p-8 shadow-sm hover:shadow-lg transition-shadow duration-300">
                    <div class="flex items-start gap-5">
                        <div class="w-14 h-14 bg-roze-light rounded-2xl flex items-center justify-center shrink-0">
                            <svg class="w-7 h-7 text-roze-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-serif text-lg font-bold mb-2">Onderkin</h3>
                            <p class="text-sm text-zwart/60 leading-relaxed">
                                Een dubbele kin kan vervelend zijn. Met een kleine applicator behandelen we het vetweefsel onder de kin voor een strakker profiel.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Bovenarmen --}}
                <div class="reveal reveal-delay-2 bg-white rounded-2xl p-6 sm:p-8 shadow-sm hover:shadow-lg transition-shadow duration-300">
                    <div class="flex items-start gap-5">
                        <div class="w-14 h-14 bg-roze-light rounded-2xl flex items-center justify-center shrink-0">
                            <svg class="w-7 h-7 text-roze-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11m0-5.5a1.5 1.5 0 013 0v3m0 0V11"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-serif text-lg font-bold mb-2">Bovenarmen</h3>
                            <p class="text-sm text-zwart/60 leading-relaxed">
                                Overtollig vet aan de bovenarmen kan met cryolipolyse effectief verminderd worden voor strakkere, slankere armen.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Rug --}}
                <div class="reveal reveal-delay-3 bg-white rounded-2xl p-6 sm:p-8 shadow-sm hover:shadow-lg transition-shadow duration-300">
                    <div class="flex items-start gap-5">
                        <div class="w-14 h-14 bg-roze-light rounded-2xl flex items-center justify-center shrink-0">
                            <svg class="w-7 h-7 text-roze-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-serif text-lg font-bold mb-2">Rug</h3>
                            <p class="text-sm text-zwart/60 leading-relaxed">
                                Vetrolletjes op de rug, bijvoorbeeld rond de bh-lijn, zijn lastig weg te trainen. Cryolipolyse biedt hier een effectieve oplossing.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- HET PROCES — 3 stappen met afbeeldingen --}}
    {{-- ============================================ --}}
    <section class="py-16 sm:py-24 lg:py-32 bg-white">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-8">

            {{-- Sectie header --}}
            <div class="reveal max-w-2xl mb-10 sm:mb-16">
                <p class="text-roze-dark text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Het proces</p>
                <h2 class="font-serif text-3xl sm:text-4xl md:text-5xl font-bold">Hoe verloopt een cryolipolyse behandeling?</h2>
            </div>

            {{-- Stappen grid --}}
            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-6 sm:gap-8 lg:gap-12">

                {{-- Stap 1 --}}
                <div class="reveal reveal-delay-1 group bg-creme rounded-2xl overflow-hidden shadow-sm">
                    <div class="h-48 overflow-hidden">
                        <img src="/images/consult.jpg" alt="Gratis kennismakingsconsult cryolipolyse bij N.O.A Trinity" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="relative p-8">
                        <span class="font-serif text-6xl font-bold text-roze/30 absolute top-4 right-6">01</span>
                        <div class="relative">
                            <div class="w-12 h-12 bg-roze rounded-xl flex items-center justify-center mb-6">
                                <svg class="w-6 h-6 text-zwart" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                                </svg>
                            </div>
                            <h3 class="font-serif text-xl font-bold mb-3">Gratis kennismaking</h3>
                            <p class="text-zwart/60 leading-relaxed">
                                We starten altijd met een vrijblijvend consult. Samen bespreken we jouw wensen, beoordelen we de behandelzone en stellen we een persoonlijk behandelplan op dat past bij jouw doelen.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Stap 2 --}}
                <div class="reveal reveal-delay-2 group bg-creme rounded-2xl overflow-hidden shadow-sm">
                    <div class="h-48 overflow-hidden">
                        <img src="/images/behandeling.jpg" alt="Cryolipolyse behandeling met Body Wizard" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="relative p-8">
                        <span class="font-serif text-6xl font-bold text-roze/30 absolute top-4 right-6">02</span>
                        <div class="relative">
                            <div class="w-12 h-12 bg-roze-light rounded-xl flex items-center justify-center mb-6">
                                <svg class="w-6 h-6 text-roze-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                                </svg>
                            </div>
                            <h3 class="font-serif text-xl font-bold mb-3">De behandeling</h3>
                            <p class="text-zwart/60 leading-relaxed">
                                De Body Wizard wordt op de behandelzone geplaatst en koelt het vetweefsel gecontroleerd af. Een sessie duurt 45 tot 60 minuten per zone. Je kunt ondertussen ontspannen, lezen of op je telefoon kijken.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Stap 3 --}}
                <div class="reveal reveal-delay-3 group bg-creme rounded-2xl overflow-hidden shadow-sm">
                    <div class="h-48 overflow-hidden">
                        <img src="/images/resultaat.jpg" alt="Zichtbaar resultaat na cryolipolyse behandeling" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="relative p-8">
                        <span class="font-serif text-6xl font-bold text-roze/30 absolute top-4 right-6">03</span>
                        <div class="relative">
                            <div class="w-12 h-12 bg-roze rounded-xl flex items-center justify-center mb-6">
                                <svg class="w-6 h-6 text-zwart" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                                </svg>
                            </div>
                            <h3 class="font-serif text-xl font-bold mb-3">Resultaat</h3>
                            <p class="text-zwart/60 leading-relaxed">
                                Na de behandeling breekt je lichaam de bevroren vetcellen op natuurlijke wijze af via het lymfestelsel. Over een periode van 8 tot 12 weken zie je het volledige resultaat: tot 20-30% vetreductie per behandeld gebied.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            {{-- CTA --}}
            <div class="reveal mt-16 text-center">
                <a href="{{ route('contact') }}" class="inline-flex items-center justify-center bg-zwart text-creme px-7 py-3.5 rounded-full text-sm font-semibold hover:bg-roze-dark transition-colors">
                    Plan jouw gratis consult
                </a>
            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- RESULTATEN & VERWACHTINGEN — timeline --}}
    {{-- ============================================ --}}
    <section class="py-16 sm:py-24 lg:py-32 bg-creme">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-8">

            {{-- Sectie header --}}
            <div class="reveal max-w-2xl mb-10 sm:mb-16">
                <p class="text-roze-dark text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Resultaten & verwachtingen</p>
                <h2 class="font-serif text-3xl sm:text-4xl md:text-5xl font-bold mb-4">Wat kun je verwachten?</h2>
                <p class="text-zwart/60 text-lg leading-relaxed">
                    Het resultaat van cryolipolyse bouwt geleidelijk op. Hieronder een overzicht van wat je kunt verwachten in de weken na je behandeling.
                </p>
            </div>

            {{-- Timeline --}}
            <div class="max-w-3xl">
                <div class="relative">
                    {{-- Verticale lijn --}}
                    <div class="absolute left-6 sm:left-8 top-0 bottom-0 w-px bg-roze-dark/20"></div>

                    {{-- Week 1-2 --}}
                    <div class="reveal reveal-delay-1 relative flex gap-6 sm:gap-8 mb-10 sm:mb-12">
                        <div class="relative z-10 w-12 h-12 sm:w-16 sm:h-16 bg-roze rounded-2xl flex items-center justify-center shrink-0">
                            <span class="font-serif text-sm sm:text-base font-bold text-zwart">1-2</span>
                        </div>
                        <div class="pt-1 sm:pt-3">
                            <p class="text-xs text-roze-dark font-semibold tracking-widest uppercase mb-1">Week 1 - 2</p>
                            <h3 class="font-serif text-xl font-bold mb-2">Direct na de behandeling</h3>
                            <p class="text-zwart/60 leading-relaxed">
                                In de eerste dagen kun je milde roodheid, zwelling of een tinteling ervaren in het behandelde gebied. Dit is volledig normaal en verdwijnt vanzelf. Je kunt direct terug naar je dagelijkse activiteiten.
                            </p>
                        </div>
                    </div>

                    {{-- Week 4-6 --}}
                    <div class="reveal reveal-delay-2 relative flex gap-6 sm:gap-8 mb-10 sm:mb-12">
                        <div class="relative z-10 w-12 h-12 sm:w-16 sm:h-16 bg-roze-light rounded-2xl flex items-center justify-center shrink-0">
                            <span class="font-serif text-sm sm:text-base font-bold text-roze-dark">4-6</span>
                        </div>
                        <div class="pt-1 sm:pt-3">
                            <p class="text-xs text-roze-dark font-semibold tracking-widest uppercase mb-1">Week 4 - 6</p>
                            <h3 class="font-serif text-xl font-bold mb-2">Eerste zichtbare resultaten</h3>
                            <p class="text-zwart/60 leading-relaxed">
                                Je lichaam is volop bezig met het afvoeren van de bevroren vetcellen via het lymfestelsel. Rond deze periode beginnen de eerste zichtbare veranderingen: je kleding zit losser en je merkt dat het behandelde gebied slanker wordt.
                            </p>
                        </div>
                    </div>

                    {{-- Week 8-12 --}}
                    <div class="reveal reveal-delay-3 relative flex gap-6 sm:gap-8 mb-10 sm:mb-12">
                        <div class="relative z-10 w-12 h-12 sm:w-16 sm:h-16 bg-roze rounded-2xl flex items-center justify-center shrink-0">
                            <span class="font-serif text-sm sm:text-base font-bold text-zwart">8-12</span>
                        </div>
                        <div class="pt-1 sm:pt-3">
                            <p class="text-xs text-roze-dark font-semibold tracking-widest uppercase mb-1">Week 8 - 12</p>
                            <h3 class="font-serif text-xl font-bold mb-2">Volledig resultaat</h3>
                            <p class="text-zwart/60 leading-relaxed">
                                Het volledige resultaat is nu zichtbaar. Per behandeld gebied kun je een vetreductie van 20 tot 30% verwachten. De afgestorven vetcellen komen niet meer terug, waardoor het resultaat blijvend is bij een stabiel gewicht.
                            </p>
                        </div>
                    </div>

                    {{-- Sessies --}}
                    <div class="reveal reveal-delay-4 relative flex gap-6 sm:gap-8">
                        <div class="relative z-10 w-12 h-12 sm:w-16 sm:h-16 bg-lavendel/20 rounded-2xl flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6 sm:w-7 sm:h-7 text-lavendel-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                            </svg>
                        </div>
                        <div class="pt-1 sm:pt-3">
                            <p class="text-xs text-lavendel-dark font-semibold tracking-widest uppercase mb-1">Aantal sessies</p>
                            <h3 class="font-serif text-xl font-bold mb-2">1 tot 3 behandelingen per zone</h3>
                            <p class="text-zwart/60 leading-relaxed">
                                Afhankelijk van de dikte van de vetlaag en jouw persoonlijke doelen zijn er 1 tot 3 behandelingen per zone nodig. Dit bespreken we uitgebreid tijdens het gratis kennismakingsgesprek, zodat je precies weet wat je kunt verwachten.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- FAQ — accordion met details/summary --}}
    {{-- ============================================ --}}
    <section class="py-16 sm:py-24 lg:py-32 bg-white">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-8">

            <div class="grid lg:grid-cols-2 gap-10 lg:gap-16">

                {{-- Linkerkolom: header --}}
                <div class="reveal-left lg:sticky lg:top-32 lg:self-start">
                    <p class="text-roze-dark text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Veelgestelde vragen</p>
                    <h2 class="font-serif text-3xl sm:text-4xl md:text-5xl font-bold mb-6">
                        Alles wat je wilt weten over cryolipolyse
                    </h2>
                    <div class="w-16 h-0.5 bg-roze mb-6"></div>
                    <p class="text-zwart/60 text-lg leading-relaxed mb-8">
                        Heb je een vraag die hier niet bij staat? Neem dan gerust contact met ons op. We helpen je graag verder.
                    </p>
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center bg-zwart text-creme px-7 py-3.5 rounded-full text-sm font-semibold hover:bg-roze-dark transition-colors">
                        Stel je vraag
                    </a>
                </div>

                {{-- Rechterkolom: FAQ accordion --}}
                <div class="reveal-right space-y-4">

                    {{-- Vraag 1 --}}
                    <details class="group border-b border-zwart/10 pb-4">
                        <summary class="flex items-center justify-between cursor-pointer py-4 list-none [&::-webkit-details-marker]:hidden">
                            <h3 class="font-serif text-lg font-bold pr-4">Is cryolipolyse pijnlijk?</h3>
                            <div class="w-8 h-8 bg-roze-light rounded-full flex items-center justify-center shrink-0 transition-transform duration-300 group-open:rotate-45">
                                <svg class="w-4 h-4 text-roze-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                </svg>
                            </div>
                        </summary>
                        <div class="pb-2">
                            <p class="text-zwart/60 leading-relaxed">
                                Nee, cryolipolyse is niet pijnlijk. Tijdens de eerste minuten voel je een koudeprikkel en een zuigende druk op de huid, maar dit went snel. Daarna wordt het gebied verdoofd door de koude en kun je comfortabel ontspannen gedurende de rest van de behandeling. Na afloop kan er een mild tintelend of verdoofd gevoel zijn, dat vanzelf verdwijnt.
                            </p>
                        </div>
                    </details>

                    {{-- Vraag 2 --}}
                    <details class="group border-b border-zwart/10 pb-4">
                        <summary class="flex items-center justify-between cursor-pointer py-4 list-none [&::-webkit-details-marker]:hidden">
                            <h3 class="font-serif text-lg font-bold pr-4">Hoeveel behandelingen heb ik nodig?</h3>
                            <div class="w-8 h-8 bg-roze-light rounded-full flex items-center justify-center shrink-0 transition-transform duration-300 group-open:rotate-45">
                                <svg class="w-4 h-4 text-roze-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                </svg>
                            </div>
                        </summary>
                        <div class="pb-2">
                            <p class="text-zwart/60 leading-relaxed">
                                De meeste klanten hebben 1 tot 3 behandelingen per zone nodig voor een optimaal resultaat. Dit hangt af van de dikte van de vetlaag en jouw persoonlijke doelen. Tijdens het gratis kennismakingsgesprek beoordelen we samen welke aanpak het beste bij jou past en hoeveel sessies we verwachten.
                            </p>
                        </div>
                    </details>

                    {{-- Vraag 3 --}}
                    <details class="group border-b border-zwart/10 pb-4">
                        <summary class="flex items-center justify-between cursor-pointer py-4 list-none [&::-webkit-details-marker]:hidden">
                            <h3 class="font-serif text-lg font-bold pr-4">Is het resultaat blijvend?</h3>
                            <div class="w-8 h-8 bg-roze-light rounded-full flex items-center justify-center shrink-0 transition-transform duration-300 group-open:rotate-45">
                                <svg class="w-4 h-4 text-roze-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                </svg>
                            </div>
                        </summary>
                        <div class="pb-2">
                            <p class="text-zwart/60 leading-relaxed">
                                Ja, het resultaat van cryolipolyse is blijvend. De bevroren vetcellen worden door het lichaam permanent afgebroken en afgevoerd. Deze cellen komen niet meer terug. Het is wel belangrijk om een gezonde levensstijl te hanteren, zodat de overgebleven vetcellen niet uitzetten. Bij een stabiel gewicht blijft het resultaat behouden.
                            </p>
                        </div>
                    </details>

                    {{-- Vraag 4 --}}
                    <details class="group border-b border-zwart/10 pb-4">
                        <summary class="flex items-center justify-between cursor-pointer py-4 list-none [&::-webkit-details-marker]:hidden">
                            <h3 class="font-serif text-lg font-bold pr-4">Zijn er bijwerkingen?</h3>
                            <div class="w-8 h-8 bg-roze-light rounded-full flex items-center justify-center shrink-0 transition-transform duration-300 group-open:rotate-45">
                                <svg class="w-4 h-4 text-roze-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                </svg>
                            </div>
                        </summary>
                        <div class="pb-2">
                            <p class="text-zwart/60 leading-relaxed">
                                De bijwerkingen van cryolipolyse zijn mild en tijdelijk. Direct na de behandeling kun je roodheid, lichte zwelling, gevoeligheid of een tintelend gevoel ervaren in het behandelde gebied. Deze verschijnselen verdwijnen doorgaans binnen enkele dagen tot twee weken. Ernstige bijwerkingen zijn uiterst zeldzaam.
                            </p>
                        </div>
                    </details>

                    {{-- Vraag 5 --}}
                    <details class="group border-b border-zwart/10 pb-4">
                        <summary class="flex items-center justify-between cursor-pointer py-4 list-none [&::-webkit-details-marker]:hidden">
                            <h3 class="font-serif text-lg font-bold pr-4">Hoe lang duurt een behandeling?</h3>
                            <div class="w-8 h-8 bg-roze-light rounded-full flex items-center justify-center shrink-0 transition-transform duration-300 group-open:rotate-45">
                                <svg class="w-4 h-4 text-roze-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                </svg>
                            </div>
                        </summary>
                        <div class="pb-2">
                            <p class="text-zwart/60 leading-relaxed">
                                Een cryolipolyse behandeling duurt gemiddeld 45 tot 60 minuten per behandelzone. Bij meerdere zones kan de totale sessie langer duren. Tijdens de behandeling kun je comfortabel ontspannen, een boek lezen of je telefoon gebruiken. Er is geen voorbereiding of hersteltijd nodig.
                            </p>
                        </div>
                    </details>

                    {{-- Vraag 6 --}}
                    <details class="group border-b border-zwart/10 pb-4">
                        <summary class="flex items-center justify-between cursor-pointer py-4 list-none [&::-webkit-details-marker]:hidden">
                            <h3 class="font-serif text-lg font-bold pr-4">Voor wie is cryolipolyse geschikt?</h3>
                            <div class="w-8 h-8 bg-roze-light rounded-full flex items-center justify-center shrink-0 transition-transform duration-300 group-open:rotate-45">
                                <svg class="w-4 h-4 text-roze-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                </svg>
                            </div>
                        </summary>
                        <div class="pb-2">
                            <p class="text-zwart/60 leading-relaxed">
                                Cryolipolyse is geschikt voor gezonde volwassenen met lokale vetophopingen die niet reageren op dieet en beweging. Het is geen afslankmethode, maar een behandeling voor gericht vet verminderen op specifieke zones. De behandeling is niet geschikt tijdens zwangerschap, bij ernstig overgewicht, of bij bepaalde medische aandoeningen zoals cryoglobulinemie. Tijdens het consult bespreken we of cryolipolyse geschikt is voor jou.
                            </p>
                        </div>
                    </details>

                </div>

            </div>
        </div>
    </section>

@endsection

@section('cta')
    <section class="py-16 sm:py-24 lg:py-32 bg-roze relative overflow-hidden">
        <div class="absolute top-0 right-0 w-64 h-64 bg-roze-dark/10 rounded-full -translate-y-1/2 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-48 h-48 bg-lavendel/10 rounded-full translate-y-1/2 -translate-x-1/2"></div>

        <div class="reveal-scale relative z-10 max-w-3xl mx-auto px-6 lg:px-8 text-center">
            <h2 class="font-serif text-3xl sm:text-4xl md:text-5xl font-bold text-zwart mb-6">
                Klaar voor jouw eerste cryolipolyse behandeling?
            </h2>
            <p class="text-base sm:text-lg text-zwart/70 leading-relaxed mb-8 sm:mb-10 max-w-xl mx-auto">
                Boek een gratis en vrijblijvend kennismakingsgesprek. Samen bespreken we jouw doelen, beoordelen we de behandelzones en stellen we een persoonlijk plan op — zonder verplichtingen.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="inline-flex items-center justify-center bg-zwart text-creme px-8 py-4 rounded-full text-sm font-semibold hover:bg-roze-dark transition-colors">
                    Boek een gratis consult
                </a>
                <a href="{{ route('body-sculpting') }}" class="inline-flex items-center justify-center border border-zwart/15 text-zwart px-8 py-4 rounded-full text-sm font-semibold hover:border-zwart/30 hover:text-roze-dark transition-colors">
                    Bekijk body sculpting
                </a>
            </div>
        </div>
    </section>
@endsection
