@extends('layouts.app')

@php
$locale  = app()->getLocale();
$t       = fn($k) => __('portfolio.'.$k);
$title   = $locale === 'id' ? $project['title_id']   : $project['title_en'];
$desc    = $locale === 'id' ? $project['desc_id']    : $project['desc_en'];
$cat     = $locale === 'id' ? $project['category_id']: $project['category_en'];
$problem = $locale === 'id' ? $project['problem_id'] : $project['problem_en'];
$goal    = $locale === 'id' ? $project['goal_id']    : $project['goal_en'];
$role    = $locale === 'id' ? $project['role_id']    : $project['role_en'];
$features= $locale === 'id' ? $project['features_id']: $project['features_en'];
$challenge=$locale === 'id' ? $project['challenge_id']: $project['challenge_en'];
$lesson  = $locale === 'id' ? $project['lesson_id']  : $project['lesson_en'];
$statusKey = 'projects_status_' . str_replace('-', '_', $project['status']);
@endphp

@section('title', $title . ' — NEONVERSE')
@section('description', substr($desc, 0, 160))

@section('content')
<div class="pt-24 relative" style="background: var(--bg);">
    <div class="ambient-blob w-80 h-80 top-0 right-0 opacity-10" style="background: radial-gradient(circle, rgba(139,92,246,0.5), transparent);" aria-hidden="true"></div>

    {{-- Hero Banner --}}
    <div class="relative py-16 lg:py-24 overflow-hidden bg-grid" style="background-color: var(--bg2); border-bottom: 1px solid rgba(255,255,255,0.06);">
        <div class="ambient-blob w-96 h-96 -bottom-48 left-1/4 opacity-15" style="background: radial-gradient(circle, rgba(0,229,255,0.3), transparent);" aria-hidden="true"></div>
        <div class="section-container relative z-10">
            {{-- Breadcrumb --}}
            <nav aria-label="Breadcrumb" class="mb-6">
                <ol class="flex items-center gap-2 font-mono text-xs" style="color: var(--muted);">
                    <li><a href="{{ route('home') }}" class="hover:text-nv-text transition-colors">Home</a></li>
                    <li aria-hidden="true"><span>/</span></li>
                    <li><a href="{{ route('projects') }}" class="hover:text-nv-text transition-colors">{{ $t('nav_projects') }}</a></li>
                    <li aria-hidden="true"><span>/</span></li>
                    <li style="color: var(--cyan);">{{ $project['number'] }}</li>
                </ol>
            </nav>

            <div class="flex flex-wrap items-center gap-3 mb-4">
                <span class="tech-badge">{{ $cat }}</span>
                <span class="status-badge status-{{ $project['status'] }}">
                    <span class="w-1.5 h-1.5 rounded-full bg-current"></span>
                    {{ $t($statusKey) }}
                </span>
                <span class="font-mono text-xs" style="color: rgba(139,92,246,0.6);">{{ $project['number'] }}</span>
            </div>

            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black mb-4">
                <span class="heading-gradient">{{ $title }}</span>
            </h1>
            <p class="text-base max-w-2xl leading-relaxed mb-8" style="color: var(--muted);">{{ $desc }}</p>

            {{-- Tech Stack --}}
            <div class="flex flex-wrap gap-2 mb-8">
                @foreach($project['tech'] as $tech)
                <span class="tech-badge text-sm">{{ $tech }}</span>
                @endforeach
            </div>

            {{-- Action buttons --}}
            <div class="flex flex-wrap gap-3">
                <a href="{{ route('projects') }}" class="btn-outline text-sm">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    {{ $t('detail_back') }}
                </a>
                @if($project['demo_url'])
                <a href="{{ $project['demo_url'] }}" target="_blank" rel="noopener noreferrer" class="btn-orange text-sm">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                    </svg>
                    {{ $t('projects_demo') }}
                </a>
                @else
                <span class="inline-flex items-center gap-2 px-4 py-2 rounded-lg text-sm font-mono" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); color: rgba(163,168,189,0.5);">
                    {{ $t('detail_no_demo') }}
                </span>
                @endif
                @if($project['github_url'])
                <a href="{{ $project['github_url'] }}" target="_blank" rel="noopener noreferrer" class="btn-outline text-sm">
                    {{ $t('projects_github') }}
                </a>
                @else
                <span class="inline-flex items-center gap-2 px-4 py-2 rounded-lg text-sm font-mono" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); color: rgba(163,168,189,0.5);">
                    {{ $t('detail_no_repo') }}
                </span>
                @endif
            </div>
        </div>
    </div>

    {{-- Main Content --}}
    <div class="py-16 lg:py-24">
        <div class="section-container">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

                {{-- Left: Main detail content --}}
                <div class="lg:col-span-2 space-y-10">

                    {{-- Screenshots --}}
                    <div class="reveal">
                        <h2 class="text-xl font-bold mb-5 flex items-center gap-3" style="color: var(--text);">
                            <span class="w-1 h-5 rounded-full" style="background: var(--cyan);"></span>
                            {{ $t('detail_screenshots') }}
                        </h2>
                        @if(!empty($project['images']))
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            @foreach($project['images'] as $img)
                            <div class="overflow-hidden rounded-xl" style="border: 1px solid rgba(255,255,255,0.08);">
                                <img src="{{ asset('storage/' . $img) }}"
                                     alt="{{ $title }} screenshot"
                                     class="w-full object-cover"
                                     loading="lazy">
                            </div>
                            @endforeach
                        </div>
                        @else
                        <div class="flex flex-col items-center justify-center gap-3 p-10 rounded-xl text-center"
                             style="background: var(--card); border: 1px dashed rgba(139,92,246,0.25);">
                            <svg class="w-10 h-10 opacity-30" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: var(--purple);" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            <p class="text-sm font-mono" style="color: var(--muted);">{{ $t('detail_placeholder') }}</p>
                        </div>
                        @endif
                    </div>

                    {{-- Problem --}}
                    <div class="reveal">
                        <h2 class="text-xl font-bold mb-4 flex items-center gap-3" style="color: var(--text);">
                            <span class="w-1 h-5 rounded-full" style="background: var(--orange);"></span>
                            {{ $t('detail_problem') }}
                        </h2>
                        <p class="text-base leading-relaxed p-5 rounded-xl" style="color: var(--muted); background: var(--card); border: 1px solid rgba(255,107,53,0.15);">
                            {{ $problem }}
                        </p>
                    </div>

                    {{-- Goal --}}
                    <div class="reveal">
                        <h2 class="text-xl font-bold mb-4 flex items-center gap-3" style="color: var(--text);">
                            <span class="w-1 h-5 rounded-full" style="background: var(--purple);"></span>
                            {{ $t('detail_goal') }}
                        </h2>
                        <p class="text-base leading-relaxed p-5 rounded-xl" style="color: var(--muted); background: var(--card); border: 1px solid rgba(139,92,246,0.15);">
                            {{ $goal }}
                        </p>
                    </div>

                    {{-- Features --}}
                    <div class="reveal">
                        <h2 class="text-xl font-bold mb-5 flex items-center gap-3" style="color: var(--text);">
                            <span class="w-1 h-5 rounded-full" style="background: var(--cyan);"></span>
                            {{ $t('detail_features') }}
                        </h2>
                        <ul class="space-y-2.5" role="list">
                            @foreach($features as $fi => $feature)
                            <li class="flex items-start gap-3 p-3.5 rounded-lg reveal" style="transition-delay: {{ $fi * 60 }}ms; background: var(--card); border: 1px solid rgba(255,255,255,0.06);">
                                <span class="font-mono text-xs mt-0.5 flex-shrink-0" style="color: var(--cyan);">{{ str_pad($fi+1, 2, '0', STR_PAD_LEFT) }}</span>
                                <span class="text-sm" style="color: var(--muted);">{{ $feature }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    {{-- Challenge --}}
                    <div class="reveal">
                        <h2 class="text-xl font-bold mb-4 flex items-center gap-3" style="color: var(--text);">
                            <span class="w-1 h-5 rounded-full" style="background: var(--orange);"></span>
                            {{ $t('detail_challenge') }}
                        </h2>
                        <p class="text-base leading-relaxed p-5 rounded-xl" style="color: var(--muted); background: var(--card); border: 1px solid rgba(255,107,53,0.15);">
                            {{ $challenge }}
                        </p>
                    </div>

                    {{-- Lesson --}}
                    <div class="reveal">
                        <h2 class="text-xl font-bold mb-4 flex items-center gap-3" style="color: var(--text);">
                            <span class="w-1 h-5 rounded-full" style="background: var(--purple);"></span>
                            {{ $t('detail_lesson') }}
                        </h2>
                        <p class="text-base leading-relaxed p-5 rounded-xl italic" style="color: var(--muted); background: var(--card); border: 1px solid rgba(139,92,246,0.15);">
                            "{{ $lesson }}"
                        </p>
                    </div>
                </div>

                {{-- Right: Sidebar --}}
                <div class="lg:col-span-1">
                    <div class="sticky top-24 space-y-6">

                        {{-- Role --}}
                        <div class="p-5 rounded-xl reveal" style="background: var(--card); border: 1px solid rgba(255,255,255,0.08);">
                            <h3 class="font-mono text-xs tracking-widest uppercase mb-3" style="color: var(--cyan);">{{ $t('detail_role') }}</h3>
                            <p class="text-sm leading-relaxed" style="color: var(--muted);">{{ $role }}</p>
                        </div>

                        {{-- Tech Stack --}}
                        <div class="p-5 rounded-xl reveal delay-100" style="background: var(--card); border: 1px solid rgba(255,255,255,0.08);">
                            <h3 class="font-mono text-xs tracking-widest uppercase mb-3" style="color: var(--purple);">{{ $t('detail_tech') }}</h3>
                            <div class="flex flex-wrap gap-2">
                                @foreach($project['tech'] as $tech)
                                <span class="tech-badge">{{ $tech }}</span>
                                @endforeach
                            </div>
                        </div>

                        {{-- Links --}}
                        <div class="p-5 rounded-xl reveal delay-200" style="background: var(--card); border: 1px solid rgba(255,255,255,0.08);">
                            <h3 class="font-mono text-xs tracking-widest uppercase mb-3" style="color: var(--orange);">{{ $t('detail_links') }}</h3>
                            <div class="space-y-2">
                                <div class="text-sm" style="color: var(--muted);">
                                    <span class="font-mono text-xs" style="color: var(--muted);">Demo:</span>
                                    @if($project['demo_url'])
                                    <a href="{{ $project['demo_url'] }}" target="_blank" rel="noopener noreferrer" class="ml-2 text-nv-orange hover:underline">{{ $project['demo_url'] }}</a>
                                    @else
                                    <span class="ml-2 opacity-40">—</span>
                                    @endif
                                </div>
                                <div class="text-sm" style="color: var(--muted);">
                                    <span class="font-mono text-xs" style="color: var(--muted);">GitHub:</span>
                                    @if($project['github_url'])
                                    <a href="{{ $project['github_url'] }}" target="_blank" rel="noopener noreferrer" class="ml-2 text-nv-purple hover:underline break-all">{{ $project['github_url'] }}</a>
                                    @else
                                    <span class="ml-2 opacity-40">—</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Related Projects --}}
            @if(!empty($related))
            <div class="mt-20">
                <div class="divider-neon mb-10"></div>
                <h2 class="text-2xl font-bold mb-8 reveal" style="color: var(--text);">{{ $t('detail_related') }}</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    @foreach($related as $ri => $rel)
                    @php
                    $relTitle = $locale === 'id' ? $rel['title_id'] : $rel['title_en'];
                    $relDesc  = $locale === 'id' ? $rel['desc_id']  : $rel['desc_en'];
                    @endphp
                    <article class="project-card reveal" style="transition-delay: {{ $ri * 100 }}ms;">
                        <div class="p-5">
                            <div class="flex items-center gap-2 mb-3">
                                <span class="font-mono text-xs" style="color: rgba(139,92,246,0.7);">{{ $rel['number'] }}</span>
                                <span class="tech-badge">{{ $locale === 'id' ? $rel['category_id'] : $rel['category_en'] }}</span>
                            </div>
                            <h3 class="font-bold text-base mb-2" style="color: var(--text);">{{ $relTitle }}</h3>
                            <p class="text-sm leading-relaxed mb-4 line-clamp-2" style="color: var(--muted);">{{ $relDesc }}</p>
                            <a href="{{ route('projects.show', $rel['slug']) }}"
                               class="inline-flex items-center gap-1.5 text-sm font-semibold hover:text-nv-purple transition-colors"
                               style="color: var(--cyan);">
                                {{ $t('projects_detail') }}
                                <svg class="w-4 h-4 project-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </a>
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
