@extends('errors.pagina')

@section('title', 'Pagina niet gevonden | N.O.A Trinity')
@section('meta_description', 'Deze pagina bestaat niet (meer). Bekijk de behandelingen van N.O.A Trinity of neem contact op.')
@section('code', '404')
@section('heading', 'Deze pagina bestaat niet (meer)')
@section('message', 'Misschien is de pagina verplaatst of zit er een typefout in het adres. Geen zorgen: hieronder vind je snel de weg terug.')

@section('extra')
    <section class="py-16 sm:py-24 bg-white">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-8">
            <div class="max-w-2xl mb-10 sm:mb-12">
                <p class="text-roze-dark text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Misschien zoek je</p>
                <h2 class="font-serif text-3xl sm:text-4xl font-bold">Onze behandelingen</h2>
            </div>

            <div class="grid md:grid-cols-3 gap-6 lg:gap-8">
                @foreach([
                    ['route' => 'cryolipolyse', 'naam' => 'Cryolipolyse (vetbevriezen)', 'afbeelding' => '/images/cryolipolyse/body-wizard-behandeling.jpg'],
                    ['route' => 'body-sculpting', 'naam' => 'Body Sculpting', 'afbeelding' => '/images/bodysculpting/bodysculpting-pro-4.jpg'],
                    ['route' => 'laserontharen', 'naam' => 'Diode Laser – Laserontharing', 'afbeelding' => '/images/laser/laser-benen-handstuk.jpg'],
                ] as $behandeling)
                    <a href="{{ route($behandeling['route']) }}" class="group bg-creme rounded-2xl overflow-hidden hover:shadow-lg transition-shadow duration-300">
                        <div class="h-48 overflow-hidden">
                            <img src="{{ $behandeling['afbeelding'] }}" alt="{{ $behandeling['naam'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                        </div>
                        <div class="p-6 flex items-center justify-between gap-4">
                            <span class="font-serif text-xl font-bold">{{ $behandeling['naam'] }}</span>
                            <svg class="w-5 h-5 shrink-0 text-roze-dark transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </div>
                    </a>
                @endforeach
            </div>

            <p class="mt-10 text-zwart/60">
                Of bekijk <a href="{{ route('gallerij') }}" class="text-roze-dark font-semibold underline underline-offset-2 hover:text-zwart transition-colors">de galerij</a>
                en lees <a href="{{ route('over-mij') }}" class="text-roze-dark font-semibold underline underline-offset-2 hover:text-zwart transition-colors">meer over mij</a>.
            </p>
        </div>
    </section>
@endsection
