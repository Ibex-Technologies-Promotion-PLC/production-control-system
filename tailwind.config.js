const defaultTheme = require('tailwindcss/defaultTheme');
const forms = require('@tailwindcss/forms');
const typography = require('@tailwindcss/typography');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

<<<<<<< HEAD
    plugins: [forms, typography],
};
=======
    variants: {
        opacity: ['responsive', 'hover', 'focus', 'disabled'],
        borderWidth: ['responsive', 'last', 'hover', 'focus'],

        // extend: {
        //     // scale: ['focus-within'],
        //     borderWidth: ['last'],
        // },
    },
    

    plugins: [require('@tailwindcss/ui')],

    experimental: 'all',

    future: {
        removeDeprecatedGapUtilities: true,
        purgeLayersByDefault: false,
    },
};
>>>>>>> origin/main
