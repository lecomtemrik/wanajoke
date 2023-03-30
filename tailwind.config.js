/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
      "./assets/**/*.js",
      "./templates/**/*.html.twig",
  ],
  theme: {
      extend: {
          width: {
              '970' : '970px',
              '730' : '730px',
              '420' : '420px',
              '250' : '250px',
          },
          height: {
              '22' : '88px',
          }
      },
      screens: {
          'vsm' : '320px',
          'sm': '500px',
          'md': '768px',
          'lg': '1024px',
      },
  },
  plugins: [],
}
