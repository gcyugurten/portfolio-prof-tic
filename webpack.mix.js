const mix = require('laravel-mix');

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
    .sass('resources/sass/index/app.scss', 'public/css')
    .sass('resources/sass/elearning/app.scss', 'public/css/elearning')
    .sass('resources/sass/admin/app.scss', 'public/css/admin')
    .sass('resources/sass/blog/app.scss', 'public/css/blog')
    .js('resources/js/admin/app.js', 'public/js/admin')
    .sourceMaps();
