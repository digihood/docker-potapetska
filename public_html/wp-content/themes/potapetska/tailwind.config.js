/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./assets/**/*.{js,css,php}",
    "./functions/**/*.{js,css,php}",
    "./functions/acf/**/*.php",
    "./page-templates/**/*.{js,css,php}",
    "./parts/**/*.{js,css,php}",
    "./*.{js,php}",
  ],
  theme: {
    container: {
      center: true,
      padding: {
        DEFAULT: '1.5rem',
      },
    },
    screens: {
      'sm': '640px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1280px',
    },
    extend: {
      colors: {
        primary: {
          DEFAULT: '#033869',
          dark: '#022d5e',
        },
        yellow: {
          DEFAULT: '#fcdb00',
          hover: '#e5c500',
        },
        brown: '#221d17',
        gray: {
          light: '#f8f9fb',
          bg: '#f0f2f5',
          body: '#6b7280',
          dark: '#42454e',
          muted: '#9ca3af',
        },
      },
      fontFamily: {
        sans: ['Barlow', 'sans-serif'],
        heading: ['Barlow Condensed', 'sans-serif'],
      },
    },
  },
  plugins: [
    require('tailwindcss-intersect'),
    require('tailwindcss-animated'),
  ],
}
