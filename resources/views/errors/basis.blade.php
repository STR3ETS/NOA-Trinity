{{-- Zelfstandige foutpagina voor 500 en 503: geen database, geen Vite-build, zodat hij ook werkt als de site zelf hapert. --}}
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <title>@yield('title') | N.O.A Trinity</title>
    <link rel="icon" href="/favicon.ico" sizes="any">
    <style>
        :root { --roze: #EFD3D7; --roze-dark: #B8848B; --roze-light: #F7EAEC; --lavendel: #8E9AAF; --zwart: #0A0908; --creme: #FAF9F6; }
        * { box-sizing: border-box; margin: 0; }
        body {
            min-height: 100svh; display: flex; align-items: center; justify-content: center; padding: 48px 24px;
            background: linear-gradient(135deg, var(--creme), var(--roze-light) 50%, var(--creme));
            color: var(--zwart); font-family: 'Instrument Sans', ui-sans-serif, system-ui, -apple-system, 'Segoe UI', sans-serif;
            -webkit-font-smoothing: antialiased; overflow-x: hidden; position: relative;
        }
        body::before, body::after { content: ''; position: absolute; border-radius: 50%; filter: blur(60px); z-index: 0; }
        body::before { width: 260px; height: 260px; background: rgba(239, 211, 215, .5); top: 10%; right: 10%; }
        body::after { width: 200px; height: 200px; background: rgba(142, 154, 175, .2); bottom: 8%; left: 6%; }
        main { position: relative; z-index: 1; max-width: 560px; text-align: center; }
        .logo { width: 56px; height: auto; margin-bottom: 32px; }
        .code { font-family: 'Playfair Display', Georgia, 'Times New Roman', serif; font-size: clamp(88px, 20vw, 140px); font-weight: 700; line-height: 1; color: rgba(184, 132, 139, .3); margin-bottom: 16px; }
        h1 { font-family: 'Playfair Display', Georgia, 'Times New Roman', serif; font-size: clamp(28px, 5vw, 44px); line-height: 1.2; margin-bottom: 20px; }
        p { font-size: 17px; line-height: 1.7; color: rgba(10, 9, 8, .7); margin-bottom: 36px; }
        .knop { display: inline-block; background: var(--zwart); color: var(--creme); padding: 16px 32px; border-radius: 999px; font-size: 14px; font-weight: 600; text-decoration: none; transition: background-color .2s; }
        .knop:hover, .knop:focus-visible { background: var(--roze-dark); }
        .tagline { margin: 48px 0 0; font-size: 12px; letter-spacing: .3em; text-transform: uppercase; color: var(--roze-dark); font-weight: 600; }
    </style>
</head>
<body>
    <main>
        <img src="/assets/logo.png" alt="N.O.A Trinity" class="logo" width="56" height="51">
        <div class="code">@yield('code')</div>
        <h1>@yield('heading')</h1>
        <p>@yield('message')</p>
        <a href="/" class="knop">Naar de homepage</a>
        <p class="tagline">Freeze it. Shape it. Love it.</p>
    </main>
</body>
</html>
