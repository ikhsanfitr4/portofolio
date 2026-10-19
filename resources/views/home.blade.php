@extends('layouts.app')

@php
$locale = app()->getLocale();
$t = fn($k) => __('portfolio.'.$k);
@endphp

@section('title', 'Ikhsan Fitrah Al Mubarak — NEONVERSE | Web Developer & Sistem Informasi')
@section('description', $locale === 'id'
    ? 'Portofolio Ikhsan Fitrah Al Mubarak — Mahasiswa Sistem Informasi dan Web Developer dari Pekanbaru. Membangun solusi web dengan Laravel, PHP, dan MySQL.'
    : 'Portfolio of Ikhsan Fitrah Al Mubarak — Information Systems Student and Web Developer from Pekanbaru. Building web solutions with Laravel, PHP, and MySQL.')

@section('content')

{{-- ============================================================
     HERO SECTION
     ============================================================ --}}
<section id="hero" class="hero-section bg-grid" aria-label="{{ $locale === 'id' ? 'Hero' : 'Hero' }}">
    {{-- Ambient light blobs --}}
    <div class="ambient-blob w-96 h-96 -top-32 -left-32 opacity-20" style="background: radial-gradient(circle, rgba(139,92,246,0.6), transparent);"></div>
    <div class="ambient-blob w-72 h-72 top-1/3 right-0 opacity-15" style="background: radial-gradient(circle, rgba(0,229,255,0.4), transparent); animation-delay: 3s;"></div>
    <div class="ambient-blob w-64 h-64 bottom-0 left-1/4 opacity-10" style="background: radial-gradient(circle, rgba(255,107,53,0.4), transparent); animation-delay: 6s;"></div>

    {{-- Scan lines --}}
    <div class="hero-grid-line" style="top: 30%; animation-duration: 8s;"></div>
    <div class="hero-grid-line" style="top: 60%; animation-duration: 11s; animation-delay: -4s;"></div>

    {{-- Geometric decorations --}}
    <div class="absolute top-24 right-16 w-16 h-16 opacity-15 float-anim hidden lg:block" aria-hidden="true"
         style="border: 1px solid rgba(0,229,255,0.5); transform: rotate(45deg);"></div>
    <div class="absolute bottom-32 right-1/3 w-10 h-10 opacity-10 float-anim-alt hidden md:block" aria-hidden="true"
         style="border: 1px solid rgba(139,92,246,0.5); transform: rotate(30deg);"></div>
    <div class="absolute top-1/2 left-8 w-8 h-8 opacity-10 float-anim-slow hidden lg:block" aria-hidden="true"
         style="background: rgba(255,107,53,0.3); clip-path: polygon(50% 0%, 0% 100%, 100% 100%);"></div>

    <div class="section-container relative z-10 w-full py-32 lg:py-40">
        <div class="max-w-4xl">

            {{-- Label --}}
            <div class="anim-fade-up anim-delay-1 mb-6">
                <span class="inline-flex items-center gap-2 font-mono text-xs tracking-widest uppercase px-3 py-1.5 rounded-full"
                      style="background: rgba(0,229,255,0.08); border: 1px solid rgba(0,229,255,0.2); color: var(--cyan);">
                    <span class="w-1.5 h-1.5 rounded-full bg-cyan-400 animate-pulse"></span>
                    {{ $t('hero_label') }}
                </span>
            </div>

            {{-- Main Heading --}}
            <h1 class="anim-fade-up anim-delay-2 text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-black leading-tight mb-4">
                <span class="heading-gradient">{{ $t('hero_heading') }}</span>
            </h1>

            {{-- Name with accent box --}}
            <div class="anim-fade-up anim-delay-3 mb-6">
                <span class="inline-block hero-name-box px-4 py-2 rounded-lg font-mono text-base sm:text-lg font-semibold"
                      style="color: var(--muted);">
                    — {{ $t('hero_name') }}
                </span>
            </div>

            {{-- Description --}}
            <p class="anim-fade-up anim-delay-4 text-base sm:text-lg max-w-2xl leading-relaxed mb-8"
               style="color: var(--muted);">
                {{ $t('hero_desc') }}
            </p>

            {{-- CTA Buttons --}}
            <div class="anim-fade-up anim-delay-5 flex flex-col sm:flex-row gap-3 mb-10">
                <a href="#projects" class="btn-primary">
                    <svg class="w-4 h-4 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0l-4-4m4 4l-4 4"/>
                    </svg>
                    <span>{{ $t('hero_cta1') }}</span>
                </a>
                <a href="#contact" class="btn-outline">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                    </svg>
                    {{ $t('hero_cta2') }}
                </a>
            </div>

            {{-- Status indicator --}}
            <div class="anim-fade-up anim-delay-6 flex items-center gap-2.5">
                <span class="relative flex h-2.5 w-2.5">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-green-400"></span>
                </span>
                <span class="font-mono text-xs" style="color: var(--muted);">{{ $t('hero_status') }}</span>
            </div>
        </div>

        {{-- Tech Labels decoration --}}
        <div class="hidden xl:flex absolute right-0 top-1/2 -translate-y-1/2 flex-col gap-2 opacity-40" aria-hidden="true">
            @foreach(['Laravel', 'PHP', 'MySQL', 'Tailwind'] as $tech)
            <span class="font-mono text-xs px-2 py-1 rounded" style="background: rgba(139,92,246,0.08); border: 1px solid rgba(139,92,246,0.2); color: rgba(139,92,246,0.8);">
                {{ $tech }}
            </span>
            @endforeach
        </div>
    </div>

    {{-- Scroll indicator --}}
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 opacity-50" aria-hidden="true">
        <span class="font-mono text-xs tracking-widest uppercase" style="color: var(--muted);">scroll</span>
        <div class="scroll-indicator w-5 h-8 rounded-full flex items-start justify-center pt-2" style="border: 1px solid rgba(139,92,246,0.4);">
            <div class="w-1 h-2 rounded-full bg-nv-purple"></div>
        </div>
    </div>
