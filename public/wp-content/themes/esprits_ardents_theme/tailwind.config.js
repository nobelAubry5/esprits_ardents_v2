/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{php,html,js}", "./node_modules/flowbite/**/*.js"],
  theme: {
    extend: {
      height: {
        125: "125%", // Add a custom height value of 125%
      },
    },
    fontFamily: {
      sans: ["Graphik", "sans-serif"],
      serif: ["Merriweather", "serif"],
    },
  },
  plugins: [require("flowbite/plugin")],
};
