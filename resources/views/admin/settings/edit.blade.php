@extends('admin.layouts.admin')

@section('title', 'Instellingen')

@section('content')
    {{-- Header --}}
    <div class="mb-10">
        <p class="text-roze-dark text-xs tracking-[0.3em] uppercase font-semibold mb-2">Instellingen</p>
        <h1 class="font-serif text-3xl font-bold text-zwart">Website instellingen</h1>
        <p class="text-zwart/50 text-sm mt-1">Pas contactgegevens, openingstijden, social media en de afsprakenlink aan die op de website getoond worden.</p>
    </div>

    @if(session('success'))
        <div class="mb-6 max-w-2xl bg-green-50 border border-green-200 text-green-800 px-5 py-4 rounded-xl text-sm">
            {{ session('success') }}
        </div>
    @endif

    @php($veld = 'w-full px-5 py-3.5 rounded-xl border border-zwart/10 bg-creme/50 text-zwart placeholder:text-zwart/30 focus:outline-none focus:border-roze-dark focus:ring-1 focus:ring-roze-dark transition-colors text-sm')

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

        {{-- Afspraken & social media --}}
        <div class="bg-white/80 backdrop-blur-sm rounded-2xl border border-zwart/5 p-6 sm:p-8">
            <h2 class="font-serif text-xl font-bold text-zwart mb-1">Afspraken & social media</h2>
            <p class="text-zwart/40 text-sm mb-6">Alle afspraakknoppen op de website openen de online agenda. Laat je een veld leeg, dan wordt het bijbehorende icoon niet getoond.</p>

            <div class="space-y-6">
                <div>
                    <label for="booking_url" class="block text-sm font-semibold text-zwart mb-2">Online agenda (Salonized)</label>
                    <input type="url" id="booking_url" name="booking_url" value="{{ old('booking_url', $settings->booking_url) }}" class="{{ $veld }}" placeholder="https://....salonized.com/widget_bookings/new">
                    <p class="text-zwart/40 text-xs mt-1.5">Leeg laten? Dan verwijzen de afspraakknoppen naar de contactpagina.</p>
                    @error('booking_url') <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p> @enderror
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label for="instagram_url" class="block text-sm font-semibold text-zwart mb-2">Instagram</label>
                        <input type="url" id="instagram_url" name="instagram_url" value="{{ old('instagram_url', $settings->instagram_url) }}" class="{{ $veld }}" placeholder="https://www.instagram.com/...">
                        @error('instagram_url') <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label for="facebook_url" class="block text-sm font-semibold text-zwart mb-2">Facebook</label>
                        <input type="url" id="facebook_url" name="facebook_url" value="{{ old('facebook_url', $settings->facebook_url) }}" class="{{ $veld }}" placeholder="https://www.facebook.com/...">
                        @error('facebook_url') <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div>
                    <label for="whatsapp" class="block text-sm font-semibold text-zwart mb-2">WhatsApp-nummer <span class="text-zwart/40 font-normal">(optioneel)</span></label>
                    <input type="text" id="whatsapp" name="whatsapp" value="{{ old('whatsapp', $settings->whatsapp) }}" class="{{ $veld }}" placeholder="Alleen invullen als dit afwijkt van het telefoonnummer">
                    <p class="text-zwart/40 text-xs mt-1.5">Leeg laten? Dan gebruikt de WhatsApp-knop het telefoonnummer hierboven.</p>
                    @error('whatsapp') <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p> @enderror
                </div>
            </div>
        </div>

        {{-- Openingstijden --}}
        <div class="bg-white/80 backdrop-blur-sm rounded-2xl border border-zwart/5 p-6 sm:p-8">
            <h2 class="font-serif text-xl font-bold text-zwart mb-1">Openingstijden</h2>
            <p class="text-zwart/40 text-sm mb-6">Per dag in te vullen, bijvoorbeeld "09:00 - 18:00" of "Gesloten". Dagen met dezelfde tijd worden op de website samengevoegd (bijv. "Maandag – Vrijdag").</p>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                @foreach(\App\Models\SiteSetting::DAGEN as $code => $naam)
                    <div>
                        <label for="openingstijden_{{ $code }}" class="block text-sm font-semibold text-zwart mb-2">{{ $naam }}</label>
                        <input type="text" id="openingstijden_{{ $code }}" name="openingstijden_{{ $code }}" value="{{ old("openingstijden_$code", $settings->{"openingstijden_$code"}) }}" required class="{{ $veld }}" placeholder="09:00 - 18:00">
                        @error("openingstijden_$code") <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p> @enderror
                    </div>
                @endforeach
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
