/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./resources/**/*.blade.php', './resources/**/*.js'],
  theme: {
    extend: {
      fontFamily: {
        playfair: ['Playfair Display', 'serif'],
      },
      height: {
        '128': '500px',
      },
    },
  },
  plugins: [],
};
