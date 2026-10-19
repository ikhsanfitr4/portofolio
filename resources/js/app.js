/**
 * NEONVERSE — Interactive JavaScript
 * Portfolio of Ikhsan Fitrah Al Mubarak
 */

document.addEventListener('DOMContentLoaded', () => {

    /* ============================================================
       NAVBAR — Scroll Behavior + Active Link + Mobile Menu
       ============================================================ */
    const navbar   = document.getElementById('navbar');
    const menuBtn  = document.getElementById('menu-toggle');
    const closeBtn = document.getElementById('menu-close');
    const mobileMenu = document.getElementById('mobile-menu');

    // Scroll state
    let lastScroll = 0;
    window.addEventListener('scroll', () => {
        const current = window.scrollY;
        if (navbar) {
            navbar.classList.toggle('scrolled', current > 40);
        }
        lastScroll = current;
    }, { passive: true });

    // Mobile menu toggle
    function openMenu() {
        if (!mobileMenu) return;
        mobileMenu.classList.remove('hidden');
        mobileMenu.setAttribute('aria-hidden', 'false');
        if (menuBtn) menuBtn.setAttribute('aria-expanded', 'true');
        document.body.style.overflow = 'hidden';
    }
    function closeMenu() {
        if (!mobileMenu) return;
        mobileMenu.classList.add('hidden');
        mobileMenu.setAttribute('aria-hidden', 'true');
        if (menuBtn) menuBtn.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
    }

    menuBtn?.addEventListener('click', openMenu);
    closeBtn?.addEventListener('click', closeMenu);

    // Close on mobile link click
    mobileMenu?.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', closeMenu);
    });

    // Close on Escape key
    document.addEventListener('keydown', e => {
        if (e.key === 'Escape') closeMenu();
    });

    // Active nav link based on section in viewport
    const sections = document.querySelectorAll('section[id]');
    const navLinks  = document.querySelectorAll('.nav-link[href^="#"], .nav-link-m[href^="#"]');

    function setActiveLink() {
        let current = '';
        sections.forEach(sec => {
            const top = sec.offsetTop - 100;
            if (window.scrollY >= top) current = sec.id;
        });
        navLinks.forEach(link => {
            const href = link.getAttribute('href');
            link.classList.toggle('active', href === '#' + current);
        });
    }
    window.addEventListener('scroll', setActiveLink, { passive: true });
    setActiveLink();

    /* ============================================================
       SCROLL REVEAL — IntersectionObserver
       ============================================================ */
    const revealEls = document.querySelectorAll('.reveal, .reveal-left, .reveal-right');

    if ('IntersectionObserver' in window) {
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

        revealEls.forEach(el => revealObserver.observe(el));
    } else {
        // Fallback: show all
        revealEls.forEach(el => el.classList.add('visible'));
    }

    /* ============================================================
       SMOOTH SCROLL — Anchor links
       ============================================================ */
    document.querySelectorAll('a[href^="#"]').forEach(link => {
        link.addEventListener('click', e => {
            const target = document.querySelector(link.getAttribute('href'));
            if (target) {
                e.preventDefault();
                const navH = navbar?.offsetHeight || 80;
                const top  = target.getBoundingClientRect().top + window.scrollY - navH;
                window.scrollTo({ top, behavior: 'smooth' });
            }
        });
    });

    /* ============================================================
       BACK TO TOP BUTTON
       ============================================================ */
    const backTopBtn = document.getElementById('back-to-top');
    if (backTopBtn) {
        window.addEventListener('scroll', () => {
            backTopBtn.classList.toggle('opacity-0', window.scrollY < 400);
            backTopBtn.classList.toggle('pointer-events-none', window.scrollY < 400);
            backTopBtn.classList.toggle('opacity-100', window.scrollY >= 400);
        }, { passive: true });

        backTopBtn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    /* ============================================================
       HERO — Typewriter Effect on tagline
       ============================================================ */
    const typeEl = document.getElementById('hero-tagline');
    if (typeEl) {
        const text     = typeEl.dataset.text || typeEl.textContent.trim();
        const fullText = text;
        typeEl.textContent = '';
        typeEl.style.visibility = 'visible';

        let i = 0;
        const type = () => {
            if (i < fullText.length) {
                typeEl.textContent += fullText[i++];
                setTimeout(type, 28);
            }
        };
        setTimeout(type, 900);
    }

    /* ============================================================
       TECH CARD ICONS — Micro-interaction
       ============================================================ */
    document.querySelectorAll('.tech-card').forEach(card => {
        card.addEventListener('mouseenter', () => {
            card.querySelector('.tech-icon')?.classList.add('scale-110');
        });
        card.addEventListener('mouseleave', () => {
            card.querySelector('.tech-icon')?.classList.remove('scale-110');
        });
    });

    /* ============================================================
       CONTACT FORM — Client-side UX
       ============================================================ */
    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        const inputs = contactForm.querySelectorAll('.form-input');

        inputs.forEach(input => {
            input.addEventListener('blur', () => {
                if (input.value.trim()) {
                    input.classList.add('border-nv-purple/30');
                }
            });
        });

        // Character counter for message
        const msgField = contactForm.querySelector('textarea[name="message"]');
        const counter  = document.getElementById('msg-counter');
        if (msgField && counter) {
            msgField.addEventListener('input', () => {
                const len = msgField.value.length;
                counter.textContent = len + '/2000';
                counter.classList.toggle('text-red-400', len > 1900);
            });
        }
    }

    /* ============================================================
       AUTO-DISMISS FLASH MESSAGES
       ============================================================ */
    const flash = document.getElementById('flash-message');
    if (flash) {
        setTimeout(() => {
            flash.style.transition = 'opacity 0.5s ease';
            flash.style.opacity = '0';
            setTimeout(() => flash.remove(), 600);
        }, 5000);
    }

    /* ============================================================
       NAVBAR LANG DROPDOWN
       ============================================================ */
    const langBtn     = document.getElementById('lang-btn');
    const langDropdown = document.getElementById('lang-dropdown');
    if (langBtn && langDropdown) {
        langBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            const hidden = langDropdown.classList.contains('hidden');
            langDropdown.classList.toggle('hidden', !hidden);
            langBtn.setAttribute('aria-expanded', String(hidden));
        });
        document.addEventListener('click', () => {
            langDropdown.classList.add('hidden');
            langBtn.setAttribute('aria-expanded', 'false');
        });
    }

    /* ============================================================
       AMBIENT PARALLAX — subtle blob movement on mouse
       ============================================================ */
    const hero = document.getElementById('hero');
    if (hero && window.matchMedia('(min-width: 1024px)').matches) {
        const blobs = hero.querySelectorAll('.ambient-blob');
        window.addEventListener('mousemove', e => {
            const xRatio = (e.clientX / window.innerWidth  - 0.5) * 2;
            const yRatio = (e.clientY / window.innerHeight - 0.5) * 2;
            blobs.forEach((b, i) => {
                const factor = (i + 1) * 8;
                b.style.transform = `translate(${xRatio * factor}px, ${yRatio * factor}px)`;
            });
        }, { passive: true });
    }

});