</section>

{{-- ============================================================
     ABOUT SECTION
     ============================================================ --}}
<section id="about" class="py-24 lg:py-32 relative" style="background: var(--bg2);" aria-labelledby="about-heading">
    <div class="ambient-blob w-80 h-80 -top-40 right-0 opacity-10" style="background: radial-gradient(circle, rgba(0,229,255,0.4), transparent);" aria-hidden="true"></div>

    <div class="section-container relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">

            {{-- Text Content --}}
            <div>
                <div class="section-label reveal mb-4">{{ $t('about_label') }}</div>
                <h2 id="about-heading" class="text-3xl sm:text-4xl lg:text-5xl font-black leading-tight mb-6 reveal delay-100">
                    <span class="heading-gradient-cyan">{{ $t('about_heading') }}</span>
                </h2>
                <p class="text-base leading-relaxed mb-4 reveal delay-200" style="color: var(--muted);">
                    {{ $t('about_p1') }}
                </p>
                <p class="text-base leading-relaxed mb-8 reveal delay-300" style="color: var(--muted);">
                    {{ $t('about_p2') }}
                </p>

                {{-- Info grid --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 reveal delay-400">
                    @php
                    $infos = [
                        ['icon' => 'M12 14l9-5-9-5-9 5 9 5zm0 7l9-5-9-5-9 5 9 5z', 'label' => $t('about_edu')],
                        ['icon' => 'M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4', 'label' => $t('about_focus')],
                        ['icon' => 'M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0zM15 11a3 3 0 11-6 0 3 3 0 016 0z', 'label' => $t('about_location')],
                        ['icon' => 'M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z', 'label' => $t('about_status')],
                    ];
                    @endphp
                    @foreach($infos as $info)
                    <div class="flex items-start gap-3 p-3 rounded-lg" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.06);">
                        <svg class="w-4 h-4 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                             style="color: var(--purple);" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $info['icon'] }}"/>
                        </svg>
                        <span class="text-sm" style="color: var(--muted);">{{ $info['label'] }}</span>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Visual Card --}}
            <div class="reveal-right delay-200">
                <div class="relative p-8 rounded-2xl" style="background: var(--card); border: 1px solid rgba(139,92,246,0.2);">
                    {{-- Corner decoration --}}
                    <div class="absolute top-0 right-0 w-16 h-16 opacity-30" aria-hidden="true">
                        <div class="absolute top-0 right-0 w-8 h-8 border-t-2 border-r-2 rounded-tr-xl" style="border-color: var(--cyan);"></div>
                    </div>
                    <div class="absolute bottom-0 left-0 w-16 h-16 opacity-30" aria-hidden="true">
                        <div class="absolute bottom-0 left-0 w-8 h-8 border-b-2 border-l-2 rounded-bl-xl" style="border-color: var(--purple);"></div>
                    </div>

                    {{-- Profile placeholder --}}
                    <div class="w-20 h-20 rounded-2xl mx-auto mb-6 flex items-center justify-center text-3xl font-black"
                         style="background: linear-gradient(135deg, rgba(139,92,246,0.3), rgba(0,229,255,0.2)); border: 2px solid rgba(139,92,246,0.4);"
                         aria-label="Profile photo placeholder">
                        <span class="text-nv-purple">IF</span>
                    </div>
                    <p class="text-center font-mono text-xs mb-6" style="color: rgba(163,168,189,0.5);">
                        [{{ $locale === 'id' ? 'Ganti dengan foto asli' : 'Replace with actual photo' }}]
                    </p>

                    {{-- Tech interests --}}
                    <div class="space-y-3">
                        @php
                        $interests = ['Laravel & PHP', 'Sistem Informasi', 'Database Design', 'UI/UX'];
                        @endphp
                        @foreach($interests as $i => $item)
                        <div class="flex items-center gap-3">
                            <span class="font-mono text-xs w-5 flex-shrink-0" style="color: rgba(139,92,246,0.6);">0{{ $i+1 }}</span>
                            <div class="flex-1 h-px" style="background: rgba(255,255,255,0.06);"></div>
                            <span class="text-sm font-medium" style="color: var(--text);">{{ $item }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     SKILLS SECTION
     ============================================================ --}}
