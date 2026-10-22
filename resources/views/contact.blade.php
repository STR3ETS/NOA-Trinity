@extends('layouts.app')

@section('title', 'Contact & afspraak maken | N.O.A Trinity Leeuwarden')
@section('meta_description', 'Neem contact op met N.O.A Trinity in Leeuwarden voor vragen over cryolipolyse, body sculpting of laserontharen, of plan direct een gratis consult in.')
@section('breadcrumb', 'Contact')

@section('content')

    {{-- ============================================ --}}
    {{-- HERO — subpagina stijl, tekst + blobs --}}
    {{-- ============================================ --}}
    <section class="relative overflow-hidden bg-gradient-to-br from-creme via-roze-light/30 to-creme pt-32 sm:pt-40 pb-16 sm:pb-24">
        {{-- Decoratieve blur blobs --}}
        <div class="absolute top-16 left-[20%] w-64 h-64 bg-roze/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-[20%] w-56 h-56 bg-lavendel/15 rounded-full blur-3xl"></div>
        <div class="absolute top-1/3 right-[10%] w-24 h-24 bg-roze-light/30 rounded-full blur-2xl"></div>

        {{-- Decoratieve SVG blobs --}}
        <svg class="absolute -bottom-14 -right-14 w-64 h-64 opacity-10 sm:opacity-15" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <path fill="#EFD3D7" d="M44.4,-63C56.5,-52.4,64.6,-38,67.2,-23.4C69.9,-8.7,67.2,6.1,64.4,22.8C61.6,39.5,58.6,58.1,47.9,69.8C37.1,81.6,18.6,86.6,1.5,84.5C-15.5,82.4,-31,73.2,-44.1,62.2C-57.2,51.2,-68,38.4,-75.4,22.8C-82.8,7.2,-86.8,-11.1,-78.9,-22.6C-71,-34.1,-51.2,-38.6,-36.1,-48.3C-20.9,-58,-10.5,-72.8,2.8,-76.7C16.2,-80.6,32.3,-73.7,44.4,-63Z" transform="translate(100 100)" />
        </svg>
        <svg class="absolute -top-8 -left-8 w-44 h-44 opacity-8" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <path fill="#8E9AAF" d="M44.4,-63C56.5,-52.4,64.6,-38,67.2,-23.4C69.9,-8.7,67.2,6.1,64.4,22.8C61.6,39.5,58.6,58.1,47.9,69.8C37.1,81.6,18.6,86.6,1.5,84.5C-15.5,82.4,-31,73.2,-44.1,62.2C-57.2,51.2,-68,38.4,-75.4,22.8C-82.8,7.2,-86.8,-11.1,-78.9,-22.6C-71,-34.1,-51.2,-38.6,-36.1,-48.3C-20.9,-58,-10.5,-72.8,2.8,-76.7C16.2,-80.6,32.3,-73.7,44.4,-63Z" transform="translate(100 100)" />
        </svg>

        <div class="relative z-10 max-w-[1400px] mx-auto px-6 lg:px-8 text-center">
            <p class="reveal text-roze-dark text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Contact</p>
            <h1 class="reveal font-serif text-4xl sm:text-5xl md:text-6xl font-bold leading-tight mb-6">
                Neem contact<br>
                <span class="text-roze-dark">met ons op</span>
            </h1>
            <p class="reveal text-base sm:text-lg md:text-xl text-zwart/70 leading-relaxed max-w-2xl mx-auto">
                Heb je een vraag over cryolipolyse, body sculpting of laserontharen? Stuur een bericht, wij helpen je graag verder. Een afspraak maken doe je direct online.
            </p>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- CONTACTFORMULIER + INFO --}}
    {{-- ============================================ --}}
    <section class="bg-white py-16 sm:py-24 lg:py-32">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-5 gap-12 lg:gap-16">

                {{-- Linker kolom: Contactformulier --}}
                <div class="lg:col-span-3 reveal">
                    <div class="bg-creme/30 rounded-2xl p-6 sm:p-8 lg:p-10">
                        <h2 class="font-serif text-2xl sm:text-3xl font-bold text-zwart mb-2">Stuur ons een bericht</h2>
                        <p class="text-zwart/60 text-sm mb-8">Vul het onderstaande formulier in en wij nemen zo snel mogelijk contact met je op.</p>

                        @if(session('success'))
                            <div class="mb-6 bg-green-50 border border-green-200 text-green-800 px-5 py-4 rounded-xl text-sm">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                            @csrf

                            {{-- Naam --}}
                            <div>
                                <label for="naam" class="block text-sm font-semibold text-zwart mb-2">Naam</label>
                                <input
                                    type="text"
                                    id="naam"
                                    name="naam"
                                    value="{{ old('naam') }}"
                                    required
                                    placeholder="Je volledige naam"
                                    class="w-full px-5 py-3.5 rounded-xl border border-zwart/10 bg-creme/50 text-zwart placeholder:text-zwart/40 focus:outline-none focus:border-roze-dark focus:ring-1 focus:ring-roze-dark transition-colors text-sm"
                                >
                                @error('naam') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>

                            {{-- E-mailadres --}}
                            <div>
                                <label for="email" class="block text-sm font-semibold text-zwart mb-2">E-mailadres</label>
                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    required
                                    placeholder="je@email.nl"
                                    class="w-full px-5 py-3.5 rounded-xl border border-zwart/10 bg-creme/50 text-zwart placeholder:text-zwart/40 focus:outline-none focus:border-roze-dark focus:ring-1 focus:ring-roze-dark transition-colors text-sm"
                                >
                                @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>

                            {{-- Telefoonnummer --}}
                            <div>
                                <label for="telefoon" class="block text-sm font-semibold text-zwart mb-2">Telefoonnummer <span class="text-zwart/40 font-normal">(optioneel)</span></label>
                                <input
                                    type="tel"
                                    id="telefoon"
                                    name="telefoon"
                                    value="{{ old('telefoon') }}"
                                    placeholder="+31 6 00 00 00 00"
                                    class="w-full px-5 py-3.5 rounded-xl border border-zwart/10 bg-creme/50 text-zwart placeholder:text-zwart/40 focus:outline-none focus:border-roze-dark focus:ring-1 focus:ring-roze-dark transition-colors text-sm"
                                >
                                @error('telefoon') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>

                            {{-- Behandeling --}}
                            <div>
                                <label for="behandeling" class="block text-sm font-semibold text-zwart mb-2">Behandeling</label>
                                <select
                                    id="behandeling"
                                    name="behandeling"
                                    class="w-full px-5 py-3.5 rounded-xl border border-zwart/10 bg-creme/50 text-zwart placeholder:text-zwart/40 focus:outline-none focus:border-roze-dark focus:ring-1 focus:ring-roze-dark transition-colors text-sm appearance-none"
                                    style="background-image: url(&quot;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%230A0908' stroke-width='2'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' d='M19 9l-7 7-7-7'/%3E%3C/svg%3E&quot;); background-repeat: no-repeat; background-position: right 1.25rem center; background-size: 1rem;"
                                >
                                    @php($gekozenBehandeling = old('behandeling', request('behandeling')))
                                    <option value="">Selecteer een behandeling</option>
                                    <option value="cryolipolyse" {{ $gekozenBehandeling === 'cryolipolyse' ? 'selected' : '' }}>Cryolipolyse</option>
                                    <option value="body-sculpting" {{ $gekozenBehandeling === 'body-sculpting' ? 'selected' : '' }}>Body Sculpting</option>
                                    <option value="laserontharen" {{ $gekozenBehandeling === 'laserontharen' ? 'selected' : '' }}>Diode Laser – Laserontharen</option>
                                    <option value="combinatie" {{ $gekozenBehandeling === 'combinatie' ? 'selected' : '' }}>Combinatie behandeling</option>
                                    <option value="gratis-consult" {{ $gekozenBehandeling === 'gratis-consult' ? 'selected' : '' }}>Gratis consult</option>
                                    <option value="anders" {{ $gekozenBehandeling === 'anders' ? 'selected' : '' }}>Anders</option>
                                </select>
                                @error('behandeling') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>

                            {{-- Bericht --}}
                            <div>
                                <label for="bericht" class="block text-sm font-semibold text-zwart mb-2">Bericht</label>
                                <textarea
                                    id="bericht"
                                    name="bericht"
                                    rows="5"
                                    required
                                    placeholder="Vertel ons waar we je mee kunnen helpen..."
                                    class="w-full px-5 py-3.5 rounded-xl border border-zwart/10 bg-creme/50 text-zwart placeholder:text-zwart/40 focus:outline-none focus:border-roze-dark focus:ring-1 focus:ring-roze-dark transition-colors text-sm resize-none"
                                >{{ old('bericht') }}</textarea>
                                @error('bericht') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>

                            {{-- Captcha --}}
                            <div>
                                <label for="captcha" class="block text-sm font-semibold text-zwart mb-2">Beveiligingsvraag</label>
                                <div class="flex items-center gap-4">
                                    <span class="text-sm text-zwart/70 font-medium shrink-0">Wat is {{ session('captcha_a', '?') }} + {{ session('captcha_b', '?') }}?</span>
                                    <input
                                        type="number"
                                        id="captcha"
                                        name="captcha"
                                        required
                                        placeholder="Antwoord"
                                        class="w-28 px-5 py-3.5 rounded-xl border border-zwart/10 bg-creme/50 text-zwart placeholder:text-zwart/40 focus:outline-none focus:border-roze-dark focus:ring-1 focus:ring-roze-dark transition-colors text-sm"
                                    >
                                </div>
                                @error('captcha') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>

                            {{-- Privacy checkbox --}}
                            <div>
                                <label class="flex items-start gap-3 cursor-pointer">
                                    <input
                                        type="checkbox"
                                        name="privacy"
                                        value="1"
                                        {{ old('privacy') ? 'checked' : '' }}
                                        required
                                        class="mt-0.5 w-4 h-4 rounded border-zwart/20 text-roze-dark focus:ring-roze-dark focus:ring-offset-0"
                                    >
                                    <span class="text-sm text-zwart/60 leading-relaxed">
                                        Ik ga akkoord met de <a href="{{ route('privacyverklaring') }}" target="_blank" class="text-roze-dark underline underline-offset-2 hover:text-zwart transition-colors">privacyverklaring</a> en geef toestemming voor het verwerken van mijn gegevens.
                                    </span>
                                </label>
                                @error('privacy') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>

                            {{-- Verzenden --}}
                            <div>
                                <button
                                    type="submit"
                                    class="w-full bg-zwart text-creme px-7 py-3.5 rounded-full text-sm font-semibold hover:bg-roze-dark transition-colors"
                                >
                                    Verstuur bericht
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                {{-- Rechter kolom: Afspraak + Contactgegevens + Openingstijden --}}
                <div class="lg:col-span-2 space-y-6">

                    {{-- Direct een afspraak maken --}}
                    @if($settings->booking_url)
                        <div class="reveal bg-zwart text-white rounded-2xl p-6 sm:p-8">
                            <p class="text-roze text-xs tracking-[0.3em] uppercase mb-3 font-semibold">Direct een afspraak maken?</p>
                            <h3 class="font-serif text-xl sm:text-2xl font-bold mb-3">Plan je afspraak online</h3>
                            <p class="text-sm text-white/60 leading-relaxed mb-6">
                                Kies zelf een moment dat jou uitkomt in de online agenda. Je ontvangt direct een bevestiging.
                            </p>
                            <x-afspraak-link class="inline-flex items-center gap-2 bg-creme text-zwart px-7 py-3.5 rounded-full text-sm font-semibold hover:bg-roze transition-colors">
                                Naar de online agenda
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </x-afspraak-link>
                        </div>
                    @endif

                    {{-- Contactgegevens --}}
                    <div class="reveal reveal-delay-1 bg-creme/30 rounded-2xl p-6 sm:p-8">
                        <h3 class="font-serif text-xl sm:text-2xl font-bold text-zwart mb-6">Contactgegevens</h3>
                        <ul class="space-y-5">
                            {{-- Adres --}}
                            <li class="flex items-start gap-4">
                                <div class="w-10 h-10 bg-roze-light rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                    <svg class="w-5 h-5 text-roze-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-zwart">Adres</p>
                                    <p class="text-sm text-zwart/60 mt-0.5">{{ $settings->adres }}<br>{{ $settings->postcode_stad }}</p>
                                </div>
                            </li>

                            {{-- Telefoon --}}
                            <li class="flex items-start gap-4">
                                <div class="w-10 h-10 bg-roze-light rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                    <svg class="w-5 h-5 text-roze-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-zwart">Telefoon</p>
                                    <a href="tel:{{ $settings->telefoon_link }}" class="text-sm text-zwart/60 hover:text-roze-dark transition-colors mt-0.5 block">{{ $settings->telefoon }}</a>
                                </div>
                            </li>

                            {{-- E-mail --}}
                            <li class="flex items-start gap-4">
                                <div class="w-10 h-10 bg-roze-light rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                    <svg class="w-5 h-5 text-roze-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-zwart">E-mail</p>
                                    <a href="mailto:{{ $settings->email }}" class="text-sm text-zwart/60 hover:text-roze-dark transition-colors mt-0.5 block">{{ $settings->email }}</a>
                                </div>
                            </li>
                        </ul>
                    </div>

                    {{-- Openingstijden --}}
                    <div class="reveal reveal-delay-2 bg-creme/30 rounded-2xl p-6 sm:p-8">
                        <h3 class="font-serif text-xl sm:text-2xl font-bold text-zwart mb-6">Openingstijden</h3>
                        <ul class="space-y-3">
                            @include('partials.openingstijden', ['itemClass' => 'flex justify-between items-center gap-4 text-sm', 'labelClass' => 'text-zwart font-medium', 'tijdClass' => 'text-zwart/60 text-right'])
                        </ul>
                    </div>

                    {{-- Social media --}}
                    <div class="reveal reveal-delay-3 flex items-center gap-4">
                        @include('partials.social-links', ['linkClass' => 'w-12 h-12 bg-roze-light rounded-full flex items-center justify-center hover:bg-roze transition-colors text-roze-dark hover:text-zwart', 'iconClass' => 'w-5 h-5'])
                    </div>

                </div>

            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- GOOGLE MAPS --}}
    {{-- ============================================ --}}
    <section class="bg-creme py-16 sm:py-24 lg:py-32">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-8">

            {{-- Sectie header --}}
            <div class="text-center mb-12 reveal">
                <p class="text-roze-dark text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Locatie</p>
                <h2 class="font-serif text-3xl sm:text-4xl md:text-5xl font-bold text-zwart">Waar je ons vindt</h2>
            </div>

            {{-- Kaart placeholder --}}
            <div class="reveal reveal-delay-1 bg-zwart/5 rounded-2xl aspect-[16/9] flex items-center justify-center">
                <div class="text-center">
                    <svg class="w-12 h-12 text-zwart/20 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    <p class="text-zwart/40 text-sm font-medium">Kaart wordt binnenkort toegevoegd</p>
                </div>
            </div>

            {{-- Adres + Route plannen --}}
            <div class="reveal reveal-delay-2 mt-8 text-center">
                <p class="text-zwart/60 text-sm mb-4">{{ $settings->adres }}, {{ $settings->postcode_stad }}</p>
                <a
                    href="https://www.google.com/maps/search/?api=1&query={{ urlencode($settings->adres.', '.$settings->postcode_stad) }}"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="inline-flex items-center gap-2 bg-zwart text-creme px-7 py-3.5 rounded-full text-sm font-semibold hover:bg-roze-dark transition-colors"
                >
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    Route plannen
                </a>
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
                Ontdek onze behandelingen
            </h2>
            <p class="text-base sm:text-lg text-zwart/70 leading-relaxed mb-8 sm:mb-10 max-w-xl mx-auto">
                Benieuwd wat cryolipolyse, body sculpting of laserontharen voor jou kan doen? Bekijk de behandelingen en ontdek wat bij jouw doelen past.
            </p>
            <div class="flex flex-col sm:flex-row flex-wrap gap-4 justify-center">
                <a href="{{ route('cryolipolyse') }}" class="inline-flex items-center justify-center bg-zwart text-creme px-8 py-4 rounded-full text-sm font-semibold hover:bg-roze-dark transition-colors">
                    Cryolipolyse bekijken
                </a>
                <a href="{{ route('body-sculpting') }}" class="inline-flex items-center justify-center border border-zwart/15 text-zwart px-8 py-4 rounded-full text-sm font-semibold hover:border-zwart/30 hover:text-roze-dark transition-colors">
                    Body Sculpting bekijken
                </a>
                <a href="{{ route('laserontharen') }}" class="inline-flex items-center justify-center border border-zwart/15 text-zwart px-8 py-4 rounded-full text-sm font-semibold hover:border-zwart/30 hover:text-roze-dark transition-colors">
                    Laserontharen bekijken
                </a>
            </div>
        </div>
    </section>
@endsection
