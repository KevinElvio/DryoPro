/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        gradasi1: '#FFCF01',
        gradasi2: '#FF5D01',
        kuning: '#FFF347',
        orange: '#FF5A00',
        merah: '#FF0000',
        formlogin: '#ECECEC'
      },
      dropShadow: {
        '3xl': '0 35px 35px rgba(0, 0, 0, 0.25)',
      }
    },
  },
  plugins: [],
}

