/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./app/Views/*.php",
    "./app/Views/**/*.php",
    "./app/Views/**/**/*.php",
    "./app/Views/**/**/**/*.php",
  ],
  theme: {
    extend: {
      colors: {
        primary: '#4f46e5'
      },
      screens: {
        '2md': '960px',
      }
    },
  },
  plugins: [],
}

