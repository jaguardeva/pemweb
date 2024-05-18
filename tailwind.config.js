/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./*.{html,js,php}",
    "./**/*.{html,js,php}",
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    extend: {
      backgroundImage: {
        heroBanner: "url('/assets/images/hero-banner.jpg')",
      },
    },
  },
  plugins: [require("flowbite/plugin")],
  hooks: {
    watch: "npx tailwindcss -i input.css -o styles.css --watch",
  },
};
