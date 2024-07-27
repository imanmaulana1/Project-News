/** @type {import('tailwindcss').Config} */
export default {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./node_modules/flowbite/**/*.js",
  ],
  theme: {
      extend: {
          fontFamily: {
              playfair: ["Playfair Display", "serif"],
          },
          height: {
              '128': "500px",
          },
      },
  },
  plugins: [require("flowbite/plugin")],
};
