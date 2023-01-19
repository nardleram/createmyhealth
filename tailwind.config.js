/** @type {import('tailwindcss').Config} */

const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Mulish', ...defaultTheme.fontFamily.sans],
        serif: ['Elsie', ...defaultTheme.fontFamily.serif]
      },
      colors: {
        'lmhlBg1': 'rgb(226, 226, 224)',
        'lmhlMain1': 'rgb(127, 48, 89)',
        'lmhlMain': 'rgb(106, 66, 78)',
        'lmhlMain2': 'rgb(70, 111, 115)',
        'lmhlHighlight1': 'rgb(139, 161, 90)',
        'lmhlHighlight2': 'rgb(215, 92, 24)',
        'lmhlPanel': 'rgb(59, 68, 71)',
        'lmhlPanel1': 'rgb(80, 77, 72)',
        'lmhlPanel2': 'rgb(187, 120, 152)',
        'lmhlPanel3': 'rgb(77, 84, 26)',
        'lmhlPanel7': 'rgb(232, 146, 88)',
        'lmhlPanel4': 'rgb(36, 69, 75)',
        'lmhlPanel5': 'rgb(93, 124, 14)',
        'lmhlPanel6': 'rgb(145, 129, 114)',
        'lmhlMainTextColorDark1': 'rgb(29, 38, 39)',
        'lmhlMenuTextFocus': 'rgb(213, 146, 244)',
        'mel_profile_bg1': 'rgb(246, 239, 232)',
        'mel_profile_bg2': 'rgb(232, 228, 226)',
        'sarah_profile_bg1': 'rgb(247, 241, 233)',
        'sarah_profile_bg2': 'rgb(235, 229, 222)',
        'liz_profile_bg1': 'rgb(240, 246, 246)',
        'liz_profile_bg2': 'rgb(236, 236, 238)',
        'netty_profile_bg1': 'rgb(253, 244, 235)',
        'netty_profile_bg2': 'rgb(233, 230, 225)',
        'emily_profile_bg1': 'rgb(249, 246, 239)',
        'emily_profile_bg2': 'rgb(224, 225, 224)',
        'anais_profile_bg1': 'rgb(243, 230, 224)',
        'anais_profile_bg2': 'rgb(223, 216, 210)',
      },
      borderWidth: {
        '20': '1.4rem',
      },
      spacing: {
        '2/5': '40%',
        '3/5': '60%',
        '45%': '45%',
      },
      keyframes: {
        'open-menu': {
          '0%': { transform: 'scaleY(0)' },
          '50%': { transform: 'scaleY(1.2)' },
          '70%': { transform: 'scaleY(0.9)' },
          '100%': { transform: 'scaleY(1)' },
        },
      },
      animation: {
        'open-menu': 'open-menu 0.9s ease-in-out forwards',
      }
    },
  },
  plugins: [],
}
