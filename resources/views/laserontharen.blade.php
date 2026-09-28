@extends('layouts.app')

@section('title', 'Diode Laser – Permanent laserontharen in Leeuwarden | N.O.A Trinity')
@section('meta_description', 'Permanent laserontharen bij N.O.A Trinity in Leeuwarden met de Diode ICE 4-Wave Master: vier golflengtes, continue koeling en een behandeling afgestemd op jouw huid, haartype en behandelzone.')
@section('meta_keywords', 'laserontharen, permanent laserontharen, diode laser, laserontharing Leeuwarden, Diode ICE 4-Wave Master, ontharen oksels, bikinilijn, benen')
@section('og_image', asset('images/laser/laser-benen-behandelaar.jpg'))

@php
    $golflengtes = [
        ['nm' => '755', 'naam' => 'Alexandrite', 'tekst' => 'Werkt meer oppervlakkig op het haarzakje. Vooral geschikt voor een lichtere huid met donkere haartjes.'],
        ['nm' => '808', 'naam' => 'Diode', 'tekst' => 'Dringt diep door tot in het haarzakje voor een snelle behandeling. Ook geschikt voor een getinte huid.'],
        ['nm' => '940', 'naam' => 'Extra golflengte', 'tekst' => 'Richt zich op de kleine bloedvaatjes rond het haarzakje, waardoor de voeding van het haarzakje wordt afgeremd.'],
        ['nm' => '1064', 'naam' => 'YAG', 'tekst' => 'De diepst werkende golflengte. Extra geschikt voor een donkere huid en voor diepliggend haar, zoals in oksels en bikinilijn.'],
    ];

    $huidtypes = [
        ['type' => 1, 'kenmerken' => 'Zeer lichte huid, vaak sproeten. Verbrandt altijd en wordt niet bruin.', 'golflengte' => '755 – 1064 nm'],
        ['type' => 2, 'kenmerken' => 'Lichte huid. Verbrandt snel en wordt langzaam bruin.', 'golflengte' => '755 – 1064 nm'],
        ['type' => 3, 'kenmerken' => 'Licht getinte huid. Wordt gemakkelijk bruin zonder snel te verbranden.', 'golflengte' => '755 – 1064 nm'],
        ['type' => 4, 'kenmerken' => 'Van nature getinte huid. Bruint goed en verbrandt zelden.', 'golflengte' => '755 – 1064 nm · bij twijfel spottest'],
        ['type' => 5, 'kenmerken' => 'Donker getinte huid. Bruint intensief en verbrandt vrijwel nooit.', 'golflengte' => '1064 nm · bij twijfel spottest'],
        ['type' => 6, 'kenmerken' => 'Zeer donkere huid. Verbrandt nooit.', 'golflengte' => '1064 nm · altijd spottest'],
    ];

    $zones = [
        ['groep' => 'Gezicht & hals', 'items' => ['Bovenlip', 'Kin', 'Bakkebaarden', 'Baardlijn', 'Tussen de wenkbrauwen', 'Oren', 'Hals', 'Nek']],
        ['groep' => 'Bovenlichaam', 'items' => ['Oksels', 'Armen', 'Handen & vingers', 'Schouders', 'Rug', 'Borst', 'Buik', 'Navelstreep']],
        ['groep' => 'Onderlichaam', 'items' => ['Bikinilijn klein', 'Bikinilijn groot', 'Brazilian', 'Billen', 'Bovenbenen', 'Onderbenen', 'Voeten & tenen']],
    ];

    $voorzorg = [
        ['titel' => 'Vermijd de zon', 'tekst' => 'Twee weken vóór de behandeling geen intensieve zon, zonnebank of zelfbruiner. Ben je flink bruin teruggekomen van vakantie? Dan wachten we 3 à 4 weken.'],
        ['titel' => 'Scheer het te behandelen gebied', 'tekst' => 'Scheer 1 tot 2 dagen vooraf met een eenvoudig mesje (geen ‘lift & cut’-systeem). Er moeten kleine stoppeltjes zichtbaar zijn.'],
        ['titel' => 'Niet harsen, waxen of epileren', 'tekst' => 'Vanaf 6 weken vóór de eerste behandeling, omdat de haarwortel aanwezig moet zijn. Scheren of knippen mag wel.'],
        ['titel' => 'Geen make-up of crèmes', 'tekst' => 'Op de dag zelf geen make-up, deodorant, bodylotion of andere cosmetica op het te behandelen gebied.'],
        ['titel' => 'Informeer over medicatie', 'tekst' => 'Meld medicijngebruik (zoals bloedverdunners of hormonen), zwangerschap en huidproblemen vooraf — en ook als er iets verandert tussen twee behandelingen.'],
        ['titel' => 'Draag lichte, losse kleding', 'tekst' => 'Bij voorkeur witte lingerie en makkelijk zittende kleding, zodat de behandelde huid niet gaat schuren.'],
    ];

    $nazorg = [
        ['titel' => 'Vermijd warmte', 'tekst' => 'De eerste 48 uur geen sauna, stoombad, zwemmen, hete douche of intensief sporten. Lauw douchen met een milde zeep mag.'],
        ['titel' => 'Geen irriterende producten', 'tekst' => 'Gebruik 24 uur geen geparfumeerde producten of agressieve huidverzorging, en na het behandelen van de oksels geen deodorant.'],
        ['titel' => 'Hydrateer de huid', 'tekst' => 'Drink voldoende water en gebruik een milde, hydraterende crème, bijvoorbeeld met aloë vera, om de huid te kalmeren.'],
        ['titel' => 'Bescherm tegen de zon', 'tekst' => 'Vermijd zon en zonnebank en gebruik minimaal SPF 30 op het behandelde gebied, ook bij bewolkt weer.'],
        ['titel' => 'Niet krabben of scrubben', 'tekst' => 'Laat de huid de eerste dagen met rust. Daarna kan een milde scrub helpen om losse haartjes te verwijderen.'],
        ['titel' => 'Uitval van de haartjes', 'tekst' => 'Na 5 tot 10 dagen vallen de behandelde haartjes uit. Nieuwe haartjes mag je scheren of knippen, maar niet harsen of epileren.'],
    ];

    $faqs = [
        ['vraag' => 'Wat is laserontharing en hoe werkt het?', 'antwoord' => 'Laserontharing is een ontharingsmethode waarbij de haarzakjes met laserlicht worden behandeld. Het licht wordt opgenomen door het pigment in het haar en omgezet in warmte, die naar de haarwortel wordt geleid. Hierdoor wordt het haarzakje beschadigd en neemt de haargroei sterk af.'],
        ['vraag' => 'Waarom zijn meerdere behandelingen nodig?', 'antwoord' => 'Haren groeien in verschillende fasen. De laser werkt alleen op haren die op dat moment in de actieve groeifase zitten; per behandeling is dat ongeveer 10 tot 25% van de haren. Door meerdere behandelingen met enkele weken ertussen, bereiken we zoveel mogelijk haren in die fase.'],
        ['vraag' => 'Hoeveel behandelingen heb ik nodig?', 'antwoord' => 'Dat verschilt per persoon. Het aantal hangt onder andere af van het behandelgebied, je huid- en haartype, haarkleur, haardikte en hormonale factoren. Gemiddeld zijn 5 tot 7 behandelingen nodig. Tijdens de intake bespreken we je persoonlijke behandelplan en verwachtingen.'],
        ['vraag' => 'Hoe vaak moet ik komen en hoe lang duurt een behandeling?', 'antwoord' => 'Tussen de behandelingen zitten meestal 5 tot 6 weken, afhankelijk van je haargroei en het behandelgebied. Een sessie duurt, afhankelijk van het gebied, tussen de 30 minuten en 2 uur.'],
        ['vraag' => 'Hoe effectief is laserontharen?', 'antwoord' => 'Gemiddeld gaan we uit van zo\'n 80 tot 90% minder haargroei na een volledig traject. Dat is meer dan met andere ontharingsmethoden haalbaar is. Wat overblijft, zijn meestal hele dunne haartjes die de laser niet goed ‘ziet’. Het resultaat verschilt per persoon.'],
        ['vraag' => 'Hoe definitief is laserontharen?', 'antwoord' => 'Haarzakjes die effectief zijn behandeld, maken geen nieuw haar meer aan. Toch kan het lichaam onder invloed van hormonen nieuwe haarzakjes aanmaken. Volledig en voorgoed haarvrij is met geen enkele methode te garanderen; soms is een onderhoudsbehandeling, bijvoorbeeld om de 6 tot 12 maanden, zinvol.'],
        ['vraag' => 'Wat is het verschil tussen een diodelaser en IPL?', 'antwoord' => 'Een diodelaser is gericht op het blijvend behandelen van het haarzakje. Bij IPL worden de haarzakjes vaak alleen tijdelijk verzwakt, waardoor de haren na verloop van tijd terugkomen.'],
        ['vraag' => 'Is laserontharing pijnlijk?', 'antwoord' => 'De ervaring verschilt per persoon en per behandelgebied. Je kunt een warm of prikkelend gevoel ervaren. Dankzij de continue koeling van het handstuk wordt de behandeling doorgaans als comfortabel ervaren; gevoelige zones zoals gezicht en bikinilijn kunnen iets intenser aanvoelen.'],
        ['vraag' => 'Wat moet ik doen vóór de behandeling?', 'antwoord' => 'Scheer het gebied 1 tot 2 dagen vooraf, vermijd twee weken van tevoren intensieve zon, zonnebank en zelfbruiner, en harst, waxt of epileert niet in de 6 weken ervoor. Informeer me over medicijngebruik en veranderingen in je gezondheid.'],
        ['vraag' => 'Wat kan ik na de behandeling verwachten?', 'antwoord' => 'De huid kan tijdelijk rood of warm aanvoelen en er kunnen kleine witte bultjes rond de haarzakjes ontstaan. Dit trekt meestal binnen enkele uren tot 24 uur weg. Vermijd direct na de behandeling hitte en intensieve blootstelling aan de zon en volg altijd het persoonlijke nazorgadvies.'],
        ['vraag' => 'Wanneer zie ik resultaat?', 'antwoord' => 'Na 5 tot 10 dagen vallen de behandelde haartjes uit. Na elke behandeling wordt de haargroei in het gebied steeds minder. Het resultaat verschilt per persoon en ook hormonale veranderingen kunnen invloed hebben op toekomstige haargroei.'],
        ['vraag' => 'Kunnen blonde, grijze of rode haren gelaserd worden?', 'antwoord' => 'Blonde, grijze, witte en rode haren bevatten weinig pigment, waardoor laseren niet altijd mogelijk is. Heb je vooral donkere haren met hier en daar een lichte haar ertussen, dan kan het gebied wel behandeld worden. Twijfel je? Dan doen we eerst een spottest.'],
        ['vraag' => 'Kan ik ook in de zomer laserontharen?', 'antwoord' => 'Ja, zolang je huid niet gebruind is en je voor en na de behandeling uit de zon blijft. Omdat je huid in de herfst en winter het minst gebruind is, zijn dat fijne seizoenen om met een traject te starten.'],
        ['vraag' => 'Kan ik behandeld worden als ik ongesteld ben?', 'antwoord' => 'Ja, de behandeling kan gewoon doorgaan tijdens je menstruatie. De huid kan dan wel iets gevoeliger zijn.'],
        ['vraag' => 'Wat is het verschil tussen bikinilijn klein, groot en Brazilian?', 'antwoord' => 'Bij bikinilijn klein wordt alles behandeld wat buiten je ondergoed zichtbaar is. Bij bikinilijn groot wordt het hele gebied behandeld: liezen, venusheuvel en schaamlippen. Bij een Brazilian wordt ook de bilnaad meegenomen.'],
        ['vraag' => 'Vanaf welke leeftijd kan ik laserontharen?', 'antwoord' => 'Het beste en meest blijvende resultaat bereik je na de puberteit, wanneer de haargroei stabieler is. Ben je jonger dan 18 jaar, dan is toestemming van een ouder of wettelijk vertegenwoordiger nodig.'],
        ['vraag' => 'Kan ik laserontharen tijdens zwangerschap of borstvoeding?', 'antwoord' => 'Nee, tijdens zwangerschap en borstvoeding behandel ik niet. Na het stoppen met borstvoeding adviseer ik meestal 4 tot 6 weken te wachten, zodat je hormoonhuishouding weer tot rust kan komen.'],
        ['vraag' => 'Is laserontharing geschikt voor mij?', 'antwoord' => 'Tijdens een persoonlijke intake bekijk ik je huid, je haar en het gewenste behandelgebied. We bespreken eventuele contra-indicaties en bepalen samen of laserontharing voor jou geschikt is.'],
    ];
