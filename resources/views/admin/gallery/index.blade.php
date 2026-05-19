@extends('admin.layouts.admin')

@section('title', 'Galerij')

@section('content')
    {{-- Header --}}
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-10">
        <div>
            <p class="text-roze-dark text-xs tracking-[0.3em] uppercase font-semibold mb-2">Galerij</p>
            <h1 class="font-serif text-3xl font-bold text-zwart">Voor & Na Foto's</h1>
            <p class="text-zwart/50 text-sm mt-1">Beheer de resultaten die op de website getoond worden.</p>
        </div>
        <a href="{{ route('admin.gallery.create') }}"
           class="inline-flex items-center justify-center gap-2 bg-zwart text-creme px-6 py-3 rounded-full text-sm font-semibold hover:bg-roze-dark transition-colors shrink-0">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
            Nieuw item
        </a>
    </div>

    @if($items->isEmpty())
        <div class="bg-white/80 backdrop-blur-sm rounded-2xl border border-zwart/5 p-16 text-center">
            <div class="w-16 h-16 rounded-2xl bg-roze-light flex items-center justify-center mx-auto mb-5">
                <svg class="w-8 h-8 text-roze-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
            </div>
            <p class="text-zwart/60 text-base font-medium mb-1">Nog geen galerij items</p>
            <p class="text-zwart/40 text-sm mb-6">Begin met het toevoegen van voor/na foto's.</p>
            <a href="{{ route('admin.gallery.create') }}" class="inline-flex items-center gap-2 bg-zwart text-creme px-6 py-3 rounded-full text-sm font-semibold hover:bg-roze-dark transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                Eerste item toevoegen
            </a>
        </div>
    @else
        <div class="bg-white/80 backdrop-blur-sm rounded-2xl border border-zwart/5 overflow-hidden">
            <table class="w-full">
                <thead>
                    <tr class="border-b border-zwart/5">
                        <th class="text-left text-[10px] font-semibold text-zwart/30 uppercase tracking-wider px-6 py-4">Foto's</th>
                        <th class="text-left text-[10px] font-semibold text-zwart/30 uppercase tracking-wider px-6 py-4">Titel</th>
                        <th class="text-left text-[10px] font-semibold text-zwart/30 uppercase tracking-wider px-6 py-4 hidden sm:table-cell">Behandeling</th>
                        <th class="text-left text-[10px] font-semibold text-zwart/30 uppercase tracking-wider px-6 py-4 hidden md:table-cell">Status</th>
                        <th class="text-right text-[10px] font-semibold text-zwart/30 uppercase tracking-wider px-6 py-4">Acties</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-zwart/5">
                    @foreach($items as $item)
                        <tr class="hover:bg-roze-light/10 transition-colors">
                            <td class="px-6 py-4">
                                <div class="flex gap-2">
                                    <img src="{{ $item->before_image_url }}" alt="Voor" class="w-12 h-12 object-cover rounded-xl border border-zwart/5">
                                    <img src="{{ $item->after_image_url }}" alt="Na" class="w-12 h-12 object-cover rounded-xl border border-zwart/5">
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <p class="text-sm font-semibold text-zwart">{{ $item->title }}</p>
                                @if($item->description)
                                    <p class="text-xs text-zwart/40 mt-0.5 truncate max-w-[200px]">{{ $item->description }}</p>
                                @endif
                            </td>
                            <td class="px-6 py-4 hidden sm:table-cell">
                                <span class="inline-block px-3 py-1 rounded-full text-xs font-medium bg-roze-light text-roze-dark capitalize">
                                    {{ str_replace('-', ' ', $item->treatment_type) }}
                                </span>
                            </td>
                            <td class="px-6 py-4 hidden md:table-cell">
                                @if($item->is_published)
                                    <span class="inline-flex items-center gap-1.5 text-green-600 text-xs font-medium">
                                        <span class="w-1.5 h-1.5 bg-green-500 rounded-full"></span> Gepubliceerd
                                    </span>
                                @else
                                    <span class="inline-flex items-center gap-1.5 text-zwart/40 text-xs font-medium">
                                        <span class="w-1.5 h-1.5 bg-zwart/20 rounded-full"></span> Concept
                                    </span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex items-center justify-end gap-1">
                                    <a href="{{ route('admin.gallery.edit', $item) }}" class="p-2 rounded-lg text-zwart/30 hover:text-zwart hover:bg-creme transition-colors" title="Bewerken">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                                    </a>
                                    <form method="POST" action="{{ route('admin.gallery.destroy', $item) }}" onsubmit="return confirm('Weet je het zeker?')">
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
            {{ $items->links() }}
        </div>
    @endif
@endsection
