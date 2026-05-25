import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        // Laravel Vite plugin for integrating Vite with Laravel
        laravel({
            // Entry points for CSS and JavaScript assets
            // These files will be compiled and bundled by Vite
            input: ['resources/css/app.css', 'resources/js/app.js'],
            // Enable hot module replacement for development
            // Automatically refreshes the browser when files change
            refresh: true,
        }),
    ],
});
