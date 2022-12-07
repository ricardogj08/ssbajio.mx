/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    '.app/Views/templates/website/**/*.php',
    './app/Views/website/**/*.php',
    './node_modules/flowbite/**/*.js'
  ],
  darkMode: 'class',
  theme: {
    screens: {
      sm: '576px',
      md: '768px',
      lg: '992px',
      xl: '1200px',
      '2xl': '1400px'
    },
    container: {
      center: true,
      padding: {
        DEFAULT: '1rem', // < 540px
        md: '7.125rem', // 540px
        lg: '8.5rem', // 720px
        xl: '7.5rem', // 960px
        '2xl': '8.125rem' // 1140px
      }
    },
    extend: {
      fontFamily: {
        sans: "'Open Sans', sans-serif",
        title: "'Fjalla One', sans-serif"
      },
      gap: {
        7.5: '1.875rem' // Bootstrap's gutter
      },
      padding: {
        4.5: '1.125rem',
        7.5: '1.875rem',
        13: '3.25rem',
        18: '4.5rem',
        26: '6.5rem',
        30: '7.5rem',
        34: '8.5rem',
        38: '9.5rem',
        62: '15.5rem',
        74: '18.5rem'
      },
      margin: {
        4.5: '1.125rem',
        7.5: '1.875rem',
        15: '3.75rem'
      },
      height: {
        18: '4.5rem',
        65: '16.25rem'
      },
      width: {
        18: '4.5rem'
      },
      backdropBrightness: {
        20: '.20'
      },
      fontSize: {
        13: '0.813rem',
        15: '0.938rem',
        17: '1.063rem',
        22: '1.375rem',
        28: '1.75rem',
        35: '2.188rem',
        38: '2.375rem',
        45: '2.813rem',
        50: '3.125rem',
        192: '12rem'
      },
      colors: {
        ssbajio: {
          red: {
            1: '#E20006',
            2: '#C30005'
          },
          gray: {
            light: {
              1: '#8F939C',
              2: '#E2E2E2',
              3: '#F7F9FC'
            },
            dark: {
              1: '#525252',
              2: '#979797',
              3: '#8D8D8D',
              4: '#666666'
            }
          },
          dark: {
            1: '#1D2127',
            2: '#0E1013',
            3: '#354052'
          },
          orange: {
            1: '#FF663F'
          },
          blue: {
            1: '#006CF7',
            2: '#0035DA',
            3: '#002493',
            4: '#006CF7'
          },
          green: {
            1: '#00C15A'
          }
        }
      }
    }
  },
  plugins: [require('flowbite/plugin')]
}
