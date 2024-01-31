/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,php}"],
  theme: {
    extend: {
      colors: {
        'color-fondo': '#9e7737', // Reemplaza '#123456' con el valor hexadecimal de tu color
      },
    },
  },
  plugins: [],
}