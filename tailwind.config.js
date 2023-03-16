const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.jsx',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'navy' :'#2b2d42',
                'ash-blue': '#EDF2F4',
                'ash-black' :'#8D99AE',
                'blood-red' : '#D90429'
            },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('daisyui')],
};
