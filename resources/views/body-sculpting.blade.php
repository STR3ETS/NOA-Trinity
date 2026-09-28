@extends('layouts.app')

@section('title', 'Body Sculpting in Leeuwarden | N.O.A Trinity')
@section('meta_description', 'Body sculpting in Leeuwarden met de BodySculpting PRO-4: gericht werken aan spieren en contouren van buik, billen en benen. Plan een gratis consult.')
@section('meta_keywords', 'body sculpting, body sculpting Leeuwarden, BodySculpting PRO-4, spieren trainen, buik, billen, contouren, lichaamsvormgeving')
@section('breadcrumb', 'Body Sculpting')
@section('dienst', 'Body sculpting')
@section('og_image', asset('images/bodysculpting/bodysculpting-pro-4.jpg'))

{{-- Techniek, duur, zones en contra-indicaties afstemmen op het behandelprotocol van de BodySculpting PRO-4 (Beauty & Bodyshaping). --}}
@php
    $zones = [
        ['naam' => 'Buik', 'tekst' => 'Gericht werken aan de buikspieren voor een steviger, strakker ogende buik.'],
        ['naam' => 'Taille & flanken', 'tekst' => 'De zijkanten van de romp, voor meer definitie rond de taille.'],
        ['naam' => 'Billen', 'tekst' => 'De bilspieren trainen voor een stevigere, meer gevormde billijn.'],
        ['naam' => 'Bovenbenen', 'tekst' => 'De voor-, achter- of binnenzijde van de bovenbenen verstevigen.'],
        ['naam' => 'Bovenarmen', 'tekst' => 'De spieren van de bovenarmen aanspannen voor meer stevigheid.'],
    ];

    $resultaten = range(1, 12);

    $faqs = [
        ['vraag' => 'Wat is het verschil tussen body sculpting en cryolipolyse?', 'antwoord' => 'Cryolipolyse richt zich op plaatselijke vetophopingen, die gecontroleerd worden gekoeld. Body sculpting richt zich op de spieren en contouren van je lichaam. De behandelingen vullen elkaar goed aan; tijdens de intake bespreken we welke aanpak bij jouw doelen past.'],
        ['vraag' => 'Hoe lang duurt een sessie?', 'antwoord' => 'Een sessie duurt gemiddeld 30 tot 45 minuten, afhankelijk van het aantal zones dat we behandelen. Voor de eerste afspraak plannen we extra tijd in voor de intake.'],
        ['vraag' => 'Hoeveel behandelingen zijn nodig?', 'antwoord' => 'Body sculpting werkt het best als traject van meerdere sessies. Hoeveel sessies voor jou passend zijn, hangt af van je lichaam, de zone en je doel. Dat bespreken we tijdens de intake; een vast aantal voor iedereen beloof ik niet.'],
        ['vraag' => 'Voelt body sculpting pijnlijk?', 'antwoord' => 'Je voelt je spieren krachtig aanspannen en weer ontspannen. Dat is een intensief, maar niet pijnlijk bedoeld gevoel. De intensiteit wordt afgestemd op wat voor jou goed voelt. Na afloop kunnen je spieren aanvoelen alsof je flink hebt getraind.'],
        ['vraag' => 'Wanneer zie ik resultaat?', 'antwoord' => 'Het resultaat bouwt zich geleidelijk op gedurende het traject. Hoe snel en hoeveel verschil je ziet, verschilt per persoon en hangt onder meer af van je uitgangssituatie en leefstijl.'],
        ['vraag' => 'Is body sculpting een afslankbehandeling?', 'antwoord' => 'Nee. Body sculpting is bedoeld om gericht te werken aan spieren en contouren, als aanvulling op een actieve en gezonde leefstijl. Het is geen methode voor algemeen gewichtsverlies.'],
        ['vraag' => 'Kan ik body sculpting combineren met andere behandelingen?', 'antwoord' => 'Ja. Veel mensen combineren body sculpting met cryolipolyse: cryolipolyse voor plaatselijke vetophopingen en body sculpting voor de spieren en contouren. Samen stellen we een plan op dat bij je past.'],
        ['vraag' => 'Voor wie is body sculpting niet geschikt?', 'antwoord' => 'Bijvoorbeeld tijdens zwangerschap, bij een pacemaker of ander elektronisch implantaat en bij metalen implantaten in het behandelgebied. Tijdens de intake lopen we het intakeformulier samen door en beoordeel ik of de behandeling veilig voor je is.'],
    ];
