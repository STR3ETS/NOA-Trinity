{{-- Openingstijden, samengevoegd per gelijke dagen. Verwacht $itemClass, $labelClass en $tijdClass. --}}
@foreach($settings->openingstijden() as $regel)
    <li class="{{ $itemClass }}">
        <span class="{{ $labelClass }}">{{ $regel['label'] }}</span>
        <span class="{{ $tijdClass }}">{{ $regel['tijd'] }}</span>
    </li>
@endforeach
