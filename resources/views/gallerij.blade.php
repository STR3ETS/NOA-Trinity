@extends('layouts.app')

@section('title', 'Galerij — Voor & Na Resultaten | N.O.A Trinity')
@section('meta_description', 'Bekijk echte voor- en na-resultaten van cryolipolyse en body sculpting behandelingen bij N.O.A Trinity. Overtuig jezelf van de kracht van de Body Wizard.')

@section('content')

    {{-- ============================================ --}}
    {{-- HERO — subpagina stijl, tekst + blobs --}}
    {{-- ============================================ --}}
    <section class="relative overflow-hidden bg-gradient-to-br from-creme via-roze-light/30 to-creme pt-32 sm:pt-40 pb-16 sm:pb-24">
        {{-- Decoratieve blur blobs --}}
        <div class="absolute top-16 right-[10%] w-64 h-64 bg-roze/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-[5%] w-48 h-48 bg-lavendel/15 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 left-1/3 w-24 h-24 bg-roze-light/30 rounded-full blur-2xl"></div>

        {{-- Decoratieve SVG blob --}}
        <svg class="absolute -bottom-16 -right-16 w-72 h-72 opacity-10 sm:opacity-15" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <path fill="#B8848B" d="M44.4,-63C56.5,-52.4,64.6,-38,67.2,-23.4C69.9,-8.7,67.2,6.1,64.4,22.8C61.6,39.5,58.6,58.1,47.9,69.8C37.1,81.6,18.6,86.6,1.5,84.5C-15.5,82.4,-31,73.2,-44.1,62.2C-57.2,51.2,-68,38.4,-75.4,22.8C-82.8,7.2,-86.8,-11.1,-78.9,-22.6C-71,-34.1,-51.2,-38.6,-36.1,-48.3C-20.9,-58,-10.5,-72.8,2.8,-76.7C16.2,-80.6,32.3,-73.7,44.4,-63Z" transform="translate(100 100)" />
        </svg>
        <svg class="absolute -top-10 -left-10 w-48 h-48 opacity-8" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <path fill="#8E9AAF" d="M44.4,-63C56.5,-52.4,64.6,-38,67.2,-23.4C69.9,-8.7,67.2,6.1,64.4,22.8C61.6,39.5,58.6,58.1,47.9,69.8C37.1,81.6,18.6,86.6,1.5,84.5C-15.5,82.4,-31,73.2,-44.1,62.2C-57.2,51.2,-68,38.4,-75.4,22.8C-82.8,7.2,-86.8,-11.1,-78.9,-22.6C-71,-34.1,-51.2,-38.6,-36.1,-48.3C-20.9,-58,-10.5,-72.8,2.8,-76.7C16.2,-80.6,32.3,-73.7,44.4,-63Z" transform="translate(100 100)" />
        </svg>

        <div class="relative z-10 max-w-[1400px] mx-auto px-6 lg:px-8 text-center">
            <p class="reveal text-roze-dark text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Resultaten</p>
            <h1 class="reveal font-serif text-4xl sm:text-5xl md:text-6xl font-bold leading-tight mb-6">
                Voor & Na<br>
                <span class="text-roze-dark">Galerij</span>
            </h1>
            <p class="reveal text-base sm:text-lg md:text-xl text-zwart/70 leading-relaxed max-w-2xl mx-auto mb-8 sm:mb-10">
                Bekijk de echte resultaten van onze behandelingen. Elke transformatie vertelt een uniek verhaal van zelfvertrouwen en welzijn.
            </p>
            <div class="reveal flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="inline-flex items-center justify-center bg-zwart text-creme px-8 py-4 rounded-full text-sm font-semibold hover:bg-roze-dark transition-colors">
                    Boek een gratis consult
                </a>
            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- FILTER TABS + GALERIJ GRID --}}
    {{-- ============================================ --}}
    <section class="py-16 sm:py-24 bg-white">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-8">

            {{-- Filter tabs --}}
            <div class="reveal flex flex-wrap justify-center gap-2 mb-12">
                <a href="{{ route('gallerij') }}"
                   class="px-5 py-2.5 rounded-full text-sm font-medium transition-colors {{ $activeFilter === 'alles' ? 'bg-zwart text-creme' : 'bg-creme text-zwart/60 hover:text-zwart hover:bg-creme/80' }}">
                    Alles
                </a>
                <a href="{{ route('gallerij', ['type' => 'cryolipolyse']) }}"
                   class="px-5 py-2.5 rounded-full text-sm font-medium transition-colors {{ $activeFilter === 'cryolipolyse' ? 'bg-zwart text-creme' : 'bg-creme text-zwart/60 hover:text-zwart hover:bg-creme/80' }}">
                    Cryolipolyse
                </a>
                <a href="{{ route('gallerij', ['type' => 'body-sculpting']) }}"
                   class="px-5 py-2.5 rounded-full text-sm font-medium transition-colors {{ $activeFilter === 'body-sculpting' ? 'bg-zwart text-creme' : 'bg-creme text-zwart/60 hover:text-zwart hover:bg-creme/80' }}">
                    Body Sculpting
                </a>
                <a href="{{ route('gallerij', ['type' => 'combinatie']) }}"
                   class="px-5 py-2.5 rounded-full text-sm font-medium transition-colors {{ $activeFilter === 'combinatie' ? 'bg-zwart text-creme' : 'bg-creme text-zwart/60 hover:text-zwart hover:bg-creme/80' }}">
                    Combinatie
                </a>
            </div>

            {{-- Galerij grid --}}
            @if($items->isEmpty())
                <div class="text-center py-16">
                    <svg class="w-16 h-16 text-zwart/10 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    <p class="text-zwart/40 text-lg">Nog geen resultaten beschikbaar.</p>
                    <p class="text-zwart/30 text-sm mt-2">Binnenkort voegen we hier voor/na foto's toe.</p>
                </div>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($items as $item)
                        <div class="reveal-scale group">
                            <div class="bg-creme rounded-2xl overflow-hidden border border-zwart/5 hover:shadow-lg transition-shadow">
                                {{-- Foto's naast elkaar --}}
                                <div class="grid grid-cols-2">
                                    <div class="relative aspect-[3/4] overflow-hidden">
                                        <img src="{{ $item->before_image_url }}" alt="Voor — {{ $item->title }}" class="w-full h-full object-cover">
                                        <span class="absolute bottom-2 left-2 bg-zwart/60 text-creme text-xs px-2.5 py-1 rounded-full font-medium">Voor</span>
                                    </div>
                                    <div class="relative aspect-[3/4] overflow-hidden">
                                        <img src="{{ $item->after_image_url }}" alt="Na — {{ $item->title }}" class="w-full h-full object-cover">
                                        <span class="absolute bottom-2 right-2 bg-roze-dark text-creme text-xs px-2.5 py-1 rounded-full font-medium">Na</span>
                                    </div>
                                </div>
                                {{-- Info --}}
                                <div class="p-5">
                                    <div class="flex items-center justify-between mb-2">
                                        <h3 class="font-semibold text-zwart text-sm">{{ $item->title }}</h3>
                                        <span class="inline-block px-2.5 py-1 rounded-full text-xs font-medium bg-roze-light text-roze-dark capitalize">
                                            {{ str_replace('-', ' ', $item->treatment_type) }}
                                        </span>
                                    </div>
                                    @if($item->description)
                                        <p class="text-zwart/50 text-sm leading-relaxed">{{ $item->description }}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>

@endsection

@section('cta')
    <section class="py-16 sm:py-24 lg:py-32 bg-roze relative overflow-hidden">
        <div class="absolute top-0 right-0 w-64 h-64 bg-roze-dark/10 rounded-full -translate-y-1/2 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-48 h-48 bg-lavendel/10 rounded-full translate-y-1/2 -translate-x-1/2"></div>

        <div class="reveal-scale relative z-10 max-w-3xl mx-auto px-6 lg:px-8 text-center">
            <h2 class="font-serif text-3xl sm:text-4xl md:text-5xl font-bold text-zwart mb-6">
                Klaar voor jouw transformatie?
            </h2>
            <p class="text-base sm:text-lg text-zwart/70 leading-relaxed mb-8 sm:mb-10 max-w-xl mx-auto">
                Bekijk onze resultaten en overtuig jezelf. Boek een gratis consult en ontdek wat we voor jou kunnen betekenen.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="inline-flex items-center justify-center bg-zwart text-creme px-8 py-4 rounded-full text-sm font-semibold hover:bg-roze-dark transition-colors">
                    Gratis consult inplannen
                </a>
                <a href="{{ route('cryolipolyse') }}" class="inline-flex items-center justify-center border border-zwart/15 text-zwart px-8 py-4 rounded-full text-sm font-semibold hover:border-zwart/30 hover:text-roze-dark transition-colors">
                    Bekijk behandelingen
                </a>
            </div>
        </div>
    </section>
@endsection
