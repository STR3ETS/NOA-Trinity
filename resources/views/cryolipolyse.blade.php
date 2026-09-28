@extends('layouts.app')

@section('title', 'Cryolipolyse (vetbevriezen) in Leeuwarden | N.O.A Trinity')
@section('meta_description', 'Cryolipolyse in Leeuwarden: plaatselijke vetophopingen gecontroleerd koelen met de Body-Wizard Duo. Geen operatie of naalden. Plan een gratis consult.')
@section('meta_keywords', 'cryolipolyse, cryolipolyse Leeuwarden, vetbevriezen, vet bevriezen, Body-Wizard Duo, MedCos, lokaal vet, lichaamscontouren')
@section('breadcrumb', 'Cryolipolyse')
@section('dienst', 'Cryolipolyse (vetbevriezen)')
@section('og_image', asset('images/cryolipolyse/body-wizard-behandeling.jpg'))

@php
    $zones = [
        ['naam' => 'Kin', 'tekst' => 'Een kleine vetophoping onder de kin kan met een passende behandelkop gericht worden behandeld voor een strakker profiel.'],
        ['naam' => 'Armen', 'tekst' => 'Plaatselijk vet aan de bovenarmen, vaak een zone die lastig reageert op sporten alleen.'],
        ['naam' => 'Buik', 'tekst' => 'De meest gekozen zone: gericht werken aan een hardnekkig buikje boven of onder de navel.'],
        ['naam' => 'Taille & love handles', 'tekst' => 'De flanken en taille, waar vet zich bij veel mensen als eerste ophoopt.'],
        ['naam' => 'Billen', 'tekst' => 'Plaatselijke vetophopingen rond de billen, bijvoorbeeld onder de bilplooi.'],
        ['naam' => 'Bovenbenen', 'tekst' => 'De binnen- of buitenzijde van de bovenbenen, voor een meer gestroomlijnde beenlijn.'],
    ];

    $faqs = [
        ['vraag' => 'Is cryolipolyse pijnlijk?', 'antwoord' => 'De meeste mensen ervaren de behandeling als goed te doen. In de eerste minuten voel je kou en een zuigende druk op de huid. Dat gevoel neemt meestal snel af doordat het gebied door de kou wat verdooft. Daarna kun je ontspannen, lezen of op je telefoon kijken.'],
        ['vraag' => 'Hoe lang duurt een behandeling?', 'antwoord' => 'Een behandeling met de Body-Wizard Duo duurt ongeveer 45 minuten per plaatsing. Omdat meerdere zones tegelijk behandeld kunnen worden, blijft de totale behandeltijd vaak beperkt. Voor de eerste afspraak plannen we extra tijd in voor de intake.'],
        ['vraag' => 'Hoeveel behandelingen heb ik nodig?', 'antwoord' => 'Dat verschilt per persoon en hangt af van je lichaam, de zone, de uitgangssituatie en het resultaat dat je voor ogen hebt. Vaak werken we met een traject van meerdere behandelingen met ongeveer 8 weken ertussen. Tijdens de intake bespreken we wat bij jou past; een vast aantal voor iedereen beloof ik niet.'],
        ['vraag' => 'Wanneer zie ik resultaat?', 'antwoord' => 'Het resultaat ontstaat geleidelijk, omdat je lichaam de behandelde vetcellen in de weken na de behandeling op natuurlijke wijze afvoert. Het meest zichtbare resultaat ontstaat doorgaans na 2 tot 4 maanden. Hoe snel en hoeveel je ziet, verschilt per persoon.'],
        ['vraag' => 'Welke zones kunnen behandeld worden?', 'antwoord' => 'Onder andere de kin, armen, buik, taille en love handles, billen en bovenbenen. Welke zones voor jou geschikt zijn, hangt af van je persoonlijke situatie en het behandelprotocol en beoordelen we tijdens de intake.'],
        ['vraag' => 'Heb ik hersteltijd nodig?', 'antwoord' => 'Nee, je kunt direct na de behandeling weer verder met je dagelijkse bezigheden. Het behandelde gebied kan tijdelijk rood, gevoelig, wat gezwollen of tintelend aanvoelen. Welke reacties kunnen optreden en welke nazorg daarbij hoort, bespreken we vooraf.'],
        ['vraag' => 'Is cryolipolyse een manier om af te vallen?', 'antwoord' => 'Nee. Cryolipolyse is bedoeld voor plaatselijke lichaamscontouring: gericht werken aan lokale vetzones die lastig verdwijnen met voeding en beweging. Het is geen methode voor algemeen gewichtsverlies.'],
        ['vraag' => 'Blijft het resultaat behouden?', 'antwoord' => 'Een stabiel gewicht en een gezonde leefstijl helpen om het resultaat te behouden. Afhankelijk van onder andere je leefstijl kan een onderhoudsbehandeling, bijvoorbeeld eens per jaar, zinvol zijn. Dat bespreken we samen.'],
        ['vraag' => 'Voor wie is cryolipolyse niet geschikt?', 'antwoord' => 'Bijvoorbeeld tijdens zwangerschap of borstvoeding, bij aandoeningen waarbij je overgevoelig bent voor kou en bij wondjes of huidproblemen in het behandelgebied. Tijdens de intake lopen we het intakeformulier samen door en beoordeel ik of de behandeling veilig voor je is.'],
    ];
