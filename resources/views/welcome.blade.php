<!DOCTYPE html>
<html lang="nl" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cryolipolyse & Body Sculpting | N.O.A Trinity — Vetbevriezen met Body Wizard</title>
    <meta name="description" content="Professionele cryolipolyse (vetbevriezen) en body sculpting bij N.O.A Trinity. Niet-invasieve lichaamsvormgeving met de gecertificeerde Body Wizard van Medcos. Boek een gratis consult.">
    <meta name="keywords" content="cryolipolyse, vetbevriezen, body sculpting, lichaamsvormgeving, Body Wizard, Medcos, niet-invasief, vetverwijdering zonder operatie">
    <meta property="og:title" content="Cryolipolyse & Body Sculpting | N.O.A Trinity">
    <meta property="og:description" content="Niet-invasieve vetverwijdering en lichaamsvormgeving met de gecertificeerde Body Wizard van Medcos. Boek een gratis consult bij N.O.A Trinity.">
    <meta property="og:type" content="website">
    <meta name="robots" content="index, follow">

    @fonts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-creme text-zwart font-sans antialiased overflow-x-hidden">

    {{-- ============================================ --}}
    {{-- NAVIGATIE --}}
    {{-- ============================================ --}}
    <nav id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                {{-- Links: menu --}}
                <div class="hidden md:flex items-center gap-8 flex-1">
                    <a href="#home" class="text-sm font-semibold text-zwart/70 hover:text-zwart transition-colors">Home</a>

                    {{-- Behandelingen met submenu --}}
                    <div class="relative group/dropdown">
                        <button class="text-sm font-semibold text-zwart/70 hover:text-zwart transition-colors inline-flex items-center gap-1">
                            Behandelingen
                            <svg class="w-3.5 h-3.5 transition-transform group-hover/dropdown:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="absolute top-full left-0 pt-2 opacity-0 invisible group-hover/dropdown:opacity-100 group-hover/dropdown:visible transition-all duration-200">
                            <div class="bg-white rounded-xl shadow-lg border border-zwart/5 py-2 min-w-[220px]">
                                <a href="#diensten" class="block px-5 py-2.5 text-sm text-zwart/70 hover:text-zwart hover:bg-roze-light/30 transition-colors">Cryolipolyse</a>
                                <a href="#diensten" class="block px-5 py-2.5 text-sm text-zwart/70 hover:text-zwart hover:bg-roze-light/30 transition-colors">Body Sculpting</a>
                            </div>
                        </div>
                    </div>

                    <a href="#over-ons" class="text-sm font-semibold text-zwart/70 hover:text-zwart transition-colors">Over mij</a>
                    <a href="#contact" class="text-sm font-semibold text-zwart/70 hover:text-zwart transition-colors">Contact</a>
                </div>

                {{-- Midden: logo --}}
                <a href="#home" class="absolute left-1/2 -translate-x-1/2">
                    <img src="/assets/logo.png" alt="NOA Trinity" class="max-h-10">
                </a>

                {{-- Rechts: button + hamburger --}}
                <div class="hidden md:flex items-center flex-1 justify-end">
                    <a href="#contact" class="bg-zwart text-creme px-6 py-2.5 rounded-full text-sm font-semibold hover:bg-roze-dark transition-colors">
                        Maak jouw afspraak
                    </a>
                </div>

                <button id="mobile-menu-btn" class="md:hidden relative w-10 h-10 flex flex-col items-center justify-center gap-[5px] ml-auto" aria-label="Menu openen">
                    <span class="block w-6 h-[2px] bg-zwart rounded-full transition-all duration-500 ease-[cubic-bezier(0.77,0,0.18,1)] origin-center" id="hamburger-top"></span>
                    <span class="block w-6 h-[2px] bg-zwart rounded-full transition-all duration-500 ease-[cubic-bezier(0.77,0,0.18,1)] origin-center" id="hamburger-mid"></span>
                    <span class="block w-4 h-[2px] bg-zwart rounded-full transition-all duration-500 ease-[cubic-bezier(0.77,0,0.18,1)] origin-center self-end" id="hamburger-bot"></span>
                </button>
            </div>
        </div>
    </nav>

    {{-- Mobile Menu Overlay --}}
    <div id="mobile-menu" class="fixed inset-0 z-40 bg-creme/98 backdrop-blur-sm flex flex-col items-center justify-center transition-all duration-500 opacity-0 pointer-events-none">
        {{-- Decoratieve achtergrond-elementen --}}
        <div class="absolute top-20 right-8 w-32 h-32 bg-roze/15 rounded-full blur-2xl"></div>
        <div class="absolute bottom-32 left-8 w-40 h-40 bg-lavendel/10 rounded-full blur-2xl"></div>

        <nav class="flex flex-col items-center gap-6">
            <a href="#home" class="mobile-menu-link font-serif text-3xl text-zwart hover:text-roze-dark transition-colors mobile-link opacity-0 translate-y-4">Home</a>
            <a href="#diensten" class="mobile-menu-link font-serif text-3xl text-zwart hover:text-roze-dark transition-colors mobile-link opacity-0 translate-y-4">Cryolipolyse</a>
            <a href="#diensten" class="mobile-menu-link font-serif text-3xl text-zwart hover:text-roze-dark transition-colors mobile-link opacity-0 translate-y-4">Body Sculpting</a>
            <a href="#over-ons" class="mobile-menu-link font-serif text-3xl text-zwart hover:text-roze-dark transition-colors mobile-link opacity-0 translate-y-4">Over mij</a>
            <a href="#contact" class="mobile-menu-link font-serif text-3xl text-zwart hover:text-roze-dark transition-colors mobile-link opacity-0 translate-y-4">Contact</a>

            <div class="mobile-menu-link opacity-0 translate-y-4 mt-4">
                <a href="#contact" class="bg-zwart text-creme px-8 py-3.5 rounded-full text-sm font-semibold hover:bg-roze-dark transition-colors mobile-link">
                    Maak jouw afspraak
                </a>
            </div>
        </nav>

        {{-- Social links onderaan --}}
        <div class="mobile-menu-link opacity-0 translate-y-4 absolute bottom-12 flex items-center gap-6">
            <a href="#" class="text-zwart/30 hover:text-roze-dark transition-colors" aria-label="Instagram">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
                </svg>
            </a>
            <a href="#" class="text-zwart/30 hover:text-roze-dark transition-colors" aria-label="Facebook">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                </svg>
            </a>
            <a href="#" class="text-zwart/30 hover:text-roze-dark transition-colors" aria-label="WhatsApp">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                </svg>
            </a>
        </div>
    </div>

    {{-- ============================================ --}}
    {{-- HERO SECTIE — split layout met foto-blob --}}
    {{-- ============================================ --}}
    <section id="home" class="relative min-h-[100svh] flex items-center overflow-hidden">
        {{-- Achtergrond --}}
        <div class="absolute z-1 inset-0 bg-gradient-to-br from-creme via-roze-light/30 to-creme"></div>

        <svg class="hidden lg:block absolute z-2 bottom-0 -right-100 max-h-350" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <path fill="#B8848B" d="M44.4,-63C56.5,-52.4,64.6,-38,67.2,-23.4C69.9,-8.7,67.2,6.1,64.4,22.8C61.6,39.5,58.6,58.1,47.9,69.8C37.1,81.6,18.6,86.6,1.5,84.5C-15.5,82.4,-31,73.2,-44.1,62.2C-57.2,51.2,-68,38.4,-75.4,22.8C-82.8,7.2,-86.8,-11.1,-78.9,-22.6C-71,-34.1,-51.2,-38.6,-36.1,-48.3C-20.9,-58,-10.5,-72.8,2.8,-76.7C16.2,-80.6,32.3,-73.7,44.4,-63Z" transform="translate(100 100)" />
        </svg>

        <svg class="block lg:hidden absolute z-2 -bottom-100 -right-100 max-h-400" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <path fill="#B8848B" d="M44.4,-63C56.5,-52.4,64.6,-38,67.2,-23.4C69.9,-8.7,67.2,6.1,64.4,22.8C61.6,39.5,58.6,58.1,47.9,69.8C37.1,81.6,18.6,86.6,1.5,84.5C-15.5,82.4,-31,73.2,-44.1,62.2C-57.2,51.2,-68,38.4,-75.4,22.8C-82.8,7.2,-86.8,-11.1,-78.9,-22.6C-71,-34.1,-51.2,-38.6,-36.1,-48.3C-20.9,-58,-10.5,-72.8,2.8,-76.7C16.2,-80.6,32.3,-73.7,44.4,-63Z" transform="translate(100 100)" />
        </svg>

        <div class="relative z-10 max-w-[1400px] mx-auto px-6 lg:px-8 pt-24 pb-20 sm:py-32 lg:py-0 w-full">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

                {{-- Linkerkolom: tekst --}}
                <div class="reveal">
                    <p class="text-roze-dark text-sm tracking-[0.3em] uppercase mb-6 font-semibold">
                        Cryolipolyse & Body Sculpting
                    </p>
                    <h1 class="font-serif text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold leading-tight mb-6 sm:mb-8">
                        Jouw lichaam,
                        <span class="block text-roze-dark">verfijnd door</span>
                        technologie
                    </h1>
                    <p class="text-base sm:text-lg md:text-xl text-zwart/70 leading-relaxed max-w-xl mb-8 sm:mb-10">
                        Ontdek cryolipolyse en body sculpting bij N.O.A Trinity. Wij verwijderen hardnekkig vet zonder operatie met de Body Wizard van Medcos — veilig, niet-invasief en met zichtbaar resultaat.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 mb-8">
                        <a href="#contact" class="inline-flex items-center justify-center bg-zwart text-creme px-8 py-4 rounded-full text-sm font-semibold hover:bg-roze-dark transition-colors">
                            Boek een gratis consult
                        </a>
                        <a href="#diensten" class="inline-flex items-center justify-center border border-zwart/15 text-zwart px-8 py-4 rounded-full text-sm font-semibold hover:border-zwart/30 hover:text-roze-dark transition-colors">
                            Ontdek behandelingen
                        </a>
                    </div>

                    {{-- Sterren rating --}}
                    <div class="flex items-center gap-3">
                        <div class="flex gap-0.5">
                            @for($i = 0; $i < 5; $i++)
                                <svg class="w-5 h-5 text-roze-dark" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            @endfor
                        </div>
                        <p class="text-sm text-zwart/50">
                            <span class="font-semibold text-zwart/70">5.0</span> — 50+ tevreden klanten
                        </p>
                    </div>
                </div>

                {{-- Mobiele hero afbeelding --}}
                <div class="relative lg:hidden flex items-center justify-center mt-4">
                    <div class="relative w-full max-w-[320px] mx-auto">
                        {{-- Decoratieve blobs --}}
                        <div class="absolute -top-4 -right-4 w-20 h-20 bg-roze/30 rounded-full blur-xl"></div>
                        <div class="absolute -bottom-4 -left-4 w-16 h-16 bg-lavendel/20 rounded-full blur-xl"></div>

                        {{-- Hoofd foto --}}
                        <div class="relative aspect-[3/4] rounded-[50%_50%_45%_55%/45%_55%_50%_50%] overflow-hidden shadow-lg">
                            <img
                                src="/assets/hero1.jpg"
                                alt="Cryolipolyse behandeling met Body Wizard bij N.O.A Trinity"
                                class="w-full h-full object-cover"
                                loading="eager"
                            >
                        </div>

                        {{-- Kleine foto-blob --}}
                        <div class="absolute -bottom-4 -left-6 w-24 h-24 rounded-[45%_55%_40%_60%/55%_40%_60%_45%] overflow-hidden shadow-md">
                            <img
                                src="/assets/hero2.jpg"
                                alt="Body sculpting lichaamsvormgeving N.O.A Trinity"
                                class="w-full h-full object-cover"
                                loading="lazy"
                            >
                        </div>
                    </div>
                </div>

                {{-- Desktop: foto-blobs + decoratieve blobs --}}
                <div class="relative hidden lg:flex items-center justify-center">
                    <div class="relative w-[480px] h-[540px]">

                        {{-- === DECORATIEVE BLOBS (geen foto) === --}}

                        {{-- Grote zachte achtergrond-blob --}}
                        <div class="absolute -top-8 -right-8 w-[105%] h-[105%] bg-lavendel/10 rounded-[60%_40%_55%_45%/45%_55%_45%_55%] animate-pulse-blob"></div>

                        {{-- Kleine cirkel rechts-boven --}}
                        <div class="absolute -top-14 right-8 w-20 h-20 bg-roze/50 rounded-full animate-float-slow"></div>

                        {{-- Kleine cirkel links-boven --}}
                        <div class="absolute -top-6 -left-10 w-12 h-12 bg-lavendel/25 rounded-full animate-float-delay"></div>

                        {{-- Middel blob rechts midden --}}
                        <div class="absolute top-1/3 -right-16 w-24 h-24 bg-gradient-to-br from-roze/30 to-roze-light/20 rounded-[40%_60%_55%_45%/50%_40%_60%_50%] animate-float"></div>

                        {{-- Kleine stip rechts-onder --}}
                        <div class="absolute bottom-16 -right-8 w-8 h-8 bg-lavendel/30 rounded-full animate-float-reverse"></div>

                        {{-- Kleine stip links midden --}}
                        <div class="absolute top-1/2 -left-14 w-10 h-10 bg-roze/35 rounded-full animate-float-delay"></div>

                        {{-- Middel decoratieve blob links-onder --}}
                        <div class="absolute -bottom-12 -left-8 w-28 h-28 bg-gradient-to-tr from-lavendel/20 to-lavendel-light/15 rounded-[55%_45%_50%_50%/45%_55%_50%_50%] animate-float-slow"></div>

                        {{-- Kleine stip onder midden --}}
                        <div class="absolute -bottom-6 left-1/3 w-6 h-6 bg-roze/40 rounded-full animate-float"></div>


                        {{-- === HOOFD FOTO-BLOB (met stock foto) === --}}

                        <div class="relative w-full h-full rounded-[60%_40%_55%_45%/45%_55%_45%_55%] overflow-hidden shadow-lg">
                            <img
                                src="/assets/hero1.jpg"
                                alt="Cryolipolyse behandeling met Body Wizard bij N.O.A Trinity"
                                class="w-full h-full object-cover"
                                loading="eager"
                            >
                        </div>


                        {{-- === KLEINE FOTO-BLOB links-onder === --}}

                        <div class="absolute -bottom-8 -left-16 w-40 h-40 rounded-[45%_55%_40%_60%/55%_40%_60%_45%] overflow-hidden shadow-md animate-float-reverse">
                            <img
                                src="/assets/hero2.jpg"
                                alt="Body sculpting lichaamsvormgeving N.O.A Trinity"
                                class="w-full h-full object-cover"
                                loading="lazy"
                            >
                        </div>

                    </div>
                </div>

            </div>
        </div>

        {{-- Scroll indicator --}}
        <div class="hidden sm:flex absolute bottom-10 left-1/2 -translate-x-1/2 flex-col items-center gap-2 animate-bounce">
            <span class="text-xs tracking-widest uppercase text-zwart/40">Scroll</span>
            <svg class="w-4 h-4 text-zwart/40" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
            </svg>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- INTRODUCTIE / OVER MIJ — split layout --}}
    {{-- ============================================ --}}
    <section id="over-ons" class="py-16 sm:py-24 lg:py-32 bg-white">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-center">

                {{-- Linkerkolom: decoratieve afbeelding-placeholder --}}
                <div class="reveal-left relative order-2 lg:order-1">
                    <div class="relative">
                        {{-- Grote afbeelding --}}
                        <div class="aspect-[4/5] rounded-3xl overflow-hidden">
                            <img src="/images/over-ons.jpg" alt="N.O.A Trinity salon voor cryolipolyse en body sculpting" class="w-full h-full object-cover">
                        </div>
                        {{-- Decoratief accent blok --}}
                        <div class="absolute -bottom-6 -right-6 w-48 h-48 bg-lavendel/10 rounded-2xl -z-10"></div>
                    </div>
                </div>

                {{-- Rechterkolom: tekst, links uitgelijnd --}}
                <div class="reveal-right order-1 lg:order-2">
                    <p class="text-roze-dark text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Over mij</p>
                    <h2 class="font-serif text-3xl sm:text-4xl md:text-5xl font-bold mb-6">
                        Specialist in<br>niet-invasieve lichaamsvormgeving
                    </h2>
                    <div class="w-16 h-0.5 bg-roze mb-8"></div>
                    <p class="text-lg text-zwart/70 leading-relaxed mb-6">
                        Bij N.O.A Trinity geloof ik dat iedereen zich goed mag voelen in het eigen lichaam. Ik combineer vakmanschap met geavanceerde cryolipolyse-technologie om jou te helpen hardnekkig vet te verminderen — zonder operatie, zonder naalden en zonder hersteltijd.
                    </p>
                    <p class="text-lg text-zwart/70 leading-relaxed mb-8">
                        Ik werk uitsluitend met de <strong class="text-zwart">Body Wizard van Medcos</strong>, een gecertificeerd en toonaangevend apparaat voor vetbevriezen. In combinatie met professionele body sculpting behandelingen bied ik een persoonlijke aanpak met zichtbaar en blijvend resultaat.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#contact" class="inline-flex items-center justify-center bg-zwart text-creme px-7 py-3.5 rounded-full text-sm font-semibold hover:bg-roze-dark transition-colors">
                            Maak een afspraak
                        </a>
                        <a href="#diensten" class="inline-flex items-center gap-2 text-sm font-semibold text-roze-dark hover:text-zwart transition-colors py-3.5">
                            Bekijk behandelingen
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- DIENSTEN — header links, kaarten in grid --}}
    {{-- ============================================ --}}
    <section id="diensten" class="py-16 sm:py-24 lg:py-32 bg-creme">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-8">
            {{-- Sectie header — links uitgelijnd --}}
            <div class="reveal max-w-2xl mb-10 sm:mb-16">
                <p class="text-roze-dark text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Behandelingen</p>
                <h2 class="font-serif text-3xl sm:text-4xl md:text-5xl font-bold mb-4">Cryolipolyse & Body Sculpting</h2>
                <p class="text-zwart/60 text-lg leading-relaxed">
                    Twee bewezen, niet-invasieve behandelingen gericht op het verminderen van hardnekkig vet en het vormgeven van jouw lichaam — zonder operatie.
                </p>
            </div>

            {{-- Diensten grid --}}
            <div class="grid md:grid-cols-2 gap-8 lg:gap-12">

                {{-- Kaart: Cryolipolyse --}}
                <div class="reveal reveal-delay-1 group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-shadow duration-300">
                    <div class="h-64 overflow-hidden">
                        <img src="/images/cryo.jpg" alt="Cryolipolyse vetbevriezen behandeling met Body Wizard van Medcos" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-8">
                        <p class="text-roze-dark text-xs tracking-[0.2em] uppercase mb-2 font-semibold">Body Wizard — Medcos</p>
                        <h3 class="font-serif text-2xl font-bold mb-4">Cryolipolyse (vetbevriezen)</h3>
                        <p class="text-zwart/70 leading-relaxed mb-6">
                            Cryolipolyse, ook wel vetbevriezen genoemd, is een klinisch bewezen methode om hardnekkige vetophopingen te verminderen. Met de gecertificeerde Body Wizard van Medcos koelen wij vetcellen gecontroleerd af, waarna je lichaam ze op natuurlijke wijze afbreekt. Geen operatie, geen naalden, geen hersteltijd.
                        </p>
                        <a href="#contact" class="inline-flex items-center gap-2 text-sm font-semibold text-zwart group-hover:text-roze-dark transition-colors">
                            Meer informatie
                            <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>

                {{-- Kaart: Body Sculpting --}}
                <div class="reveal reveal-delay-2 group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-shadow duration-300">
                    <div class="h-64 overflow-hidden">
                        <img src="/images/sculpting.jpg" alt="Body sculpting lichaamsvormgeving behandeling" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-8">
                        <p class="text-roze-dark text-xs tracking-[0.2em] uppercase mb-2 font-semibold">Lichaamsvormgeving</p>
                        <h3 class="font-serif text-2xl font-bold mb-4">Body Sculpting</h3>
                        <p class="text-zwart/70 leading-relaxed mb-6">
                            Met body sculpting werk ik gericht aan de contouren van je lichaam. Deze niet-invasieve behandeling vermindert omvang, verstevigt de huid en creëert een strakker silhouet. Ideaal als zelfstandige behandeling of in combinatie met cryolipolyse voor optimaal resultaat.
                        </p>
                        <a href="#contact" class="inline-flex items-center gap-2 text-sm font-semibold text-zwart group-hover:text-roze-dark transition-colors">
                            Meer informatie
                            <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>

            </div>

            {{-- CTA --}}
            <div class="reveal mt-16 text-center">
                <a href="#contact" class="inline-flex items-center justify-center bg-zwart text-creme px-7 py-3.5 rounded-full text-sm font-semibold hover:bg-roze-dark transition-colors">
                    Gratis consult inplannen
                </a>
            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- USP's — header rechts, items in grid links uitgelijnd --}}
    {{-- ============================================ --}}
    <section class="py-16 sm:py-24 lg:py-32 bg-white">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-3 gap-10 lg:gap-16 items-start">

                {{-- Rechterkolom: header (op desktop neemt het 1 kolom, items 2) --}}
                <div class="reveal-left lg:col-span-1">
                    <p class="text-roze-dark text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Waarom kiezen voor ons</p>
                    <h2 class="font-serif text-4xl font-bold mb-4">Waarom N.O.A Trinity</h2>
                    <div class="w-16 h-0.5 bg-roze mb-6"></div>
                    <p class="text-zwart/60 leading-relaxed">
                        Gecertificeerde apparatuur, een persoonlijke aanpak en niet-invasieve behandelingen met bewezen resultaten. Dat is waar N.O.A Trinity voor staat.
                    </p>
                </div>

                {{-- USP Grid — 2x2, links uitgelijnd --}}
                <div class="lg:col-span-2 grid sm:grid-cols-2 gap-8">

                    {{-- USP 1 --}}
                    <div class="reveal reveal-delay-1 flex gap-5">
                        <div class="w-14 h-14 bg-roze-light rounded-2xl flex items-center justify-center shrink-0">
                            <svg class="w-7 h-7 text-roze-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-serif text-lg font-bold mb-2">Gecertificeerde Body Wizard</h3>
                            <p class="text-sm text-zwart/60 leading-relaxed">
                                Ik werk uitsluitend met de Body Wizard van Medcos — gecertificeerde en klinisch geteste apparatuur voor professionele cryolipolyse.
                            </p>
                        </div>
                    </div>

                    {{-- USP 2 --}}
                    <div class="reveal reveal-delay-2 flex gap-5">
                        <div class="w-14 h-14 bg-roze-light rounded-2xl flex items-center justify-center shrink-0">
                            <svg class="w-7 h-7 text-roze-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-serif text-lg font-bold mb-2">Niet-invasieve behandeling</h3>
                            <p class="text-sm text-zwart/60 leading-relaxed">
                                Vetverwijdering zonder operatie, zonder naalden en zonder hersteltijd. Je kunt direct terug naar je dagelijks leven.
                            </p>
                        </div>
                    </div>

                    {{-- USP 3 --}}
                    <div class="reveal reveal-delay-3 flex gap-5">
                        <div class="w-14 h-14 bg-roze-light rounded-2xl flex items-center justify-center shrink-0">
                            <svg class="w-7 h-7 text-roze-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-serif text-lg font-bold mb-2">Persoonlijk behandelplan</h3>
                            <p class="text-sm text-zwart/60 leading-relaxed">
                                Elke cryolipolyse of body sculpting behandeling wordt op maat samengesteld op basis van jouw lichaam en doelen.
                            </p>
                        </div>
                    </div>

                    {{-- USP 4 --}}
                    <div class="reveal reveal-delay-4 flex gap-5">
                        <div class="w-14 h-14 bg-roze-light rounded-2xl flex items-center justify-center shrink-0">
                            <svg class="w-7 h-7 text-roze-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-serif text-lg font-bold mb-2">Zichtbaar resultaat</h3>
                            <p class="text-sm text-zwart/60 leading-relaxed">
                                Al na enkele behandelingen zichtbaar minder vet. Vetbevriezen geeft een natuurlijk en blijvend resultaat.
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            {{-- CTA --}}
            <div class="reveal mt-16 text-center">
                <a href="#contact" class="inline-flex items-center justify-center bg-zwart text-creme px-7 py-3.5 rounded-full text-sm font-semibold hover:bg-roze-dark transition-colors">
                    Ervaar het zelf
                </a>
            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- HOE WERKT HET? — header links, stappen rechts --}}
    {{-- ============================================ --}}
    <section class="py-16 sm:py-24 lg:py-32 bg-creme">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-8">
            {{-- Header links --}}
            <div class="reveal max-w-2xl mb-10 sm:mb-16">
                <p class="text-roze-dark text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Het proces</p>
                <h2 class="font-serif text-3xl sm:text-4xl md:text-5xl font-bold">Hoe werkt cryolipolyse?</h2>
            </div>

            {{-- Stappen — horizontaal met nummers links --}}
            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-6 sm:gap-8 lg:gap-12">

                {{-- Stap 1 --}}
                <div class="reveal reveal-delay-1 group bg-white rounded-2xl overflow-hidden shadow-sm">
                    <div class="h-48 overflow-hidden">
                        <img src="/images/consult.jpg" alt="Gratis consult cryolipolyse bij N.O.A Trinity" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
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
                                Tijdens een vrijblijvend consult bespreken we jouw wensen en beoordelen we welke behandeling — cryolipolyse, body sculpting of een combinatie — het beste bij je past.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Stap 2 --}}
                <div class="reveal reveal-delay-2 group bg-white rounded-2xl overflow-hidden shadow-sm">
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
                            <h3 class="font-serif text-xl font-bold mb-3">Behandeling op maat</h3>
                            <p class="text-zwart/60 leading-relaxed">
                                De Body Wizard van Medcos koelt de behandelzone gecontroleerd af. De vetcellen worden bevroren terwijl jij ontspant — pijnloos en comfortabel.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Stap 3 --}}
                <div class="reveal reveal-delay-3 group bg-white rounded-2xl overflow-hidden shadow-sm">
                    <div class="h-48 overflow-hidden">
                        <img src="/images/resultaat.jpg" alt="Zichtbaar resultaat na vetbevriezen behandeling" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="relative p-8">
                        <span class="font-serif text-6xl font-bold text-roze/30 absolute top-4 right-6">03</span>
                        <div class="relative">
                            <div class="w-12 h-12 bg-roze rounded-xl flex items-center justify-center mb-6">
                                <svg class="w-6 h-6 text-zwart" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                                </svg>
                            </div>
                            <h3 class="font-serif text-xl font-bold mb-3">Blijvend resultaat</h3>
                            <p class="text-zwart/60 leading-relaxed">
                                In de weken na de behandeling breekt je lichaam de bevroren vetcellen op natuurlijke wijze af. Het resultaat is zichtbaar, meetbaar en blijvend.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            {{-- CTA --}}
            <div class="reveal mt-16 text-center">
                <a href="#contact" class="inline-flex items-center justify-center bg-zwart text-creme px-7 py-3.5 rounded-full text-sm font-semibold hover:bg-roze-dark transition-colors">
                    Plan jouw gratis consult
                </a>
            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- TESTIMONIALS — header rechts uitgelijnd --}}
    {{-- ============================================ --}}
    <section class="py-16 sm:py-24 lg:py-32 bg-roze-light/40 overflow-hidden">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-8">
            {{-- Header rechts uitgelijnd --}}
            <div class="reveal-right flex justify-center mb-16">
                <div class="max-w-md text-center">
                    <p class="text-roze-dark text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Klantervaringen</p>
                    <h2 class="font-serif text-3xl sm:text-4xl md:text-5xl font-bold">Resultaten van cryolipolyse</h2>
                </div>
            </div>
        </div>

        {{-- Mobiele slideshow --}}
        <div id="review-slideshow" class="md:hidden max-w-[1400px] mx-auto px-6">
            <div class="relative overflow-hidden">
                <div id="review-slides" class="flex transition-transform duration-500 ease-[cubic-bezier(0.16,1,0.3,1)]">

                    {{-- Slide 1 — Sandra V. --}}
                    <div class="w-full shrink-0 px-1">
                        <div class="bg-white rounded-2xl p-6 shadow-sm">
                            <div class="flex gap-1 mb-4">
                                @for($i = 0; $i < 5; $i++)
                                    <svg class="w-4 h-4 text-roze" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                @endfor
                            </div>
                            <p class="text-zwart/70 leading-relaxed mb-6 italic text-sm">
                                "Na twee cryolipolyse behandelingen met de Body Wizard zag ik al duidelijk verschil. Het vetbevriezen was pijnloos en het resultaat is echt zichtbaar."
                            </p>
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-roze rounded-full flex items-center justify-center">
                                    <span class="font-serif font-bold text-sm text-zwart">SV</span>
                                </div>
                                <div>
                                    <p class="font-medium text-sm">Sandra V.</p>
                                    <p class="text-xs text-zwart/50">Cryolipolyse</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Slide 2 — Marieke K. --}}
                    <div class="w-full shrink-0 px-1">
                        <div class="bg-white rounded-2xl p-6 shadow-sm">
                            <div class="flex gap-1 mb-4">
                                @for($i = 0; $i < 5; $i++)
                                    <svg class="w-4 h-4 text-roze" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                @endfor
                            </div>
                            <p class="text-zwart/70 leading-relaxed mb-6 italic text-sm">
                                "De persoonlijke aanpak bij N.O.A Trinity is top. Na de body sculpting behandeling voelde ik me al direct strakker. Fijn dat alles niet-invasief is."
                            </p>
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-roze-light rounded-full flex items-center justify-center">
                                    <span class="font-serif font-bold text-sm text-zwart">MK</span>
                                </div>
                                <div>
                                    <p class="font-medium text-sm">Marieke K.</p>
                                    <p class="text-xs text-zwart/50">Body Sculpting</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Slide 3 — Laura B. --}}
                    <div class="w-full shrink-0 px-1">
                        <div class="bg-white rounded-2xl p-6 shadow-sm">
                            <div class="flex gap-1 mb-4">
                                @for($i = 0; $i < 5; $i++)
                                    <svg class="w-4 h-4 text-roze" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                @endfor
                            </div>
                            <p class="text-zwart/70 leading-relaxed mb-6 italic text-sm">
                                "De combinatie van cryolipolyse en body sculpting heeft echt het verschil gemaakt. Professionele apparatuur en een behandelplan volledig op maat."
                            </p>
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-roze rounded-full flex items-center justify-center">
                                    <span class="font-serif font-bold text-sm text-zwart">LB</span>
                                </div>
                                <div>
                                    <p class="font-medium text-sm">Laura B.</p>
                                    <p class="text-xs text-zwart/50">Cryolipolyse & Body Sculpting</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            {{-- Dots --}}
            <div class="flex justify-center gap-2 mt-6">
                <button class="review-dot w-2.5 h-2.5 rounded-full bg-roze-dark transition-all duration-300" data-slide="0" aria-label="Review 1"></button>
                <button class="review-dot w-2.5 h-2.5 rounded-full bg-roze-dark/30 transition-all duration-300" data-slide="1" aria-label="Review 2"></button>
                <button class="review-dot w-2.5 h-2.5 rounded-full bg-roze-dark/30 transition-all duration-300" data-slide="2" aria-label="Review 3"></button>
            </div>
        </div>

        {{-- Desktop marquee --}}
        <div class="hidden md:block marquee-container relative" style="mask-image: linear-gradient(to right, transparent, black 8%, black 92%, transparent); -webkit-mask-image: linear-gradient(to right, transparent, black 8%, black 92%, transparent);">
            <div class="marquee-track flex animate-marquee">

                @for($set = 0; $set < 2; $set++)
                <div class="flex gap-8 shrink-0 pr-8" @if($set > 0) aria-hidden="true" @endif>

                    @for($repeat = 0; $repeat < 2; $repeat++)
                    {{-- Review 1 — Sandra V. --}}
                    <div class="shrink-0 w-[340px] bg-white rounded-2xl p-8 shadow-sm">
                        <div class="flex gap-1 mb-4">
                            @for($i = 0; $i < 5; $i++)
                                <svg class="w-5 h-5 text-roze" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            @endfor
                        </div>
                        <p class="text-zwart/70 leading-relaxed mb-6 italic">
                            "Na twee cryolipolyse behandelingen met de Body Wizard zag ik al duidelijk verschil. Het vetbevriezen was pijnloos en het resultaat is echt zichtbaar."
                        </p>
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-roze rounded-full flex items-center justify-center">
                                <span class="font-serif font-bold text-sm text-zwart">SV</span>
                            </div>
                            <div>
                                <p class="font-medium text-sm">Sandra V.</p>
                                <p class="text-xs text-zwart/50">Cryolipolyse</p>
                            </div>
                        </div>
                    </div>

                    {{-- Review 2 — Marieke K. --}}
                    <div class="shrink-0 w-[340px] bg-white rounded-2xl p-8 shadow-sm">
                        <div class="flex gap-1 mb-4">
                            @for($i = 0; $i < 5; $i++)
                                <svg class="w-5 h-5 text-roze" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            @endfor
                        </div>
                        <p class="text-zwart/70 leading-relaxed mb-6 italic">
                            "De persoonlijke aanpak bij N.O.A Trinity is top. Na de body sculpting behandeling voelde ik me al direct strakker. Fijn dat alles niet-invasief is."
                        </p>
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-roze-light rounded-full flex items-center justify-center">
                                <span class="font-serif font-bold text-sm text-zwart">MK</span>
                            </div>
                            <div>
                                <p class="font-medium text-sm">Marieke K.</p>
                                <p class="text-xs text-zwart/50">Body Sculpting</p>
                            </div>
                        </div>
                    </div>

                    {{-- Review 3 — Laura B. --}}
                    <div class="shrink-0 w-[340px] bg-white rounded-2xl p-8 shadow-sm">
                        <div class="flex gap-1 mb-4">
                            @for($i = 0; $i < 5; $i++)
                                <svg class="w-5 h-5 text-roze" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            @endfor
                        </div>
                        <p class="text-zwart/70 leading-relaxed mb-6 italic">
                            "De combinatie van cryolipolyse en body sculpting heeft echt het verschil gemaakt. Professionele apparatuur en een behandelplan volledig op maat."
                        </p>
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-roze rounded-full flex items-center justify-center">
                                <span class="font-serif font-bold text-sm text-zwart">LB</span>
                            </div>
                            <div>
                                <p class="font-medium text-sm">Laura B.</p>
                                <p class="text-xs text-zwart/50">Cryolipolyse & Body Sculpting</p>
                            </div>
                        </div>
                    </div>
                    @endfor

                </div>
                @endfor

            </div>
        </div>

        <div class="max-w-[1400px] mx-auto px-6 lg:px-8">
            {{-- CTA --}}
            <div class="reveal mt-16 text-center">
                <a href="#contact" class="inline-flex items-center justify-center bg-zwart text-creme px-7 py-3.5 rounded-full text-sm font-semibold hover:bg-roze-dark transition-colors">
                    Start jouw transformatie
                </a>
            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- CALL-TO-ACTION BANNER — gecentreerd (bewust) --}}
    {{-- ============================================ --}}
    <section id="contact" class="py-16 sm:py-24 lg:py-32 bg-roze relative overflow-hidden">
        <div class="absolute top-0 right-0 w-64 h-64 bg-roze-dark/10 rounded-full -translate-y-1/2 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-48 h-48 bg-lavendel/10 rounded-full translate-y-1/2 -translate-x-1/2"></div>

        <div class="reveal-scale relative z-10 max-w-3xl mx-auto px-6 lg:px-8 text-center">
            <h2 class="font-serif text-3xl sm:text-4xl md:text-5xl font-bold text-zwart mb-6">
                Klaar om hardnekkig vet te verliezen?
            </h2>
            <p class="text-base sm:text-lg text-zwart/70 leading-relaxed mb-8 sm:mb-10 max-w-xl mx-auto">
                Boek een gratis en vrijblijvend consult voor cryolipolyse of body sculpting. Samen bespreken we jouw doelen en stellen we een persoonlijk behandelplan op.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="tel:+31600000000" class="inline-flex items-center justify-center gap-2 bg-zwart text-creme px-8 py-4 rounded-full text-sm font-semibold hover:bg-roze-dark transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    Bel ons
                </a>
                <a href="mailto:info@noatrinity.nl" class="inline-flex items-center justify-center gap-2 border border-zwart/15 text-zwart px-8 py-4 rounded-full text-sm font-semibold hover:border-zwart/30 hover:text-roze-dark transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    Stuur een e-mail
                </a>
            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- FOOTER --}}
    {{-- ============================================ --}}
    <footer class="bg-zwart text-white/80 pt-12 sm:pt-16 pb-8">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 sm:gap-12 mb-12 sm:mb-16">

                <div class="reveal reveal-delay-1 col-span-2 md:col-span-1">
                    <a href="#home">
                        <img src="/assets/logo.png" alt="NOA Trinity" class="max-h-10 brightness-0 invert">
                    </a>
                    <p class="mt-4 text-sm leading-relaxed text-white/50">
                        Specialist in cryolipolyse (vetbevriezen) en body sculpting met de gecertificeerde Body Wizard van Medcos. Niet-invasieve lichaamsvormgeving met blijvend resultaat.
                    </p>
                </div>

                <div class="reveal reveal-delay-2">
                    <h4 class="font-serif text-lg font-bold text-white mb-4">Menu</h4>
                    <ul class="space-y-3">
                        <li><a href="#home" class="text-sm font-semibold hover:text-roze transition-colors">Home</a></li>
                        <li><a href="#diensten" class="text-sm font-semibold hover:text-roze transition-colors">Behandelingen</a></li>
                        <li><a href="#over-ons" class="text-sm font-semibold hover:text-roze transition-colors">Over mij</a></li>
                        <li><a href="#contact" class="text-sm font-semibold hover:text-roze transition-colors">Contact</a></li>
                    </ul>
                </div>

                <div class="reveal reveal-delay-3">
                    <h4 class="font-serif text-lg font-bold text-white mb-4">Contact</h4>
                    <ul class="space-y-3 text-sm">
                        <li class="flex items-start gap-2">
                            <svg class="w-4 h-4 mt-0.5 shrink-0 text-roze" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <span>Adres komt hier<br>Stad, Postcode</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 shrink-0 text-roze" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <a href="tel:+31600000000" class="hover:text-roze transition-colors">+31 6 00 00 00 00</a>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 shrink-0 text-roze" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <a href="mailto:info@noatrinity.nl" class="hover:text-roze transition-colors">info@noatrinity.nl</a>
                        </li>
                    </ul>
                </div>

                <div class="reveal reveal-delay-4">
                    <h4 class="font-serif text-lg font-bold text-white mb-4">Openingstijden</h4>
                    <ul class="space-y-2 text-sm">
                        <li class="flex justify-between">
                            <span>Maandag - Vrijdag</span>
                            <span class="text-white/50">09:00 - 18:00</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Zaterdag</span>
                            <span class="text-white/50">10:00 - 16:00</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Zondag</span>
                            <span class="text-white/50">Gesloten</span>
                        </li>
                    </ul>

                    <div class="flex gap-4 mt-6">
                        <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-roze/30 transition-colors" aria-label="Instagram">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-roze/30 transition-colors" aria-label="Facebook">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-roze/30 transition-colors" aria-label="WhatsApp">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                            </svg>
                        </a>
                    </div>
                </div>

            </div>

            <div class="border-t border-white/10 pt-8 flex flex-col sm:flex-row items-center justify-between gap-4">
                <p class="text-xs sm:text-sm text-white/40">
                    &copy; {{ date('Y') }} N.O.A Trinity. Alle rechten voorbehouden.
                </p>
                <div class="flex flex-wrap items-center justify-center gap-x-6 gap-y-2">
                    <a href="#" class="text-xs sm:text-sm text-white/40 hover:text-roze transition-colors">Privacyverklaring</a>
                    <a href="#" class="text-xs sm:text-sm text-white/40 hover:text-roze transition-colors">Cookiebeleid</a>
                    <a href="#" class="text-xs sm:text-sm text-white/40 hover:text-roze transition-colors">Algemene voorwaarden</a>
                </div>
            </div>
            <div class="mt-6 text-right">
                <p class="text-xs text-white/30">
                    Gemaakt door <a href="https://halfmanmedia.nl" target="_blank" rel="noopener noreferrer" class="hover:text-roze transition-colors">HalfmanMedia</a>
                </p>
            </div>
        </div>
    </footer>

    {{-- ============================================ --}}
    {{-- COOKIE CONSENT BAR --}}
    {{-- ============================================ --}}
    <div id="cookie-consent" class="fixed bottom-0 left-0 right-0 z-50 transition-all duration-500 translate-y-full">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-8 pb-6">
            <div class="bg-white rounded-2xl shadow-xl border border-zwart/5 p-6 sm:p-8 flex flex-col sm:flex-row items-start sm:items-center gap-6">
                <div class="flex-1">
                    <h3 class="font-serif text-lg font-bold mb-1">Wij gebruiken cookies</h3>
                    <p class="text-sm text-zwart/60 leading-relaxed">
                        Wij gebruiken cookies om je ervaring op onze website te verbeteren en om ons websiteverkeer te analyseren. Door op "Accepteren" te klikken ga je akkoord met ons
                        <a href="#" class="text-roze-dark underline underline-offset-2 hover:text-zwart transition-colors">cookiebeleid</a>.
                    </p>
                </div>
                <div class="flex items-center gap-3 shrink-0">
                    <button id="cookie-decline" class="px-5 py-2.5 rounded-full text-sm font-semibold border border-zwart/15 text-zwart/70 hover:border-zwart/30 hover:text-zwart transition-colors">
                        Weigeren
                    </button>
                    <button id="cookie-accept" class="px-5 py-2.5 rounded-full text-sm font-semibold bg-zwart text-creme hover:bg-roze-dark transition-colors">
                        Accepteren
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================ --}}
    {{-- JAVASCRIPT --}}
    {{-- ============================================ --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const navbar = document.getElementById('navbar');
            const mobileMenuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            const mobileLinks = document.querySelectorAll('.mobile-link');
            let menuOpen = false;

            function handleScroll() {
                if (window.scrollY > 50) {
                    navbar.classList.add('bg-creme/95', 'backdrop-blur-md', 'shadow-sm');
                } else {
                    navbar.classList.remove('bg-creme/95', 'backdrop-blur-md', 'shadow-sm');
                }
            }
            window.addEventListener('scroll', handleScroll);
            handleScroll();

            var hamburgerTop = document.getElementById('hamburger-top');
            var hamburgerMid = document.getElementById('hamburger-mid');
            var hamburgerBot = document.getElementById('hamburger-bot');
            var menuLinks = document.querySelectorAll('.mobile-menu-link');

            function openMenu() {
                menuOpen = true;
                // Hamburger → X animatie
                hamburgerTop.style.transform = 'translateY(7px) rotate(45deg)';
                hamburgerTop.style.width = '24px';
                hamburgerMid.style.opacity = '0';
                hamburgerMid.style.transform = 'scaleX(0)';
                hamburgerBot.style.transform = 'translateY(-7px) rotate(-45deg)';
                hamburgerBot.style.width = '24px';
                hamburgerBot.style.alignSelf = 'center';

                // Menu overlay tonen
                mobileMenu.classList.remove('opacity-0', 'pointer-events-none');
                mobileMenu.classList.add('opacity-100', 'pointer-events-auto');
                document.body.style.overflow = 'hidden';

                // Staggered link animaties
                menuLinks.forEach(function (link, i) {
                    setTimeout(function () {
                        link.style.opacity = '1';
                        link.style.transform = 'translateY(0)';
                        link.style.transition = 'opacity 0.4s cubic-bezier(0.16, 1, 0.3, 1), transform 0.4s cubic-bezier(0.16, 1, 0.3, 1)';
                    }, 100 + i * 70);
                });
            }

            function closeMenu() {
                menuOpen = false;
                // X → Hamburger animatie
                hamburgerTop.style.transform = '';
                hamburgerTop.style.width = '';
                hamburgerMid.style.opacity = '';
                hamburgerMid.style.transform = '';
                hamburgerBot.style.transform = '';
                hamburgerBot.style.width = '';
                hamburgerBot.style.alignSelf = '';

                // Links resetten
                menuLinks.forEach(function (link) {
                    link.style.transition = 'opacity 0.2s ease, transform 0.2s ease';
                    link.style.opacity = '0';
                    link.style.transform = 'translateY(16px)';
                });

                // Menu overlay verbergen
                mobileMenu.classList.add('opacity-0', 'pointer-events-none');
                mobileMenu.classList.remove('opacity-100', 'pointer-events-auto');
                document.body.style.overflow = '';
            }

            mobileMenuBtn.addEventListener('click', function () {
                if (menuOpen) {
                    closeMenu();
                } else {
                    openMenu();
                }
            });

            mobileLinks.forEach(function (link) {
                link.addEventListener('click', function () {
                    closeMenu();
                });
            });

            // Scroll-in-view animaties (Intersection Observer)
            var revealElements = document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-scale');
            if ('IntersectionObserver' in window) {
                var revealObserver = new IntersectionObserver(function (entries) {
                    entries.forEach(function (entry) {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('in-view');
                            revealObserver.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.15, rootMargin: '0px 0px -50px 0px' });

                revealElements.forEach(function (el) {
                    revealObserver.observe(el);
                });
            } else {
                // Fallback: toon alles direct
                revealElements.forEach(function (el) {
                    el.classList.add('in-view');
                });
            }

            // Review slideshow (mobiel)
            var reviewSlides = document.getElementById('review-slides');
            var reviewDots = document.querySelectorAll('.review-dot');
            if (reviewSlides && reviewDots.length > 0) {
                var currentSlide = 0;
                var totalSlides = 3;
                var slideInterval;

                function goToSlide(index) {
                    currentSlide = index;
                    reviewSlides.style.transform = 'translateX(-' + (currentSlide * 100) + '%)';
                    reviewDots.forEach(function (dot, i) {
                        if (i === currentSlide) {
                            dot.classList.remove('bg-roze-dark/30');
                            dot.classList.add('bg-roze-dark', 'w-6');
                        } else {
                            dot.classList.remove('bg-roze-dark', 'w-6');
                            dot.classList.add('bg-roze-dark/30');
                        }
                    });
                }

                function nextSlide() {
                    goToSlide((currentSlide + 1) % totalSlides);
                }

                function startAutoplay() {
                    slideInterval = setInterval(nextSlide, 5000);
                }

                function resetAutoplay() {
                    clearInterval(slideInterval);
                    startAutoplay();
                }

                reviewDots.forEach(function (dot) {
                    dot.addEventListener('click', function () {
                        goToSlide(parseInt(this.getAttribute('data-slide')));
                        resetAutoplay();
                    });
                });

                // Swipe support
                var touchStartX = 0;
                var touchEndX = 0;
                var slideshowEl = document.getElementById('review-slideshow');

                slideshowEl.addEventListener('touchstart', function (e) {
                    touchStartX = e.changedTouches[0].screenX;
                }, { passive: true });

                slideshowEl.addEventListener('touchend', function (e) {
                    touchEndX = e.changedTouches[0].screenX;
                    var diff = touchStartX - touchEndX;
                    if (Math.abs(diff) > 50) {
                        if (diff > 0 && currentSlide < totalSlides - 1) {
                            goToSlide(currentSlide + 1);
                        } else if (diff < 0 && currentSlide > 0) {
                            goToSlide(currentSlide - 1);
                        }
                        resetAutoplay();
                    }
                }, { passive: true });

                goToSlide(0);
                startAutoplay();
            }

            // Cookie consent
            var cookieBar = document.getElementById('cookie-consent');
            var cookieAccept = document.getElementById('cookie-accept');
            var cookieDecline = document.getElementById('cookie-decline');

            if (!localStorage.getItem('cookie-consent')) {
                setTimeout(function () {
                    cookieBar.classList.remove('translate-y-full');
                    cookieBar.classList.add('translate-y-0');
                }, 1500);
            }

            function hideCookieBar(choice) {
                localStorage.setItem('cookie-consent', choice);
                cookieBar.classList.add('translate-y-full');
                cookieBar.classList.remove('translate-y-0');
            }

            cookieAccept.addEventListener('click', function () {
                hideCookieBar('accepted');
            });

            cookieDecline.addEventListener('click', function () {
                hideCookieBar('declined');
            });
        });
    </script>

</body>
</html>
