/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './app/Views/templates/backend/**/*.php',
    './app/Views/backend/**/*.php',
    './public/js/**/*.js'
  ],
  theme: {
    container: {
      center: true,
      padding: {
        DEFAULT: '1rem'
      }
    },
    extend: {}
  },
  plugins: [
    require('daisyui')
  ],
  daisyui: {
    styled: true,
    themes: true,
    base: true,
    utils: true,
    logs: true,
    rtl: false,
    darkTheme: 'dark',
    prefix: ''
  }
}
