/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    container: {
      center: true,
      screens: {
        xl: '1170px',
      },
    },
    extend: {
      fontFamily: {
        Lato: ['Lato'],
      }
    },
  },
  plugins: [],
}
