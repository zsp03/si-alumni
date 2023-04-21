const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

/** @type {import('tailwindcss').Config} */
module.exports = {
    mode: 'jit',

    presets: [
        require('./vendor/wireui/wireui/tailwind.config.js'),
    ],

    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
        './vendor/wireui/wireui/resources/**/*.blade.php',
        './vendor/wireui/wireui/ts/**/*.ts',
        './vendor/wireui/wireui/src/View/**/*.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./node_modules/tw-elements/dist/js/**/*.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: colors.blue,
                'prusblue': '#053C5E',
            }
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('tw-elements/dist/plugin'),
        require('daisyui'),

    ],
};