@endphp

@section('content')

    {{-- ============================================ --}}
    {{-- HERO — tekst + foto van de Body-Wizard --}}
    {{-- ============================================ --}}
    <section class="relative overflow-hidden bg-gradient-to-br from-creme via-roze-light/30 to-creme pt-32 sm:pt-40 pb-16 sm:pb-24">
        {{-- Decoratieve blur blobs --}}
        <div class="absolute top-16 right-[10%] w-64 h-64 bg-roze/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-[5%] w-48 h-48 bg-lavendel/15 rounded-full blur-3xl"></div>

        <svg class="absolute -top-10 -left-10 w-48 h-48 opacity-8" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <path fill="#8E9AAF" d="M44.4,-63C56.5,-52.4,64.6,-38,67.2,-23.4C69.9,-8.7,67.2,6.1,64.4,22.8C61.6,39.5,58.6,58.1,47.9,69.8C37.1,81.6,18.6,86.6,1.5,84.5C-15.5,82.4,-31,73.2,-44.1,62.2C-57.2,51.2,-68,38.4,-75.4,22.8C-82.8,7.2,-86.8,-11.1,-78.9,-22.6C-71,-34.1,-51.2,-38.6,-36.1,-48.3C-20.9,-58,-10.5,-72.8,2.8,-76.7C16.2,-80.6,32.3,-73.7,44.4,-63Z" transform="translate(100 100)" />
        </svg>

        <div class="relative z-10 max-w-[1400px] mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

                <div class="text-center lg:text-left">
                    <p class="reveal text-roze-dark text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Cryolipolyse</p>
                    <h1 class="reveal font-serif text-4xl sm:text-5xl md:text-6xl font-bold leading-tight mb-6">
                        Vetbevriezen met<br>
                        <span class="text-roze-dark">de Body Wizard</span>
                    </h1>
                    <p class="reveal text-base sm:text-lg md:text-xl text-zwart/70 leading-relaxed max-w-xl mx-auto lg:mx-0 mb-8 sm:mb-10">
                        Gericht werken aan plaatselijke vetophopingen, zonder operatie en zonder naalden. Bij N.O.A Trinity behandel ik met de Body-Wizard Duo van MedCos — altijd na een persoonlijke intake.
                    </p>
                    <div class="reveal flex flex-col sm:flex-row gap-4 justify-center lg:justify-start mb-8">
                        <a href="{{ route('contact', ['behandeling' => 'cryolipolyse']) }}" class="inline-flex items-center justify-center bg-zwart text-creme px-8 py-4 rounded-full text-sm font-semibold hover:bg-roze-dark transition-colors">
                            Boek een gratis consult
                        </a>
                        <a href="#wat-is-cryolipolyse" class="inline-flex items-center justify-center border border-zwart/15 text-zwart px-8 py-4 rounded-full text-sm font-semibold hover:border-zwart/30 hover:text-roze-dark transition-colors">
                            Lees meer
                        </a>
                    </div>
                    <ul class="reveal flex flex-wrap gap-2 justify-center lg:justify-start">
                        @foreach(['Geen operatie', 'Geen naalden', 'Geen hersteltijd'] as $kenmerk)
                            <li class="inline-flex items-center gap-2 bg-white/80 rounded-full px-4 py-2 text-sm font-semibold text-zwart/80">
                                <svg class="w-4 h-4 text-roze-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                                </svg>
                                {{ $kenmerk }}
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="reveal relative w-full max-w-md mx-auto">
                    <div class="absolute -top-6 -right-6 w-24 h-24 bg-roze/40 rounded-full animate-float-slow"></div>
                    <div class="absolute -bottom-8 -left-8 w-32 h-32 bg-lavendel/15 rounded-full animate-float-delay"></div>
                    <div class="relative aspect-[4/5] rounded-[60%_40%_55%_45%/45%_55%_45%_55%] overflow-hidden shadow-lg">
                        <img src="/images/cryolipolyse/body-wizard-duo.jpg" alt="De Body-Wizard Duo van MedCos voor cryolipolyse" class="w-full h-full object-cover" loading="eager" fetchpriority="high">
                    </div>
                    <div class="absolute bottom-4 -left-2 sm:left-0 bg-white rounded-2xl px-5 py-4 shadow-lg">
                        <p class="font-serif font-bold text-sm">Body-Wizard Duo</p>
                        <p class="text-xs text-zwart/50">Professionele cryolipolyse van MedCos</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- WAT IS CRYOLIPOLYSE — split layout --}}
    {{-- ============================================ --}}
    <section id="wat-is-cryolipolyse" class="py-16 sm:py-24 lg:py-32 bg-white scroll-mt-20">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-center">

                <div class="reveal-left relative">
                    <div class="aspect-[4/3] rounded-3xl overflow-hidden">
                        <img src="/images/cryolipolyse/cryo-applicator.jpg" alt="Applicator van de Body-Wizard Duo op het bovenbeen" class="w-full h-full object-cover" loading="lazy">
                    </div>
                    <div class="absolute -bottom-6 -right-6 w-48 h-48 bg-roze-light/30 rounded-2xl -z-10"></div>
                </div>

                <div class="reveal-right">
                    <p class="text-roze-dark text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Wat is cryolipolyse?</p>
                    <h2 class="font-serif text-3xl sm:text-4xl md:text-5xl font-bold mb-6">
                        Plaatselijk vet gecontroleerd koelen
                    </h2>
                    <div class="w-16 h-0.5 bg-roze mb-8"></div>
                    <p class="text-lg text-zwart/70 leading-relaxed mb-6">
                        Cryolipolyse, ook wel vetbevriezen genoemd, is een niet-chirurgische techniek voor plaatselijke lichaamscontouring. Via een applicator wordt het onderhuidse vetweefsel in de behandelzone nauwkeurig en gecontroleerd gekoeld, zonder de huid te beschadigen.
                    </p>
                    <p class="text-lg text-zwart/70 leading-relaxed mb-8">
                        Vetcellen zijn gevoeliger voor kou dan het omliggende weefsel. Door de koeling wordt een natuurlijk proces in gang gezet waarbij je lichaam de behandelde vetcellen in de weken daarna geleidelijk afvoert. Zo wordt de vetlaag in het behandelde gebied stap voor stap dunner.
                    </p>

                    <div class="flex gap-4 bg-roze-light/50 rounded-2xl p-5 sm:p-6">
                        <svg class="w-6 h-6 text-roze-dark shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <p class="text-sm text-zwart/70 leading-relaxed">
                            <strong class="text-zwart">Goed om te weten:</strong> cryolipolyse is géén methode om af te vallen. De behandeling is bedoeld om gericht te werken aan lokale vetzones en lichaamscontouren, niet voor algemeen gewichtsverlies.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- HOE VERLOOPT DE BEHANDELING — stappen --}}
    {{-- ============================================ --}}
    <section class="py-16 sm:py-24 lg:py-32 bg-creme">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-5 gap-10 lg:gap-16">

                <div class="reveal-left lg:col-span-2 lg:sticky lg:top-32 lg:self-start">
                    <p class="text-roze-dark text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Het proces</p>
                    <h2 class="font-serif text-3xl sm:text-4xl md:text-5xl font-bold mb-6">Hoe verloopt de behandeling?</h2>
                    <p class="text-zwart/60 text-lg leading-relaxed mb-8">
                        Van intake tot nazorg: je weet vooraf precies wat je kunt verwachten.
                    </p>
                    <div class="hidden lg:block aspect-[3/2] rounded-3xl overflow-hidden">
                        <img src="/images/cryolipolyse/body-wizard-behandeling.jpg" alt="Behandeling met de Body-Wizard Duo" class="w-full h-full object-cover" loading="lazy">
                    </div>
                </div>

                <ol class="lg:col-span-3 space-y-6">
                    @foreach([
                        ['titel' => 'Persoonlijke intake', 'tekst' => 'We bespreken je wensen, je gezondheid en je verwachtingen. Aan de hand van het intakeformulier beoordeel ik of cryolipolyse veilig en geschikt voor je is.'],
                        ['titel' => 'Beoordeling van de behandelzone', 'tekst' => 'Samen bekijken we de zone(s) die je wilt laten behandelen en bepalen we welke behandelkop het beste past bij de vorm van het gebied.'],
                        ['titel' => 'Huid beschermen en applicator plaatsen', 'tekst' => 'De huid in het behandelgebied wordt beschermd, waarna de applicator op de zone wordt geplaatst.'],
                        ['titel' => 'Gecontroleerd koelen', 'tekst' => 'Het gebied wordt gecontroleerd gekoeld. In het begin voel je kou en een zuigend gevoel; dat went meestal snel. Ondertussen kun je ontspannen, lezen of op je telefoon kijken.'],
                        ['titel' => 'Afronding en nazorg', 'tekst' => 'Na de behandeling bespreken we de nazorg en wat je de komende weken kunt verwachten. Je kunt direct weer verder met je dagelijkse bezigheden.'],
                    ] as $stap)
                        <li class="reveal flex gap-5 sm:gap-6 bg-white rounded-2xl p-6 sm:p-8 shadow-sm">
                            <span class="font-serif text-3xl sm:text-4xl font-bold text-roze-dark/40 shrink-0 w-12">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                            <div>
                                <h3 class="font-serif text-xl font-bold mb-2">{{ $stap['titel'] }}</h3>
                                <p class="text-zwart/60 leading-relaxed">{{ $stap['tekst'] }}</p>
                            </div>
                        </li>
                    @endforeach
                </ol>

            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- VOOR WIE / NIET GESCHIKT --}}
    {{-- ============================================ --}}
    <section class="py-16 sm:py-24 lg:py-32 bg-white">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-8">

            <div class="reveal max-w-2xl mb-10 sm:mb-16">
                <p class="text-roze-dark text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Geschiktheid</p>
                <h2 class="font-serif text-3xl sm:text-4xl md:text-5xl font-bold mb-4">Past cryolipolyse bij jou?</h2>
                <p class="text-zwart/60 text-lg leading-relaxed">
                    Of de behandeling bij je past, beoordelen we altijd samen tijdens de intake. Hieronder vind je alvast een eerste indicatie.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-6 lg:gap-8">

                {{-- Voor wie geschikt --}}
                <div class="reveal reveal-delay-1 bg-creme rounded-2xl p-6 sm:p-8 lg:p-10">
                    <h3 class="font-serif text-2xl font-bold mb-6">Voor wie is de behandeling geschikt?</h3>
                    <ul class="space-y-4">
                        @foreach([
                            'Je wilt gericht werken aan plaatselijke vetophopingen die lastig verdwijnen met voeding en beweging alleen.',
                            'Je wilt je lichaamscontouren verfijnen, bijvoorbeeld rond buik, taille of bovenbenen.',
                            'Je zit rond een stabiel gewicht en hebt een gezonde, actieve leefstijl (of werkt eraan).',
                            'Je zoekt een niet-invasieve behandeling en hebt realistische verwachtingen over het resultaat.',
                        ] as $punt)
                            <li class="flex items-start gap-3">
                                <span class="w-6 h-6 bg-roze rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                    <svg class="w-3.5 h-3.5 text-zwart" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                                    </svg>
                                </span>
                                <span class="text-zwart/70 leading-relaxed">{{ $punt }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>

                {{-- Contra-indicaties — controleren tegen het officiële MedCos-behandelprotocol en intakeformulier --}}
                <div class="reveal reveal-delay-2 bg-zwart text-white rounded-2xl p-6 sm:p-8 lg:p-10">
                    <h3 class="font-serif text-2xl font-bold mb-6">Wanneer is de behandeling niet geschikt?</h3>
                    <ul class="space-y-4">
                        @foreach([
                            'Tijdens zwangerschap of borstvoeding.',
                            'Bij aandoeningen waarbij je overgevoelig bent voor kou, zoals cryoglobulinemie, koude-urticaria of paroxismale koude-hemoglobinurie.',
                            'Bij wondjes, ontstekingen, huidaandoeningen of recente littekens in het behandelgebied.',
                            'Bij een breuk (hernia) of een recente operatie in of rond het behandelgebied.',
                            'Bij verminderde gevoeligheid of doorbloeding van de huid in het behandelgebied.',
                        ] as $punt)
                            <li class="flex items-start gap-3">
                                <span class="w-6 h-6 bg-white/10 rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                    <svg class="w-3.5 h-3.5 text-roze" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"/>
                                    </svg>
                                </span>
                                <span class="text-white/80 leading-relaxed">{{ $punt }}</span>
                            </li>
                        @endforeach
                    </ul>
                    <p class="mt-8 text-sm text-white/50 leading-relaxed">
                        Dit overzicht is niet volledig. De definitieve beoordeling gebeurt aan de hand van het behandelprotocol en het intakeformulier. Twijfel je over je gezondheid? Overleg dan vooraf met je (huis)arts.
                    </p>
                </div>

            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- BEHANDELZONES --}}
    {{-- ============================================ --}}
    <section class="py-16 sm:py-24 lg:py-32 bg-creme">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-8">

            <div class="reveal max-w-2xl mb-10 sm:mb-16">
                <p class="text-roze-dark text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Behandelzones</p>
                <h2 class="font-serif text-3xl sm:text-4xl md:text-5xl font-bold mb-4">Welke zones kunnen behandeld worden?</h2>
                <p class="text-zwart/60 text-lg leading-relaxed">
                    Afhankelijk van je persoonlijke situatie en het behandelprotocol kunnen onder andere deze zones worden behandeld.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($zones as $zone)
                    <div class="reveal reveal-delay-{{ $loop->index % 3 + 1 }} bg-white rounded-2xl p-6 sm:p-8 shadow-sm hover:shadow-lg transition-shadow duration-300">
                        <div class="flex items-start gap-5">
                            <div class="w-14 h-14 bg-roze-light rounded-2xl flex items-center justify-center shrink-0">
                                <span class="font-serif text-lg font-bold text-roze-dark">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                            </div>
                            <div>
                                <h3 class="font-serif text-lg font-bold mb-2">{{ $zone['naam'] }}</h3>
                                <p class="text-sm text-zwart/60 leading-relaxed">{{ $zone['tekst'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- BODY-WIZARD DUO VAN MEDCOS --}}
    {{-- Alleen claims uit de officiële MedCos-informatie; temperaturen/certificeringen/percentages pas na controle toevoegen. --}}
    {{-- ============================================ --}}
    <section class="py-16 sm:py-24 lg:py-32 bg-roze-light/40 overflow-hidden">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-center">

                <div class="reveal-left grid grid-cols-2 gap-4">
                    <div class="aspect-[3/4] rounded-2xl overflow-hidden bg-white">
                        <img src="/images/cryolipolyse/body-wizard-duo.jpg" alt="Body-Wizard Duo met vier behandelkoppen" class="w-full h-full object-cover" loading="lazy">
                    </div>
                    <div class="aspect-[3/4] rounded-2xl overflow-hidden bg-white mt-10">
                        <img src="/images/cryolipolyse/body-wizard-duo-apparatuur.jpg" alt="Body-Wizard Duo apparatuur van MedCos" class="w-full h-full object-contain p-4" loading="lazy">
                    </div>
                </div>

                <div class="reveal-right">
                    <p class="text-roze-dark text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Mijn apparatuur</p>
                    <h2 class="font-serif text-3xl sm:text-4xl md:text-5xl font-bold mb-6">Body-Wizard Duo van MedCos</h2>
                    <div class="w-16 h-0.5 bg-roze-dark/40 mb-8"></div>
                    <p class="text-lg text-zwart/70 leading-relaxed mb-8">
                        Ik werk met de Body-Wizard Duo: professionele cryolipolyse-apparatuur van MedCos Skinsolutions, ontwikkeld voor niet-invasieve lichaamsbehandelingen in salons en huidinstituten.
                    </p>
                    <ul class="space-y-4 mb-8">
                        @foreach([
                            ['titel' => '360-graden Peltier-koeling', 'tekst' => 'voor een gelijkmatige, gecontroleerde koeling van de behandelzone.'],
                            ['titel' => 'Vier verschillende behandelkoppen', 'tekst' => 'zodat de applicator past bij de vorm en grootte van de zone.'],
                            ['titel' => 'Meerdere zones tegelijk', 'tekst' => 'de Duo maakt tot vier plaatsingen tegelijk mogelijk.'],
                        ] as $kenmerk)
                            <li class="flex items-start gap-3">
                                <span class="w-6 h-6 bg-white rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                    <svg class="w-3.5 h-3.5 text-roze-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                                    </svg>
                                </span>
                                <p class="text-zwart/70 leading-relaxed"><strong class="text-zwart">{{ $kenmerk['titel'] }}</strong> — {{ $kenmerk['tekst'] }}</p>
                            </li>
                        @endforeach
                    </ul>
                    <p class="text-zwart/70 leading-relaxed">
                        Goede apparatuur is één kant van het verhaal. Iedere behandeling wordt daarom voorafgegaan door een persoonlijke intake en individueel advies.
                    </p>
                </div>

            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- PRAKTISCH — duur, aantal, resultaat, na de behandeling --}}
    {{-- ============================================ --}}
    <section class="py-16 sm:py-24 lg:py-32 bg-white">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-8">

            <div class="reveal max-w-2xl mb-10 sm:mb-16">
                <p class="text-roze-dark text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Praktisch</p>
                <h2 class="font-serif text-3xl sm:text-4xl md:text-5xl font-bold mb-4">Wat kun je verwachten?</h2>
                <p class="text-zwart/60 text-lg leading-relaxed">
                    Iedereen reageert anders op een behandeling. Daarom beloof ik geen vaste uitkomsten, maar geef ik je wel een eerlijk beeld.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-6 lg:gap-8">
                @foreach([
                    ['label' => 'Duur', 'titel' => 'Hoe lang duurt een behandeling?', 'tekst' => 'Ongeveer 45 minuten per plaatsing. Omdat de Body-Wizard Duo meerdere zones tegelijk kan behandelen, blijft de totale tijd vaak beperkt. Voor de eerste afspraak plannen we extra tijd in voor de intake.'],
                    ['label' => 'Traject', 'titel' => 'Hoeveel behandelingen zijn nodig?', 'tekst' => 'Dat hangt af van je lichaam, de zone, de uitgangssituatie en het gewenste resultaat. Vaak werken we met meerdere behandelingen met ongeveer 8 weken ertussen, zodat je lichaam de tijd krijgt. Tijdens de intake bespreken we wat bij jou past.'],
                    ['label' => 'Resultaat', 'titel' => 'Wanneer zie je resultaat?', 'tekst' => 'Het resultaat ontstaat geleidelijk, omdat je lichaam de behandelde vetcellen in de weken na de behandeling op natuurlijke wijze afvoert. Het meest zichtbare resultaat ontstaat doorgaans na 2 tot 4 maanden en verschilt per persoon.'],
                    ['label' => 'Nazorg', 'titel' => 'Wat kun je na de behandeling verwachten?', 'tekst' => 'Het gebied kan tijdelijk rood, gevoelig, wat gezwollen of tintelend aanvoelen. Deze reacties trekken vanzelf weg en je kunt direct weer verder met je dag. Welke reacties kunnen optreden en welke nazorg daarbij hoort, bespreken we vooraf.'],
                ] as $item)
                    <div class="reveal reveal-delay-{{ $loop->index % 2 + 1 }} bg-creme rounded-2xl p-6 sm:p-8 lg:p-10">
                        <p class="text-xs text-roze-dark font-semibold tracking-widest uppercase mb-2">{{ $item['label'] }}</p>
                        <h3 class="font-serif text-xl sm:text-2xl font-bold mb-3">{{ $item['titel'] }}</h3>
                        <p class="text-zwart/60 leading-relaxed">{{ $item['tekst'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- RESULTATEN — eigen voor & na in de galerij --}}
    {{-- ============================================ --}}
    <section class="py-16 sm:py-24 bg-creme">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-8">
            <div class="reveal bg-white rounded-3xl p-8 sm:p-12 lg:p-16 grid lg:grid-cols-3 gap-8 items-center">
                <div class="lg:col-span-2">
                    <p class="text-roze-dark text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Voor & na</p>
                    <h2 class="font-serif text-3xl sm:text-4xl font-bold mb-4">Resultaten van mijn klanten</h2>
                    <p class="text-zwart/60 text-lg leading-relaxed">
                        In de galerij deel ik voor- en na-foto's van mijn eigen klanten — uitsluitend met hun toestemming. Resultaten verschillen per persoon en zijn geen garantie voor jouw resultaat.
                    </p>
                </div>
                <div class="lg:text-right">
                    <a href="{{ route('gallerij', ['type' => 'cryolipolyse']) }}" class="inline-flex items-center justify-center gap-2 bg-zwart text-creme px-7 py-3.5 rounded-full text-sm font-semibold hover:bg-roze-dark transition-colors">
                        Bekijk de galerij
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- FAQ --}}
    {{-- ============================================ --}}
    <section class="py-16 sm:py-24 lg:py-32 bg-white">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-10 lg:gap-16">

                <div class="reveal-left lg:sticky lg:top-32 lg:self-start">
                    <p class="text-roze-dark text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Veelgestelde vragen</p>
                    <h2 class="font-serif text-3xl sm:text-4xl md:text-5xl font-bold mb-6">
                        Alles wat je wilt weten over cryolipolyse
                    </h2>
                    <div class="w-16 h-0.5 bg-roze mb-6"></div>
                    <p class="text-zwart/60 text-lg leading-relaxed mb-8">
                        Staat je vraag er niet bij? Neem gerust contact op, ik help je graag verder.
                    </p>
                    <a href="{{ route('contact', ['behandeling' => 'cryolipolyse']) }}" class="inline-flex items-center justify-center bg-zwart text-creme px-7 py-3.5 rounded-full text-sm font-semibold hover:bg-roze-dark transition-colors">
                        Stel je vraag
                    </a>
                </div>

                <div class="reveal-right">
                    @include('partials.faq', ['faqs' => $faqs])
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
                Benieuwd of cryolipolyse bij jou past?
            </h2>
            <p class="text-base sm:text-lg text-zwart/70 leading-relaxed mb-8 sm:mb-10 max-w-xl mx-auto">
                Tijdens een persoonlijke intake bespreken we jouw wensen en bekijken we welke behandeling het beste bij jouw lichaam en doelen past.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact', ['behandeling' => 'cryolipolyse']) }}" class="inline-flex items-center justify-center bg-zwart text-creme px-8 py-4 rounded-full text-sm font-semibold hover:bg-roze-dark transition-colors">
                    Boek een gratis consult
                </a>
                <a href="{{ route('body-sculpting') }}" class="inline-flex items-center justify-center border border-zwart/15 text-zwart px-8 py-4 rounded-full text-sm font-semibold hover:border-zwart/30 hover:text-roze-dark transition-colors">
                    Bekijk body sculpting
                </a>
            </div>
        </div>
    </section>
@endsection
