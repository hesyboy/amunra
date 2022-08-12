/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {
       colors: {
        transparent: 'transparent',
        current: 'currentColor',
        'color1': '#fbd65e',
        'color2': '#fe6e69',
        'color3': '#fca064',
      },},

    },
    plugins: [require("daisyui")],


  }
