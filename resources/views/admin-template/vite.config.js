import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';

const $assetsAdminTemplate = 'resources/views/admin-template/template-basic/assets/';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                $assetsAdminTemplate + 'js/app.js',
            ],
            refresh: true,
        }),
    ],
    build: {
        outDir: 'public/build/admin-template',
    },
});
