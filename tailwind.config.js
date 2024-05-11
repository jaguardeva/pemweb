/** @type {import('tailwindcss').Config} */
export default {
  content: ["./*.{html,js,php}", "./node_modules/flowbite/**/*.js"],
  theme: {
    extend: {},
  },
  plugins: [require("flowbite/plugin")],
};
