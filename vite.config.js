import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from "@vitejs/plugin-vue";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/js/app.js","resources/sass/app.scss"],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    base: process.env.APP_URL || '/',
    resolve: {
        alias: {
            "@": "/resources/js",
            assets: "/resources/assets",
        },
    },
});
