const defaultTheme = require("tailwindcss/defaultTheme");
const plugins = require("tailwindcss/plugin");
const colors = require('tailwindcss/colors');

/** @type {import('tailwindcss').Config} */
module.exports = {
    mode: 'jit',
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        './vendor/filament/**/*.blade.php',
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./node_modules/tw-elements/dist/js/**/*.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: colors.blue,
            }
        },
    },

    plugins: [
        require("@tailwindcss/forms"),
        require('@tailwindcss/typography'),
        require("tw-elements/dist/plugin"),
        require("daisyui"),
    ],
};

