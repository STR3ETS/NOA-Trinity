@extends('layouts.app')

@section('title', 'Over mij | N.O.A Trinity Body Shaping Leeuwarden')
@section('meta_description', 'Maak kennis met N.O.A Trinity Body Shaping in Leeuwarden: persoonlijke begeleiding bij cryolipolyse, body sculpting en laserontharen. Professioneel en eerlijk.')
@section('og_image', asset('images/merk/noa-trinity-logo.jpg'))
@section('breadcrumb', 'Over mij')

@section('content')

    {{-- ============================================ --}}
    {{-- HERO — subpagina stijl, tekst + blobs --}}
    {{-- ============================================ --}}
    <section class="relative overflow-hidden bg-gradient-to-br from-creme via-roze-light/30 to-creme pt-32 sm:pt-40 pb-16 sm:pb-24">
        {{-- Decoratieve blur blobs --}}
        <div class="absolute top-16 left-[10%] w-72 h-72 bg-roze/15 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-[15%] w-56 h-56 bg-lavendel/15 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 right-1/3 w-28 h-28 bg-roze-light/25 rounded-full blur-2xl"></div>

        {{-- Decoratieve SVG blobs --}}
        <svg class="absolute -top-12 -right-12 w-60 h-60 opacity-10 sm:opacity-15" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <path fill="#B8848B" d="M44.4,-63C56.5,-52.4,64.6,-38,67.2,-23.4C69.9,-8.7,67.2,6.1,64.4,22.8C61.6,39.5,58.6,58.1,47.9,69.8C37.1,81.6,18.6,86.6,1.5,84.5C-15.5,82.4,-31,73.2,-44.1,62.2C-57.2,51.2,-68,38.4,-75.4,22.8C-82.8,7.2,-86.8,-11.1,-78.9,-22.6C-71,-34.1,-51.2,-38.6,-36.1,-48.3C-20.9,-58,-10.5,-72.8,2.8,-76.7C16.2,-80.6,32.3,-73.7,44.4,-63Z" transform="translate(100 100)" />
        </svg>
        <svg class="absolute -bottom-10 -left-10 w-48 h-48 opacity-8" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <path fill="#8E9AAF" d="M44.4,-63C56.5,-52.4,64.6,-38,67.2,-23.4C69.9,-8.7,67.2,6.1,64.4,22.8C61.6,39.5,58.6,58.1,47.9,69.8C37.1,81.6,18.6,86.6,1.5,84.5C-15.5,82.4,-31,73.2,-44.1,62.2C-57.2,51.2,-68,38.4,-75.4,22.8C-82.8,7.2,-86.8,-11.1,-78.9,-22.6C-71,-34.1,-51.2,-38.6,-36.1,-48.3C-20.9,-58,-10.5,-72.8,2.8,-76.7C16.2,-80.6,32.3,-73.7,44.4,-63Z" transform="translate(100 100)" />
        </svg>

        <div class="relative z-10 max-w-[1400px] mx-auto px-6 lg:px-8 text-center">
            <p class="reveal text-roze-dark text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Over mij</p>
            <h1 class="reveal font-serif text-4xl sm:text-5xl md:text-6xl font-bold leading-tight mb-6">
                Het gezicht achter<br>
                <span class="text-roze-dark">N.O.A Trinity</span>
            </h1>
            <p class="reveal text-base sm:text-lg md:text-xl text-zwart/70 leading-relaxed max-w-2xl mx-auto mb-8 sm:mb-10">
                Welkom! Ik ben de oprichter van N.O.A Trinity en het is mijn passie om mensen te helpen zich zelfverzekerd en goed te voelen in hun eigen lichaam. Met cryolipolyse, body sculpting en diode laserontharing begeleid ik jou persoonlijk naar jouw lichaamsdoelen.
            </p>
            <a href="{{ route('contact') }}" class="reveal inline-flex items-center justify-center bg-zwart text-creme px-8 py-4 rounded-full text-sm font-semibold hover:bg-roze-dark transition-colors">
                Maak kennis
            </a>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- MIJN VERHAAL — split layout --}}
    {{-- ============================================ --}}
    <section class="py-16 sm:py-24 lg:py-32 bg-white">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-center">

                {{-- Linkerkolom: afbeelding --}}
                <div class="reveal-left relative">
                    <div class="relative">
                        <div class="aspect-[4/3] rounded-3xl overflow-hidden bg-[#0c2a1e]">
                            <img
                                src="/images/merk/noa-trinity-logo.jpg"
                                alt="Logo van N.O.A. Trinity Bodyshaping: Freeze it. Shape it. Love it."
                                class="w-full h-full object-cover"
                                loading="lazy"
                            >
                        </div>
                        {{-- Decoratief accent blok --}}
                        <div class="absolute -bottom-6 -right-6 w-48 h-48 bg-lavendel/10 rounded-2xl -z-10"></div>
                    </div>
                </div>

                {{-- Rechterkolom: tekst --}}
                <div class="reveal-right">
                    <p class="text-roze-dark text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Mijn verhaal</p>
                    <h2 class="font-serif text-3xl sm:text-4xl md:text-5xl font-bold mb-6">
                        Passie voor lichaamsvormgeving
                    </h2>
                    <div class="w-16 h-0.5 bg-roze mb-8"></div>

                    <p class="text-lg text-zwart/70 leading-relaxed mb-6">
                        Al jaren fascineert het me hoe technologie mensen kan helpen om zich beter te voelen in hun eigen huid. Die fascinatie groeide uit tot een diepgewortelde passie voor niet-invasieve lichaamsvormgeving. Ik wilde iets opbouwen waar vakmanschap, persoonlijke aandacht en eerlijkheid centraal staan. Zo is N.O.A Trinity ontstaan.
                    </p>

                    <p class="text-lg text-zwart/70 leading-relaxed mb-6">
                        De naam <strong class="text-zwart">N.O.A Trinity</strong> staat voor de drie-eenheid van <strong class="text-zwart">lichaam, geest en zelfvertrouwen</strong>. Ik geloof dat deze drie onlosmakelijk met elkaar verbonden zijn. Wanneer je je goed voelt over je lichaam, groeit ook je zelfvertrouwen en innerlijke rust. Dat is precies wat ik met elke behandeling wil bereiken.
                    </p>

                    <p class="text-lg text-zwart/70 leading-relaxed mb-6">
                        Die gedachte zit ook in mijn motto: <strong class="text-zwart">Freeze it. Shape it. Love it.</strong> Plaatselijk vet aanpakken met cryolipolyse, je lichaam vormgeven met body sculpting — en je weer thuis voelen in je eigen lichaam.
                    </p>

                    <p class="text-lg text-zwart/70 leading-relaxed mb-6">
                        Om mijn klanten de beste zorg te bieden, heb ik mij laten certificeren door <strong class="text-zwart">MedCos</strong> voor de <strong class="text-zwart">Body-Wizard Duo</strong>. Voor body sculpting met de <strong class="text-zwart">BodySculpting PRO</strong> en laserontharing met de <strong class="text-zwart">Diode ICE 4-Wave Master</strong> volgde ik de training van de Training Academy van Beauty & Bodyshaping. Zo kan ik je veilig en deskundig behandelen.
                    </p>

                    <p class="text-lg text-zwart/70 leading-relaxed">
                        Bij N.O.A Trinity ben je geen nummer. Ik neem de tijd om naar je te luisteren, je wensen te begrijpen en samen het beste behandelplan op te stellen. Want jouw vertrouwen in mij is het mooiste compliment dat ik kan krijgen.
                    </p>
                </div>

            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- CERTIFICERINGEN & TRAINING --}}
    {{-- ============================================ --}}
    <section class="py-16 sm:py-24 lg:py-32 bg-creme">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-8">
            {{-- Sectie header --}}
            <div class="reveal max-w-2xl mb-10 sm:mb-16">
                <p class="text-roze-dark text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Kwalificaties</p>
                <h2 class="font-serif text-3xl sm:text-4xl md:text-5xl font-bold mb-4">Certificeringen & training</h2>
                <p class="text-zwart/60 text-lg leading-relaxed">
                    Kwaliteit en vakmanschap staan bij mij voorop. Ik investeer continu in mijn kennis en vaardigheden om jou de beste behandelingen te kunnen bieden.
                </p>
            </div>

            {{-- Certificeringen grid --}}
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">

                {{-- Kaart 1: Medcos Body Wizard certificering --}}
                <div class="reveal reveal-delay-1 bg-white rounded-2xl p-6 sm:p-8">
                    <div class="w-14 h-14 bg-roze-light rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-roze-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="font-serif text-xl font-bold mb-3">MedCos Body-Wizard certificering</h3>
                    <p class="text-zwart/60 leading-relaxed">
                        Gecertificeerd door MedCos voor het werken met de Body-Wizard Duo, professionele apparatuur voor cryolipolyse en vetbevriezen.
                    </p>
                </div>

                {{-- Kaart 2: Professionele cryolipolyse training --}}
                <div class="reveal reveal-delay-2 bg-white rounded-2xl p-6 sm:p-8">
                    <div class="w-14 h-14 bg-roze-light rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-roze-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                        </svg>
                    </div>
                    <h3 class="font-serif text-xl font-bold mb-3">Professionele cryolipolyse training</h3>
                    <p class="text-zwart/60 leading-relaxed">
                        Uitgebreide theoretische en praktische training in cryolipolyse-technieken, inclusief anatomie, veiligheidsprotocollen en behandelstrategieen.
                    </p>
                </div>

                {{-- Kaart 3: Body sculpting specialisatie --}}
                <div class="reveal reveal-delay-3 bg-white rounded-2xl p-6 sm:p-8">
                    <div class="w-14 h-14 bg-roze-light rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-roze-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                        </svg>
                    </div>
                    <h3 class="font-serif text-xl font-bold mb-3">Training BodySculpting PRO</h3>
                    <p class="text-zwart/60 leading-relaxed">
                        Training via de Training Academy van Beauty & Bodyshaping in het behandelen met de BodySculpting PRO, inclusief het vastleggen van voortgang met voor- en na-foto's.
                    </p>
                </div>

                {{-- Kaart: Diode laser training --}}
                <div class="reveal reveal-delay-1 bg-white rounded-2xl p-6 sm:p-8">
                    <div class="w-14 h-14 bg-roze-light rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-roze-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                    </div>
                    <h3 class="font-serif text-xl font-bold mb-3">Training Diode ICE Laser</h3>
                    <p class="text-zwart/60 leading-relaxed">
                        Training via de Training Academy van Beauty & Bodyshaping in laserontharing met de Diode ICE 4-Wave Master: huid- en haartypes, haargroei, contra-indicaties en veilig behandelen.
                    </p>
                </div>

                {{-- Kaart: Hygiëne & veiligheid --}}
                <div class="reveal reveal-delay-2 bg-white rounded-2xl p-6 sm:p-8">
                    <div class="w-14 h-14 bg-roze-light rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-roze-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                        </svg>
                    </div>
                    <h3 class="font-serif text-xl font-bold mb-3">Hygiëne & veiligheid</h3>
                    <p class="text-zwart/60 leading-relaxed">
                        Werken volgens een vast protocol: een intake- en toestemmingsformulier vooraf, zorgvuldige hygiëne en duidelijke voor- en nazorgadviezen.
                    </p>
                </div>

                {{-- Kaart 4: Continue bijscholing --}}
                <div class="reveal reveal-delay-4 bg-white rounded-2xl p-6 sm:p-8">
                    <div class="w-14 h-14 bg-roze-light rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-roze-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                    <h3 class="font-serif text-xl font-bold mb-3">Continue bijscholing</h3>
                    <p class="text-zwart/60 leading-relaxed">
                        Ik blijf mezelf continu ontwikkelen door het volgen van bijscholingen, workshops en vakliteratuur om altijd op de hoogte te zijn van de nieuwste technieken en inzichten.
                    </p>
                </div>

            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- MIJN AANPAK — 3 pijlers --}}
    {{-- ============================================ --}}
    <section class="py-16 sm:py-24 lg:py-32 bg-white">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-8">
            {{-- Sectie header --}}
            <div class="reveal max-w-2xl mb-10 sm:mb-16">
                <p class="text-roze-dark text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Mijn aanpak</p>
                <h2 class="font-serif text-3xl sm:text-4xl md:text-5xl font-bold mb-4">Drie pijlers waar ik voor sta</h2>
                <p class="text-zwart/60 text-lg leading-relaxed">
                    Elke behandeling bij N.O.A Trinity is gebouwd op drie kernwaarden die ik in alles wat ik doe laat terugkomen.
                </p>
            </div>

            {{-- Pijlers grid --}}
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8 lg:gap-12">

                {{-- Pijler 1: Persoonlijk --}}
                <div class="reveal reveal-delay-1 bg-creme rounded-2xl p-8 sm:p-10">
                    <div class="w-14 h-14 bg-roze-light rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-roze-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </div>
                    <h3 class="font-serif text-2xl font-bold mb-4">Persoonlijk</h3>
                    <p class="text-zwart/60 leading-relaxed">
                        Elke behandeling begint met een persoonlijk gesprek. Ik neem de tijd om naar jouw wensen en doelen te luisteren en stel een behandelplan op dat volledig is afgestemd op jouw lichaam en verwachtingen. Bij mij ben je geen nummer, maar een mens met een eigen verhaal.
                    </p>
                </div>

                {{-- Pijler 2: Professioneel --}}
                <div class="reveal reveal-delay-2 bg-creme rounded-2xl p-8 sm:p-10">
                    <div class="w-14 h-14 bg-roze-light rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-roze-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="font-serif text-2xl font-bold mb-4">Professioneel</h3>
                    <p class="text-zwart/60 leading-relaxed">
                        Ik werk met professionele apparatuur — de Body-Wizard Duo van MedCos, de BodySculpting PRO-4 en de Diode ICE 4-Wave Master — en volg bijscholingen om op de hoogte te blijven van de nieuwste technieken. Veiligheid, hygi&euml;ne en kwaliteit staan altijd op de eerste plaats — daar doe ik geen concessies aan.
                    </p>
                </div>

                {{-- Pijler 3: Eerlijk --}}
                <div class="reveal reveal-delay-3 bg-creme rounded-2xl p-8 sm:p-10">
                    <div class="w-14 h-14 bg-roze-light rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-roze-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                        </svg>
                    </div>
                    <h3 class="font-serif text-2xl font-bold mb-4">Eerlijk</h3>
                    <p class="text-zwart/60 leading-relaxed">
                        Ik geloof in eerlijke communicatie en realistische verwachtingen. Als een behandeling niet geschikt voor je is, zeg ik dat. Geen valse beloftes, geen overselling — alleen oprecht advies dat in jouw belang is. Zo bouw ik een relatie op die gebaseerd is op vertrouwen.
                    </p>
                </div>

            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- DE WERKRUIMTE --}}
    {{-- ============================================ --}}
    <section class="py-16 sm:py-24 lg:py-32 bg-creme">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-center">

                {{-- Linkerkolom: tekst --}}
                <div class="reveal-left">
                    <p class="text-roze-dark text-sm tracking-[0.3em] uppercase mb-4 font-semibold">De werkruimte</p>
                    <h2 class="font-serif text-3xl sm:text-4xl md:text-5xl font-bold mb-6">
                        Een ruimte waar je je op je gemak voelt
                    </h2>
                    <div class="w-16 h-0.5 bg-roze mb-8"></div>

                    <p class="text-lg text-zwart/70 leading-relaxed mb-6">
                        Mijn behandelruimte is ingericht met oog voor detail en comfort. Vanaf het moment dat je binnenstapt, wil ik dat je je welkom en ontspannen voelt. Een rustige, schone omgeving waar jij centraal staat.
                    </p>

                    <p class="text-lg text-zwart/70 leading-relaxed mb-6">
                        Hygi&euml;ne is voor mij vanzelfsprekend. Alle materialen worden zorgvuldig gereinigd en gedesinfecteerd tussen behandelingen. De apparatuur wordt regelmatig onderhouden en gecontroleerd volgens de richtlijnen van de leveranciers.
                    </p>

                    <p class="text-lg text-zwart/70 leading-relaxed">
                        Of je nu komt voor een eerste kennismaking of een vervolgbehandeling — je kunt rekenen op een professionele, warme en verzorgde omgeving waar jouw comfort en veiligheid altijd voorop staan.
                    </p>
                </div>

                {{-- Rechterkolom: afbeelding grid --}}
                <div class="reveal-right">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="aspect-[3/4] rounded-2xl overflow-hidden">
                            <img
                                src="/images/cryolipolyse/body-wizard-duo.jpg"
                                alt="De Body-Wizard Duo voor cryolipolyse"
                                class="w-full h-full object-cover"
                                loading="lazy"
                            >
                        </div>
                        <div class="aspect-[3/4] rounded-2xl overflow-hidden mt-8">
                            <img
                                src="/images/laser/laser-apparaat-scherm.jpg"
                                alt="Het scherm van de Diode ICE 4-Wave Master laser"
                                class="w-full h-full object-cover"
                                loading="lazy"
                            >
                        </div>
                        <div class="col-span-2 aspect-[16/9] rounded-2xl overflow-hidden">
                            <img
                                src="/images/laser/laser-sfeer-benen.jpg"
                                alt="Ontspannen behandeling in een rustige, verzorgde omgeving"
                                class="w-full h-full object-cover"
                                loading="lazy"
                            >
                        </div>
                    </div>
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
                Benieuwd wat ik voor jou kan betekenen?
            </h2>
            <p class="text-base sm:text-lg text-zwart/70 leading-relaxed mb-8 sm:mb-10 max-w-xl mx-auto">
                Ik nodig je graag uit voor een vrijblijvend kennismakingsgesprek. Samen bespreken we jouw wensen en kijken we welke behandeling het beste bij jou past. Geen verplichtingen, alleen een eerlijk en persoonlijk advies.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="inline-flex items-center justify-center bg-zwart text-creme px-8 py-4 rounded-full text-sm font-semibold hover:bg-roze-dark transition-colors">
                    Maak een afspraak
                </a>
                <a href="{{ route('home') }}#diensten" class="inline-flex items-center justify-center border border-zwart/15 text-zwart px-8 py-4 rounded-full text-sm font-semibold hover:border-zwart/30 hover:text-roze-dark transition-colors">
                    Bekijk behandelingen
                </a>
            </div>
        </div>
    </section>
@endsection
