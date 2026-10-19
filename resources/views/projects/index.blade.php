@extends('layouts.app')

@php
$locale = app()->getLocale();
$t = fn($k) => __('portfolio.'.$k);
@endphp

@section('title', ($locale === 'id' ? 'Semua Proyek' : 'All Projects') . ' — NEONVERSE')
@section('description', $locale === 'id'
    ? 'Koleksi lengkap proyek web development oleh Ikhsan Fitrah Al Mubarak — Sistem Informasi Laundry, Bengkel, dan Website Informasi Desa.'
    : 'Complete collection of web development projects by Ikhsan Fitrah Al Mubarak — Laundry, Workshop Information Systems, and Village Information Website.')

@section('content')
<div class="pt-24 pb-32 relative" style="background: var(--bg);">
    <div class="ambient-blob w-96 h-96 -top-40 -right-40 opacity-10" style="background: radial-gradient(circle, rgba(139,92,246,0.5), transparent);" aria-hidden="true"></div>

    <div class="section-container relative z-10">
        {{-- Header --}}
        <div class="mb-12 pt-8">
            <div class="section-label reveal mb-4">{{ $t('projects_label') }}</div>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black reveal delay-100">
                <span class="heading-gradient">{{ $t('projects_heading') }}</span>
            </h1>
            <p class="mt-4 max-w-xl text-base reveal delay-200" style="color: var(--muted);">{{ $t('projects_desc') }}</p>
        </div>

        {{-- Projects Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($projects as $i => $project)
            @php
            $title   = $locale === 'id' ? $project['title_id'] : $project['title_en'];
            $desc    = $locale === 'id' ? $project['desc_id']  : $project['desc_en'];
            $cat     = $locale === 'id' ? $project['category_id'] : $project['category_en'];
            $statusKey = 'projects_status_' . str_replace('-', '_', $project['status']);
            @endphp
            <article class="project-card reveal" style="transition-delay: {{ $i * 100 }}ms;">
                {{-- Image / Placeholder --}}
                <div class="card-image overflow-hidden">
                    @if($project['image'])
                    <img src="{{ asset('storage/' . $project['image']) }}"
                         alt="{{ $title }}"
                         class="w-full h-52 object-cover"
                         loading="lazy" width="600" height="208">
                    @else
                    <div class="img-placeholder h-52 relative" aria-label="Screenshot placeholder">
                        <div class="absolute inset-0" style="background-image: linear-gradient(rgba(139,92,246,0.05) 1px,transparent 1px),linear-gradient(90deg,rgba(139,92,246,0.05) 1px,transparent 1px);background-size:24px 24px;"></div>
                        <div class="relative z-10 flex flex-col items-center gap-2">
                            <div class="font-mono text-5xl font-black opacity-20" style="color: var(--purple);">{{ $project['number'] }}</div>
                            <span class="font-mono text-xs px-2 py-1 rounded" style="background: rgba(139,92,246,0.1); color: rgba(139,92,246,0.6); border: 1px solid rgba(139,92,246,0.2);">
                                {{ $locale === 'id' ? 'Screenshot menyusul' : 'Screenshot coming soon' }}
                            </span>
                        </div>
                    </div>
                    @endif
                </div>

                <div class="relative z-10 p-5">
                    <div class="flex items-start justify-between gap-2 mb-3">
                        <div class="flex items-center gap-2">
                            <span class="font-mono text-xs" style="color: rgba(139,92,246,0.7);">{{ $project['number'] }}</span>
                            <span class="tech-badge">{{ $cat }}</span>
                        </div>
                        <span class="status-badge status-{{ $project['status'] }} flex-shrink-0">
                            <span class="w-1.5 h-1.5 rounded-full bg-current"></span>
                            {{ $t($statusKey) }}
                        </span>
                    </div>

                    <h2 class="font-bold text-base mb-2" style="color: var(--text);">{{ $title }}</h2>
                    <p class="text-sm leading-relaxed mb-4 line-clamp-2" style="color: var(--muted);">{{ $desc }}</p>

                    <div class="flex flex-wrap gap-1.5 mb-5">
                        @foreach(array_slice($project['tech'], 0, 3) as $tech)
                        <span class="tech-badge">{{ $tech }}</span>
                        @endforeach
                        @if(count($project['tech']) > 3)
                        <span class="tech-badge">+{{ count($project['tech']) - 3 }}</span>
                        @endif
                    </div>

                    <div class="flex items-center gap-2 flex-wrap">
                        <a href="{{ route('projects.show', $project['slug']) }}"
                           class="inline-flex items-center gap-1.5 text-sm font-semibold hover:text-nv-purple transition-colors"
                           style="color: var(--cyan);">
                            {{ $t('projects_detail') }}
                            <svg class="w-4 h-4 project-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                        @if($project['demo_url'])
                        <a href="{{ $project['demo_url'] }}" target="_blank" rel="noopener noreferrer" class="btn-orange text-xs px-3 py-1.5">
                            {{ $t('projects_demo') }}
                        </a>
                        @endif
                        @if($project['github_url'])
                        <a href="{{ $project['github_url'] }}" target="_blank" rel="noopener noreferrer" class="btn-outline text-xs px-3 py-1.5">
                            {{ $t('projects_github') }}
                        </a>
                        @endif
                    </div>
                </div>
            </article>
            @endforeach
        </div>
    </div>
</div>
@endsection
