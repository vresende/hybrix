const vite = require('vite');
import laravel from 'laravel-vite-plugin';
import { viteStaticCopy } from 'vite-plugin-static-copy'

export default vite.defineConfig({
    build: {
        manifest: true,
        rtl: false,
        outDir: 'public/build/',
        cssCodeSplit: true,
        // buildDirectory: 'assets',
        rollupOptions: {
            output: {
                assetFileNames: (css) => {
                    if (css.name.split('.').pop() == 'css') {
                        return 'css/' + `[name]` + '.min.' + 'css';
                    } else {
                        return 'icons/' + css.name;
                    }
                },
                entryFileNames: 'js/' + `[name]` + `.js`,
            },
        },
    },
    server: {
        host: '0.0.0.0',
        hmr: {
            host: 'localhost'
        }
    },
    plugins: [
        laravel(
            {
                input: [
                    'resources/scss/bootstrap.scss',
                    'resources/scss/icons.scss',
                    'resources/scss/app.scss',
                    'resources/scss/custom.scss',
                    'resources/scss/commom.scss',
                    'resources/js/commom.js',
                    'resources/js/app.js',
                    'resources/js/layout.js',
                    'resources/js/plugins.js',

                ],
                refresh: true
            }
        ),
        viteStaticCopy({
            targets: [
                {
                    src: 'resources/fonts',
                    dest: ''
                },
                {
                    src: 'resources/images',
                    dest: ''
                },
                {
                    src: 'resources/js/pages',
                    dest: './js'
                },
                {
                    src: 'resources/json',
                    dest: ''
                },
                {
                    src: 'resources/libs',
                    dest: ''
                },
            ]
        }),

    ]
});
