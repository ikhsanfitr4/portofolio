@php $locale = app()->getLocale(); $t = fn($k) => __('portfolio.'.$k); @endphp
<nav id="navbar" aria-label="{{ $locale === 'id' ? 'Navigasi utama' : 'Main navigation' }}">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 lg:h-18">

            {{-- Logo --}}
            <a href="{{ route('home') }}#hero" class="group flex-shrink-0" aria-label="NEONVERSE Home">
                <div class="relative w-10 h-10 rounded-lg flex items-center justify-center font-mono font-bold text-sm transition-all duration-300 group-hover:scale-105"
                     style="background: linear-gradient(135deg, #8B5CF6, #6D28D9); border: 1px solid rgba(139,92,246,0.5); box-shadow: 0 0 16px rgba(139,92,246,0.4);">
                    <span class="text-white text-base font-black tracking-tighter">IF</span>
                </div>
            </a>

            {{-- Desktop Nav Links --}}
            <div class="hidden lg:flex items-center gap-7" role="list">
                <a href="{{ route('home') }}#hero"     class="nav-link" role="listitem">{{ $t('nav_home') }}</a>
                <a href="{{ route('home') }}#about"    class="nav-link" role="listitem">{{ $t('nav_about') }}</a>
                <a href="{{ route('home') }}#skills"   class="nav-link" role="listitem">{{ $t('nav_skills') }}</a>
                <a href="{{ route('home') }}#projects" class="nav-link" role="listitem">{{ $t('nav_projects') }}</a>
                <a href="{{ route('home') }}#process"  class="nav-link" role="listitem">{{ $t('nav_process') }}</a>
                <a href="{{ route('home') }}#contact"  class="nav-link" role="listitem">{{ $t('nav_contact') }}</a>
            </div>

            {{-- Right Section: Lang + CTA + Mobile Toggle --}}
            <div class="flex items-center gap-3">

                {{-- Language Switcher --}}
                <div class="relative">
                    <button id="lang-btn"
                            aria-haspopup="true" aria-expanded="false"
                            class="flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-xs font-mono font-semibold transition-all duration-200"
                            style="border: 1px solid rgba(255,255,255,0.12); color: var(--muted); background: rgba(255,255,255,0.04);"
                            aria-label="Switch language">
                        <span>{{ strtoupper($locale) }}</span>
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div id="lang-dropdown"
                         class="hidden absolute right-0 mt-2 w-24 rounded-lg overflow-hidden shadow-xl z-50"
                         style="background: rgba(20,22,36,0.97); border: 1px solid rgba(139,92,246,0.25); backdrop-filter: blur(12px);"
                         role="menu">
                        <a href="{{ route('lang.switch', 'id') }}"
                           class="flex items-center gap-2 px-4 py-2.5 text-xs font-mono transition-colors hover:text-white {{ $locale === 'id' ? 'text-nv-cyan' : 'text-nv-muted' }}"
                           role="menuitem">
                            🇮🇩 ID
                        </a>
                        <a href="{{ route('lang.switch', 'en') }}"
                           class="flex items-center gap-2 px-4 py-2.5 text-xs font-mono transition-colors hover:text-white {{ $locale === 'en' ? 'text-nv-cyan' : 'text-nv-muted' }}"
                           role="menuitem">
                            🇬🇧 EN
                        </a>
                    </div>
                </div>

                {{-- CTA Button (desktop) --}}
                <a href="{{ route('home') }}#contact" class="hidden lg:inline-flex btn-primary text-xs px-4 py-2">
                    <span>{{ $t('nav_cta') }}</span>
                </a>

                {{-- Mobile Menu Toggle --}}
                <button id="menu-toggle"
                        aria-label="{{ $t('menu_open') }}" aria-expanded="false" aria-controls="mobile-menu"
                        class="lg:hidden p-2 rounded-lg transition-colors hover:bg-white/5"
                        style="color: var(--muted);">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div id="mobile-menu" class="hidden lg:hidden" aria-hidden="true" role="dialog" aria-modal="true" aria-label="{{ $locale === 'id' ? 'Menu navigasi mobile' : 'Mobile navigation menu' }}">
        <div class="px-4 pt-4 pb-6 space-y-1">
            <div class="flex justify-between items-center mb-4">
                <span class="font-mono text-xs text-nv-muted tracking-widest uppercase">MENU</span>
                <button id="menu-close" aria-label="{{ $t('menu_close') }}" class="p-2 rounded-lg hover:bg-white/5 transition-colors" style="color: var(--muted);">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
            <a href="{{ route('home') }}#hero"     class="nav-link-m block py-3 px-2 text-base border-b" style="border-color: rgba(255,255,255,0.06); color: var(--text);">{{ $t('nav_home') }}</a>
            <a href="{{ route('home') }}#about"    class="nav-link-m block py-3 px-2 text-base border-b" style="border-color: rgba(255,255,255,0.06); color: var(--text);">{{ $t('nav_about') }}</a>
            <a href="{{ route('home') }}#skills"   class="nav-link-m block py-3 px-2 text-base border-b" style="border-color: rgba(255,255,255,0.06); color: var(--text);">{{ $t('nav_skills') }}</a>
            <a href="{{ route('home') }}#projects" class="nav-link-m block py-3 px-2 text-base border-b" style="border-color: rgba(255,255,255,0.06); color: var(--text);">{{ $t('nav_projects') }}</a>
            <a href="{{ route('home') }}#process"  class="nav-link-m block py-3 px-2 text-base border-b" style="border-color: rgba(255,255,255,0.06); color: var(--text);">{{ $t('nav_process') }}</a>
            <a href="{{ route('home') }}#contact"  class="nav-link-m block py-3 px-2 text-base"           style="color: var(--text);">{{ $t('nav_contact') }}</a>
            <div class="pt-4">
                <a href="{{ route('home') }}#contact" class="btn-primary w-full justify-center text-sm">
                    <span>{{ $t('nav_cta') }}</span>
                </a>
            </div>
        </div>
    </div>
</nav>
