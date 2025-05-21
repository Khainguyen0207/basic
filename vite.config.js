import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/style.scss',
                'resources/views/admin-template/template-basic/assets/scss/style.scss',
                'resources/views/admin-template/template-basic/assets/js/app.js',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
