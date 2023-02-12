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
        'lmhlHighlight3': 'rgb(60, 156, 102)',
        'lmhlHighlight4': 'rgb(50, 140, 89)',
        'lmhlHighlight5': 'rgb(173, 43, 110)',
        'lmhlPanel': 'rgb(59, 68, 71)',
        'lmhlPanel1': 'rgb(29, 61, 77)',
        'lmhlPanel2': 'rgb(62, 81, 61)',
        'lmhlPanel3': 'rgb(122, 18, 19)',
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
        'emily_profile_bg1': 'rgb(254, 250, 249)',
        'emily_profile_bg2': 'rgb(232, 232, 236)',
        'anais_profile_bg1': 'rgb(243, 230, 224)',
        'anais_profile_bg2': 'rgb(223, 216, 210)',
      },
      borderWidth: {
        '20': '1.4rem',
      },
      maxHeight: {
        '70%': '70%',
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
        'open-bio': {
          '0%': { transform: 'scaleY(0)' },
          '100%': { transform: 'scaleY(1)' },
        },
      },
      animation: {
        'open-menu': 'open-menu 0.9s ease-in-out forwards',
        'open-bio': 'open-bio 0.5s ease-in-out forwards',
        'open-bio-bg': 'open-bio 0.5s ease-in-out forwards',
      }
    },
  },
  plugins: [],
}
