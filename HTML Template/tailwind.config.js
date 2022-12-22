/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    '*.{html,js}',
    '*.{html,js}',
  ],
  mode: 'jit',
 
  theme: {
    container: {
      center: true,

      padding: '15px',

      screens: {
        sm: '600px',
        md: '728px',
        lg: '984px',
        xl: '1240px',
        '2xl': '1280px',
      },
    },
  },
  plugins: [],
}
