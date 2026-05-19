<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin') — N.O.A Trinity</title>
    @fonts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-creme text-zwart font-sans antialiased min-h-screen overflow-x-hidden">
    @php $unreadCount = \App\Models\ContactSubmission::unread()->count(); @endphp

    {{-- ============================================ --}}
    {{-- SIDEBAR — desktop (fixed) --}}
    {{-- ============================================ --}}
    <aside class="fixed top-0 left-0 bottom-0 w-72 bg-zwart text-creme hidden lg:flex flex-col z-40 overflow-hidden">
        {{-- Decoratieve blur blob --}}
        <div class="absolute bottom-0 left-0 w-40 h-40 bg-roze-dark/10 rounded-full blur-3xl translate-y-1/2 -translate-x-1/3"></div>

        {{-- Logo --}}
        <div class="p-6 pb-5">
            <a href="{{ route('admin.dashboard') }}" class="block">
                <img src="/assets/logo.png" alt="N.O.A Trinity" class="max-h-8 brightness-0 invert mb-2">
            </a>
            <p class="text-roze-dark text-[10px] tracking-[0.3em] uppercase font-semibold">Admin Panel</p>
        </div>

        {{-- Navigatie --}}
        <nav class="flex-1 px-4 space-y-1">
            <a href="{{ route('admin.dashboard') }}"
               class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium {{ request()->routeIs('admin.dashboard') ? 'bg-white/10 text-creme' : 'text-creme/50 hover:text-creme hover:bg-white/5' }} transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                Dashboard
            </a>
            <a href="{{ route('admin.gallery.index') }}"
               class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium {{ request()->routeIs('admin.gallery.*') ? 'bg-white/10 text-creme' : 'text-creme/50 hover:text-creme hover:bg-white/5' }} transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                Galerij
            </a>
            <a href="{{ route('admin.messages.index') }}"
               class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium {{ request()->routeIs('admin.messages.*') ? 'bg-white/10 text-creme' : 'text-creme/50 hover:text-creme hover:bg-white/5' }} transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                Berichten
                @if($unreadCount > 0)
                    <span class="ml-auto bg-roze-dark text-creme text-[10px] font-bold rounded-full w-5 h-5 flex items-center justify-center">{{ $unreadCount }}</span>
                @endif
            </a>
            <a href="{{ route('admin.settings.edit') }}"
               class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium {{ request()->routeIs('admin.settings.*') ? 'bg-white/10 text-creme' : 'text-creme/50 hover:text-creme hover:bg-white/5' }} transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                Instellingen
            </a>
        </nav>

        {{-- Sidebar footer --}}
        <div class="relative z-10 p-4 mx-4 mb-4 rounded-xl bg-white/5">
            <div class="flex items-center gap-3">
                <div class="w-8 h-8 rounded-full bg-roze-dark/30 flex items-center justify-center text-xs font-bold text-creme">
                    {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-sm font-medium text-creme truncate">{{ Auth::user()->name }}</p>
                    <p class="text-[10px] text-creme/40 truncate">{{ Auth::user()->email }}</p>
                </div>
            </div>
            <form method="POST" action="{{ route('admin.logout') }}" class="mt-3">
                @csrf
                <button type="submit" class="w-full text-center text-creme/40 hover:text-creme text-xs py-1.5 rounded-lg hover:bg-white/5 transition-colors">
                    Uitloggen
                </button>
            </form>
        </div>

        {{-- Website link --}}
        <a href="{{ route('home') }}" target="_blank" class="relative z-10 flex items-center justify-center gap-2 px-4 py-3 text-xs text-creme/30 hover:text-creme/60 transition-colors border-t border-white/5">
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
            Bekijk website
        </a>
    </aside>

    {{-- ============================================ --}}
    {{-- MOBILE HEADER --}}
    {{-- ============================================ --}}
    <div class="lg:hidden fixed top-0 left-0 right-0 bg-zwart text-creme z-50 px-5 py-3.5 flex items-center justify-between shadow-lg">
        <a href="{{ route('admin.dashboard') }}">
            <img src="/assets/logo.png" alt="N.O.A Trinity" class="max-h-6 brightness-0 invert">
        </a>
        <div class="flex items-center gap-3">
            @if($unreadCount > 0)
                <a href="{{ route('admin.messages.index') }}" class="relative">
                    <svg class="w-5 h-5 text-creme/60" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    <span class="absolute -top-1.5 -right-1.5 bg-roze-dark text-creme text-[9px] font-bold rounded-full w-4 h-4 flex items-center justify-center">{{ $unreadCount }}</span>
                </a>
            @endif
            <button onclick="document.getElementById('mobile-sidebar').classList.toggle('hidden')" class="p-1 text-creme/60 hover:text-creme transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
            </button>
        </div>
    </div>

    {{-- ============================================ --}}
    {{-- MOBILE SIDEBAR OVERLAY --}}
    {{-- ============================================ --}}
    <div id="mobile-sidebar" class="hidden lg:hidden fixed inset-0 z-50">
        <div class="absolute inset-0 bg-zwart/60 backdrop-blur-sm" onclick="document.getElementById('mobile-sidebar').classList.add('hidden')"></div>
        <div class="absolute left-0 top-0 bottom-0 w-72 bg-zwart text-creme flex flex-col shadow-2xl">
            {{-- Logo + sluiten --}}
            <div class="p-6 pb-5 flex items-start justify-between">
                <div>
                    <img src="/assets/logo.png" alt="N.O.A Trinity" class="max-h-8 brightness-0 invert mb-2">
                    <p class="text-roze-dark text-[10px] tracking-[0.3em] uppercase font-semibold">Admin Panel</p>
                </div>
                <button onclick="document.getElementById('mobile-sidebar').classList.add('hidden')" class="p-1 text-creme/40 hover:text-creme transition-colors mt-1">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>

            {{-- Navigatie --}}
            <nav class="flex-1 px-4 space-y-1">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium {{ request()->routeIs('admin.dashboard') ? 'bg-white/10 text-creme' : 'text-creme/50 hover:text-creme hover:bg-white/5' }} transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                    Dashboard
                </a>
                <a href="{{ route('admin.gallery.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium {{ request()->routeIs('admin.gallery.*') ? 'bg-white/10 text-creme' : 'text-creme/50 hover:text-creme hover:bg-white/5' }} transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    Galerij
                </a>
                <a href="{{ route('admin.messages.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium {{ request()->routeIs('admin.messages.*') ? 'bg-white/10 text-creme' : 'text-creme/50 hover:text-creme hover:bg-white/5' }} transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    Berichten
                    @if($unreadCount > 0)
                        <span class="ml-auto bg-roze-dark text-creme text-[10px] font-bold rounded-full w-5 h-5 flex items-center justify-center">{{ $unreadCount }}</span>
                    @endif
                </a>
                <a href="{{ route('admin.settings.edit') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium {{ request()->routeIs('admin.settings.*') ? 'bg-white/10 text-creme' : 'text-creme/50 hover:text-creme hover:bg-white/5' }} transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    Instellingen
                </a>
            </nav>

            {{-- Footer --}}
            <div class="p-4 mx-4 mb-4 rounded-xl bg-white/5">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-full bg-roze-dark/30 flex items-center justify-center text-xs font-bold text-creme">
                        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-creme truncate">{{ Auth::user()->name }}</p>
                    </div>
                </div>
                <form method="POST" action="{{ route('admin.logout') }}" class="mt-3">
                    @csrf
                    <button type="submit" class="w-full text-center text-creme/40 hover:text-creme text-xs py-1.5 rounded-lg hover:bg-white/5 transition-colors">
                        Uitloggen
                    </button>
                </form>
            </div>
        </div>
    </div>

    {{-- ============================================ --}}
    {{-- MAIN CONTENT — offset voor fixed sidebar --}}
    {{-- ============================================ --}}
    <main class="min-h-screen lg:ml-72 relative overflow-hidden">
        {{-- Decoratieve achtergrond blobs --}}
        <div class="absolute top-0 right-0 w-80 h-80 bg-roze/10 rounded-full blur-3xl -translate-y-1/3 pointer-events-none"></div>
        <div class="absolute bottom-0 left-1/4 w-64 h-64 bg-lavendel/8 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute top-1/2 right-1/4 w-48 h-48 bg-roze-light/20 rounded-full blur-3xl pointer-events-none"></div>

        <div class="relative z-10 p-5 pt-20 lg:pt-10 lg:p-10">
            <div class="max-w-5xl mx-auto">
                {{-- Success flash --}}
                @if(session('success'))
                    <div class="mb-6 bg-green-50/80 backdrop-blur-sm border border-green-200 text-green-800 px-5 py-3.5 rounded-xl text-sm flex items-center gap-3">
                        <svg class="w-5 h-5 shrink-0 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        {{ session('success') }}
                    </div>
                @endif

                @yield('content')
            </div>
        </div>
    </main>
</body>
</html>
