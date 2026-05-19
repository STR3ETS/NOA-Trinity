@extends('admin.layouts.admin')

@section('title', 'Berichten')

@section('content')
    {{-- Header --}}
    <div class="mb-10">
        <p class="text-roze-dark text-xs tracking-[0.3em] uppercase font-semibold mb-2">Berichten</p>
        <h1 class="font-serif text-3xl font-bold text-zwart">Contactformulier</h1>
        <p class="text-zwart/50 text-sm mt-1">Inzendingen via het contactformulier op de website.</p>
    </div>

    @if($messages->isEmpty())
        <div class="bg-white/80 backdrop-blur-sm rounded-2xl border border-zwart/5 p-16 text-center">
            <div class="w-16 h-16 rounded-2xl bg-lavendel-light/30 flex items-center justify-center mx-auto mb-5">
                <svg class="w-8 h-8 text-lavendel-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
            </div>
            <p class="text-zwart/60 text-base font-medium mb-1">Nog geen berichten</p>
            <p class="text-zwart/40 text-sm">Berichten verschijnen hier zodra bezoekers het contactformulier invullen.</p>
        </div>
    @else
        <div class="bg-white/80 backdrop-blur-sm rounded-2xl border border-zwart/5 overflow-hidden">
            <table class="w-full">
                <thead>
                    <tr class="border-b border-zwart/5">
                        <th class="text-left text-[10px] font-semibold text-zwart/30 uppercase tracking-wider px-6 py-4 w-8"></th>
                        <th class="text-left text-[10px] font-semibold text-zwart/30 uppercase tracking-wider px-6 py-4">Naam</th>
                        <th class="text-left text-[10px] font-semibold text-zwart/30 uppercase tracking-wider px-6 py-4 hidden sm:table-cell">E-mail</th>
                        <th class="text-left text-[10px] font-semibold text-zwart/30 uppercase tracking-wider px-6 py-4 hidden md:table-cell">Behandeling</th>
                        <th class="text-left text-[10px] font-semibold text-zwart/30 uppercase tracking-wider px-6 py-4 hidden lg:table-cell">Datum</th>
                        <th class="text-right text-[10px] font-semibold text-zwart/30 uppercase tracking-wider px-6 py-4">Acties</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-zwart/5">
                    @foreach($messages as $msg)
                        <tr class="hover:bg-roze-light/10 transition-colors {{ !$msg->is_read ? 'bg-roze-light/15' : '' }}">
                            <td class="px-6 py-4">
                                @if(!$msg->is_read)
                                    <span class="w-2.5 h-2.5 bg-roze-dark rounded-full inline-block shadow-sm shadow-roze-dark/30"></span>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('admin.messages.show', $msg) }}" class="text-sm text-zwart hover:text-roze-dark transition-colors {{ !$msg->is_read ? 'font-bold' : 'font-medium' }}">
                                    {{ $msg->naam }}
                                </a>
                            </td>
                            <td class="px-6 py-4 hidden sm:table-cell">
                                <span class="text-sm text-zwart/50">{{ $msg->email }}</span>
                            </td>
                            <td class="px-6 py-4 hidden md:table-cell">
                                @if($msg->behandeling)
                                    <span class="inline-block px-3 py-1 rounded-full text-xs font-medium bg-roze-light text-roze-dark">{{ $msg->behandeling }}</span>
                                @else
                                    <span class="text-zwart/20 text-xs">—</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 hidden lg:table-cell">
                                <span class="text-sm text-zwart/40">{{ $msg->created_at->format('d-m-Y H:i') }}</span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex items-center justify-end gap-1">
                                    <a href="{{ route('admin.messages.show', $msg) }}" class="p-2 rounded-lg text-zwart/30 hover:text-zwart hover:bg-creme transition-colors" title="Bekijken">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                    </a>
                                    <form method="POST" action="{{ route('admin.messages.destroy', $msg) }}" onsubmit="return confirm('Weet je het zeker?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="p-2 rounded-lg text-zwart/30 hover:text-red-500 hover:bg-red-50 transition-colors" title="Verwijderen">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-6">
            {{ $messages->links() }}
        </div>
    @endif
@endsection