<section id="skills" class="py-24 lg:py-32 relative bg-nv-bg" aria-labelledby="skills-heading">
    <div class="ambient-blob w-72 h-72 bottom-0 left-0 opacity-10" style="background: radial-gradient(circle, rgba(139,92,246,0.5), transparent);" aria-hidden="true"></div>

    <div class="section-container relative z-10">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <div class="section-label justify-center reveal mb-4">{{ $t('skills_label') }}</div>
            <h2 id="skills-heading" class="text-3xl sm:text-4xl lg:text-5xl font-black mb-4 reveal delay-100">
                <span class="heading-gradient">{{ $t('skills_heading') }}</span>
            </h2>
            <p class="text-base reveal delay-200" style="color: var(--muted);">{{ $t('skills_desc') }}</p>
        </div>

        @php
        $skillGroups = [
            [
                'label' => $t('skills_frontend'),
                'color' => 'cyan',
                'skills' => [
                    ['name' => 'HTML5', 'icon' => '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M1.5 0h21l-1.91 21.563L11.977 24l-8.565-2.438L1.5 0zm7.031 9.75l-.232-2.718 10.059.003.23-2.622L5.412 4.41l.698 8.01h9.126l-.326 3.426-2.91.804-2.955-.81-.188-2.11H6.248l.33 4.171L12 19.351l5.379-1.443.744-8.157H8.531z"/></svg>'],
                    ['name' => 'CSS3', 'icon' => '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M1.5 0h21l-1.91 21.563L11.977 24l-8.564-2.438L1.5 0zm17.09 4.413L5.41 4.41l.213 2.622 10.125.002-.255 2.716h-6.64l.24 2.573h6.182l-.366 3.523-2.91.804-2.956-.81-.188-2.11h-2.61l.29 3.855L12 19.288l5.373-1.53L18.59 4.413z"/></svg>'],
                    ['name' => 'JavaScript', 'icon' => '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M0 0h24v24H0V0zm22.034 18.276c-.175-1.095-.888-2.015-3.003-2.873-.736-.345-1.554-.585-1.797-1.14-.091-.33-.105-.51-.046-.705.15-.646.915-.84 1.515-.66.39.12.75.42.976.9 1.034-.676 1.034-.676 1.755-1.125-.27-.42-.404-.601-.586-.78-.63-.705-1.469-1.065-2.834-1.034l-.705.089c-.676.165-1.32.525-1.71 1.005-1.14 1.291-.811 3.541.569 4.471 1.365 1.02 3.361 1.244 3.616 2.205.24 1.17-.87 1.545-1.966 1.41-.811-.18-1.26-.586-1.755-1.336l-1.83 1.051c.21.48.45.689.81 1.109 1.74 1.756 6.09 1.666 6.871-1.004.029-.09.24-.705.074-1.65l.046.067zm-8.983-7.245h-2.248c0 1.938-.009 3.864-.009 5.805 0 1.232.063 2.363-.138 2.711-.33.689-1.18.601-1.566.48-.396-.196-.597-.466-.83-.855-.063-.105-.11-.196-.127-.196l-1.825 1.125c.305.63.75 1.172 1.324 1.517.855.51 2.004.675 3.207.405.783-.226 1.458-.691 1.811-1.411.51-.93.402-2.07.397-3.346.012-2.054 0-4.109 0-6.179l.004-.056z"/></svg>'],
                    ['name' => 'Tailwind CSS', 'icon' => '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M12.001 4.8c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624C13.666 10.618 15.027 12 18.001 12c3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.913-.228-1.565-.89-2.288-1.624C16.337 6.182 14.976 4.8 12.001 4.8zm-6 7.2c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624 1.177 1.194 2.538 2.576 5.512 2.576 3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.913-.228-1.565-.89-2.288-1.624C10.337 13.382 8.976 12 6.001 12z"/></svg>'],
                    ['name' => 'Responsive Design', 'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>'],
                ],
            ],
            [
                'label' => $t('skills_backend'),
                'color' => 'purple',
                'skills' => [
                    ['name' => 'PHP', 'icon' => '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M7.01 10.207h-.944l-.515 2.648h.838c.556 0 .97-.105 1.242-.314.272-.21.455-.559.55-1.049.092-.47.05-.802-.124-.995-.175-.193-.477-.29-.906-.29h-.141zM12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2zM9.07 14.917H7.817l-.23 1.182H6l1.698-8.712h2.229c.706 0 1.232.168 1.577.506.345.337.457.856.335 1.555a2.8 2.8 0 01-.273.83 2.65 2.65 0 01-.528.698c-.293.28-.632.473-1.018.58a5.2 5.2 0 01-1.223.135H8.487l-.205 1.047h.788V14.917zm4.877-.498h-.923l-.616 2.48H11.7l1.698-8.712h2.066c.664 0 1.158.158 1.479.474.321.316.426.802.311 1.457a2.53 2.53 0 01-.3.834c-.152.267-.374.51-.666.728l.44 3.219h-1.628l-.38-2.48h-.773zm1.247-2.816l.136-.666c.081-.41.036-.7-.137-.87-.173-.169-.478-.254-.914-.254h-.763l-.357 1.79h.879c.463 0 .822-.12 1.078-.365l.078.365z"/></svg>'],
                    ['name' => 'Laravel', 'icon' => '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M23.642 5.43a.364.364 0 01.014.1v5.149c0 .135-.073.26-.189.326l-4.323 2.49v4.934a.378.378 0 01-.188.326L9.93 23.949a.316.316 0 01-.066.027.29.29 0 01-.066.015.33.33 0 01-.183-.04L.534 18.88a.378.378 0 01-.189-.326V2.974c0-.033.005-.065.014-.098a.369.369 0 01.028-.068L.47 2.776a.37.37 0 01.044-.053.3.3 0 01.059-.044L5.044.05a.378.378 0 01.378 0L9.878 2.53a.37.37 0 01.103.104l.013.023a.37.37 0 01.029.067.364.364 0 01.014.1V15.06l3.747-2.16V7.968c0-.033.005-.066.013-.098a.352.352 0 01.029-.068.37.37 0 01.044-.053.3.3 0 01.059-.044l4.572-2.48a.378.378 0 01.378 0l4.573 2.481a.376.376 0 01.189.322zm-.756 5.015V6.234l-1.571.906-2.173 1.253v4.208l3.744-2.156zm-4.496 7.73V13.97l-2.145 1.235-6.12 3.516v4.245l8.265-4.771zm-9.011-4.52L5.234 3.126 1.49 5.481l3.73 2.148 4.159 2.396zm-.75-5.488L5.23.71 1.49 2.966 5.23 5.22l3.9-2.253zM5.604 19.855V15.61l-2.175-1.253-1.566-.906v4.246l3.741 2.158z"/></svg>'],
                    ['name' => 'RESTful API', 'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 3.75H19.5a.75.75 0 01.75.75v11.25a.75.75 0 01-.75.75h-7.5a.75.75 0 01-.75-.75V12M8.25 3.75L4.875 7.125M8.25 3.75h-4.5v11.25h4.5M12 12H4.875m0 0L8.25 15.375"/></svg>'],
                    ['name' => 'Authentication', 'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"/></svg>'],
                    ['name' => 'RBAC', 'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"/></svg>'],
                ],
            ],
            [
                'label' => $t('skills_database'),
                'color' => 'orange',
                'skills' => [
                    ['name' => 'MySQL', 'icon' => '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M16.405 5.501c-.115 0-.193.014-.274.033v.013h.014c.054.104.146.18.214.273.054.107.1.214.154.32l.014-.015c.094-.066.14-.172.14-.333-.04-.047-.046-.094-.08-.133-.04-.04-.1-.06-.182-.158zM5.77 18.695h-.927a50.854 50.854 0 00-.27-4.41h-.008l-1.41 4.41H2.45l-1.4-4.41h-.01a72.892 72.892 0 00-.195 4.41H0a68.627 68.627 0 01.253-5.58h1.062l1.38 4.182h.008l1.39-4.182h1.055a61.32 61.32 0 01.181 5.58zM9.21 14.98c-.32-.01-.57.05-.79.19a.945.945 0 00-.49.87c0 .67.32.93.8.93.21 0 .47-.05.63-.15V14.97h-.15zm.63 2.81c-.17.12-.39.21-.72.21-.68 0-1.13-.46-1.13-1.27a1.3 1.3 0 011.37-1.36c.27 0 .46.04.63.09l-.09.5c-.16-.06-.3-.09-.53-.09-.4 0-.72.28-.72.85 0 .5.24.8.7.8.21 0 .41-.05.55-.14l.04.41zm.97.87h-.62v-4.06h.62v4.06zm2.05 0H12.1c-.01-.15-.02-.38-.02-.54a1.16 1.16 0 01-1.01.6c-.75 0-1.31-.62-1.31-1.5 0-.97.6-1.57 1.37-1.57.37 0 .67.17.85.47v-1.52h.62v3.04l.02.52zm-.62-1.05c0-.06 0-.12-.01-.17-.1-.47-.4-.72-.72-.72-.6 0-.85.57-.85 1.1 0 .6.3 1.04.84 1.04.37 0 .67-.31.73-.72.01-.09.01-.18.01-.26v-.27zm3.14 1.05l-.01-.35c-.16.27-.47.41-.8.41-.64 0-.98-.43-.98-1.05v-1.72h.62v1.59c0 .37.12.65.49.65.3 0 .61-.23.61-.73v-1.51h.62v2.71h-.55zm2.29.06c-.3 0-.56-.09-.73-.23v1.03h-.62v-3.59h.53c.02.13.05.27.07.42.2-.31.48-.48.88-.48.72 0 1.17.61 1.17 1.44 0 .96-.5 1.41-1.3 1.41zm-.16-2.29c-.29 0-.57.2-.67.55-.02.1-.03.2-.03.31v.2c0 .08 0 .15.02.22.09.35.36.56.67.56.55 0 .78-.52.78-1.05 0-.47-.21-.79-.77-.79z"/><path d="M23.763 8.504c-.65-3.17-3.86-4.07-7.06-3.54-1.22.2-2.31.57-3.25 1.11a.953.953 0 01-.25.11 7.665 7.665 0 00-.47-.56C11.77 4.1 10.39 3.6 8.74 3.73 7.5 3.83 6.3 4.26 5.3 5.01c-.28.2-.56.44-.83.71a7.94 7.94 0 00-1.62 2.56c-.56 1.51-.68 3.08-.52 4.6.24 2.24.99 4.37 2.32 6.02 1.02 1.26 2.14 1.98 3.18 1.97.75-.01 1.5-.33 2.2-.99.08-.07.15-.16.23-.23.33.12.7.19 1.09.2.63.01 1.21-.12 1.73-.38.08.12.17.25.27.36.65.77 1.47 1.22 2.28 1.2.85-.02 1.77-.57 2.65-1.68 1.13-1.46 1.88-3.35 2.17-5.33.15-1.06.2-2.13.08-3.18zm-7.94-1.79c-.84.84-1.22 1.84-1.22 2.98 0 1.33.49 2.32 1.49 2.95.13.08.27.15.42.21-.19.66-.47 1.3-.84 1.87-.47.74-.96 1.29-1.44 1.64-.56.41-1.01.52-1.39.33-.04-.02-.07-.04-.11-.07.38-.54.57-1.2.57-1.98 0-1.01-.36-1.81-.97-2.36a4.24 4.24 0 00-.71-.49c.03-.17.06-.34.07-.51.15-1.42-.1-2.78-.75-3.96-.43-.77-.97-1.38-1.62-1.8 1.01-.57 2.06-.88 3.13-.89 1.31-.02 2.32.43 3.06 1.33.02.02.04.04.06.07a8.1 8.1 0 00-.75.68zm-7.83 2.01c.27.5.47 1.03.53 1.6.09.78.05 1.58-.13 2.38-.38.15-.7.41-.92.79-.16.26-.27.56-.32.88-.38-.35-.63-.9-.72-1.62-.11-.93.02-1.94.39-2.88.28-.72.66-1.34 1.17-1.15zm4.79 4.08a1.24 1.24 0 01-.29.74c-.05.06-.1.11-.17.16-.16.11-.37.17-.63.17-.72 0-1.34-.66-1.34-1.74 0-1.05.56-1.74 1.34-1.74.37 0 .67.15.88.43.21.26.31.62.31 1.02 0 .31-.05.6-.1.96zm3.09 4.01c-.77 1.04-1.59 1.56-2.35 1.57-.46.01-1.04-.24-1.59-.91-.26-.31-.47-.67-.64-1.05.3.08.61.13.92.12.75-.01 1.43-.24 2.03-.65.44-.31.82-.74 1.13-1.29.33-.57.57-1.19.73-1.84.2.14.38.32.53.55.36.55.53 1.23.45 1.96-.09.66-.4 1.05-.21 1.54zm.29-3.7c-.02-.04-.03-.07-.05-.11a3.07 3.07 0 00-1.03-1.27c-.02-.01-.04-.02-.06-.03.04-.17.06-.34.07-.51.11-1.05-.07-2.13-.55-3.12.6-.5 1.3-.81 2.11-.96 2.4-.42 4.89.25 5.4 2.86.1.52.13 1.04.09 1.57-.06.84-.27 1.84-.61 2.85-.47 1.39-1.1 2.49-1.9 3.24-.63.59-1.27.92-1.86.96-.62.04-1.26-.32-1.76-.95a5.11 5.11 0 01-.27-.4c.64-.66 1.03-1.6 1.1-2.69.04-.45 0-.92-.14-1.38l-.54-.06z"/></svg>'],
                    ['name' => 'Database Design', 'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M3 5v14c0 1.657 4.03 3 9 3s9-1.343 9-3V5"/><path d="M3 12c0 1.657 4.03 3 9 3s9-1.343 9-3"/></svg>'],
                    ['name' => 'SQL', 'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>'],
                    ['name' => 'Relational DB', 'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244"/></svg>'],
                ],
            ],
            [
                'label' => $t('skills_tools'),
                'color' => 'purple',
                'skills' => [
                    ['name' => 'Git', 'icon' => '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M23.546 10.93L13.067.452a1.55 1.55 0 00-2.188 0L8.708 2.627l2.76 2.76a1.838 1.838 0 012.327 2.341l2.658 2.66a1.838 1.838 0 012.37 2.372 1.84 1.84 0 01-1.84 1.84 1.836 1.836 0 01-1.84-1.84l-2.48-2.48v6.541a1.836 1.836 0 11-1.502-.038V9.958a1.836 1.836 0 01-1.002-2.41L7.436 4.81 1.452 10.79a1.55 1.55 0 000 2.188l10.481 10.477a1.55 1.55 0 002.188 0l9.425-9.425a1.55 1.55 0 000-2.1z"/></svg>'],
                    ['name' => 'GitHub', 'icon' => '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/></svg>'],
                    ['name' => 'VS Code', 'icon' => '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M23.15 2.587L18.21.21a1.494 1.494 0 00-1.705.29l-9.46 8.63-4.12-3.128a.999.999 0 00-1.276.057L.327 7.261A1 1 0 00.326 8.74L3.899 12 .326 15.26a1 1 0 00.001 1.479L1.65 17.94a.999.999 0 001.276.057l4.12-3.128 9.46 8.63a1.492 1.492 0 001.704.29l4.942-2.377A1.5 1.5 0 0024 20.06V3.939a1.5 1.5 0 00-.85-1.352zm-5.146 14.861L10.826 12l7.178-5.448v10.896z"/></svg>'],
                    ['name' => 'Figma', 'icon' => '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M15.852 8.981h-4.588V0h4.588c2.476 0 4.49 2.014 4.49 4.49s-2.014 4.491-4.49 4.491zM12.735 7.51h3.117c1.665 0 3.019-1.355 3.019-3.019s-1.354-3.019-3.019-3.019h-3.117V7.51zm0 1.471H8.148c-2.476 0-4.49-2.014-4.49-4.49S5.672 0 8.148 0h4.588v8.981zm-4.587-7.51c-1.665 0-3.019 1.355-3.019 3.019s1.354 3.019 3.019 3.019h3.117V1.471H8.148zm4.587 15.019H8.148c-2.476 0-4.49-2.014-4.49-4.49s2.014-4.49 4.49-4.49h4.588v8.98zM8.148 8.981c-1.665 0-3.019 1.355-3.019 3.019s1.355 3.019 3.019 3.019h3.117V8.981H8.148zM8.172 24c-2.489 0-4.515-2.014-4.515-4.49s2.026-4.49 4.515-4.49a4.49 4.49 0 110 8.98zm0-7.509c-1.665 0-3.019 1.355-3.019 3.019S6.507 22.529 8.172 22.529s3.019-1.355 3.019-3.019-1.354-3.019-3.019-3.019zm7.703 7.509c-2.476 0-4.49-2.014-4.49-4.49v-4.49h4.49c2.476 0 4.49 2.014 4.49 4.49s-2.014 4.49-4.49 4.49zm0-7.509h-3.019v3.019c0 1.665 1.355 3.019 3.019 3.019s3.019-1.355 3.019-3.019-1.355-3.019-3.019-3.019z"/></svg>'],
                ],
            ],
        ];
        @endphp

        <div class="space-y-12">
            @foreach($skillGroups as $gi => $group)
            <div class="reveal" style="transition-delay: {{ $gi * 100 }}ms;">
                <div class="flex items-center gap-3 mb-6">
                    <span class="font-mono text-xs tracking-widest uppercase px-3 py-1 rounded-full"
                          style="background: rgba({{ $group['color'] === 'cyan' ? '0,229,255' : ($group['color'] === 'orange' ? '255,107,53' : '139,92,246') }},0.1); border: 1px solid rgba({{ $group['color'] === 'cyan' ? '0,229,255' : ($group['color'] === 'orange' ? '255,107,53' : '139,92,246') }},0.25); color: var(--{{ $group['color'] === 'cyan' ? 'cyan' : ($group['color'] === 'orange' ? 'orange' : 'purple') }});">
                        {{ $group['label'] }}
                    </span>
                    <div class="flex-1 h-px" style="background: rgba(255,255,255,0.06);"></div>
                </div>
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-3">
                    @foreach($group['skills'] as $si => $skill)
                    <div class="tech-card reveal" style="transition-delay: {{ ($gi * 100) + ($si * 60) }}ms;">
                        <div class="tech-icon w-8 h-8 transition-transform duration-200" style="color: var(--muted);">
                            {!! $skill['icon'] !!}
                        </div>
                        <span class="text-xs font-medium" style="color: var(--muted);">{{ $skill['name'] }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================================
     PROJECTS SECTION
     ============================================================ --}}
