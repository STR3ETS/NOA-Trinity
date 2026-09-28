{{-- Gedeelde opmaak voor foutpagina's binnen de site-layout (403, 404, 419, 429). 500 en 503 gebruiken errors.basis. --}}
@extends('layouts.app')

@section('robots', 'noindex, follow')

@section('content')

    <section class="relative overflow-hidden bg-gradient-to-br from-creme via-roze-light/30 to-creme pt-32 sm:pt-40 pb-16 sm:pb-24 min-h-[70svh] flex items-center">
        <div class="absolute top-16 right-[10%] w-64 h-64 bg-roze/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-[5%] w-48 h-48 bg-lavendel/15 rounded-full blur-3xl"></div>

        <svg class="absolute -bottom-16 -right-16 w-72 h-72 opacity-10 sm:opacity-15" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path fill="#B8848B" d="M44.4,-63C56.5,-52.4,64.6,-38,67.2,-23.4C69.9,-8.7,67.2,6.1,64.4,22.8C61.6,39.5,58.6,58.1,47.9,69.8C37.1,81.6,18.6,86.6,1.5,84.5C-15.5,82.4,-31,73.2,-44.1,62.2C-57.2,51.2,-68,38.4,-75.4,22.8C-82.8,7.2,-86.8,-11.1,-78.9,-22.6C-71,-34.1,-51.2,-38.6,-36.1,-48.3C-20.9,-58,-10.5,-72.8,2.8,-76.7C16.2,-80.6,32.3,-73.7,44.4,-63Z" transform="translate(100 100)" />
        </svg>

        <div class="relative z-10 max-w-3xl mx-auto px-6 lg:px-8 text-center w-full">
            <p class="font-serif text-8xl sm:text-9xl font-bold text-roze-dark/30 leading-none mb-4">@yield('code')</p>
            <h1 class="font-serif text-3xl sm:text-4xl md:text-5xl font-bold leading-tight mb-6">@yield('heading')</h1>
            <p class="text-base sm:text-lg text-zwart/70 leading-relaxed max-w-xl mx-auto mb-8 sm:mb-10">@yield('message')</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                @section('actions')
                    <a href="{{ route('home') }}" class="inline-flex items-center justify-center bg-zwart text-creme px-8 py-4 rounded-full text-sm font-semibold hover:bg-roze-dark transition-colors">
                        Naar de homepage
                    </a>
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center border border-zwart/15 text-zwart px-8 py-4 rounded-full text-sm font-semibold hover:border-zwart/30 hover:text-roze-dark transition-colors">
                        Neem contact op
                    </a>
                @show
            </div>
        </div>
    </section>

    @yield('extra')

@endsection
