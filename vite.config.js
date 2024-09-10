import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/sass/layouts/sidebar.scss',
                'resources/sass/layouts/overlay.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
