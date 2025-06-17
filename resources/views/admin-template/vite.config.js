import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';

const $assetsAdminTemplate = 'resources/views/admin-template/template-basic/assets/';

export default defineConfig({
    build: {
        outDir: 'public/assets/admin-template',
        emptyOutDir: true,
    },
    plugins: [
        laravel({
            input: [
                $assetsAdminTemplate + 'scss/style.scss',
                $assetsAdminTemplate + 'core/scss/style.scss',
                $assetsAdminTemplate + 'js/app.js',
                $assetsAdminTemplate + 'js/before/app.js',
            ],
            refresh: true,
            publicDirectory: 'public',
        }),
    ],
});
