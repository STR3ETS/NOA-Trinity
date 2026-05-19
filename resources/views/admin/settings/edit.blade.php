@extends('admin.layouts.admin')

@section('title', 'Instellingen')

@section('content')
    {{-- Header --}}
    <div class="mb-10">
        <p class="text-roze-dark text-xs tracking-[0.3em] uppercase font-semibold mb-2">Instellingen</p>
        <h1 class="font-serif text-3xl font-bold text-zwart">Website instellingen</h1>
        <p class="text-zwart/50 text-sm mt-1">Pas contactgegevens en openingstijden aan die op de website getoond worden.</p>
    </div>

    <form method="POST" action="{{ route('admin.settings.update') }}" class="space-y-8 max-w-2xl">
        @csrf
        @method('PUT')

        {{-- Contactgegevens --}}
        <div class="bg-white/80 backdrop-blur-sm rounded-2xl border border-zwart/5 p-6 sm:p-8">
            <h2 class="font-serif text-xl font-bold text-zwart mb-1">Contactgegevens</h2>
            <p class="text-zwart/40 text-sm mb-6">Deze gegevens worden getoond in de footer, contactpagina en homepage.</p>

            <div class="space-y-6">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label for="telefoon" class="block text-sm font-semibold text-zwart mb-2">Telefoonnummer</label>
                        <input type="text" id="telefoon" name="telefoon" value="{{ old('telefoon', $settings->telefoon) }}" required
                               class="w-full px-5 py-3.5 rounded-xl border border-zwart/10 bg-creme/50 text-zwart placeholder:text-zwart/30 focus:outline-none focus:border-roze-dark focus:ring-1 focus:ring-roze-dark transition-colors text-sm"
                               placeholder="+31 6 12 34 56 78">
                        @error('telefoon') <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-semibold text-zwart mb-2">E-mailadres</label>
                        <input type="email" id="email" name="email" value="{{ old('email', $settings->email) }}" required
                               class="w-full px-5 py-3.5 rounded-xl border border-zwart/10 bg-creme/50 text-zwart placeholder:text-zwart/30 focus:outline-none focus:border-roze-dark focus:ring-1 focus:ring-roze-dark transition-colors text-sm"
                               placeholder="info@noatrinity.nl">
                        @error('email') <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label for="adres" class="block text-sm font-semibold text-zwart mb-2">Adres</label>
                        <input type="text" id="adres" name="adres" value="{{ old('adres', $settings->adres) }}" required
                               class="w-full px-5 py-3.5 rounded-xl border border-zwart/10 bg-creme/50 text-zwart placeholder:text-zwart/30 focus:outline-none focus:border-roze-dark focus:ring-1 focus:ring-roze-dark transition-colors text-sm"
                               placeholder="Straatweg 123">
                        @error('adres') <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label for="postcode_stad" class="block text-sm font-semibold text-zwart mb-2">Postcode & Stad</label>
                        <input type="text" id="postcode_stad" name="postcode_stad" value="{{ old('postcode_stad', $settings->postcode_stad) }}" required
                               class="w-full px-5 py-3.5 rounded-xl border border-zwart/10 bg-creme/50 text-zwart placeholder:text-zwart/30 focus:outline-none focus:border-roze-dark focus:ring-1 focus:ring-roze-dark transition-colors text-sm"
                               placeholder="1234 AB Amsterdam">
                        @error('postcode_stad') <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p> @enderror
                    </div>
                </div>
            </div>
        </div>

        {{-- Openingstijden --}}
        <div class="bg-white/80 backdrop-blur-sm rounded-2xl border border-zwart/5 p-6 sm:p-8">
            <h2 class="font-serif text-xl font-bold text-zwart mb-1">Openingstijden</h2>
            <p class="text-zwart/40 text-sm mb-6">Worden getoond in de footer en op de contactpagina.</p>

            <div class="space-y-6">
                <div>
                    <label for="openingstijden_ma_vr" class="block text-sm font-semibold text-zwart mb-2">Maandag - Vrijdag</label>
                    <input type="text" id="openingstijden_ma_vr" name="openingstijden_ma_vr" value="{{ old('openingstijden_ma_vr', $settings->openingstijden_ma_vr) }}" required
                           class="w-full px-5 py-3.5 rounded-xl border border-zwart/10 bg-creme/50 text-zwart placeholder:text-zwart/30 focus:outline-none focus:border-roze-dark focus:ring-1 focus:ring-roze-dark transition-colors text-sm"
                           placeholder="09:00 - 18:00">
                    @error('openingstijden_ma_vr') <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p> @enderror
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label for="openingstijden_za" class="block text-sm font-semibold text-zwart mb-2">Zaterdag</label>
                        <input type="text" id="openingstijden_za" name="openingstijden_za" value="{{ old('openingstijden_za', $settings->openingstijden_za) }}" required
                               class="w-full px-5 py-3.5 rounded-xl border border-zwart/10 bg-creme/50 text-zwart placeholder:text-zwart/30 focus:outline-none focus:border-roze-dark focus:ring-1 focus:ring-roze-dark transition-colors text-sm"
                               placeholder="10:00 - 16:00">
                        @error('openingstijden_za') <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label for="openingstijden_zo" class="block text-sm font-semibold text-zwart mb-2">Zondag</label>
                        <input type="text" id="openingstijden_zo" name="openingstijden_zo" value="{{ old('openingstijden_zo', $settings->openingstijden_zo) }}" required
                               class="w-full px-5 py-3.5 rounded-xl border border-zwart/10 bg-creme/50 text-zwart placeholder:text-zwart/30 focus:outline-none focus:border-roze-dark focus:ring-1 focus:ring-roze-dark transition-colors text-sm"
                               placeholder="Gesloten">
                        @error('openingstijden_zo') <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p> @enderror
                    </div>
                </div>
            </div>
        </div>

        {{-- Opslaan --}}
        <div class="flex items-center gap-4">
            <button type="submit"
                    class="bg-zwart text-creme px-7 py-3.5 rounded-full text-sm font-semibold hover:bg-roze-dark transition-colors">
                Opslaan
            </button>
        </div>
    </form>
@endsection
