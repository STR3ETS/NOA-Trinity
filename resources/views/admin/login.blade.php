<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inloggen — N.O.A Trinity Admin</title>
    @fonts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-creme text-zwart font-sans antialiased min-h-screen flex items-center justify-center px-4 relative overflow-hidden">
    {{-- Decoratieve achtergrond blobs --}}
    <div class="absolute top-0 right-0 w-96 h-96 bg-roze/15 rounded-full blur-3xl -translate-y-1/3 translate-x-1/3"></div>
    <div class="absolute bottom-0 left-0 w-80 h-80 bg-lavendel/10 rounded-full blur-3xl translate-y-1/3 -translate-x-1/3"></div>
    <div class="absolute top-1/2 left-1/2 w-64 h-64 bg-roze-light/20 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2"></div>

    <div class="relative z-10 w-full max-w-md">
        {{-- Logo + titel --}}
        <div class="text-center mb-10">
            <a href="{{ route('home') }}">
                <img src="/assets/logo.png" alt="N.O.A Trinity" class="max-h-12 mx-auto mb-4">
            </a>
            <p class="text-roze-dark text-xs tracking-[0.3em] uppercase font-semibold">Admin Panel</p>
        </div>

        {{-- Login kaart --}}
        <div class="bg-white/80 backdrop-blur-sm rounded-3xl shadow-lg border border-zwart/5 p-8 sm:p-10">
            <h2 class="font-serif text-2xl font-bold text-zwart mb-1">Welkom terug</h2>
            <p class="text-zwart/50 text-sm mb-8">Log in om het admin panel te openen.</p>

            @if($errors->any())
                <div class="mb-6 bg-red-50 border border-red-200 text-red-700 px-5 py-3.5 rounded-xl text-sm flex items-center gap-3">
                    <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('admin.login') }}" class="space-y-5">
                @csrf

                <div>
                    <label for="email" class="block text-sm font-semibold text-zwart mb-2">E-mailadres</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus
                           placeholder="admin@noatrinity.nl"
                           class="w-full px-5 py-3.5 rounded-xl border border-zwart/10 bg-creme/50 text-zwart placeholder:text-zwart/30 focus:outline-none focus:border-roze-dark focus:ring-1 focus:ring-roze-dark transition-colors text-sm">
                </div>

                <div>
                    <label for="password" class="block text-sm font-semibold text-zwart mb-2">Wachtwoord</label>
                    <input type="password" id="password" name="password" required
                           placeholder="Voer je wachtwoord in"
                           class="w-full px-5 py-3.5 rounded-xl border border-zwart/10 bg-creme/50 text-zwart placeholder:text-zwart/30 focus:outline-none focus:border-roze-dark focus:ring-1 focus:ring-roze-dark transition-colors text-sm">
                </div>

                <div class="flex items-center gap-2">
                    <input type="checkbox" id="remember" name="remember"
                           class="w-4 h-4 rounded border-zwart/20 text-roze-dark focus:ring-roze-dark focus:ring-offset-0">
                    <label for="remember" class="text-sm text-zwart/60">Onthoud mij</label>
                </div>

                <button type="submit"
                        class="w-full bg-zwart text-creme px-7 py-3.5 rounded-full text-sm font-semibold hover:bg-roze-dark transition-colors mt-2">
                    Inloggen
                </button>
            </form>
        </div>

        {{-- Footer link --}}
        <p class="text-center text-zwart/30 text-xs mt-8">
            <a href="{{ route('home') }}" class="hover:text-roze-dark transition-colors inline-flex items-center gap-1.5">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                Terug naar website
            </a>
        </p>
    </div>
</body>
</html>
