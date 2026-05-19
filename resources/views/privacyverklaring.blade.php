@extends('layouts.app')

@section('title', 'Privacyverklaring | N.O.A Trinity')
@section('meta_description', 'Privacyverklaring van N.O.A Trinity. Lees hoe wij omgaan met jouw persoonsgegevens, welke gegevens wij verzamelen, waarvoor wij ze gebruiken en welke rechten je hebt onder de AVG.')
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
                Privacyverklaring
            </h1>
            <p class="reveal text-base sm:text-lg text-zwart/70 leading-relaxed max-w-2xl mx-auto">
                Wij hechten veel waarde aan de bescherming van jouw persoonsgegevens. In deze privacyverklaring lees je hoe wij omgaan met je gegevens.
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
                    <h2 class="font-serif text-2xl font-bold text-zwart mb-4">1. Wie zijn wij?</h2>
                    <p>
                        N.O.A Trinity is gespecialiseerd in cryolipolyse (vetbevriezen) en body sculpting. Wij zijn verantwoordelijk voor de verwerking van jouw persoonsgegevens zoals beschreven in deze privacyverklaring.
                    </p>
                    <ul class="list-none space-y-1 mt-4">
                        <li><strong class="text-zwart">Bedrijfsnaam:</strong> N.O.A Trinity</li>
                        <li><strong class="text-zwart">Adres:</strong> {{ $settings->adres }}, {{ $settings->postcode_stad }}</li>
                        <li><strong class="text-zwart">E-mail:</strong> {{ $settings->email }}</li>
                        <li><strong class="text-zwart">Telefoon:</strong> {{ $settings->telefoon }}</li>
                    </ul>
                </div>

                {{-- 2 --}}
                <div class="reveal">
                    <h2 class="font-serif text-2xl font-bold text-zwart mb-4">2. Welke gegevens verzamelen wij?</h2>
                    <p>Wij verwerken de volgende persoonsgegevens wanneer je gebruikmaakt van onze diensten of onze website bezoekt:</p>
                    <ul class="list-disc list-inside space-y-1 mt-4">
                        <li>Voor- en achternaam</li>
                        <li>E-mailadres</li>
                        <li>Telefoonnummer</li>
                        <li>Inhoud van berichten via het contactformulier</li>
                        <li>IP-adres en browsergegevens (via cookies)</li>
                        <li>Surfgedrag op onze website (geanonimiseerd)</li>
                    </ul>
                </div>

                {{-- 3 --}}
                <div class="reveal">
                    <h2 class="font-serif text-2xl font-bold text-zwart mb-4">3. Waarom verzamelen wij deze gegevens?</h2>
                    <p>Wij verwerken jouw persoonsgegevens voor de volgende doeleinden:</p>
                    <ul class="list-disc list-inside space-y-1 mt-4">
                        <li>Om contact met je op te nemen naar aanleiding van een vraag of afspraakverzoek</li>
                        <li>Om onze dienstverlening te kunnen uitvoeren</li>
                        <li>Om onze website te verbeteren en het gebruiksgemak te optimaliseren</li>
                        <li>Om te voldoen aan wettelijke verplichtingen</li>
                    </ul>
                </div>

                {{-- 4 --}}
                <div class="reveal">
                    <h2 class="font-serif text-2xl font-bold text-zwart mb-4">4. Hoe lang bewaren wij gegevens?</h2>
                    <p>
                        Wij bewaren jouw persoonsgegevens niet langer dan strikt noodzakelijk is voor de doeleinden waarvoor ze zijn verzameld. Contactformulierberichten worden maximaal 12 maanden bewaard, tenzij er een langere bewaartermijn vereist is op grond van wetgeving.
                    </p>
                </div>

                {{-- 5 --}}
                <div class="reveal">
                    <h2 class="font-serif text-2xl font-bold text-zwart mb-4">5. Delen met derden</h2>
                    <p>
                        Wij delen jouw persoonsgegevens niet met derden, tenzij dit noodzakelijk is voor de uitvoering van onze diensten of wanneer wij hiertoe wettelijk verplicht zijn. Wij maken gebruik van de volgende diensten van derden:
                    </p>
                    <ul class="list-disc list-inside space-y-1 mt-4">
                        <li><strong class="text-zwart">Webhosting:</strong> voor het hosten van onze website</li>
                        <li><strong class="text-zwart">E-maildienst:</strong> voor het verwerken van contactverzoeken</li>
                    </ul>
                    <p class="mt-4">
                        Met deze partijen hebben wij afspraken gemaakt over de bescherming van jouw gegevens.
                    </p>
                </div>

                {{-- 6 --}}
                <div class="reveal">
                    <h2 class="font-serif text-2xl font-bold text-zwart mb-4">6. Cookies</h2>
                    <p>
                        Onze website maakt gebruik van cookies. Voor meer informatie over welke cookies wij gebruiken en waarvoor, verwijzen wij je naar ons <a href="{{ route('cookiebeleid') }}" class="text-roze-dark underline underline-offset-2 hover:text-zwart transition-colors">cookiebeleid</a>.
                    </p>
                </div>

                {{-- 7 --}}
                <div class="reveal">
                    <h2 class="font-serif text-2xl font-bold text-zwart mb-4">7. Jouw rechten</h2>
                    <p>Op grond van de Algemene Verordening Gegevensbescherming (AVG) heb je de volgende rechten:</p>
                    <ul class="list-disc list-inside space-y-1 mt-4">
                        <li><strong class="text-zwart">Recht op inzage:</strong> je mag opvragen welke gegevens wij van je verwerken</li>
                        <li><strong class="text-zwart">Recht op rectificatie:</strong> je mag onjuiste gegevens laten corrigeren</li>
                        <li><strong class="text-zwart">Recht op verwijdering:</strong> je mag verzoeken om verwijdering van je gegevens</li>
                        <li><strong class="text-zwart">Recht op beperking:</strong> je mag vragen om beperking van de verwerking</li>
                        <li><strong class="text-zwart">Recht op overdraagbaarheid:</strong> je mag je gegevens ontvangen in een gestructureerd formaat</li>
                        <li><strong class="text-zwart">Recht op bezwaar:</strong> je mag bezwaar maken tegen de verwerking van je gegevens</li>
                    </ul>
                    <p class="mt-4">
                        Wil je gebruik maken van een van deze rechten? Neem dan contact met ons op via <a href="mailto:{{ $settings->email }}" class="text-roze-dark underline underline-offset-2 hover:text-zwart transition-colors">{{ $settings->email }}</a>.
                    </p>
                </div>

                {{-- 8 --}}
                <div class="reveal">
                    <h2 class="font-serif text-2xl font-bold text-zwart mb-4">8. Beveiliging</h2>
                    <p>
                        Wij nemen passende technische en organisatorische maatregelen om jouw persoonsgegevens te beschermen tegen ongeoorloofde toegang, verlies of misbruik. Onze website maakt gebruik van een beveiligde SSL-verbinding.
                    </p>
                </div>

                {{-- 9 --}}
                <div class="reveal">
                    <h2 class="font-serif text-2xl font-bold text-zwart mb-4">9. Klachten</h2>
                    <p>
                        Heb je een klacht over de verwerking van jouw persoonsgegevens? Neem dan eerst contact met ons op zodat we samen naar een oplossing kunnen zoeken. Je hebt ook het recht om een klacht in te dienen bij de Autoriteit Persoonsgegevens (AP).
                    </p>
                </div>

                {{-- 10 --}}
                <div class="reveal">
                    <h2 class="font-serif text-2xl font-bold text-zwart mb-4">10. Wijzigingen</h2>
                    <p>
                        Wij behouden het recht om deze privacyverklaring te wijzigen. De meest recente versie is altijd beschikbaar op onze website. Wij raden je aan om deze verklaring regelmatig te raadplegen.
                    </p>
                    <p class="mt-4 text-sm text-zwart/40">
                        Laatst bijgewerkt: {{ now()->format('d-m-Y') }}
                    </p>
                </div>

            </div>
        </div>
    </section>

@endsection
