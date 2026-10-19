<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Dynamic Title & Meta --}}
    <title>@yield('title', 'Ikhsan Fitrah Al Mubarak — NEONVERSE Portfolio')</title>
    <meta name="description" content="@yield('description', app()->getLocale() === 'id' ? 'Portofolio Ikhsan Fitrah Al Mubarak — Mahasiswa Sistem Informasi dan Web Developer dari Pekanbaru, Indonesia. Spesialisasi di Laravel, PHP, dan sistem informasi.' : 'Portfolio of Ikhsan Fitrah Al Mubarak — Information Systems Student and Web Developer from Pekanbaru, Indonesia. Specializing in Laravel, PHP, and information systems.')">

    {{-- Open Graph --}}
    <meta property="og:title"       content="@yield('og_title', 'Ikhsan Fitrah Al Mubarak — NEONVERSE Portfolio')">
    <meta property="og:description" content="@yield('og_desc', 'Web Developer & Information Systems Student — Building digital solutions for real problems.')">
    <meta property="og:type"        content="website">
    <meta property="og:image"       content="{{ asset('img/og-image.jpg') }}">

    {{-- Twitter Card --}}
    <meta name="twitter:card"  content="summary_large_image">
    <meta name="twitter:title" content="@yield('og_title', 'Ikhsan Fitrah Al Mubarak — NEONVERSE')">

    {{-- Language meta --}}
    <link rel="alternate" hreflang="id" href="{{ url('/lang/id') }}">
    <link rel="alternate" hreflang="en" href="{{ url('/lang/en') }}">

    {{-- Favicon --}}
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.svg') }}">

    {{-- Fonts (preconnect for performance) --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    {{-- Vite Assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Additional head content --}}
    @stack('head')
</head>
<body class="bg-nv-bg text-nv-text antialiased">

    {{-- Skip to content (Accessibility) --}}
    <a href="#main-content"
       class="sr-only focus:not-sr-only focus:fixed focus:top-4 focus:left-4 focus:z-[100] focus:px-4 focus:py-2 focus:bg-nv-purple focus:text-white focus:rounded-lg focus:text-sm">
        {{ app()->getLocale() === 'id' ? 'Lewati ke konten utama' : 'Skip to main content' }}
    </a>

    {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Flash Message: Success --}}
    @if(session('contact_success'))
    <div id="flash-message"
         class="fixed top-20 left-1/2 -translate-x-1/2 z-50 px-6 py-3 rounded-xl text-sm font-medium shadow-xl max-w-sm w-[90%] text-center"
         style="background: rgba(52,211,153,0.15); border: 1px solid rgba(52,211,153,0.4); color: #34D399; backdrop-filter: blur(12px);"
         role="alert" aria-live="polite">
        {{ session('contact_success') }}
    </div>
    @endif

    {{-- Flash Message: Error --}}
    @if(session('contact_error'))
    <div id="flash-message"
         class="fixed top-20 left-1/2 -translate-x-1/2 z-50 px-6 py-3 rounded-xl text-sm font-medium shadow-xl max-w-sm w-[90%] text-center"
         style="background: rgba(239,68,68,0.15); border: 1px solid rgba(239,68,68,0.4); color: #F87171; backdrop-filter: blur(12px);"
         role="alert" aria-live="assertive">
        {{ session('contact_error') }}
    </div>
    @endif

    {{-- Main Content --}}
    <main id="main-content">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')

    {{-- Back to Top Button --}}
    <button id="back-to-top"
            aria-label="{{ __('portfolio.footer_back_top') }}"
            class="fixed bottom-6 right-6 z-40 w-10 h-10 rounded-full flex items-center justify-center opacity-0 pointer-events-none transition-all duration-300 hover:scale-110"
            style="background: rgba(139,92,246,0.8); border: 1px solid rgba(139,92,246,0.5); backdrop-filter: blur(8px);">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"/>
        </svg>
    </button>

    @stack('scripts')
</body>
</html>