@endphp

@section('content')

    {{-- ============================================ --}}
    {{-- HERO --}}
    {{-- ============================================ --}}
    <section class="relative overflow-hidden bg-gradient-to-br from-creme via-roze-light/30 to-creme pt-32 sm:pt-40 pb-16 sm:pb-24">
        <div class="absolute top-16 left-[10%] w-64 h-64 bg-roze/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-[5%] w-56 h-56 bg-lavendel/15 rounded-full blur-3xl"></div>

        <svg class="absolute -bottom-16 -right-16 w-72 h-72 opacity-10 sm:opacity-15" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <path fill="#B8848B" d="M44.4,-63C56.5,-52.4,64.6,-38,67.2,-23.4C69.9,-8.7,67.2,6.1,64.4,22.8C61.6,39.5,58.6,58.1,47.9,69.8C37.1,81.6,18.6,86.6,1.5,84.5C-15.5,82.4,-31,73.2,-44.1,62.2C-57.2,51.2,-68,38.4,-75.4,22.8C-82.8,7.2,-86.8,-11.1,-78.9,-22.6C-71,-34.1,-51.2,-38.6,-36.1,-48.3C-20.9,-58,-10.5,-72.8,2.8,-76.7C16.2,-80.6,32.3,-73.7,44.4,-63Z" transform="translate(100 100)" />
        </svg>

        <div class="relative z-10 max-w-[1400px] mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

                <div class="text-center lg:text-left">
                    <p class="reveal text-roze-dark text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Nieuw in Leeuwarden</p>
                    <h1 class="reveal font-serif text-4xl sm:text-5xl md:text-6xl font-bold leading-tight mb-6">
                        Permanent laserontharen
                        <span class="block text-roze-dark text-3xl sm:text-4xl md:text-5xl mt-2">met geavanceerde lasertechnologie</span>
                    </h1>
                    <p class="reveal text-base sm:text-lg md:text-xl text-zwart/70 leading-relaxed max-w-xl mx-auto lg:mx-0 mb-8 sm:mb-10">
                        Gladde huid. Minder ongewenste haargroei. Meer vrijheid. Met de Diode ICE 4-Wave Master stem ik iedere behandeling af op jouw huid, haartype en behandelzone.
                    </p>
                    <div class="reveal flex flex-col sm:flex-row gap-4 justify-center lg:justify-start mb-8">
                        <a href="{{ route('contact', ['behandeling' => 'laserontharen']) }}" class="inline-flex items-center justify-center bg-zwart text-creme px-8 py-4 rounded-full text-sm font-semibold hover:bg-roze-dark transition-colors">
                            Plan jouw intake
                        </a>
                        <a href="#wat-is-laserontharing" class="inline-flex items-center justify-center border border-zwart/15 text-zwart px-8 py-4 rounded-full text-sm font-semibold hover:border-zwart/30 hover:text-roze-dark transition-colors">
                            Lees meer
                        </a>
                    </div>
                    <ul class="reveal flex flex-wrap gap-2 justify-center lg:justify-start">
                        @foreach(['Veilig en effectief', 'Voor een gladde huid', 'Meer zelfvertrouwen'] as $kenmerk)
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
                        <img src="/images/laser/laser-benen-behandelaar.jpg" alt="Diode laserontharing van de benen met de Diode ICE 4-Wave Master" class="w-full h-full object-cover" loading="eager">
                    </div>
                    <div class="absolute bottom-4 -left-2 sm:left-0 bg-white rounded-2xl px-5 py-4 shadow-lg">
                        <p class="font-serif font-bold text-sm">Diode ICE 4-Wave Master</p>
                        <p class="text-xs text-zwart/50">755 · 808 · 940 · 1064 nm</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- WAT IS DIODE LASERONTHARING --}}
    {{-- ============================================ --}}
    <section id="wat-is-laserontharing" class="py-16 sm:py-24 lg:py-32 bg-white scroll-mt-20">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-center">

                <div class="reveal-left relative">
                    <div class="aspect-[4/5] rounded-3xl overflow-hidden">
                        <img src="/images/laser/laser-oksel-ontspannen.jpg" alt="Ontspannen laserontharing van de oksels" class="w-full h-full object-cover" loading="lazy">
                    </div>
                    <div class="absolute -bottom-6 -right-6 w-48 h-48 bg-roze-light/30 rounded-2xl -z-10"></div>
                </div>

                <div class="reveal-right">
                    <p class="text-roze-dark text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Wat is diode laserontharing?</p>
                    <h2 class="font-serif text-3xl sm:text-4xl md:text-5xl font-bold mb-6">
                        Minder haargroei, blijvend verschil
                    </h2>
                    <div class="w-16 h-0.5 bg-roze mb-8"></div>
                    <p class="text-lg text-zwart/70 leading-relaxed mb-6">
                        Diode laserontharing is een ontharingsmethode waarbij de haarzakjes met laserlicht worden behandeld. Het licht wordt opgenomen door het pigment (melanine) in het haar en omgezet in warmte. Die warmte wordt naar de haarwortel geleid, waardoor het haarzakje wordt beschadigd en de haargroei sterk afneemt.
                    </p>
                    <p class="text-lg text-zwart/70 leading-relaxed mb-8">
                        Een haarzakje dat effectief is behandeld, maakt geen nieuw haar meer aan. Daarmee verschilt laserontharing van scheren, waxen of epileren, waarbij het haar steeds terugkomt.
                    </p>

                    <div class="flex gap-4 bg-roze-light/50 rounded-2xl p-5 sm:p-6">
                        <svg class="w-6 h-6 text-roze-dark shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <p class="text-sm text-zwart/70 leading-relaxed">
                            <strong class="text-zwart">Diode laser of IPL?</strong> Een diodelaser is gericht op het blijvend behandelen van het haarzakje. Bij IPL worden haarzakjes vaak alleen tijdelijk verzwakt, waardoor de haren na verloop van tijd terugkomen.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- HOE WERKT DE BEHANDELING — groeifasen + golflengtes --}}
    {{-- ============================================ --}}
    <section class="py-16 sm:py-24 lg:py-32 bg-creme">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-8">

            <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-center mb-16 sm:mb-24">
                <div class="reveal-left">
                    <p class="text-roze-dark text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Hoe werkt de behandeling?</p>
                    <h2 class="font-serif text-3xl sm:text-4xl md:text-5xl font-bold mb-6">Waarom meerdere behandelingen nodig zijn</h2>
                    <div class="w-16 h-0.5 bg-roze mb-8"></div>
                    <p class="text-lg text-zwart/70 leading-relaxed mb-6">
                        Haren groeien in fasen: de groeifase, de overgangsfase, de rustfase en de uitvalfase. De laser werkt alleen op haren in de actieve groeifase, omdat het haar dan pigment bevat en nog verbonden is met de haarwortel.
                    </p>
                    <p class="text-lg text-zwart/70 leading-relaxed">
                        Per behandeling zit ongeveer 10 tot 25% van de haren in die fase. Daarom werken we met een traject van meerdere behandelingen, met telkens enkele weken ertussen. Zo bereiken we steeds nieuwe haren in de groeifase.
                    </p>
                </div>
                <figure class="reveal-right bg-white rounded-3xl p-6 sm:p-10 shadow-sm">
                    <img src="/images/laser/haargroeifasen.jpg" alt="De fasen van haargroei: groeifase, overgangsfase, rustfase, uitvalfase en opnieuw groeifase" class="w-full h-auto" loading="lazy">
                    <figcaption class="mt-4 text-sm text-zwart/50 text-center">De laser werkt op haren in de groeifase.</figcaption>
                </figure>
            </div>

            <div class="grid lg:grid-cols-5 gap-10 lg:gap-16 items-start">
                <div class="reveal-left lg:col-span-2 lg:sticky lg:top-32">
                    <p class="text-roze-dark text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Vier golflengtes</p>
                    <h2 class="font-serif text-3xl sm:text-4xl font-bold mb-6">Eén laser, afgestemd op jouw huid en haar</h2>
                    <p class="text-zwart/70 leading-relaxed mb-6">
                        De Diode ICE 4-Wave Master combineert vier golflengtes in één apparaat. Ik stel de laser in op jouw huidtype, waarna de juiste golflengtes worden gekozen. Zo kan ik veilig en gericht behandelen, ook bij een getinte of donkere huid.
                    </p>
                    <p class="text-zwart/70 leading-relaxed mb-8">
                        Tijdens de hele behandeling koelt het handstuk de huid. Veel klanten ervaren dat als prettig; het gevoel wordt weleens vergeleken met een warme hotstone-massage.
                    </p>
                    <div class="aspect-[4/3] rounded-3xl overflow-hidden">
                        <img src="/images/laser/laser-golflengten-scherm.jpg" alt="Scherm van de Diode ICE 4-Wave Master met de vier golflengtes" class="w-full h-full object-cover" loading="lazy">
                    </div>
                </div>

                <div class="lg:col-span-3 grid sm:grid-cols-2 gap-6">
                    @foreach($golflengtes as $golflengte)
                        <div class="reveal reveal-delay-{{ $loop->index % 2 + 1 }} bg-white rounded-2xl p-6 sm:p-8 shadow-sm">
                            <p class="font-serif text-4xl font-bold text-roze-dark mb-1">{{ $golflengte['nm'] }}<span class="text-lg text-zwart/40 font-sans font-semibold ml-1">nm</span></p>
                            <p class="text-xs text-zwart/50 font-semibold tracking-widest uppercase mb-4">{{ $golflengte['naam'] }}</p>
                            <p class="text-zwart/60 leading-relaxed">{{ $golflengte['tekst'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- HET APPARAAT --}}
    {{-- ============================================ --}}
    <section class="py-16 sm:py-24 lg:py-32 bg-roze-light/40 overflow-hidden">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-center">

                <div class="reveal-left grid grid-cols-2 gap-4">
                    <div class="aspect-[3/4] rounded-2xl overflow-hidden bg-white">
                        <img src="/images/laser/diode-ice-4-wave-master.jpg" alt="De Diode ICE 4-Wave Master ontharingslaser" class="w-full h-full object-contain p-4" loading="lazy">
                    </div>
                    <div class="aspect-[3/4] rounded-2xl overflow-hidden bg-white mt-10">
                        <img src="/images/laser/laser-handstuk-display.jpg" alt="Handstuk met display van de Diode ICE 4-Wave Master" class="w-full h-full object-cover" loading="lazy">
                    </div>
                </div>

                <div class="reveal-right">
                    <p class="text-roze-dark text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Mijn apparatuur</p>
                    <h2 class="font-serif text-3xl sm:text-4xl md:text-5xl font-bold mb-6">Diode ICE 4-Wave Master</h2>
                    <div class="w-16 h-0.5 bg-roze-dark/40 mb-8"></div>
                    <p class="text-lg text-zwart/70 leading-relaxed mb-8">
                        Ik werk met de Diode ICE 4-Wave Master (Quattro-PRO): een moderne ontharingslaser die zich onderscheidt door maar liefst vier golflengtes in één apparaat.
                    </p>
                    <ul class="space-y-4">
                        @foreach([
                            ['titel' => 'Vier golflengtes', 'tekst' => '755, 808, 940 en 1064 nm, gecombineerd in één behandeling.'],
                            ['titel' => 'Continue koeling', 'tekst' => 'het handstuk koelt de huid tijdens de hele behandeling, voor meer comfort.'],
                            ['titel' => 'Alle huidtypes', 'tekst' => 'de instellingen worden afgestemd op jouw huidtype, ook bij een getinte of donkere huid.'],
                            ['titel' => 'Het hele jaar door', 'tekst' => 'behandelen kan in elk seizoen, zolang je huid niet gebruind is.'],
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
                </div>

            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- HUID- EN HAARTYPES --}}
    {{-- ============================================ --}}
    <section class="py-16 sm:py-24 lg:py-32 bg-white">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-8">

            <div class="reveal max-w-2xl mb-10 sm:mb-12">
                <p class="text-roze-dark text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Huid- en haartypes</p>
                <h2 class="font-serif text-3xl sm:text-4xl md:text-5xl font-bold mb-4">Voor welke huid- en haartypes is de laser geschikt?</h2>
                <p class="text-zwart/60 text-lg leading-relaxed">
                    De Diode ICE 4-Wave Master is geschikt voor alle zes huidtypes. Vooraf bepaal ik jouw huidtype; daarop worden de instellingen en golflengtes afgestemd.
                </p>
            </div>

            <div class="reveal rounded-3xl overflow-hidden mb-10 sm:mb-12">
                <img src="/images/laser/huidtypes.jpg" alt="De zes verschillende huidtypes, van zeer licht (type 1) tot zeer donker (type 6)" class="w-full h-auto" loading="lazy">
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-12 sm:mb-16">
                @foreach($huidtypes as $huidtype)
                    <div class="reveal reveal-delay-{{ $loop->index % 3 + 1 }} bg-creme rounded-2xl p-6 sm:p-8">
                        <p class="font-serif text-xl font-bold mb-2">Huidtype {{ $huidtype['type'] }}</p>
                        <p class="text-zwart/60 leading-relaxed mb-4">{{ $huidtype['kenmerken'] }}</p>
                        <span class="inline-block text-xs font-semibold bg-roze-light text-roze-dark px-3 py-1 rounded-full">{{ $huidtype['golflengte'] }}</span>
                    </div>
                @endforeach
            </div>

            <div class="grid md:grid-cols-2 gap-6 lg:gap-8">
                <div class="reveal reveal-delay-1 bg-roze-light/40 rounded-2xl p-6 sm:p-8 lg:p-10">
                    <h3 class="font-serif text-2xl font-bold mb-4">En je haartype?</h3>
                    <p class="text-zwart/70 leading-relaxed mb-4">
                        De laser werkt via het pigment in het haar. Donkere haren reageren daarom het best. Blonde, grijze, witte en rode haren bevatten weinig pigment; laseren is dan niet altijd mogelijk.
                    </p>
                    <p class="text-zwart/70 leading-relaxed">
                        Zeer dunne donshaartjes worden door de laser vaak minder goed ‘gezien’. Heb je vooral donkere haren met hier en daar een lichte haar, dan kan het gebied wel behandeld worden.
                    </p>
                </div>
                <div class="reveal reveal-delay-2 bg-roze-light/40 rounded-2xl p-6 sm:p-8 lg:p-10">
                    <h3 class="font-serif text-2xl font-bold mb-4">Twijfel? Eerst een spottest</h3>
                    <p class="text-zwart/70 leading-relaxed mb-4">
                        Twijfel je of je huid of haar geschikt is, of heb je huidtype 5 of 6? Dan behandel ik eerst een klein, onopvallend stukje huid met een milde instelling.
                    </p>
                    <p class="text-zwart/70 leading-relaxed">
                        Na ongeveer twee weken beoordelen we samen hoe je huid heeft gereageerd. Zo weten we vooraf zeker dat we veilig kunnen behandelen.
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
            <div class="grid lg:grid-cols-5 gap-10 lg:gap-16 items-start">

                <div class="reveal-left lg:col-span-2">
                    <p class="text-roze-dark text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Behandelzones</p>
                    <h2 class="font-serif text-3xl sm:text-4xl md:text-5xl font-bold mb-6">Welke zones kunnen behandeld worden?</h2>
                    <p class="text-zwart/60 text-lg leading-relaxed mb-8">
                        Van bovenlip tot tenen: vrijwel elke zone met ongewenste haargroei kan worden behandeld. Gevoelige zones zoals het gezicht en de bikinilijn behandel ik met extra aandacht.
                    </p>
                    <div class="hidden lg:block aspect-[4/5] rounded-3xl overflow-hidden">
                        <img src="/images/laser/laser-benen-apparaat.jpg" alt="Laserontharing van de onderbenen" class="w-full h-full object-cover" loading="lazy">
                    </div>
                </div>

                <div class="lg:col-span-3 space-y-6">
                    @foreach($zones as $zone)
                        <div class="reveal bg-white rounded-2xl p-6 sm:p-8 shadow-sm">
                            <h3 class="font-serif text-xl font-bold mb-4">{{ $zone['groep'] }}</h3>
                            <ul class="flex flex-wrap gap-2">
                                @foreach($zone['items'] as $item)
                                    <li class="bg-roze-light/60 text-zwart/80 text-sm font-semibold px-4 py-2 rounded-full">{{ $item }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach

                    <div class="reveal bg-white rounded-2xl p-6 sm:p-8 shadow-sm">
                        <h3 class="font-serif text-xl font-bold mb-4">Bikinilijn: klein, groot of Brazilian?</h3>
                        <dl class="space-y-3 text-zwart/70 leading-relaxed">
                            <div><dt class="inline font-semibold text-zwart">Klein</dt> — <dd class="inline">alles wat buiten je ondergoed zichtbaar is.</dd></div>
                            <div><dt class="inline font-semibold text-zwart">Groot</dt> — <dd class="inline">het hele gebied: liezen, venusheuvel en schaamlippen.</dd></div>
                            <div><dt class="inline font-semibold text-zwart">Brazilian</dt> — <dd class="inline">bikinilijn groot, inclusief de bilnaad.</dd></div>
                        </dl>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- VOORBEREIDING & NAZORG --}}
    {{-- ============================================ --}}
    <section class="py-16 sm:py-24 lg:py-32 bg-white">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-8">

            <div class="reveal max-w-2xl mb-10 sm:mb-16">
                <p class="text-roze-dark text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Voor- en nazorg</p>
                <h2 class="font-serif text-3xl sm:text-4xl md:text-5xl font-bold mb-4">Voor een veilige behandeling en een mooi resultaat</h2>
                <p class="text-zwart/60 text-lg leading-relaxed">
                    Een goede voorbereiding en nazorg maken echt verschil. Dit zijn mijn adviezen.
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-6 lg:gap-8 mb-10">
                @foreach([['titel' => 'Voorbereiding vóór de behandeling', 'items' => $voorzorg], ['titel' => 'Nazorg na de behandeling', 'items' => $nazorg]] as $blok)
                    <div class="reveal reveal-delay-{{ $loop->iteration }} bg-creme rounded-2xl p-6 sm:p-8 lg:p-10">
                        <h3 class="font-serif text-2xl font-bold mb-6">{{ $blok['titel'] }}</h3>
                        <ol class="space-y-5">
                            @foreach($blok['items'] as $item)
                                <li class="flex gap-4">
                                    <span class="w-8 h-8 bg-roze rounded-full flex items-center justify-center shrink-0 font-serif text-sm font-bold text-zwart">{{ $loop->iteration }}</span>
                                    <div>
                                        <p class="font-semibold text-zwart mb-1">{{ $item['titel'] }}</p>
                                        <p class="text-sm text-zwart/60 leading-relaxed">{{ $item['tekst'] }}</p>
                                    </div>
                                </li>
                            @endforeach
                        </ol>
                    </div>
                @endforeach
            </div>

            <div class="reveal grid md:grid-cols-3 gap-6 lg:gap-8 items-center bg-roze-light/40 rounded-2xl p-6 sm:p-8 lg:p-10">
                <div class="md:col-span-2">
                    <h3 class="font-serif text-2xl font-bold mb-3">Wat kun je na de behandeling verwachten?</h3>
                    <p class="text-zwart/70 leading-relaxed">
                        De huid kan direct na de behandeling rood en warm aanvoelen en er kunnen kleine witte bultjes rond de haarzakjes ontstaan. Dat is normaal en trekt meestal binnen enkele uren tot 24 uur weg. Je kunt direct weer verder met je dagelijkse activiteiten. Na 5 tot 10 dagen vallen de behandelde haartjes uit.
                    </p>
                </div>
                <div class="aspect-[4/3] rounded-2xl overflow-hidden">
                    <img src="/images/laser/laser-sfeer-knie.jpg" alt="Gladde huid na laserontharing" class="w-full h-full object-cover" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- BEHANDELTRAJECT --}}
    {{-- ============================================ --}}
    <section class="py-16 sm:py-24 lg:py-32 bg-creme">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-8">

            <div class="reveal max-w-2xl mb-10 sm:mb-16">
                <p class="text-roze-dark text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Behandeltraject</p>
                <h2 class="font-serif text-3xl sm:text-4xl md:text-5xl font-bold mb-4">Hoeveel behandelingen heb je nodig?</h2>
                <p class="text-zwart/60 text-lg leading-relaxed">
                    Dat verschilt per persoon en hangt onder andere af van het behandelgebied, je huid- en haartype, haarkleur, haardikte en hormonale factoren. Tijdens de intake bespreken we jouw persoonlijke behandelplan.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
                @foreach([
                    ['waarde' => '5 – 7', 'label' => 'behandelingen', 'tekst' => 'Gemiddeld aantal behandelingen voor een volledig traject.'],
                    ['waarde' => '5 – 6', 'label' => 'weken ertussen', 'tekst' => 'Afhankelijk van je haargroei; bij het gezicht soms korter.'],
                    ['waarde' => '30 min – 2 uur', 'label' => 'per sessie', 'tekst' => 'Afhankelijk van de grootte van het behandelgebied.'],
                    ['waarde' => '6 – 12', 'label' => 'maanden', 'tekst' => 'Na het traject eventueel een onderhoudsbehandeling.'],
                ] as $feit)
                    <div class="reveal reveal-delay-{{ $loop->iteration }} bg-white rounded-2xl p-6 sm:p-8 shadow-sm">
                        <p class="font-serif text-3xl font-bold text-roze-dark">{{ $feit['waarde'] }}</p>
                        <p class="text-xs text-zwart/50 font-semibold tracking-widest uppercase mb-3">{{ $feit['label'] }}</p>
                        <p class="text-sm text-zwart/60 leading-relaxed">{{ $feit['tekst'] }}</p>
                    </div>
                @endforeach
            </div>

            <div class="grid md:grid-cols-2 gap-6 lg:gap-8">
                <div class="reveal reveal-delay-1 bg-white rounded-2xl p-6 sm:p-8">
                    <h3 class="font-serif text-xl font-bold mb-3">Goed om te weten</h3>
                    <p class="text-zwart/60 leading-relaxed">
                        Na 2 of 3 behandelingen kunnen er ineens veel haartjes uit de rustfase komen. Dat is normaal en hoort bij het traject. Bij hormonaal gestuurde haargroei, bijvoorbeeld bij PCOS, zijn vaak meer behandelingen nodig.
                    </p>
                </div>
                <div class="reveal reveal-delay-2 bg-white rounded-2xl p-6 sm:p-8">
                    <h3 class="font-serif text-xl font-bold mb-3">Wanneer beginnen?</h3>
                    <p class="text-zwart/60 leading-relaxed">
                        De herfst en winter zijn ideaal om te starten: je huid is dan het minst gebruind en je bent klaar voor de zomer. Behandelen in de zomer kan ook, zolang je huid niet gebruind is en je de zon vermijdt.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- CONTRA-INDICATIES & VEILIGHEID (bron: behandelprotocol Diode ICE Laser Master 4-WV) --}}
    {{-- ============================================ --}}
    <section class="py-16 sm:py-24 lg:py-32 bg-white">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-8">

            <div class="grid lg:grid-cols-3 gap-10 lg:gap-16 items-center mb-10 sm:mb-16">
                <div class="reveal lg:col-span-2 max-w-2xl">
                    <p class="text-roze-dark text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Veiligheid</p>
                    <h2 class="font-serif text-3xl sm:text-4xl md:text-5xl font-bold mb-4">Contra-indicaties en veiligheid</h2>
                    <p class="text-zwart/60 text-lg leading-relaxed">
                        Jouw veiligheid staat voorop. Voor de eerste behandeling vul je daarom een intake- en toestemmingsformulier in, dat we samen doornemen.
                    </p>
                </div>
                <div class="reveal hidden lg:block aspect-[4/3] rounded-3xl overflow-hidden">
                    <img src="/images/laser/laser-oksel-voorbereiding.jpg" alt="Contactgel wordt aangebracht voor de laserbehandeling" class="w-full h-full object-cover" loading="lazy">
                </div>
            </div>

            <div class="grid lg:grid-cols-3 gap-6 lg:gap-8">

                <div class="reveal reveal-delay-1 bg-zwart text-white rounded-2xl p-6 sm:p-8">
                    <h3 class="font-serif text-2xl font-bold mb-6">Niet behandelen bij</h3>
                    <ul class="space-y-3">
                        @foreach([
                            'Zwangerschap of borstvoeding',
                            'Een pacemaker of inwendige defibrillator',
                            'Epilepsie (bij goed ingestelde epilepsie alleen in overleg met je arts)',
                            'Actieve huidaandoeningen of een huidinfectie in het behandelgebied',
                            'Een hartinfarct korter dan zes maanden geleden',
                            'Gebruik van antibiotica (tot een week na de laatste inname)',
                        ] as $punt)
                            <li class="flex items-start gap-3">
                                <svg class="w-4 h-4 text-roze shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                                <span class="text-white/80 leading-relaxed">{{ $punt }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="reveal reveal-delay-2 bg-creme rounded-2xl p-6 sm:p-8">
                    <h3 class="font-serif text-2xl font-bold mb-6">Extra voorzichtig of in overleg</h3>
                    <ul class="space-y-3">
                        @foreach([
                            'Diabetes, schildklierproblemen of een verstoorde hormoonhuishouding (zoals PCOS)',
                            'Lichtgevoelig makende medicijnen of middelen, zoals acnemedicatie, bepaalde antidepressiva of sint-janskruid',
                            'Recente littekens, aanleg voor keloïd, een actieve koortslip of gordelroos',
                            'Pigmentafwijkingen zoals vitiligo of melasma',
                            'Tatoeages, permanente make-up, piercings of metaal in het behandelgebied',
                            'Spataderen of vaatproblemen in het behandelgebied',
                            'Recent harsen, een peeling, BB-glow, botox of fillers in het gebied',
                            'Een gebruinde huid door zon, zonnebank of zelfbruiner',
                        ] as $punt)
                            <li class="flex items-start gap-3">
                                <span class="w-1.5 h-1.5 bg-roze-dark rounded-full shrink-0 mt-2.5"></span>
                                <span class="text-zwart/70 leading-relaxed">{{ $punt }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="reveal reveal-delay-3 bg-roze-light/50 rounded-2xl p-6 sm:p-8">
                    <h3 class="font-serif text-2xl font-bold mb-6">Zo behandel ik veilig</h3>
                    <ul class="space-y-3">
                        @foreach([
                            'Vooraf bepaal ik je huid- en haartype en stel ik de laser daarop in',
                            'Jij en ik dragen tijdens de behandeling een laserveiligheidsbril',
                            'Er wordt altijd contactgel gebruikt en de huid wordt continu gekoeld',
                            'Moedervlekken, tatoeages en permanente make-up worden afgedekt of overgeslagen',
                            'Tijdens de behandeling check ik regelmatig hoe het voelt',
                            'Bij twijfel doen we eerst een spottest',
                        ] as $punt)
                            <li class="flex items-start gap-3">
                                <svg class="w-4 h-4 text-roze-dark shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-zwart/70 leading-relaxed">{{ $punt }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>

            </div>

            <p class="reveal mt-8 text-sm text-zwart/50 leading-relaxed max-w-3xl">
                Dit overzicht is niet volledig. Gebruik je medicijnen of heb je een medische aandoening? Vermeld het altijd bij de intake en overleg bij twijfel vooraf met je (huis)arts.
            </p>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- FAQ --}}
    {{-- ============================================ --}}
    <section class="py-16 sm:py-24 lg:py-32 bg-creme">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-10 lg:gap-16">

                <div class="reveal-left lg:sticky lg:top-32 lg:self-start">
                    <p class="text-roze-dark text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Veelgestelde vragen</p>
                    <h2 class="font-serif text-3xl sm:text-4xl md:text-5xl font-bold mb-6">
                        Alles wat je moet weten over laserontharen
                    </h2>
                    <div class="w-16 h-0.5 bg-roze mb-6"></div>
                    <p class="text-zwart/60 text-lg leading-relaxed mb-8">
                        Staat je vraag er niet bij? Neem gerust contact op, ik help je graag verder.
                    </p>
                    <a href="{{ route('contact', ['behandeling' => 'laserontharen']) }}" class="inline-flex items-center justify-center bg-zwart text-creme px-7 py-3.5 rounded-full text-sm font-semibold hover:bg-roze-dark transition-colors">
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
            <p class="font-serif italic text-xl sm:text-2xl text-roze-dark mb-4">Zijdezacht, een blijvend verschil</p>
            <h2 class="font-serif text-3xl sm:text-4xl md:text-5xl font-bold text-zwart mb-6">
                Klaar voor een gladde huid?
            </h2>
            <p class="text-base sm:text-lg text-zwart/70 leading-relaxed mb-8 sm:mb-10 max-w-xl mx-auto">
                Plan jouw persoonlijke intake bij N.O.A Trinity Body Shaping. We bekijken je huid, je haar en het gewenste behandelgebied en bespreken wat je kunt verwachten.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact', ['behandeling' => 'laserontharen']) }}" class="inline-flex items-center justify-center bg-zwart text-creme px-8 py-4 rounded-full text-sm font-semibold hover:bg-roze-dark transition-colors">
                    Plan jouw intake
                </a>
                <a href="{{ route('home') }}#diensten" class="inline-flex items-center justify-center border border-zwart/15 text-zwart px-8 py-4 rounded-full text-sm font-semibold hover:border-zwart/30 hover:text-roze-dark transition-colors">
                    Bekijk alle behandelingen
                </a>
            </div>
        </div>
    </section>
@endsection
