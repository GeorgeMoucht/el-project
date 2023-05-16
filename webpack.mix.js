const mix = require('laravel-mix');
const { VitePlugin } = require('laravel-mix-vite');

mix.extend('vite', new VitePlugin()).vite();

mix
    .vite({
        resolve: {
            alias: {
                '@': path.resolve(__dirname, 'resources/js'),
            },
        },
        optimizeDeps: {
            exclude: ['@livewire/livewire'],
        },
        build: {
            manifest: true,
        },
    })
    .js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('tailwindcss'),
    ])
    .webpackConfig((webpack) => {
        return {
            plugins: [
                new webpack.ProvidePlugin({
                    $: 'jquery',
                    jQuery: 'jquery',
                    'window.jQuery': 'jquery',
                    Popper: ['popper.js', 'default'],
                }),
            ],
        };
    });
