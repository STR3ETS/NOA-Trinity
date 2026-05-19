@extends('layouts.app')

@section('title', 'Algemene Voorwaarden | N.O.A Trinity')
@section('meta_description', 'Algemene voorwaarden van N.O.A Trinity. Lees onze voorwaarden voor cryolipolyse en body sculpting behandelingen, afspraken, annulering, betaling en aansprakelijkheid.')
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
                Algemene voorwaarden
            </h1>
            <p class="reveal text-base sm:text-lg text-zwart/70 leading-relaxed max-w-2xl mx-auto">
                Hieronder vind je de algemene voorwaarden die van toepassing zijn op alle behandelingen en diensten van N.O.A Trinity.
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
                    <h2 class="font-serif text-2xl font-bold text-zwart mb-4">1. Algemeen</h2>
                    <p>
                        Deze algemene voorwaarden zijn van toepassing op alle diensten, behandelingen en overeenkomsten van N.O.A Trinity, gevestigd te {{ $settings->postcode_stad }}. Door een afspraak te maken of een behandeling te ondergaan, ga je akkoord met deze voorwaarden.
                    </p>
                </div>

                {{-- 2 --}}
                <div class="reveal">
                    <h2 class="font-serif text-2xl font-bold text-zwart mb-4">2. Behandelingen</h2>
                    <ul class="list-disc list-inside space-y-2 mt-4">
                        <li>Alle behandelingen worden uitgevoerd door een gecertificeerde specialist met een door Medcos erkende Body Wizard.</li>
                        <li>V&oacute;&oacute;r de eerste behandeling vindt altijd een intakegesprek plaats om jouw wensen, verwachtingen en eventuele contra-indicaties te bespreken.</li>
                        <li>De resultaten van behandelingen zijn indicatief en kunnen per persoon verschillen. Er kunnen geen garanties worden gegeven op specifieke resultaten.</li>
                        <li>Het is de verantwoordelijkheid van de cli&euml;nt om relevante medische informatie vooraf te delen.</li>
                    </ul>
                </div>

                {{-- 3 --}}
                <div class="reveal">
                    <h2 class="font-serif text-2xl font-bold text-zwart mb-4">3. Afspraken en annulering</h2>
                    <ul class="list-disc list-inside space-y-2 mt-4">
                        <li>Afspraken kunnen gemaakt worden via het contactformulier op de website, per e-mail (<a href="mailto:{{ $settings->email }}" class="text-roze-dark underline underline-offset-2 hover:text-zwart transition-colors">{{ $settings->email }}</a>) of telefonisch (<a href="tel:{{ $settings->telefoon_link }}" class="text-roze-dark underline underline-offset-2 hover:text-zwart transition-colors">{{ $settings->telefoon }}</a>).</li>
                        <li>Annuleren of verzetten van een afspraak dient minimaal <strong class="text-zwart">24 uur</strong> van tevoren te gebeuren.</li>
                        <li>Bij annulering binnen 24 uur of bij het niet verschijnen op een afspraak (no-show) kan N.O.A Trinity kosten in rekening brengen.</li>
                        <li>N.O.A Trinity behoudt het recht om afspraken te annuleren of te verzetten bij overmacht of onvoorziene omstandigheden.</li>
                    </ul>
                </div>

                {{-- 4 --}}
                <div class="reveal">
                    <h2 class="font-serif text-2xl font-bold text-zwart mb-4">4. Prijzen en betaling</h2>
                    <ul class="list-disc list-inside space-y-2 mt-4">
                        <li>Alle prijzen zijn inclusief BTW, tenzij anders vermeld.</li>
                        <li>N.O.A Trinity behoudt het recht om prijzen te wijzigen. Lopende afspraken worden tegen het oorspronkelijk afgesproken tarief uitgevoerd.</li>
                        <li>Betaling dient te geschieden direct na de behandeling, tenzij anders overeengekomen.</li>
                        <li>Aanbiedingen en acties zijn geldig zolang de voorraad strekt en kunnen niet met andere kortingen gecombineerd worden, tenzij anders aangegeven.</li>
                    </ul>
                </div>

                {{-- 5 --}}
                <div class="reveal">
                    <h2 class="font-serif text-2xl font-bold text-zwart mb-4">5. Contra-indicaties</h2>
                    <p>
                        Cryolipolyse en body sculpting behandelingen zijn niet geschikt voor iedereen. N.O.A Trinity behoudt het recht om een behandeling te weigeren wanneer er sprake is van contra-indicaties, waaronder maar niet beperkt tot:
                    </p>
                    <ul class="list-disc list-inside space-y-1 mt-4">
                        <li>Zwangerschap of borstvoeding</li>
                        <li>Ernstige huidaandoeningen in het behandelgebied</li>
                        <li>Koude-overgevoeligheid (cryoglobinemie, koude urticaria)</li>
                        <li>Onbehandelde hernia in het behandelgebied</li>
                        <li>Recente chirurgische ingrepen in het behandelgebied</li>
                        <li>Ernstige lever- of nieraandoeningen</li>
                    </ul>
                    <p class="mt-4">
                        Twijfel je of een behandeling geschikt voor je is? Neem dan vooraf contact met ons op voor advies.
                    </p>
                </div>

                {{-- 6 --}}
                <div class="reveal">
                    <h2 class="font-serif text-2xl font-bold text-zwart mb-4">6. Aansprakelijkheid</h2>
                    <ul class="list-disc list-inside space-y-2 mt-4">
                        <li>N.O.A Trinity is niet aansprakelijk voor schade die het gevolg is van het verzwijgen van medische informatie of contra-indicaties door de cli&euml;nt.</li>
                        <li>De aansprakelijkheid van N.O.A Trinity is beperkt tot het bedrag dat door de aansprakelijkheidsverzekering wordt uitgekeerd.</li>
                        <li>N.O.A Trinity is niet aansprakelijk voor indirecte schade, gevolgschade of gederfde winst.</li>
                    </ul>
                </div>

                {{-- 7 --}}
                <div class="reveal">
                    <h2 class="font-serif text-2xl font-bold text-zwart mb-4">7. Privacy</h2>
                    <p>
                        N.O.A Trinity gaat zorgvuldig om met jouw persoonsgegevens. Voor meer informatie verwijzen wij je naar onze <a href="{{ route('privacyverklaring') }}" class="text-roze-dark underline underline-offset-2 hover:text-zwart transition-colors">privacyverklaring</a>.
                    </p>
                </div>

                {{-- 8 --}}
                <div class="reveal">
                    <h2 class="font-serif text-2xl font-bold text-zwart mb-4">8. Klachten</h2>
                    <p>
                        Ben je niet tevreden over een behandeling of onze dienstverlening? Neem dan zo snel mogelijk contact met ons op via <a href="mailto:{{ $settings->email }}" class="text-roze-dark underline underline-offset-2 hover:text-zwart transition-colors">{{ $settings->email }}</a>. Wij nemen elke klacht serieus en streven ernaar om samen tot een passende oplossing te komen.
                    </p>
                </div>

                {{-- 9 --}}
                <div class="reveal">
                    <h2 class="font-serif text-2xl font-bold text-zwart mb-4">9. Toepasselijk recht</h2>
                    <p>
                        Op deze algemene voorwaarden en alle overeenkomsten tussen N.O.A Trinity en de cli&euml;nt is Nederlands recht van toepassing. Geschillen worden voorgelegd aan de bevoegde rechter in het arrondissement waar N.O.A Trinity is gevestigd.
                    </p>
                </div>

                {{-- 10 --}}
                <div class="reveal">
                    <h2 class="font-serif text-2xl font-bold text-zwart mb-4">10. Wijzigingen</h2>
                    <p>
                        N.O.A Trinity behoudt het recht om deze algemene voorwaarden te wijzigen. De meest recente versie is altijd beschikbaar op onze website.
                    </p>
                    <p class="mt-4 text-sm text-zwart/40">
                        Laatst bijgewerkt: {{ now()->format('d-m-Y') }}
                    </p>
                </div>

            </div>
        </div>
    </section>

@endsection
