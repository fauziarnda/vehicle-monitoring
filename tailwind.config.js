/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        extend: {
            colors: {
                orange: {
                    custom: "#FE7743",
                    hover: "#e7652e",
                },
                blue: {
                    custom: "#273F4F",
                    hover: "#1d2f3b",
                },
            },
        },
    },
    plugins: [],
};
