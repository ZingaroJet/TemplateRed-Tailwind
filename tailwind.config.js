/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors:{
          primary: '#8B0000',
          secondary: '#ececec',
          accent: '#C67F7F',
          filler: '#ECC30B',
      },
      backgroundImage: {
        bgHeader: "linear-gradient(to bottom, rgba(255, 255, 255, 1), rgba(255, 255, 255, 0.1)), url('/public/media/switzerland-862870_1920.jpg')",
        bgTrees: "url('/public/media/trees2.png')",
        bgTreesTimeline: "url('/public/media/single.png')",
        bgTreesRed: "url('/public/media/other.png')"
      },
      transitionDuration: {
        '1000': '1000ms'
      }
    },
  },
  plugins: [],
}




