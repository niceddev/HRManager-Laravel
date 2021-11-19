module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
    extend: {
        fontFamily: {
            'montserrat': 'Montserrat'
        }
    }
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
  ]
}