@endphp

@section('content')

    {{-- ============================================ --}}
    {{-- HERO — tekst + foto van de BodySculpting PRO-4 --}}
    {{-- ============================================ --}}
    <section class="relative overflow-hidden bg-gradient-to-br from-creme via-roze-light/30 to-creme pt-32 sm:pt-40 pb-16 sm:pb-24">
        <div class="absolute top-20 left-[15%] w-56 h-56 bg-lavendel/15 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-[10%] w-64 h-64 bg-roze/20 rounded-full blur-3xl"></div>

        <svg class="absolute -bottom-12 -left-12 w-64 h-64 opacity-10 sm:opacity-15" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <path fill="#B8848B" d="M44.4,-63C56.5,-52.4,64.6,-38,67.2,-23.4C69.9,-8.7,67.2,6.1,64.4,22.8C61.6,39.5,58.6,58.1,47.9,69.8C37.1,81.6,18.6,86.6,1.5,84.5C-15.5,82.4,-31,73.2,-44.1,62.2C-57.2,51.2,-68,38.4,-75.4,22.8C-82.8,7.2,-86.8,-11.1,-78.9,-22.6C-71,-34.1,-51.2,-38.6,-36.1,-48.3C-20.9,-58,-10.5,-72.8,2.8,-76.7C16.2,-80.6,32.3,-73.7,44.4,-63Z" transform="translate(100 100)" />
        </svg>

        <div class="relative z-10 max-w-[1400px] mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

                <div class="text-center lg:text-left">
                    <p class="reveal text-roze-dark text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Body Sculpting</p>
                    <h1 class="reveal font-serif text-4xl sm:text-5xl md:text-6xl font-bold leading-tight mb-6">
                        Vormgeving van<br>
                        <span class="text-roze-dark">jouw lichaam</span>
                    </h1>
                    <p class="reveal text-base sm:text-lg md:text-xl text-zwart/70 leading-relaxed max-w-xl mx-auto lg:mx-0 mb-8 sm:mb-10">
                        Met body sculpting werk ik gericht aan de spieren en contouren van je lichaam. Ik behandel met de BodySculpting PRO-4 — niet-invasief, zonder hersteltijd en altijd na een persoonlijke intake.
                    </p>
                    <div class="reveal flex flex-col sm:flex-row gap-4 justify-center lg:justify-start mb-8">
                        <a href="{{ route('contact', ['behandeling' => 'body-sculpting']) }}" class="inline-flex items-center justify-center bg-zwart text-creme px-8 py-4 rounded-full text-sm font-semibold hover:bg-roze-dark transition-colors">
                            Boek een gratis consult
                        </a>
                        <a href="#wat-is-body-sculpting" class="inline-flex items-center justify-center border border-zwart/15 text-zwart px-8 py-4 rounded-full text-sm font-semibold hover:border-zwart/30 hover:text-roze-dark transition-colors">
                            Lees meer
                        </a>
                    </div>
                    <ul class="reveal flex flex-wrap gap-2 justify-center lg:justify-start">
                        @foreach(['Niet-invasief', 'Geen hersteltijd', 'Vier handstukken'] as $kenmerk)
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
                    <div class="relative aspect-[4/5] rounded-[60%_40%_55%_45%/45%_55%_45%_55%] overflow-hidden shadow-lg bg-white">
                        <img src="/images/bodysculpting/bodysculpting-pro-4-apparaat.jpg" alt="De BodySculpting PRO-4 met vier handstukken" class="w-full h-full object-contain p-8" loading="eager" fetchpriority="high">
                    </div>
                    <div class="absolute bottom-4 -left-2 sm:left-0 bg-white rounded-2xl px-5 py-4 shadow-lg">
                        <p class="font-serif font-bold text-sm">BodySculpting PRO-4</p>
                        <p class="text-xs text-zwart/50">Vier handstukken</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- WAT IS BODY SCULPTING + DOEL --}}
    {{-- ============================================ --}}
    <section id="wat-is-body-sculpting" class="py-16 sm:py-24 lg:py-32 bg-white scroll-mt-20">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-center">

                <div class="reveal-left relative order-2 lg:order-1">
                    <div class="aspect-[4/3] rounded-3xl overflow-hidden">
                        <img src="/images/bodysculpting/bodysculpting-pro-4.jpg" alt="Body sculpting voor buik en contouren" class="w-full h-full object-cover" loading="lazy">
                    </div>
                    <div class="absolute -bottom-6 -right-6 w-48 h-48 bg-roze-light/30 rounded-2xl -z-10"></div>
                </div>

                <div class="reveal-right order-1 lg:order-2">
                    <p class="text-roze-dark text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Wat is body sculpting?</p>
                    <h2 class="font-serif text-3xl sm:text-4xl md:text-5xl font-bold mb-6">
                        Gericht werken aan spieren en contouren
                    </h2>
                    <div class="w-16 h-0.5 bg-roze mb-8"></div>
                    <p class="text-lg text-zwart/70 leading-relaxed mb-6">
                        Body sculpting is een niet-invasieve lichaamsbehandeling waarbij gericht wordt gewerkt aan de spieren en contouren van je lichaam. Ik werk met de BodySculpting PRO-4 van Beauty & Bodyshaping, een professioneel apparaat met vier handstukken.
                    </p>
                    <p class="text-lg text-zwart/70 leading-relaxed mb-8">
                        Tijdens een sessie worden de spieren in de behandelzone intensief getraind, terwijl jij ontspannen ligt. Volgens de leverancier staat één sessie gelijk aan zo'n 30.000 sit-ups.
                    </p>

                    <h3 class="font-serif text-xl font-bold mb-4">Het doel van de behandeling</h3>
                    <div class="grid sm:grid-cols-2 gap-3">
                        @foreach(['Spieren versterken en aanspannen', 'Contouren van buik, billen en benen verfijnen', 'Een steviger, strakker ogend silhouet', 'Een extra stap naast sport en gezonde voeding'] as $doel)
                            <div class="flex items-center gap-3 bg-roze-light/40 rounded-xl px-4 py-3">
                                <span class="w-6 h-6 bg-roze rounded-full flex items-center justify-center shrink-0">
                                    <svg class="w-3.5 h-3.5 text-zwart" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                                    </svg>
                                </span>
                                <p class="text-sm font-semibold text-zwart">{{ $doel }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- HOE VERLOOPT EEN BEHANDELING — stappen --}}
    {{-- ============================================ --}}
    <section class="py-16 sm:py-24 lg:py-32 bg-creme">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-5 gap-10 lg:gap-16">

                <div class="reveal-left lg:col-span-2 lg:sticky lg:top-32 lg:self-start">
                    <p class="text-roze-dark text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Het proces</p>
                    <h2 class="font-serif text-3xl sm:text-4xl md:text-5xl font-bold mb-6">Hoe verloopt een behandeling?</h2>
                    <p class="text-zwart/60 text-lg leading-relaxed">
                        Een sessie duurt gemiddeld 30 tot 45 minuten, afhankelijk van het aantal zones. Je kunt direct daarna weer verder met je dag.
                    </p>
                </div>

                <ol class="lg:col-span-3 space-y-6">
                    @foreach([
                        ['titel' => 'Persoonlijke intake', 'tekst' => 'We bespreken je wensen, je gezondheid en je verwachtingen en ik beoordeel of body sculpting geschikt voor je is. Met jouw toestemming maak ik vooraf foto\'s, zodat we je voortgang goed kunnen volgen.'],
                        ['titel' => 'Handstukken plaatsen', 'tekst' => 'De handstukken worden op de behandelzone(s) geplaatst en de intensiteit wordt op jou afgestemd.'],
                        ['titel' => 'De sessie', 'tekst' => 'Tijdens de sessie voel je je spieren krachtig aanspannen en weer ontspannen. Jij ligt ondertussen ontspannen; ik stem de intensiteit af op wat voor jou goed voelt.'],
                        ['titel' => 'Afronding en vervolg', 'tekst' => 'Na afloop kun je direct verder met je dagelijkse bezigheden. Je spieren kunnen aanvoelen alsof je flink hebt getraind. We plannen de vervolgsessies in die bij jouw traject horen.'],
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
    {{-- BEHANDELZONES --}}
    {{-- ============================================ --}}
    <section class="py-16 sm:py-24 lg:py-32 bg-white">
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
                    <div class="reveal reveal-delay-{{ $loop->index % 3 + 1 }} bg-creme rounded-2xl p-6 sm:p-8 hover:shadow-lg transition-shadow duration-300">
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
    {{-- GESCHIKTHEID + PRAKTISCH --}}
    {{-- ============================================ --}}
    <section class="py-16 sm:py-24 lg:py-32 bg-creme">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-8">

            <div class="reveal max-w-2xl mb-10 sm:mb-16">
                <p class="text-roze-dark text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Geschiktheid & verwachtingen</p>
                <h2 class="font-serif text-3xl sm:text-4xl md:text-5xl font-bold mb-4">Past body sculpting bij jou?</h2>
                <p class="text-zwart/60 text-lg leading-relaxed">
                    Of de behandeling bij je past, beoordelen we altijd samen tijdens de intake.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-6 lg:gap-8 mb-6 lg:mb-8">

                <div class="reveal reveal-delay-1 bg-white rounded-2xl p-6 sm:p-8 lg:p-10">
                    <h3 class="font-serif text-2xl font-bold mb-6">Voor wie is de behandeling geschikt?</h3>
                    <ul class="space-y-4">
                        @foreach([
                            'Je wilt gericht werken aan spierdefinitie en contouren, bijvoorbeeld van buik, billen of benen.',
                            'Je zit rond een stabiel gewicht en zoekt een extra stap naast sport en gezonde voeding.',
                            'Je wilt een niet-invasieve behandeling zonder hersteltijd.',
                            'Je hebt realistische verwachtingen: body sculpting is geen afslankmethode.',
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

                <div class="reveal reveal-delay-2 bg-zwart text-white rounded-2xl p-6 sm:p-8 lg:p-10">
                    <h3 class="font-serif text-2xl font-bold mb-6">Wanneer is de behandeling niet geschikt?</h3>
                    <ul class="space-y-4">
                        @foreach([
                            'Tijdens zwangerschap of borstvoeding.',
                            'Bij een pacemaker, inwendige defibrillator of ander elektronisch implantaat.',
                            'Bij metalen implantaten of een koperspiraal in of rond het behandelgebied.',
                            'Bij epilepsie of bepaalde hart- en vaataandoeningen.',
                            'Bij een recente operatie, wondjes of een breuk (hernia) in het behandelgebied.',
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
                        Dit overzicht is niet volledig. De definitieve beoordeling gebeurt aan de hand van het behandelprotocol en het intakeformulier. Twijfel je? Overleg dan vooraf met je (huis)arts.
                    </p>
                </div>

            </div>

            <div class="grid md:grid-cols-3 gap-6 lg:gap-8">
                @foreach([
                    ['label' => 'Duur', 'titel' => 'Hoe lang duurt de behandeling?', 'tekst' => 'Gemiddeld 30 tot 45 minuten per sessie, afhankelijk van het aantal zones.'],
                    ['label' => 'Traject', 'titel' => 'Hoeveel behandelingen?', 'tekst' => 'Body sculpting werkt het best als traject van meerdere sessies. Hoeveel voor jou passend is, bespreken we tijdens de intake.'],
                    ['label' => 'Resultaat', 'titel' => 'Wanneer zie je resultaat?', 'tekst' => 'Het resultaat bouwt zich geleidelijk op gedurende het traject en verschilt per persoon.'],
                ] as $item)
                    <div class="reveal reveal-delay-{{ $loop->iteration }} bg-white rounded-2xl p-6 sm:p-8">
                        <p class="text-xs text-roze-dark font-semibold tracking-widest uppercase mb-2">{{ $item['label'] }}</p>
                        <h3 class="font-serif text-xl font-bold mb-3">{{ $item['titel'] }}</h3>
                        <p class="text-zwart/60 leading-relaxed">{{ $item['tekst'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- VOORBEELDRESULTATEN — aangeleverd door de leverancier --}}
    {{-- ============================================ --}}
    <section class="py-16 sm:py-24 lg:py-32 bg-white">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-8">

            <div class="grid lg:grid-cols-3 gap-10 lg:gap-16 items-center mb-12 sm:mb-16">
                <div class="reveal-left lg:col-span-2">
                    <p class="text-roze-dark text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Voor & na</p>
                    <h2 class="font-serif text-3xl sm:text-4xl md:text-5xl font-bold mb-6">Voorbeeldresultaten BodySculpting PRO</h2>
                    <div class="w-16 h-0.5 bg-roze mb-8"></div>
                    <p class="text-lg text-zwart/70 leading-relaxed mb-6">
                        Om je een indruk te geven van wat de BodySculpting PRO kan doen, zie je hier voor- en na-foto's die zijn aangeleverd door leverancier Beauty & Bodyshaping. Het gaat om voorbeeldresultaten; dit zijn geen klanten van N.O.A Trinity.
                    </p>
                    <p class="text-zwart/60 leading-relaxed mb-8">
                        Resultaten verschillen per persoon en zijn geen garantie voor jouw resultaat. Resultaten van mijn eigen klanten deel ik — uitsluitend met hun toestemming — in de galerij.
                    </p>
                    <a href="{{ route('gallerij', ['type' => 'body-sculpting']) }}" class="inline-flex items-center gap-2 text-sm font-semibold text-roze-dark hover:text-zwart transition-colors">
                        Bekijk de galerij
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>

                <figure class="reveal-right w-full max-w-xs mx-auto">
                    <div class="aspect-[4/5] rounded-3xl overflow-hidden shadow-lg bg-creme">
                        <video class="w-full h-full object-cover" autoplay muted loop playsinline preload="metadata" poster="/images/bodysculpting/bodysculpting-pro-resultaat-poster.jpg" aria-label="Voor- en na-resultaat na 4 behandelingen met de BodySculpting PRO">
                            <source src="/videos/bodysculpting-pro-resultaat.mp4" type="video/mp4">
                        </video>
                    </div>
                    <figcaption class="mt-3 text-xs text-zwart/40 text-center">Voorbeeld na 4 behandelingen · bron: Beauty & Bodyshaping</figcaption>
                </figure>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 sm:gap-6">
                @foreach($resultaten as $nummer)
                    <figure class="reveal-scale relative aspect-square rounded-2xl overflow-hidden bg-creme">
                        <img src="/images/bodysculpting/resultaten/voor-na-{{ str_pad($nummer, 2, '0', STR_PAD_LEFT) }}.jpg" alt="Voorbeeldresultaat BodySculpting PRO {{ $nummer }}: voor en na" class="w-full h-full object-cover" loading="lazy">
                        <span class="absolute bottom-2 left-2 bg-zwart/60 text-creme text-xs px-2.5 py-1 rounded-full font-medium">Voor</span>
                        <span class="absolute bottom-2 right-2 bg-roze-dark text-creme text-xs px-2.5 py-1 rounded-full font-medium">Na</span>
                    </figure>
                @endforeach
            </div>
            <p class="mt-6 text-xs text-zwart/40">Voorbeeldresultaten BodySculpting PRO · bron: Beauty & Bodyshaping Training Academy</p>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- COMBINATIE MET CRYOLIPOLYSE — split layout --}}
    {{-- ============================================ --}}
    <section class="py-16 sm:py-24 lg:py-32 bg-creme">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-center">

                <div class="reveal-left">
                    <p class="text-roze-dark text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Freeze it. Shape it.</p>
                    <h2 class="font-serif text-3xl sm:text-4xl md:text-5xl font-bold mb-6">
                        Combineer met cryolipolyse
                    </h2>
                    <div class="w-16 h-0.5 bg-roze mb-8"></div>
                    <p class="text-lg text-zwart/70 leading-relaxed mb-8">
                        Cryolipolyse en body sculpting vullen elkaar goed aan. Waar cryolipolyse zich richt op plaatselijke vetophopingen, richt body sculpting zich op de spieren en contouren. Samen bespreken we welke aanpak het beste bij jouw doelen past.
                    </p>

                    <div class="space-y-4 mb-8">
                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 bg-roze rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-3.5 h-3.5 text-zwart" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <p class="text-zwart/70"><strong class="text-zwart">Cryolipolyse</strong> — plaatselijke vetophopingen gecontroleerd koelen</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 bg-roze rounded-full flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-3.5 h-3.5 text-zwart" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <p class="text-zwart/70"><strong class="text-zwart">Body sculpting</strong> — spieren en contouren gericht trainen</p>
                        </div>
                    </div>

                    <a href="{{ route('cryolipolyse') }}" class="inline-flex items-center gap-2 bg-zwart text-creme px-7 py-3.5 rounded-full text-sm font-semibold hover:bg-roze-dark transition-colors">
                        Ontdek cryolipolyse
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>

                <div class="reveal-right relative order-first lg:order-last">
                    <div class="relative">
                        <div class="aspect-[4/3] rounded-3xl overflow-hidden">
                            <img src="/images/cryolipolyse/body-wizard-behandeling.jpg" alt="Cryolipolyse met de Body-Wizard Duo als aanvulling op body sculpting" class="w-full h-full object-cover" loading="lazy">
                        </div>
                        <div class="absolute -bottom-6 -right-6 w-48 h-48 bg-lavendel/10 rounded-2xl -z-10"></div>
                        <div class="absolute -bottom-4 -left-4 sm:bottom-6 sm:left-6 bg-white rounded-2xl p-4 shadow-lg">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 bg-roze-light rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6 text-roze-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-serif font-bold text-sm">Duo-behandeling</p>
                                    <p class="text-xs text-zwart/50">Plan op maat</p>
                                </div>
                            </div>
                        </div>
                    </div>
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
                        Alles wat je wilt weten over body sculpting
                    </h2>
                    <div class="w-16 h-0.5 bg-roze mb-6"></div>
                    <p class="text-zwart/60 text-lg leading-relaxed mb-8">
                        Staat je vraag er niet bij? Neem gerust contact op, ik help je graag verder.
                    </p>
                    <a href="{{ route('contact', ['behandeling' => 'body-sculpting']) }}" class="inline-flex items-center justify-center bg-zwart text-creme px-7 py-3.5 rounded-full text-sm font-semibold hover:bg-roze-dark transition-colors">
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
                Benieuwd of body sculpting bij jou past?
            </h2>
            <p class="text-base sm:text-lg text-zwart/70 leading-relaxed mb-8 sm:mb-10 max-w-xl mx-auto">
                Tijdens een persoonlijke intake bespreken we jouw wensen en bekijken we welke behandeling het beste bij jouw lichaam en doelen past.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact', ['behandeling' => 'body-sculpting']) }}" class="inline-flex items-center justify-center bg-zwart text-creme px-8 py-4 rounded-full text-sm font-semibold hover:bg-roze-dark transition-colors">
                    Plan jouw intake
                </a>
                <a href="{{ route('cryolipolyse') }}" class="inline-flex items-center justify-center border border-zwart/15 text-zwart px-8 py-4 rounded-full text-sm font-semibold hover:border-zwart/30 hover:text-roze-dark transition-colors">
                    Bekijk cryolipolyse
                </a>
            </div>
        </div>
    </section>
@endsection
