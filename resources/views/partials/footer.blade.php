@php $locale = app()->getLocale(); $t = fn($k) => __('portfolio.'.$k); $year = date('Y'); @endphp

<footer class="relative overflow-hidden pt-16 pb-8 mt-0" style="background: var(--bg2); border-top: 1px solid rgba(255,255,255,0.06);">
    {{-- Top neon line --}}
    <div class="absolute top-0 left-0 right-0 h-px" style="background: linear-gradient(90deg, transparent, rgba(139,92,246,0.5), rgba(0,229,255,0.3), transparent);"></div>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mb-12">

            {{-- Brand Column --}}
            <div class="md:col-span-1">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 rounded-lg flex items-center justify-center font-mono font-black text-sm"
                         style="background: linear-gradient(135deg, #8B5CF6, #6D28D9); border: 1px solid rgba(139,92,246,0.5); box-shadow: 0 0 16px rgba(139,92,246,0.3);">
                        <span class="text-white">IF</span>
                    </div>
                    <div>
                        <div class="font-semibold text-nv-text text-sm">Ikhsan Fitrah Al Mubarak</div>
                        <div class="font-mono text-xs" style="color: var(--cyan);">NEONVERSE</div>
                    </div>
                </div>
                <p class="text-sm leading-relaxed mb-5" style="color: var(--muted);">{{ $t('footer_tagline') }}</p>

                {{-- Social Links --}}
                <div class="flex gap-3">
                    {{-- GitHub --}}
                    <a href="https://github.com/ikhsanfitr4" target="_blank" rel="noopener noreferrer"
                       aria-label="GitHub" title="GitHub"
                       class="w-9 h-9 rounded-lg flex items-center justify-center transition-all duration-200 hover:scale-110"
                       style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.1); color: var(--muted);"
                       onmouseenter="this.style.borderColor='rgba(139,92,246,0.5)';this.style.color='var(--purple)'"
                       onmouseleave="this.style.borderColor='rgba(255,255,255,0.1)';this.style.color='var(--muted)'">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/>
                        </svg>
                    </a>
                    {{-- LinkedIn --}}
                    <a href="https://linkedin.com/in/ikhsan-fitrah-al-mubarak" target="_blank" rel="noopener noreferrer"
                       aria-label="LinkedIn" title="LinkedIn"
                       class="w-9 h-9 rounded-lg flex items-center justify-center transition-all duration-200 hover:scale-110"
                       style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.1); color: var(--muted);"
                       onmouseenter="this.style.borderColor='rgba(0,229,255,0.5)';this.style.color='var(--cyan)'"
                       onmouseleave="this.style.borderColor='rgba(255,255,255,0.1)';this.style.color='var(--muted)'">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                    {{-- Email --}}
                    <a href="mailto:ikhsanfitra9@gmail.com"
                       aria-label="Email" title="Email"
                       class="w-9 h-9 rounded-lg flex items-center justify-center transition-all duration-200 hover:scale-110"
                       style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.1); color: var(--muted);"
                       onmouseenter="this.style.borderColor='rgba(255,107,53,0.5)';this.style.color='var(--orange)'"
                       onmouseleave="this.style.borderColor='rgba(255,255,255,0.1)';this.style.color='var(--muted)'">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Navigation --}}
            <div>
                <h3 class="font-mono text-xs tracking-widest uppercase mb-4" style="color: var(--cyan);">{{ $t('footer_nav') }}</h3>
                <ul class="space-y-2.5">
                    @foreach([
                        ['#hero', $t('nav_home')],
                        ['#about', $t('nav_about')],
                        ['#skills', $t('nav_skills')],
                        ['#projects', $t('nav_projects')],
                        ['#process', $t('nav_process')],
                        ['#contact', $t('nav_contact')],
                    ] as [$href, $label])
                    <li>
                        <a href="{{ route('home') }}{{ $href }}"
                           class="text-sm transition-colors duration-200 hover:text-nv-text"
                           style="color: var(--muted);">{{ $label }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Status --}}
            <div>
                <h3 class="font-mono text-xs tracking-widest uppercase mb-4" style="color: var(--cyan);">STATUS</h3>
                <div class="space-y-3">
                    <div class="flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-green-400 animate-pulse flex-shrink-0"></span>
                        <span class="text-sm" style="color: var(--muted);">
                            {{ $locale === 'id' ? 'Terbuka untuk Freelance' : 'Open for Freelance' }}
                        </span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-green-400 animate-pulse flex-shrink-0"></span>
                        <span class="text-sm" style="color: var(--muted);">
                            {{ $locale === 'id' ? 'Terbuka untuk Kerja Praktik' : 'Open for Internship' }}
                        </span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: var(--muted);" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <span class="text-sm" style="color: var(--muted);">Pekanbaru, Indonesia</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Bottom Bar --}}
        <div class="divider-neon mb-6"></div>
        <div class="flex flex-col sm:flex-row items-center justify-between gap-3">
            <p class="font-mono text-xs" style="color: rgba(163,168,189,0.6);">
                {{ str_replace(':year', $year, $t('footer_copyright')) }}
            </p>
            <button onclick="window.scrollTo({top:0,behavior:'smooth'})"
                    class="font-mono text-xs transition-colors hover:text-nv-purple"
                    style="color: rgba(163,168,189,0.6);"
                    aria-label="{{ $t('footer_back_top') }}">
                {{ $t('footer_back_top') }} ↑
            </button>
        </div>
    </div>
</footer>
