@extends('admin.layouts.admin')

@section('title', 'Bewerk galerij item')

@section('content')
    {{-- Header --}}
    <div class="mb-10">
        <a href="{{ route('admin.gallery.index') }}" class="inline-flex items-center gap-1.5 text-zwart/40 hover:text-roze-dark text-sm transition-colors mb-3">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
            Terug naar galerij
        </a>
        <p class="text-roze-dark text-xs tracking-[0.3em] uppercase font-semibold mb-2">Bewerken</p>
        <h1 class="font-serif text-3xl font-bold text-zwart">{{ $item->title }}</h1>
    </div>

    <div class="bg-white/80 backdrop-blur-sm rounded-2xl border border-zwart/5 p-6 sm:p-8">
        <form method="POST" action="{{ route('admin.gallery.update', $item) }}" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label for="title" class="block text-sm font-semibold text-zwart mb-2">Titel</label>
                <input type="text" id="title" name="title" value="{{ old('title', $item->title) }}" required
                       class="w-full px-5 py-3.5 rounded-xl border border-zwart/10 bg-creme/50 text-zwart placeholder:text-zwart/30 focus:outline-none focus:border-roze-dark focus:ring-1 focus:ring-roze-dark transition-colors text-sm">
                @error('title') <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="description" class="block text-sm font-semibold text-zwart mb-2">Beschrijving <span class="text-zwart/30 font-normal">(optioneel)</span></label>
                <textarea id="description" name="description" rows="3"
                          class="w-full px-5 py-3.5 rounded-xl border border-zwart/10 bg-creme/50 text-zwart placeholder:text-zwart/30 focus:outline-none focus:border-roze-dark focus:ring-1 focus:ring-roze-dark transition-colors text-sm">{{ old('description', $item->description) }}</textarea>
                @error('description') <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p> @enderror
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div>
                    <label for="before_image" class="block text-sm font-semibold text-zwart mb-2">Voor foto</label>
                    <div class="mb-3">
                        <img src="{{ $item->before_image_url }}" alt="Huidige voor foto" class="w-24 h-24 object-cover rounded-xl border border-zwart/10 shadow-sm">
                    </div>
                    <input type="file" id="before_image" name="before_image" accept="image/*"
                           class="w-full text-sm text-zwart/50 file:mr-4 file:py-2.5 file:px-5 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-roze-light file:text-roze-dark hover:file:bg-roze/30 file:cursor-pointer file:transition-colors">
                    <p class="text-xs text-zwart/30 mt-1.5">Laat leeg om huidige foto te behouden</p>
                    @error('before_image') <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label for="after_image" class="block text-sm font-semibold text-zwart mb-2">Na foto</label>
                    <div class="mb-3">
                        <img src="{{ $item->after_image_url }}" alt="Huidige na foto" class="w-24 h-24 object-cover rounded-xl border border-zwart/10 shadow-sm">
                    </div>
                    <input type="file" id="after_image" name="after_image" accept="image/*"
                           class="w-full text-sm text-zwart/50 file:mr-4 file:py-2.5 file:px-5 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-roze-light file:text-roze-dark hover:file:bg-roze/30 file:cursor-pointer file:transition-colors">
                    <p class="text-xs text-zwart/30 mt-1.5">Laat leeg om huidige foto te behouden</p>
                    @error('after_image') <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p> @enderror
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div>
                    <label for="treatment_type" class="block text-sm font-semibold text-zwart mb-2">Behandeling</label>
                    <select id="treatment_type" name="treatment_type" required
                            class="w-full px-5 py-3.5 rounded-xl border border-zwart/10 bg-creme/50 text-zwart focus:outline-none focus:border-roze-dark focus:ring-1 focus:ring-roze-dark transition-colors text-sm">
                        <option value="cryolipolyse" {{ old('treatment_type', $item->treatment_type) === 'cryolipolyse' ? 'selected' : '' }}>Cryolipolyse</option>
                        <option value="body-sculpting" {{ old('treatment_type', $item->treatment_type) === 'body-sculpting' ? 'selected' : '' }}>Body Sculpting</option>
                        <option value="combinatie" {{ old('treatment_type', $item->treatment_type) === 'combinatie' ? 'selected' : '' }}>Combinatie</option>
                    </select>
                    @error('treatment_type') <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label for="sort_order" class="block text-sm font-semibold text-zwart mb-2">Sorteervolgorde</label>
                    <input type="number" id="sort_order" name="sort_order" value="{{ old('sort_order', $item->sort_order) }}" min="0"
                           class="w-full px-5 py-3.5 rounded-xl border border-zwart/10 bg-creme/50 text-zwart placeholder:text-zwart/30 focus:outline-none focus:border-roze-dark focus:ring-1 focus:ring-roze-dark transition-colors text-sm">
                    @error('sort_order') <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p> @enderror
                </div>
            </div>

            <div class="flex items-center gap-2.5">
                <input type="hidden" name="is_published" value="0">
                <input type="checkbox" id="is_published" name="is_published" value="1" {{ old('is_published', $item->is_published) ? 'checked' : '' }}
                       class="w-4 h-4 rounded border-zwart/20 text-roze-dark focus:ring-roze-dark focus:ring-offset-0">
                <label for="is_published" class="text-sm text-zwart/60">Gepubliceerd</label>
            </div>

            <div class="flex items-center gap-4 pt-3 border-t border-zwart/5">
                <button type="submit"
                        class="bg-zwart text-creme px-7 py-3.5 rounded-full text-sm font-semibold hover:bg-roze-dark transition-colors">
                    Bijwerken
                </button>
                <a href="{{ route('admin.gallery.index') }}" class="text-zwart/40 hover:text-zwart text-sm font-medium transition-colors">Annuleren</a>
            </div>
        </form>
    </div>
@endsection
