{{-- Knop/link om een afspraak te maken: opent de online agenda (Salonized) in een nieuw tabblad, of valt terug op de contactpagina. --}}
@props(['behandeling' => null])
<a href="{{ $settings->afspraakLink($behandeling) }}" {{ $attributes }} @if($settings->booking_url) target="_blank" rel="noopener" @endif>{{ $slot }}</a>
