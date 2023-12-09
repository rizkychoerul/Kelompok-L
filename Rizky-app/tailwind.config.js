import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */

export default {
    
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],
    
    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                lora: ["Lora", "serif"],
            },
        },
    },
    
    plugins: [
        forms, 
        require('flowbite/plugin')({
            charts: true,
        }),
    ],
    darkMode: 'media',
};