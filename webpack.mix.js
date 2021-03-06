const mix = require('laravel-mix');
require('laravel-mix-purgecss');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    // .extract(['jquery', 'bootstrap', 'lodash', 'popper.js'])
    .sass('resources/sass/app.scss', 'public/css')
    // .purgeCss({
    //     enabled: true,
    // })
;

if (mix.inProduction()) {
    mix.version();
}

let proxy_url = process.env.APP_URL;

mix.browserSync({
    proxy: proxy_url
});
