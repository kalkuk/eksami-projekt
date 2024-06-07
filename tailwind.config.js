/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            colors: {
                'dark': {
                    900: 'hsl(348, 22, 10)',
                    800: 'hsl(347, 10, 18)',
                    700: 'hsl(348, 22, 30)',
                    600: 'hsl(348, 22, 40)',
                    500: 'hsl(348, 22, 50)',
                },

                'primary': 'hsl(1,79,52)',
                'secondary': 'hsl(2,79,721)',
                'light': 'hsl(60, 21, 94)',
            },
        },
    },

    plugins: [
    ],
};

