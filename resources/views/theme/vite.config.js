import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';


const $assetsTheme = 'resources/views/theme/assets/';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                $assetsTheme + 'js/app.js',
            ],
            refresh: true,
        }),
    ],
    build: {
        outDir: 'public/build/theme',
    },
});

