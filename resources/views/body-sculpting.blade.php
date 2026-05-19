@extends('layouts.app')

@section('title', 'Body Sculpting | N.O.A Trinity — Niet-invasieve lichaamsvormgeving')
@section('meta_description', 'Body sculpting bij N.O.A Trinity: niet-invasieve lichaamsvormgeving die omvang vermindert, de huid verstevigt en een strakker silhouet creëert. Boek een gratis consult.')

@section('content')

    {{-- ============================================ --}}
    {{-- HERO — subpagina stijl, tekst + blobs --}}
    {{-- ============================================ --}}
    <section class="relative overflow-hidden bg-gradient-to-br from-creme via-roze-light/30 to-creme pt-32 sm:pt-40 pb-16 sm:pb-24">
        {{-- Decoratieve blur blobs --}}
        <div class="absolute top-20 left-[15%] w-56 h-56 bg-lavendel/15 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-[10%] w-64 h-64 bg-roze/20 rounded-full blur-3xl"></div>
        <div class="absolute top-1/3 right-1/4 w-20 h-20 bg-roze-light/40 rounded-full blur-2xl"></div>

        {{-- Decoratieve SVG blobs --}}
        <svg class="absolute -bottom-12 -left-12 w-64 h-64 opacity-10 sm:opacity-15" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <path fill="#B8848B" d="M44.4,-63C56.5,-52.4,64.6,-38,67.2,-23.4C69.9,-8.7,67.2,6.1,64.4,22.8C61.6,39.5,58.6,58.1,47.9,69.8C37.1,81.6,18.6,86.6,1.5,84.5C-15.5,82.4,-31,73.2,-44.1,62.2C-57.2,51.2,-68,38.4,-75.4,22.8C-82.8,7.2,-86.8,-11.1,-78.9,-22.6C-71,-34.1,-51.2,-38.6,-36.1,-48.3C-20.9,-58,-10.5,-72.8,2.8,-76.7C16.2,-80.6,32.3,-73.7,44.4,-63Z" transform="translate(100 100)" />
        </svg>
        <svg class="absolute -top-8 -right-8 w-56 h-56 opacity-8" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <path fill="#EFD3D7" d="M44.4,-63C56.5,-52.4,64.6,-38,67.2,-23.4C69.9,-8.7,67.2,6.1,64.4,22.8C61.6,39.5,58.6,58.1,47.9,69.8C37.1,81.6,18.6,86.6,1.5,84.5C-15.5,82.4,-31,73.2,-44.1,62.2C-57.2,51.2,-68,38.4,-75.4,22.8C-82.8,7.2,-86.8,-11.1,-78.9,-22.6C-71,-34.1,-51.2,-38.6,-36.1,-48.3C-20.9,-58,-10.5,-72.8,2.8,-76.7C16.2,-80.6,32.3,-73.7,44.4,-63Z" transform="translate(100 100)" />
        </svg>

        <div class="relative z-10 max-w-[1400px] mx-auto px-6 lg:px-8 text-center">
            <p class="reveal text-roze-dark text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Body Sculpting</p>
            <h1 class="reveal font-serif text-4xl sm:text-5xl md:text-6xl font-bold leading-tight mb-6">
                Vormgeving van<br>
                <span class="text-roze-dark">jouw lichaam</span>
            </h1>
            <p class="reveal text-base sm:text-lg md:text-xl text-zwart/70 leading-relaxed max-w-2xl mx-auto mb-8 sm:mb-10">
                Met body sculpting werk ik gericht aan jouw contouren. Deze niet-invasieve behandeling vermindert omvang, verstevigt de huid en creëert een strakker silhouet — zonder operatie en zonder hersteltijd.
            </p>
            <div class="reveal flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="inline-flex items-center justify-center bg-zwart text-creme px-8 py-4 rounded-full text-sm font-semibold hover:bg-roze-dark transition-colors">
                    Boek een gratis consult
                </a>
                <a href="#wat-is-body-sculpting" class="inline-flex items-center justify-center border border-zwart/15 text-zwart px-8 py-4 rounded-full text-sm font-semibold hover:border-zwart/30 hover:text-roze-dark transition-colors">
                    Meer informatie
                </a>
            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- WAT IS BODY SCULPTING — split layout --}}
    {{-- ============================================ --}}
    <section class="py-16 sm:py-24 lg:py-32 bg-white">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-center">

                {{-- Linkerkolom: afbeelding --}}
                <div class="reveal-left relative order-2 lg:order-1">
                    <div class="relative">
                        <div class="aspect-[4/5] rounded-3xl overflow-hidden">
                            <img src="/images/sculpting.jpg" alt="Body sculpting behandeling voor lichaamsvormgeving" class="w-full h-full object-cover">
                        </div>
                        {{-- Decoratief accent blok --}}
                        <div class="absolute -bottom-6 -right-6 w-48 h-48 bg-roze-light/30 rounded-2xl -z-10"></div>
                    </div>
                </div>

                {{-- Rechterkolom: tekst --}}
                <div class="reveal-right order-1 lg:order-2">
                    <p class="text-roze-dark text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Wat is het?</p>
                    <h2 class="font-serif text-3xl sm:text-4xl md:text-5xl font-bold mb-6">
                        Wat is body sculpting?
                    </h2>
                    <div class="w-16 h-0.5 bg-roze mb-8"></div>
                    <p class="text-lg text-zwart/70 leading-relaxed mb-6">
                        Body sculpting is een niet-invasieve behandeling gericht op het vormgeven en contouren van het lichaam. De behandeling vermindert omvang, verstevigt de huid en creëert een strakker silhouet — zonder chirurgie en zonder hersteltijd.
                    </p>
                    <p class="text-lg text-zwart/70 leading-relaxed mb-8">
                        Door middel van gerichte technieken wordt de collageenproductie gestimuleerd en de elasticiteit van de huid verbeterd. Het resultaat is een stevigere, strakkere huid en een mooier gedefinieerd lichaam.
                    </p>

                    {{-- 3 highlights --}}
                    <div class="grid sm:grid-cols-3 gap-4">
                        <div class="reveal reveal-delay-1 flex items-center gap-3 bg-roze-light/40 rounded-xl px-4 py-3">
                            <div class="w-10 h-10 bg-roze rounded-lg flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5 text-zwart" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                                </svg>
                            </div>
                            <p class="text-sm font-semibold text-zwart">Omvang verminderen</p>
                        </div>
                        <div class="reveal reveal-delay-2 flex items-center gap-3 bg-roze-light/40 rounded-xl px-4 py-3">
                            <div class="w-10 h-10 bg-roze rounded-lg flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5 text-zwart" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                </svg>
                            </div>
                            <p class="text-sm font-semibold text-zwart">Huid verstevigen</p>
                        </div>
                        <div class="reveal reveal-delay-3 flex items-center gap-3 bg-roze-light/40 rounded-xl px-4 py-3">
                            <div class="w-10 h-10 bg-roze rounded-lg flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5 text-zwart" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                                </svg>
                            </div>
                            <p class="text-sm font-semibold text-zwart">Strakker silhouet</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- BEHANDELGEBIEDEN — 6 kaarten in grid --}}
    {{-- ============================================ --}}
    <section class="py-16 sm:py-24 lg:py-32 bg-creme">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-8">
            {{-- Sectie header --}}
            <div class="reveal max-w-2xl mb-10 sm:mb-16">
                <p class="text-roze-dark text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Behandelgebieden</p>
                <h2 class="font-serif text-3xl sm:text-4xl md:text-5xl font-bold mb-4">Waar kan body sculpting worden toegepast?</h2>
                <p class="text-zwart/60 text-lg leading-relaxed">
                    Body sculpting is geschikt voor verschillende zones van het lichaam. Tijdens het intakegesprek bepalen we samen welke gebieden het meeste baat hebben bij de behandeling.
                </p>
            </div>

            {{-- Grid van behandelgebieden --}}
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

                {{-- Buik --}}
                <div class="reveal reveal-delay-1 bg-white rounded-2xl p-6 sm:p-8 hover:shadow-lg transition-shadow duration-300">
                    <div class="w-14 h-14 bg-roze-light rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-roze-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h7"/>
                        </svg>
                    </div>
                    <h3 class="font-serif text-xl font-bold mb-3">Buik</h3>
                    <p class="text-zwart/60 leading-relaxed text-sm">
                        De buik is een van de meest populaire behandelgebieden. Body sculpting helpt bij het verstevigen van de buikwand en het verminderen van omvang voor een plattere, strakkere buik.
                    </p>
                </div>

                {{-- Taille --}}
                <div class="reveal reveal-delay-2 bg-white rounded-2xl p-6 sm:p-8 hover:shadow-lg transition-shadow duration-300">
                    <div class="w-14 h-14 bg-roze-light rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-roze-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"/>
                        </svg>
                    </div>
                    <h3 class="font-serif text-xl font-bold mb-3">Taille</h3>
                    <p class="text-zwart/60 leading-relaxed text-sm">
                        Verminder de omvang rondom de taille en creëer een mooiere taille-heup verhouding. Ideaal voor het aanpakken van hardnekkige vetrolletjes aan de zijkant.
                    </p>
                </div>

                {{-- Bovenbenen --}}
                <div class="reveal reveal-delay-3 bg-white rounded-2xl p-6 sm:p-8 hover:shadow-lg transition-shadow duration-300">
                    <div class="w-14 h-14 bg-roze-light rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-roze-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="font-serif text-xl font-bold mb-3">Bovenbenen</h3>
                    <p class="text-zwart/60 leading-relaxed text-sm">
                        Verstevigt de huid van de bovenbenen en vermindert omvang. Effectief voor zowel de binnenkant als de buitenkant van de benen voor een gladder en strakker resultaat.
                    </p>
                </div>

                {{-- Billen --}}
                <div class="reveal reveal-delay-1 bg-white rounded-2xl p-6 sm:p-8 hover:shadow-lg transition-shadow duration-300">
                    <div class="w-14 h-14 bg-roze-light rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-roze-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </div>
                    <h3 class="font-serif text-xl font-bold mb-3">Billen</h3>
                    <p class="text-zwart/60 leading-relaxed text-sm">
                        Geef jouw billen een lift zonder chirurgie. Body sculpting verstevigt de huid en verbetert de contouren voor een natuurlijk, opgetild resultaat.
                    </p>
                </div>

                {{-- Bovenarmen --}}
                <div class="reveal reveal-delay-2 bg-white rounded-2xl p-6 sm:p-8 hover:shadow-lg transition-shadow duration-300">
                    <div class="w-14 h-14 bg-roze-light rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-roze-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11m0-5.5a1.5 1.5 0 013 0v3m0 0V11"/>
                        </svg>
                    </div>
                    <h3 class="font-serif text-xl font-bold mb-3">Bovenarmen</h3>
                    <p class="text-zwart/60 leading-relaxed text-sm">
                        Pak slappe bovenarmen aan met body sculpting. De behandeling verstevigt het weefsel en vermindert de omvang voor stevigere, gedefinieerde armen.
                    </p>
                </div>

                {{-- Decolleté --}}
                <div class="reveal reveal-delay-3 bg-white rounded-2xl p-6 sm:p-8 hover:shadow-lg transition-shadow duration-300">
                    <div class="w-14 h-14 bg-roze-light rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-roze-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                        </svg>
                    </div>
                    <h3 class="font-serif text-xl font-bold mb-3">Decolleté</h3>
                    <p class="text-zwart/60 leading-relaxed text-sm">
                        Verbeter de huidkwaliteit en stevigheid van het decolleté. Body sculpting stimuleert de collageenproductie voor een gladder, jeugdiger resultaat in dit gevoelige gebied.
                    </p>
                </div>

            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- HET PROCES — 3 stappen met afbeeldingen --}}
    {{-- ============================================ --}}
    <section class="py-16 sm:py-24 lg:py-32 bg-white">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-8">
            {{-- Header --}}
            <div class="reveal max-w-2xl mb-10 sm:mb-16">
                <p class="text-roze-dark text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Het proces</p>
                <h2 class="font-serif text-3xl sm:text-4xl md:text-5xl font-bold">Hoe werkt een body sculpting behandeling?</h2>
            </div>

            {{-- Stappen --}}
            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-6 sm:gap-8 lg:gap-12">

                {{-- Stap 1: Intake gesprek --}}
                <div class="reveal reveal-delay-1 group bg-creme rounded-2xl overflow-hidden shadow-sm">
                    <div class="h-48 overflow-hidden">
                        <img src="/images/consult.jpg" alt="Intake gesprek voor body sculpting bij N.O.A Trinity" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="relative p-8">
                        <span class="font-serif text-6xl font-bold text-roze/30 absolute top-4 right-6">01</span>
                        <div class="relative">
                            <div class="w-12 h-12 bg-roze rounded-xl flex items-center justify-center mb-6">
                                <svg class="w-6 h-6 text-zwart" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                                </svg>
                            </div>
                            <h3 class="font-serif text-xl font-bold mb-3">Intake gesprek</h3>
                            <p class="text-zwart/60 leading-relaxed">
                                Tijdens een vrijblijvend intakegesprek bespreken we jouw doelen, beoordelen we de behandelgebieden en stellen we samen een persoonlijk plan op dat aansluit bij jouw wensen.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Stap 2: De behandeling --}}
                <div class="reveal reveal-delay-2 group bg-creme rounded-2xl overflow-hidden shadow-sm">
                    <div class="h-48 overflow-hidden">
                        <img src="/images/behandeling.jpg" alt="Body sculpting behandeling sessie" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
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
                                Een gerichte body sculpting sessie duurt 30 tot 45 minuten. De behandeling is comfortabel en je kunt direct na afloop terug naar je dagelijkse bezigheden.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Stap 3: Resultaat --}}
                <div class="reveal reveal-delay-3 group bg-creme rounded-2xl overflow-hidden shadow-sm">
                    <div class="h-48 overflow-hidden">
                        <img src="/images/resultaat.jpg" alt="Zichtbaar resultaat na body sculpting behandeling" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
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
                                Na elke sessie verbetert de stevigheid en contouring van de huid zichtbaar. Het resultaat bouwt op: na meerdere behandelingen zie je een duidelijk verschil in omvang en huidkwaliteit.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            {{-- CTA --}}
            <div class="reveal mt-16 text-center">
                <a href="{{ route('contact') }}" class="inline-flex items-center justify-center bg-zwart text-creme px-7 py-3.5 rounded-full text-sm font-semibold hover:bg-roze-dark transition-colors">
                    Plan jouw intake gesprek
                </a>
            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- COMBINATIE MET CRYOLIPOLYSE — split layout --}}
    {{-- ============================================ --}}
    <section class="py-16 sm:py-24 lg:py-32 bg-creme">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-center">

                {{-- Linkerkolom: tekst --}}
                <div class="reveal-left">
                    <p class="text-roze-dark text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Optimaal resultaat</p>
                    <h2 class="font-serif text-3xl sm:text-4xl md:text-5xl font-bold mb-6">
                        Combineer met cryolipolyse
                    </h2>
                    <div class="w-16 h-0.5 bg-roze mb-8"></div>
                    <p class="text-lg text-zwart/70 leading-relaxed mb-6">
                        Voor het beste resultaat adviseren wij een combinatie van cryolipolyse en body sculpting. Eerst bevriezen we hardnekkige vetcellen met cryolipolyse, waarna body sculpting het behandelgebied verder vormgeeft en de huid verstevigt.
                    </p>
                    <p class="text-lg text-zwart/70 leading-relaxed mb-8">
                        Deze krachtige combinatie zorgt voor zowel vetvermindering als huidversteviging. Het resultaat? Een strakker, slanker silhouet met een verbeterde huidkwaliteit. Samen bespreken we welke aanpak het beste bij jouw doelen past.
                    </p>

                    {{-- Twee voordelen --}}
                    <div class="space-y-4 mb-8">
                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 bg-roze rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-3.5 h-3.5 text-zwart" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <p class="text-zwart/70"><strong class="text-zwart">Cryolipolyse</strong> — bevriest en verwijdert hardnekkige vetcellen op natuurlijke wijze</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 bg-roze rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-3.5 h-3.5 text-zwart" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <p class="text-zwart/70"><strong class="text-zwart">Body sculpting</strong> — verstevigt de huid en verfijnt de contouren van het lichaam</p>
                        </div>
                    </div>

                    <a href="{{ route('cryolipolyse') }}" class="inline-flex items-center gap-2 bg-zwart text-creme px-7 py-3.5 rounded-full text-sm font-semibold hover:bg-roze-dark transition-colors">
                        Ontdek cryolipolyse
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>

                {{-- Rechterkolom: decoratief visueel --}}
                <div class="reveal-right relative order-first lg:order-last">
                    <div class="relative">
                        {{-- Grote afbeelding --}}
                        <div class="aspect-[4/5] rounded-3xl overflow-hidden">
                            <img src="/images/behandeling.jpg" alt="Combinatie cryolipolyse en body sculpting behandeling" class="w-full h-full object-cover">
                        </div>

                        {{-- Decoratieve elementen --}}
                        <div class="absolute -top-4 -left-4 w-24 h-24 bg-roze/20 rounded-full blur-xl"></div>
                        <div class="absolute -bottom-6 -right-6 w-48 h-48 bg-lavendel/10 rounded-2xl -z-10"></div>

                        {{-- Floating badge --}}
                        <div class="absolute -bottom-4 -left-4 sm:bottom-6 sm:left-6 bg-white rounded-2xl p-4 shadow-lg">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 bg-roze-light rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6 text-roze-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-serif font-bold text-sm">Duo-behandeling</p>
                                    <p class="text-xs text-zwart/50">Optimaal resultaat</p>
                                </div>
                            </div>
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
                <div class="reveal-left">
                    <p class="text-roze-dark text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Veelgestelde vragen</p>
                    <h2 class="font-serif text-3xl sm:text-4xl md:text-5xl font-bold mb-6">
                        Alles wat je wilt weten over body sculpting
                    </h2>
                    <div class="w-16 h-0.5 bg-roze mb-6"></div>
                    <p class="text-zwart/60 leading-relaxed mb-8">
                        Heb je nog vragen? Neem dan gerust contact met ons op voor een vrijblijvend adviesgesprek. Wij helpen je graag verder.
                    </p>
                    <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-roze-dark hover:text-zwart transition-colors">
                        Stel je vraag
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>

                {{-- Rechterkolom: FAQ items --}}
                <div class="reveal-right space-y-4">

                    {{-- Vraag 1 --}}
                    <details class="group bg-creme rounded-2xl overflow-hidden">
                        <summary class="flex items-center justify-between cursor-pointer p-6 sm:p-8 text-left font-serif text-lg font-bold hover:text-roze-dark transition-colors">
                            Wat is het verschil tussen body sculpting en cryolipolyse?
                            <svg class="w-5 h-5 shrink-0 ml-4 text-roze-dark transition-transform duration-300 group-open:rotate-45" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                            </svg>
                        </summary>
                        <div class="px-6 sm:px-8 pb-6 sm:pb-8">
                            <p class="text-zwart/60 leading-relaxed">
                                Cryolipolyse (vetbevriezen) is gericht op het verwijderen van hardnekkige vetcellen door ze gecontroleerd af te koelen. Body sculpting richt zich op het vormgeven en verstevigen van het lichaam: het vermindert omvang, verbetert de huidkwaliteit en creëert een strakker silhouet. Beide behandelingen vullen elkaar uitstekend aan voor optimaal resultaat.
                            </p>
                        </div>
                    </details>

                    {{-- Vraag 2 --}}
                    <details class="group bg-creme rounded-2xl overflow-hidden">
                        <summary class="flex items-center justify-between cursor-pointer p-6 sm:p-8 text-left font-serif text-lg font-bold hover:text-roze-dark transition-colors">
                            Hoeveel behandelingen zijn nodig?
                            <svg class="w-5 h-5 shrink-0 ml-4 text-roze-dark transition-transform duration-300 group-open:rotate-45" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                            </svg>
                        </summary>
                        <div class="px-6 sm:px-8 pb-6 sm:pb-8">
                            <p class="text-zwart/60 leading-relaxed">
                                Voor optimaal resultaat adviseren wij 3 tot 6 sessies, afhankelijk van het behandelgebied en jouw persoonlijke doelen. Tijdens het gratis intakegesprek bespreken we hoeveel behandelingen voor jouw situatie het meest effectief zijn en stellen we een plan op maat samen.
                            </p>
                        </div>
                    </details>

                    {{-- Vraag 3 --}}
                    <details class="group bg-creme rounded-2xl overflow-hidden">
                        <summary class="flex items-center justify-between cursor-pointer p-6 sm:p-8 text-left font-serif text-lg font-bold hover:text-roze-dark transition-colors">
                            Is body sculpting pijnlijk?
                            <svg class="w-5 h-5 shrink-0 ml-4 text-roze-dark transition-transform duration-300 group-open:rotate-45" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                            </svg>
                        </summary>
                        <div class="px-6 sm:px-8 pb-6 sm:pb-8">
                            <p class="text-zwart/60 leading-relaxed">
                                Nee, body sculpting is een comfortabele behandeling. De meeste klanten ervaren de sessie als aangenaam en ontspannend. Je kunt tijdens de behandeling gewoon relaxen. Er is geen hersteltijd nodig en je kunt direct na afloop je dagelijkse activiteiten hervatten.
                            </p>
                        </div>
                    </details>

                    {{-- Vraag 4 --}}
                    <details class="group bg-creme rounded-2xl overflow-hidden">
                        <summary class="flex items-center justify-between cursor-pointer p-6 sm:p-8 text-left font-serif text-lg font-bold hover:text-roze-dark transition-colors">
                            Wanneer zie ik resultaat?
                            <svg class="w-5 h-5 shrink-0 ml-4 text-roze-dark transition-transform duration-300 group-open:rotate-45" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                            </svg>
                        </summary>
                        <div class="px-6 sm:px-8 pb-6 sm:pb-8">
                            <p class="text-zwart/60 leading-relaxed">
                                De eerste verbeteringen zijn vaak al merkbaar na 2 tot 4 behandelingen. Het resultaat is progressief: elke sessie bouwt voort op de vorige. De huid wordt geleidelijk steviger, de omvang vermindert en het silhouet wordt strakker. Maximale resultaten zijn doorgaans zichtbaar na het volledige behandeltraject.
                            </p>
                        </div>
                    </details>

                    {{-- Vraag 5 --}}
                    <details class="group bg-creme rounded-2xl overflow-hidden">
                        <summary class="flex items-center justify-between cursor-pointer p-6 sm:p-8 text-left font-serif text-lg font-bold hover:text-roze-dark transition-colors">
                            Kan ik body sculpting combineren met andere behandelingen?
                            <svg class="w-5 h-5 shrink-0 ml-4 text-roze-dark transition-transform duration-300 group-open:rotate-45" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                            </svg>
                        </summary>
                        <div class="px-6 sm:px-8 pb-6 sm:pb-8">
                            <p class="text-zwart/60 leading-relaxed">
                                Ja, body sculpting is bij uitstek geschikt om te combineren met andere behandelingen. De combinatie met cryolipolyse is vooral populair: eerst worden vetcellen bevroren en afgebroken, waarna body sculpting het gebied verder vormgeeft en de huid verstevigt. Zo bereik je een compleet en optimaal resultaat.
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
                Klaar om jouw lichaam te vormen?
            </h2>
            <p class="text-base sm:text-lg text-zwart/70 leading-relaxed mb-8 sm:mb-10 max-w-xl mx-auto">
                Boek een gratis en vrijblijvend consult. Samen bespreken we jouw wensen en stellen we een persoonlijk behandelplan op voor zichtbaar resultaat.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="inline-flex items-center justify-center bg-zwart text-creme px-8 py-4 rounded-full text-sm font-semibold hover:bg-roze-dark transition-colors">
                    Boek een gratis consult
                </a>
                <a href="{{ route('cryolipolyse') }}" class="inline-flex items-center justify-center border border-zwart/15 text-zwart px-8 py-4 rounded-full text-sm font-semibold hover:border-zwart/30 hover:text-roze-dark transition-colors">
                    Bekijk cryolipolyse
                </a>
            </div>
        </div>
    </section>
@endsection
