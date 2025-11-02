import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', 'Poppins', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    DEFAULT: '#60A5FA',
                    dark: '#3B82F6',
                },
                accent: {
                    DEFAULT: '#7DD3FC',
                },
                neutral: {
                    50: '#F9FAFB',
                    100: '#F3F4F6',
                    200: '#E5E7EB',
                    300: '#D1D5DB',
                    400: '#9CA3AF',
                    500: '#6B7280',
                    600: '#4B5563',
                    700: '#374151',
                    800: '#1F2937',
                    900: '#111827',
                },
                success: '#10B981',
                danger: '#EF4444',
                warning: '#F59E0B',
            },
            borderRadius: {
                '2xl': '1rem',
                '3xl': '1.25rem',
            },
            boxShadow: {
                soft: '0 8px 30px rgba(59,130,246,0.08)',
            },
            spacing: {
                '18': '4.5rem',
                '22': '5.5rem',
            },
            ringColor: {
                DEFAULT: '#60A5FA',
            },
            keyframes: {
                fadeUp: {
                    '0%': { opacity: '0', transform: 'translateY(16px)' },
                    '100%': { opacity: '1', transform: 'translateY(0)' },
                },
                float: {
                    '0%': { transform: 'translateY(0)' },
                    '50%': { transform: 'translateY(-6px)' },
                    '100%': { transform: 'translateY(0)' },
                },
            },
            animation: {
                'fade-up': 'fadeUp 700ms ease-out both',
                'float': 'float 6s ease-in-out infinite',
            },
        },
    },

    plugins: [forms],
};