<section id="projects" class="py-24 lg:py-32 relative" style="background: var(--bg2);" aria-labelledby="projects-heading">
    <div class="ambient-blob w-96 h-96 top-0 right-0 opacity-10" style="background: radial-gradient(circle, rgba(139,92,246,0.5), transparent);" aria-hidden="true"></div>

    <div class="section-container relative z-10">
        <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-6 mb-12">
            <div class="max-w-xl">
                <div class="section-label reveal mb-4">{{ $t('projects_label') }}</div>
                <h2 id="projects-heading" class="text-3xl sm:text-4xl lg:text-5xl font-black leading-tight reveal delay-100">
                    <span class="heading-gradient">{{ $t('projects_heading') }}</span>
                </h2>
            </div>
            <p class="text-sm max-w-xs reveal delay-200" style="color: var(--muted);">{{ $t('projects_desc') }}</p>
        </div>

        {{-- Project Cards Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($featuredProjects as $i => $project)
            @php
            $title   = $locale === 'id' ? $project['title_id'] : $project['title_en'];
            $desc    = $locale === 'id' ? $project['desc_id']  : $project['desc_en'];
            $cat     = $locale === 'id' ? $project['category_id'] : $project['category_en'];
            $statusKey = 'projects_status_' . str_replace('-', '_', $project['status']);
            @endphp
            <article class="project-card reveal" style="transition-delay: {{ $i * 120 }}ms;">
                {{-- Image / Placeholder --}}
                <div class="card-image overflow-hidden" style="min-height: 200px;">
                    @if($project['image'])
                    <img src="{{ asset('storage/' . $project['image']) }}"
                         alt="{{ $title }}"
                         class="w-full h-52 object-cover"
                         loading="lazy"
                         width="600" height="208">
                    @else
                    <div class="img-placeholder h-52 relative" aria-label="Project image placeholder">
                        {{-- Grid lines decoration --}}
                        <div class="absolute inset-0" style="background-image: linear-gradient(rgba(139,92,246,0.05) 1px,transparent 1px),linear-gradient(90deg,rgba(139,92,246,0.05) 1px,transparent 1px);background-size:24px 24px;"></div>
                        <div class="relative z-10 flex flex-col items-center gap-2 text-center px-4">
                            <div class="font-mono text-4xl font-black opacity-20" style="color: var(--purple);">{{ $project['number'] }}</div>
                            <span class="font-mono text-xs px-2 py-1 rounded" style="background: rgba(139,92,246,0.1); color: rgba(139,92,246,0.6); border: 1px solid rgba(139,92,246,0.2);">
                                {{ $locale === 'id' ? 'Screenshot menyusul' : 'Screenshot coming soon' }}
                            </span>
                        </div>
                    </div>
                    @endif
                </div>

                {{-- Card Content --}}
                <div class="relative z-10 p-5">
                    {{-- Header row --}}
                    <div class="flex items-start justify-between gap-2 mb-3">
                        <div class="flex items-center gap-2 flex-wrap">
                            <span class="font-mono text-xs" style="color: rgba(139,92,246,0.7);">{{ $project['number'] }}</span>
                            <span class="tech-badge text-xs">{{ $cat }}</span>
                        </div>
                        <span class="status-badge status-{{ $project['status'] }} flex-shrink-0">
                            <span class="w-1.5 h-1.5 rounded-full bg-current"></span>
                            {{ $t($statusKey) }}
                        </span>
                    </div>

                    <h3 class="font-bold text-base mb-2" style="color: var(--text);">{{ $title }}</h3>
                    <p class="text-sm leading-relaxed mb-4 line-clamp-2" style="color: var(--muted);">{{ $desc }}</p>

                    {{-- Tech Stack --}}
                    <div class="flex flex-wrap gap-1.5 mb-5">
                        @foreach(array_slice($project['tech'], 0, 3) as $tech)
                        <span class="tech-badge">{{ $tech }}</span>
                        @endforeach
                        @if(count($project['tech']) > 3)
                        <span class="tech-badge">+{{ count($project['tech']) - 3 }}</span>
                        @endif
                    </div>

                    {{-- Actions --}}
                    <div class="flex items-center gap-2 flex-wrap">
                        <a href="{{ route('projects.show', $project['slug']) }}"
                           class="inline-flex items-center gap-1.5 text-sm font-semibold transition-colors hover:text-nv-purple group"
                           style="color: var(--cyan);">
                            {{ $t('projects_detail') }}
                            <svg class="w-4 h-4 project-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                        @if($project['demo_url'])
                        <a href="{{ $project['demo_url'] }}" target="_blank" rel="noopener noreferrer"
                           class="btn-orange text-xs px-3 py-1.5">
                            {{ $t('projects_demo') }}
                        </a>
                        @endif
                        @if($project['github_url'])
                        <a href="{{ $project['github_url'] }}" target="_blank" rel="noopener noreferrer"
                           class="btn-outline text-xs px-3 py-1.5">
                            {{ $t('projects_github') }}
                        </a>
                        @endif
                    </div>
                </div>
            </article>
            @endforeach
        </div>

        {{-- View All button --}}
        <div class="text-center mt-10 reveal">
            <a href="{{ route('projects') }}" class="btn-outline">
                {{ $t('projects_view_all') }}
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>

{{-- ============================================================
     PROCESS SECTION
     ============================================================ --}}
<section id="process" class="py-24 lg:py-32 relative bg-nv-bg" aria-labelledby="process-heading">
    <div class="section-container relative z-10">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <div class="section-label justify-center reveal mb-4">{{ $t('process_label') }}</div>
            <h2 id="process-heading" class="text-3xl sm:text-4xl lg:text-5xl font-black mb-4 reveal delay-100">
                <span class="heading-gradient">{{ $t('process_heading') }}</span>
            </h2>
            <p class="text-base reveal delay-200" style="color: var(--muted);">{{ $t('process_desc') }}</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
            @php
            $steps = [
                ['num' => $t('process_1_num'), 'title' => $t('process_1_title'), 'desc' => $t('process_1_desc'),
                 'icon' => 'M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z', 'color' => 'cyan'],
                ['num' => $t('process_2_num'), 'title' => $t('process_2_title'), 'desc' => $t('process_2_desc'),
                 'icon' => 'M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z', 'color' => 'purple'],
                ['num' => $t('process_3_num'), 'title' => $t('process_3_title'), 'desc' => $t('process_3_desc'),
                 'icon' => 'M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4', 'color' => 'purple'],
                ['num' => $t('process_4_num'), 'title' => $t('process_4_title'), 'desc' => $t('process_4_desc'),
                 'icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z', 'color' => 'orange'],
            ];
            @endphp
            @foreach($steps as $si => $step)
            <div class="process-step reveal" style="transition-delay: {{ $si * 120 }}ms;">
                <div class="flex items-start justify-between mb-5">
                    <div class="w-10 h-10 rounded-xl flex items-center justify-center flex-shrink-0"
                         style="background: rgba({{ $step['color'] === 'cyan' ? '0,229,255' : ($step['color'] === 'orange' ? '255,107,53' : '139,92,246') }},0.1); border: 1px solid rgba({{ $step['color'] === 'cyan' ? '0,229,255' : ($step['color'] === 'orange' ? '255,107,53' : '139,92,246') }},0.25);">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                             style="color: var(--{{ $step['color'] === 'orange' ? 'orange' : ($step['color'] === 'cyan' ? 'cyan' : 'purple') }});" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $step['icon'] }}"/>
                        </svg>
                    </div>
                    <span class="process-number">{{ $step['num'] }}</span>
                </div>
                <h3 class="font-bold text-base mb-2" style="color: var(--text);">{{ $step['title'] }}</h3>
                <p class="text-sm leading-relaxed" style="color: var(--muted);">{{ $step['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================================
     CONTACT SECTION
     ============================================================ --}}
<section id="contact" class="py-24 lg:py-32 relative" style="background: var(--bg2);" aria-labelledby="contact-heading">
    <div class="ambient-blob w-80 h-80 bottom-0 right-0 opacity-10" style="background: radial-gradient(circle, rgba(255,107,53,0.4), transparent);" aria-hidden="true"></div>
    <div class="ambient-blob w-60 h-60 top-0 left-0 opacity-10" style="background: radial-gradient(circle, rgba(139,92,246,0.5), transparent);" aria-hidden="true"></div>

    <div class="section-container relative z-10">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <div class="section-label justify-center reveal mb-4">{{ $t('contact_label') }}</div>
            <h2 id="contact-heading" class="text-3xl sm:text-4xl lg:text-5xl font-black mb-4 reveal delay-100">
                <span class="heading-gradient">{{ $t('contact_heading') }}</span>
            </h2>
            <p class="text-base reveal delay-200" style="color: var(--muted);">{{ $t('contact_desc') }}</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16">
            {{-- Contact Info --}}
            <div class="reveal-left">
                <div class="space-y-4 mb-8">
                    {{-- Email --}}
                    <a href="mailto:ikhsanfitra9@gmail.com"
                       class="flex items-center gap-4 p-4 rounded-xl transition-all duration-200 group"
                       style="background: var(--card); border: 1px solid rgba(255,255,255,0.06);"
                       onmouseenter="this.style.borderColor='rgba(139,92,246,0.35)'"
                       onmouseleave="this.style.borderColor='rgba(255,255,255,0.06)'">
                        <div class="w-10 h-10 rounded-lg flex items-center justify-center flex-shrink-0"
                             style="background: rgba(139,92,246,0.12); border: 1px solid rgba(139,92,246,0.2); color: var(--purple);">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="font-mono text-xs mb-0.5" style="color: var(--purple);">{{ $t('contact_email_label') }}</div>
                            <div class="text-sm" style="color: var(--text);">ikhsanfitra9@gmail.com</div>
                        </div>
                    </a>

                    {{-- GitHub --}}
                    <a href="https://github.com/ikhsanfitr4" target="_blank" rel="noopener noreferrer"
                       class="flex items-center gap-4 p-4 rounded-xl transition-all duration-200"
                       style="background: var(--card); border: 1px solid rgba(255,255,255,0.06);"
                       onmouseenter="this.style.borderColor='rgba(139,92,246,0.35)'"
                       onmouseleave="this.style.borderColor='rgba(255,255,255,0.06)'">
                        <div class="w-10 h-10 rounded-lg flex items-center justify-center flex-shrink-0"
                             style="background: rgba(139,92,246,0.12); border: 1px solid rgba(139,92,246,0.2); color: var(--purple);">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="font-mono text-xs mb-0.5" style="color: var(--purple);">{{ $t('contact_github_label') }}</div>
                            <div class="text-sm" style="color: var(--text);">github.com/ikhsanfitr4</div>
                        </div>
                    </a>

                    {{-- LinkedIn --}}
                    <a href="https://linkedin.com/in/ikhsan-fitrah-al-mubarak" target="_blank" rel="noopener noreferrer"
                       class="flex items-center gap-4 p-4 rounded-xl transition-all duration-200"
                       style="background: var(--card); border: 1px solid rgba(255,255,255,0.06);"
                       onmouseenter="this.style.borderColor='rgba(0,229,255,0.35)'"
                       onmouseleave="this.style.borderColor='rgba(255,255,255,0.06)'">
                        <div class="w-10 h-10 rounded-lg flex items-center justify-center flex-shrink-0"
                             style="background: rgba(0,229,255,0.08); border: 1px solid rgba(0,229,255,0.2); color: var(--cyan);">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="font-mono text-xs mb-0.5" style="color: var(--cyan);">{{ $t('contact_linkedin_label') }}</div>
                            <div class="text-sm" style="color: var(--text);">linkedin.com/in/ikhsan-fitrah-al-mubarak</div>
                        </div>
                    </a>
                </div>

                <p class="font-mono text-xs px-3 py-2 rounded-lg" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.06); color: var(--muted);">
                    💬 {{ $t('contact_note') }}
                </p>
            </div>

            {{-- Contact Form --}}
            <div class="reveal-right">
                <form id="contact-form" action="{{ route('contact.send') }}" method="POST" novalidate>
                    @csrf
                    <div class="space-y-4">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="name" class="block font-mono text-xs mb-2" style="color: var(--muted);">
                                    {{ $t('contact_name') }} <span style="color: var(--orange);" aria-hidden="true">*</span>
                                </label>
                                <input type="text" id="name" name="name"
                                       required minlength="2" maxlength="100"
                                       placeholder="{{ $t('contact_ph_name') }}"
                                       value="{{ old('name') }}"
                                       class="form-input @error('name') error @enderror"
                                       aria-required="true"
                                       aria-describedby="name-error">
                                @error('name')
                                <p id="name-error" class="mt-1 text-xs text-red-400" role="alert">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="email" class="block font-mono text-xs mb-2" style="color: var(--muted);">
                                    {{ $t('contact_email') }} <span style="color: var(--orange);" aria-hidden="true">*</span>
                                </label>
                                <input type="email" id="email" name="email"
                                       required maxlength="150"
                                       placeholder="{{ $t('contact_ph_email') }}"
                                       value="{{ old('email') }}"
                                       class="form-input @error('email') error @enderror"
                                       aria-required="true"
                                       aria-describedby="email-error">
                                @error('email')
                                <p id="email-error" class="mt-1 text-xs text-red-400" role="alert">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="subject" class="block font-mono text-xs mb-2" style="color: var(--muted);">
                                {{ $t('contact_subject') }} <span style="color: var(--orange);" aria-hidden="true">*</span>
                            </label>
                            <input type="text" id="subject" name="subject"
                                   required minlength="3" maxlength="200"
                                   placeholder="{{ $t('contact_ph_subj') }}"
                                   value="{{ old('subject') }}"
                                   class="form-input @error('subject') error @enderror"
                                   aria-required="true"
                                   aria-describedby="subject-error">
                            @error('subject')
                            <p id="subject-error" class="mt-1 text-xs text-red-400" role="alert">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <label for="message" class="font-mono text-xs" style="color: var(--muted);">
                                    {{ $t('contact_message') }} <span style="color: var(--orange);" aria-hidden="true">*</span>
                                </label>
                                <span id="msg-counter" class="font-mono text-xs" style="color: rgba(163,168,189,0.5);">0/2000</span>
                            </div>
                            <textarea id="message" name="message"
                                      required minlength="10" maxlength="2000"
                                      rows="5"
                                      placeholder="{{ $t('contact_ph_msg') }}"
                                      class="form-input resize-none @error('message') error @enderror"
                                      aria-required="true"
                                      aria-describedby="message-error">{{ old('message') }}</textarea>
                            @error('message')
                            <p id="message-error" class="mt-1 text-xs text-red-400" role="alert">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit" class="btn-primary w-full justify-center">
                            <svg class="w-4 h-4 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                            </svg>
                            <span>{{ $t('contact_send') }}</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
