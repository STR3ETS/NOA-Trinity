@extends('errors.pagina')

@section('title', 'Pagina verlopen | N.O.A Trinity')
@section('code', '419')
@section('heading', 'Deze pagina is verlopen')
@section('message', 'Voor je veiligheid verloopt een formulier na een tijdje. Je bericht is nog niet verstuurd: ga terug, ververs de pagina en probeer het opnieuw.')

@section('actions')
    <a href="{{ url()->previous() }}" class="inline-flex items-center justify-center bg-zwart text-creme px-8 py-4 rounded-full text-sm font-semibold hover:bg-roze-dark transition-colors">
        Terug naar de vorige pagina
    </a>
    <a href="{{ route('home') }}" class="inline-flex items-center justify-center border border-zwart/15 text-zwart px-8 py-4 rounded-full text-sm font-semibold hover:border-zwart/30 hover:text-roze-dark transition-colors">
        Naar de homepage
    </a>
@endsection
