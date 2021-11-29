module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
    extend: {
        screens: {
            sm: '640px',
            md: '768px',
            lg: '1024px',
            xl: '1280px',
            '2xl': '1440px',
            '3xl': '1536px',
            '4xl': '1920px',
        },
        height: {
            '790px': '790px',
            '61rem':'977px'
        },
        fontSize: {
            '4.5xl': '2.375rem',
        },
        spacing: {
            '116': '29rem',
        },
        fontFamily: {
            'montserrat': 'Montserrat',
        },
        zIndex: {
            '-1': '-1',
        }
    }
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
  ]
}
