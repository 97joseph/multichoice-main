/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.jsx",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                LatoBold: ["Lato-Bold"],
                LottoLove4:["Lotto-Love-4"]
            },
            fontSize: {
                title: `2.6rem;`,
                paragraph: `1.3rem;`,
                default: `2.0rem;`,
            },
            brightness: {
                25: '.25',
                175: '1.75',
            }
        },
    },
    plugins: [],
}
