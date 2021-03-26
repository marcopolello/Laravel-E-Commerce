const mix = require('laravel-mix');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin')

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps()
    .browserSync({
        proxy: '127.0.0.1:8000',
        notify: false,
        open: false
    });
