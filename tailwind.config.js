import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    // Content paths where Tailwind will scan for class names
    // This tells Tailwind which files to parse for CSS class usage
    content: [
        // Laravel pagination views (for styled pagination)
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        // Cached Blade views (for compiled templates)
        './storage/framework/views/*.php',
        // All Blade views in the resources directory
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            // Custom font family configuration
            fontFamily: {
                // Use Figtree as the primary sans-serif font, fallback to default
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    // Tailwind plugins (forms plugin provides form styling utilities)
    plugins: [forms],
};
