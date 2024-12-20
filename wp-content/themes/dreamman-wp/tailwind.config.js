/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [],
  theme: {
    extend: {
      colors: {
        'regal-blue': 'rgb(96 114 129 / 96%)',
        'regal-blue12': '#fcd1455d',
        'regal-blue11': '#2727278a',
        'regal-blue1': 'rgba(251, 3, 3, 0.034)',
        'regal-blue2': 'rgba(255, 255, 255, 0.5)',
        'regal-blue3': 'rgba(0,0,0,0.85)',
        'regal-blue4': 'rgba(0,0,0,0.03)',
        'regal-blue5': 'rgb(0 0 0 / 10%)',
        'regal-blue6': 'rgba(252,114,30,0.90)',
        'regal-blue7': 'rgba(252,114,30,0.90)',
        'regal-blue8': 'rgba(0,0,0,0.10)',
        'regal-blue9': 'rgba(255,255,255,0.10)',
        'regal-blue10': 'rgba(255,255,255,0.80)',
        'regal-blue100': 'rgba(16, 16, 16, 0.96)',
      },
      
      screens: {
        'smipx': '300px',
        // => @media (min-width: 640px) { ... }

        'ipx': '375px',
        // => @media (min-width: 640px) { ... }

        'ip8n': '400px',
        // => @media (min-width: 640px) { ... }

        'ip8': '414px',
        // => @media (min-width: 640px) { ... }
      },
      
      fontFamily: {
        'open-sans' : ['Open Sans'],
        'inter' : ['Inter'],
        'palatino' : ['Palatino Linotype'],
        'garamond' : ['"poppins", sans-serif'],
        'mono' : ['"Montserrat", sans-serif'],
      },

      animation: {
        fadeInLeft: 'fadeInLeft 1.5s ease-out ',
        fadeIn: 'fadeIn 1500ms ease 0ms',
        slides: 'slides 35s infinite linear ',
        slides2: 'slides 5s infinite alternate ',
        pulse: 'pulse 1s infinite ',
      },

      keyframes: {
        fadeInLeft: {
          '0%': {
            opacity: '0',
            transform: 'translateX(-20px)',
          },
          '100%': {
            opacity: '1',
            transform: 'translateX(0)',
          },
        },
        
        fadeIn: {
          '0%': { opacity: '0' },
          '100%': { opacity: '1' },
        },

        slides: {
          from: {
            transform: 'translateX(0)',
          },
          to: {
            transform: 'translateX(-100%)',
          },
        },

        slides2: {
          from: {
            transform: 'translateX(0)',
          },
          to: {
            transform: 'translateX(-1080px)',
          },
        },

        pulse: {
          '0%' : {transform: 'scale(1)'},
          '50%' : {transform: 'scale(1.1)'},
          '100%' : {transform: 'scale(1)'},
        }
      },
      
      gridTemplateColumns: {
        'custom': '424px auto 1rem',
        'custom2': '438px auto 1rem',
        'custom3': '264px auto 0rem',
        'custom4' : '223px auto 0rem',
      },
    },
  },

  plugins: [],

}

