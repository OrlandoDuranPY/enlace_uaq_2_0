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
                // sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                sans: ['Quicksand', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'enlace-red': '#ED5660',
                'enlace-green': '#7AD8DB',
                'enlace-dark-green': '#00BFC3',
                'enlace-gray': '#F3F2F2',
                'enlace-dark-gray': '#B5B5B5',
            }
        },
    },

    plugins: [forms],
};
