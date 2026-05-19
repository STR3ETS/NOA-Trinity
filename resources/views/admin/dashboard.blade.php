@extends('admin.layouts.admin')

@section('title', 'Dashboard')

@section('content')
    {{-- Header met decoratieve blobs --}}
    <div class="relative mb-10">
        <p class="text-roze-dark text-xs tracking-[0.3em] uppercase font-semibold mb-2">Dashboard</p>
        <h1 class="font-serif text-3xl sm:text-4xl font-bold text-zwart leading-tight">
            Welkom terug, {{ Auth::user()->name }}
        </h1>
        <p class="text-zwart/50 text-sm mt-2">Beheer je galerij en bekijk berichten.</p>
    </div>

    {{-- Stat kaarten --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
        {{-- Galerij items --}}
        <a href="{{ route('admin.gallery.index') }}" class="group bg-white/80 backdrop-blur-sm rounded-2xl border border-zwart/5 p-6 hover:shadow-lg hover:border-roze/20 transition-all">
            <div class="w-10 h-10 rounded-xl bg-roze-light flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                <svg class="w-5 h-5 text-roze-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
            </div>
            <p class="text-3xl font-bold text-zwart font-serif">{{ $galleryCount }}</p>
            <p class="text-sm text-zwart/40 mt-1">Galerij items</p>
        </a>

        {{-- Gepubliceerd --}}
        <a href="{{ route('admin.gallery.index') }}" class="group bg-white/80 backdrop-blur-sm rounded-2xl border border-zwart/5 p-6 hover:shadow-lg hover:border-roze/20 transition-all">
            <div class="w-10 h-10 rounded-xl bg-green-50 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
            <p class="text-3xl font-bold text-zwart font-serif">{{ $publishedCount }}</p>
            <p class="text-sm text-zwart/40 mt-1">Gepubliceerd</p>
        </a>

        {{-- Berichten totaal --}}
        <a href="{{ route('admin.messages.index') }}" class="group bg-white/80 backdrop-blur-sm rounded-2xl border border-zwart/5 p-6 hover:shadow-lg hover:border-roze/20 transition-all">
            <div class="w-10 h-10 rounded-xl bg-lavendel-light/30 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                <svg class="w-5 h-5 text-lavendel-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
            </div>
            <p class="text-3xl font-bold text-zwart font-serif">{{ $messagesCount }}</p>
            <p class="text-sm text-zwart/40 mt-1">Berichten totaal</p>
        </a>

        {{-- Ongelezen --}}
        <a href="{{ route('admin.messages.index') }}" class="group bg-white/80 backdrop-blur-sm rounded-2xl border border-zwart/5 p-6 hover:shadow-lg hover:border-roze/20 transition-all {{ $unreadCount > 0 ? 'ring-1 ring-roze-dark/20' : '' }}">
            <div class="w-10 h-10 rounded-xl bg-roze/20 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                <svg class="w-5 h-5 text-roze-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
            </div>
            <p class="text-3xl font-bold text-zwart font-serif">{{ $unreadCount }}</p>
            <p class="text-sm text-zwart/40 mt-1">Ongelezen berichten</p>
        </a>
    </div>

    {{-- Snelkoppelingen --}}
    <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 gap-5">
        <a href="{{ route('admin.gallery.create') }}" class="flex items-center gap-4 bg-white/80 backdrop-blur-sm rounded-2xl border border-zwart/5 p-5 hover:shadow-lg hover:border-roze/20 transition-all group">
            <div class="w-10 h-10 rounded-full bg-zwart flex items-center justify-center shrink-0 group-hover:bg-roze-dark transition-colors">
                <svg class="w-5 h-5 text-creme" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4v16m8-8H4"/></svg>
            </div>
            <div>
                <p class="text-sm font-semibold text-zwart">Nieuw galerij item</p>
                <p class="text-xs text-zwart/40">Voeg voor/na foto's toe</p>
            </div>
        </a>
        <a href="{{ route('admin.messages.index') }}" class="flex items-center gap-4 bg-white/80 backdrop-blur-sm rounded-2xl border border-zwart/5 p-5 hover:shadow-lg hover:border-roze/20 transition-all group">
            <div class="w-10 h-10 rounded-full bg-zwart flex items-center justify-center shrink-0 group-hover:bg-roze-dark transition-colors">
                <svg class="w-5 h-5 text-creme" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
            </div>
            <div>
                <p class="text-sm font-semibold text-zwart">Bekijk berichten</p>
                <p class="text-xs text-zwart/40">{{ $unreadCount > 0 ? $unreadCount . ' ongelezen' : 'Geen ongelezen berichten' }}</p>
            </div>
        </a>
    </div>
@endsection
