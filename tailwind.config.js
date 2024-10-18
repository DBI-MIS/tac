import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/views/livewire/*.blade.php',
        './resources/views/component/*.blade.php',
        './resources/views/components/news/*.blade.php',
        './resources/views/layouts/sections/*.blade.php',
        './resources/views/layouts/**/*.blade.php',
        './resources/views/layouts/sections/*.blade.php',
        './resources/views/news/*.blade.php',
        './resources/views/*.blade.php',
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
          
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                font_display: ['Oswald',],
            },
            animation: {
                'infinite-scroll': 'infinite-scroll 30s linear infinite',
                'animate-right' : 'move-right 2s linear infinite',
                'minimal-bounce' : 'minimal-bounce 5s linear infinite',
              },
              keyframes: {
                'infinite-scroll': {
                  from: { transform: 'translateX(0)' },
                  to: { transform: 'translateX(-100%)' },
                },

               'move-right': {
                    '0%, 100%': {
                        transform: 'translateX(-25%)',
                        animationTimingFunction: 'cubic-bezier(0.8, 0, 1, 1)',
                    },
                    '50%': {
                        transform: 'translateX(10%)',
                        animationTimingFunction: 'cubic-bezier(0, 0, 0.2, 1)',
                    },
                },

                'minimal-bounce': {
                    '0%, 100%': {
                        transform: 'translateY(-5%)',
                        animationTimingFunction: 'cubic-bezier(0.8, 0, 1, 1)',
                    },
                    '50%': {
                        transform: 'translateY(5%)',
                        animationTimingFunction: 'cubic-bezier(0, 0, 0.2, 1)',
                    },
                },

             
              },
                    
        },
    },

    plugins: [forms],
    darkMode: 'class',
    variants: { extend: { display: ['dark'], } },
    
};
