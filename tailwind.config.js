module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/tw-elements/dist/js/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        'primary': '#0044F2',
        'nav-links': '#504A4A',
      }
    },
  },
  plugins: [
    require('tw-elements/dist/plugin')
  ],
}
