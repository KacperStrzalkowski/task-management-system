/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        extend: {
            colors: {
                nav: "#4F46E5",
            },
            fontFamily: {
                poppins: ["Popins", "sans-serif"],
            },
            fontSize: {
                "2xs": "0.6rem",
            },
            listStyleType: {
                square: "square",
            },
        },
    },
    plugins: [],
};
