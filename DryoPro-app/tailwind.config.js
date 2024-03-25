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
        merah: '#FF0000',
        formlogin: '#ECECEC'
      }
    },
  },
  plugins: [],
}

