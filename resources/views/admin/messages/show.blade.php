@extends('admin.layouts.admin')

@section('title', 'Bericht van ' . $message->naam)

@section('content')
    {{-- Header --}}
    <div class="mb-10">
        <a href="{{ route('admin.messages.index') }}" class="inline-flex items-center gap-1.5 text-zwart/40 hover:text-roze-dark text-sm transition-colors mb-3">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
            Terug naar berichten
        </a>
        <p class="text-roze-dark text-xs tracking-[0.3em] uppercase font-semibold mb-2">Bericht</p>
        <h1 class="font-serif text-3xl font-bold text-zwart">{{ $message->naam }}</h1>
        <p class="text-zwart/40 text-sm mt-1">Ontvangen op {{ $message->created_at->format('d-m-Y \o\m H:i') }}</p>
    </div>

    <div class="bg-white/80 backdrop-blur-sm rounded-2xl border border-zwart/5 p-6 sm:p-8 max-w-2xl">
        <div class="space-y-6">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div>
                    <p class="text-[10px] font-semibold text-zwart/30 uppercase tracking-wider mb-1.5">Naam</p>
                    <p class="text-sm text-zwart font-medium">{{ $message->naam }}</p>
                </div>
                <div>
                    <p class="text-[10px] font-semibold text-zwart/30 uppercase tracking-wider mb-1.5">E-mail</p>
                    <a href="mailto:{{ $message->email }}" class="text-sm text-roze-dark hover:underline font-medium">{{ $message->email }}</a>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div>
                    <p class="text-[10px] font-semibold text-zwart/30 uppercase tracking-wider mb-1.5">Telefoon</p>
                    <p class="text-sm text-zwart">{{ $message->telefoon ?: '—' }}</p>
                </div>
                <div>
                    <p class="text-[10px] font-semibold text-zwart/30 uppercase tracking-wider mb-1.5">Behandeling</p>
                    @if($message->behandeling)
                        <span class="inline-block px-3 py-1 rounded-full text-xs font-medium bg-roze-light text-roze-dark">{{ $message->behandeling }}</span>
                    @else
                        <p class="text-sm text-zwart/40">—</p>
                    @endif
                </div>
            </div>

            <div class="border-t border-zwart/5 pt-6">
                <p class="text-[10px] font-semibold text-zwart/30 uppercase tracking-wider mb-3">Bericht</p>
                <div class="text-sm text-zwart leading-relaxed whitespace-pre-wrap bg-creme/40 rounded-xl p-5 border border-zwart/5">{{ $message->bericht }}</div>
            </div>
        </div>

        <div class="flex flex-wrap items-center gap-3 mt-8 pt-6 border-t border-zwart/5">
            <a href="mailto:{{ $message->email }}"
               class="inline-flex items-center gap-2 bg-zwart text-creme px-7 py-3.5 rounded-full text-sm font-semibold hover:bg-roze-dark transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                Beantwoorden via e-mail
            </a>
            <form method="POST" action="{{ route('admin.messages.destroy', $message) }}" onsubmit="return confirm('Weet je het zeker?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="inline-flex items-center gap-2 text-zwart/40 hover:text-red-500 text-sm font-medium transition-colors px-4 py-3.5">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                    Verwijderen
                </button>
            </form>
        </div>
    </div>
@endsection
