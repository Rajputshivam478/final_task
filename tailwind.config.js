/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js,php}"],
  theme: {
    extend: {
      colors : {
        'primary-green' : '#98b73b',
        'primary-gray' : '#323544',
        'secondary-gray' : '#ededef',
      },
    },
  },
  plugins: [],
}
