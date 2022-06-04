const colors = require('tailwindcss/colors')

module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/tw-elements/dist/js/**/*.js",
    "./vendor/filament/**/*.blade.php", 
  ],
  darkMode: 'class',
  theme: {
    extend: {
      colors: {
        'nav-links': '#504A4A',
        'main': '#0044F2',
        danger: colors.rose,
        primary: colors.blue,
        success: colors.green,
        warning: colors.yellow,
      }
    },
  },
  plugins: [
    require('tw-elements/dist/plugin'),
    require('@tailwindcss/forms'), 
    require('@tailwindcss/typography'),
  ],
}
