import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';


const $assetsTheme = 'resources/views/theme/assets/';

export default defineConfig({
    build: {
        outDir: 'public/assets/theme',
        emptyOutDir: true,
    },
    plugins: [
        laravel({
            input: [
                $assetsTheme + 'scss/style.scss',
            ],
            refresh: true,
        }),
    ],
});
