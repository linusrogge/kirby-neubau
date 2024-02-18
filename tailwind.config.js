import plugin from 'tailwindcss/plugin'
const defaultTheme = require('tailwindcss/defaultTheme')

const variants = plugin(({ addVariant }) => {
  addVariant('not-last', '&:not(:last-child)')
  addVariant('not-first', '&:not(:first-child)')
})

module.exports = {
  content: [
    'site/**/*.php'
  ],
  future: {
    hoverOnlyWhenSupported: true
  },
  theme: {
    extend: {
      boxShadow: {
        'border': 'inset 0 0 0 1px rgba(0, 0, 0, 0.08)',
        'border-hover': 'inset 0 0 0 1px rgba(0, 0, 0, 0.16)',
        'border-hover-both': 'inset 0 0 0 1px rgba(0, 0, 0, 0.16), 0 6px 8px rgba(0, 0, 0, 0.06)'
      },
      transitionDuration: {
        400: '400ms'
      },
      transitionDelay: {
        400: '400ms'
      },
      maxWidth: {
        'site': '1700px'
      },
      screens: {
        '3xl': '1700px'
      }
    },
  },
  plugins: [variants],
}

