/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './app/Views/templates/website/**/*.php',
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
        7.5: '1.875rem', // Bootstrap's gutter
        17.5: '4.375rem'

      },
      padding: {
        4.5: '1.125rem',
        7.5: '1.875rem',
        13: '3.25rem',
        15: '3.75rem',
        18: '4.5rem',
        19: '4.75rem',
        23: '5.75rem',
        25: '6.25rem',
        26: '6.5rem',
        27: '6.75rem',
        30: '7.5rem',
        31: '7.75rem',
        33: '8.25rem',
        34: '8.5rem',
        37: '9.25rem',
        38: '9.5rem',
        39: '9.75rem',
        42: '10.5rem',
        49: '12.25rem',
        50: '12.5rem',
        53: '13.25rem',
        62: '15.5rem',
        74: '18.5rem',
        82: '20.5rem'
      },
      margin: {
        4.5: '1.125rem',
        7.5: '1.875rem',
        13: '3.25rem',
        15: '3.75rem',
        18: '4.5rem',
        26: '6.5rem'
      },
      height: {
        18: '4.5rem',
        19: '4.75rem',
        43: '10.75rem',
        58: '14.5rem',
        62: '15.5rem',
        65: '16.25rem',
        85: '21.25rem',
        88: '22rem'
      },
      width: {
        18: '4.5rem',
        66: '16.5rem',
        91: '22.75rem',
        188: '47rem'
      },
      backdropBrightness: {
        30: '.3',
        20: '.2'
      },
      brightness: {
        30: '.3'
      },
      letterSpacing: {
        widesm: '0.02em'
      },
      borderRadius: {
        '6xl': '3rem'
      },
      fontSize: {
        13: '0.813rem',
        15: '0.938rem',
        17: '1.063rem',
        22: '1.375rem',
        28: '1.75rem',
        32: '2rem',
        35: '2.188rem',
        38: '2.375rem',
        45: '2.813rem',
        50: '3.125rem',
        60: ['3.75rem', {
          lineHeight: '4.75rem'
        }
        ],
        80: '5rem',
        84: '5.25rem',
        192: '12rem'
      },
      colors: {
        ssbajio: {
          red: {
            1: '#E20006',
            2: '#C30005',
            3: '#CD0005'
          },
          gray: {
            light: {
              1: '#8F939C',
              2: '#E2E2E2',
              3: '#F7F9FC',
              4: '#EAEDF3',
              5: '#EEF0F3'
            },
            dark: {
              1: '#525252',
              2: '#979797',
              3: '#8D8D8D',
              4: '#666666',
              5: '#3C4047',
              6: '#636870',
              7: '#585858'
            }
          },
          dark: {
            1: '#1D2127',
            2: '#0E1013',
            3: '#354052',
            4: '#0D0F13'
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
          },
          yellow: {
            1: '#FFA412'
          }
        }
      }
    }
  },
  plugins: [require('flowbite/plugin')]
}
