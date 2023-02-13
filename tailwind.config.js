/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],
    daisyui: {
        themes: ['light'],
    },
    theme: {
        extend: {
            screens: {
                '3xl': '1600px',
            },
        },
    },
    plugins: [
        require('flowbite/plugin'),
        require('daisyui')
    ],
}
