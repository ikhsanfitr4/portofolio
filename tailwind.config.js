/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                'nv-bg':        '#090A12',
                'nv-bg2':       '#10111B',
                'nv-card':      '#141624',
                'nv-surface':   '#1B1D2C',
                'nv-purple':    '#8B5CF6',
                'nv-cyan':      '#00E5FF',
                'nv-orange':    '#FF6B35',
                'nv-text':      '#F5F7FF',
                'nv-muted':     '#A3A8BD',
            },
            fontFamily: {
                sans: ['Inter', 'system-ui', 'sans-serif'],
                mono: ['JetBrains Mono', 'Fira Code', 'monospace'],
            },
            animation: {
                'float':        'float 6s ease-in-out infinite',
                'float-slow':   'float 9s ease-in-out infinite',
                'pulse-glow':   'pulseGlow 3s ease-in-out infinite',
                'scan-line':    'scanLine 4s linear infinite',
                'fade-up':      'fadeUp 0.6s ease-out forwards',
                'fade-in':      'fadeIn 0.8s ease-out forwards',
                'slide-right':  'slideRight 0.6s ease-out forwards',
            },
            keyframes: {
                float: {
                    '0%, 100%': { transform: 'translateY(0px)' },
                    '50%':      { transform: 'translateY(-20px)' },
                },
                pulseGlow: {
                    '0%, 100%': { opacity: '0.4' },
                    '50%':      { opacity: '0.9' },
                },
                scanLine: {
                    '0%':   { transform: 'translateX(-100%)' },
                    '100%': { transform: 'translateX(200%)' },
                },
                fadeUp: {
                    '0%':   { opacity: '0', transform: 'translateY(30px)' },
                    '100%': { opacity: '1', transform: 'translateY(0)' },
                },
                fadeIn: {
                    '0%':   { opacity: '0' },
                    '100%': { opacity: '1' },
                },
                slideRight: {
                    '0%':   { opacity: '0', transform: 'translateX(-30px)' },
                    '100%': { opacity: '1', transform: 'translateX(0)' },
                },
            },
            backdropBlur: {
                xs: '2px',
            },
        },
    },
    plugins: [],
};
